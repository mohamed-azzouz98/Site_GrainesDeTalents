<?php

class Users {

    /**
     * Fonction qui permet d'ajouter un admin
     * 
     * @param PDO $db
     * @param STRING $pseudo
     * @param STRING $password
     */
    public function addAdmin($db, $pseudo, $password)
    {
        $requeteSQL = "INSERT INTO user (pseudo, password) VALUES (:nom, :password)";
        $requetePreparee = $db->prepare($requeteSQL);
        $requetePreparee->bindValue(':nom', $pseudo, PDO::PARAM_STR);
        $requetePreparee->bindValue(':password', $password, PDO::PARAM_STR);
 
        
        $requetePreparee->execute();
    }




}

?>