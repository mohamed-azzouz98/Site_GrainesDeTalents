<?php


require_once('database/db_config.php');
require_once('class/user.php');
require_once('class/item.php');

if (session_status() !== PHP_SESSION_ACTIVE) { // si la session n'est pas active 
    session_start(); // on la démarre 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <main>
        
        <section>
            <form action="" method="post">
                <input type="text" name="pseudo" id="pseudo">
                <label for="pseudo">Pseudo :</label>

                <br>

                <input type="password" name="password">
                <label for="password">Password : </label>
            </form>
        </section>
        <?php
        if (isset($_POST['submitI'])) 
        {
            $pseudoI = $_POST['pseudoI'];
          
            $passwordI = $_POST['passwordI'];
           
   



            if (!empty($pseudoI) and !empty($passwordI) and   filter_input(INPUT_POST, 'pseudoI', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ) 
            {
               

                   

                        $passwordHash = password_hash($passwordI, PASSWORD_DEFAULT);

                        $newUser = $user->add($db, $pseudoI, $emailI, $passwordHash);                
                    }
            } 
            
        
    
?>
        

    </main>
    
</body>
</html>