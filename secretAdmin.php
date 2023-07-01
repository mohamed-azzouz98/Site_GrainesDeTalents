<?php


require_once('database/db_config.php');
require_once('class/users.php');


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
                <label for="pseudo">Pseudo :</label>
                <input type="text" name="pseudo" id="pseudo">
               

                <br>
                <label for="password">Password : </label>
                <input type="password" name="password">
                
                <br>

                <input type="submit" value="Add" name="add">
            </form>
        </section>
        <?php
        if (isset($_POST['add'])) 
        {
            $pseudo = $_POST['pseudo'];
          
            $password = $_POST['password'];
           
   



            if (!empty($pseudo) and !empty($password) and   filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ) 
            {
               

                   

                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        $newUser = $user->add($db, $pseudo, $passwordHash);                
                    }
            } 
            
        
    
?>
        

    </main>
    
</body>
</html>