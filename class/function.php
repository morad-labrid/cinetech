<?php

class cinetech 
{
    private $_db;


    public function __construct(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=cinetech', "root", "");
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        $this->_db = $db;
    }



// ////////////////////////////////////////


// ///////////////////////////////////////////////// FONCTION POUR S'INSCRIRE


// ////////////////////////////////////////



public function inscription($email, $login, $motdepasse)
{
    $db = $this->_db;
    $msg = '';

    $login = htmlspecialchars($login);
    $email = htmlspecialchars($email);
    $motdepasse = htmlspecialchars($motdepasse);

    $_login = trim($login);
    $_email = trim($email);
    $_motdepasse = trim($motdepasse);
    $cryptage = password_hash($_motdepasse, PASSWORD_BCRYPT);

    $verification = $db->prepare("SELECT `login` FROM users WHERE login = '$_login'");
    $verification->execute();
    $verification2 = $db->prepare("SELECT `email` FROM users WHERE email = '$_email'");
    $verification2->execute();




        if($verification2->fetch(PDO::FETCH_ASSOC) == 0 ){
            if($verification->fetch(PDO::FETCH_ASSOC) == 0 ){
                    $requete = "INSERT INTO `users` (`email`, `login`, `password`) VALUES ('$_email', '$_login', '$cryptage')";
                    $db->query($requete);
                    $msg = 'Bienvenue !';                    
            }else{
                $msg = 'Cette identifiant éxiste déjà';
            }
        }else{
            $msg = 'Cette email est déja utilisé';
        }
return(json_encode($msg)); 
}



// ////////////////////////////////////////


// ///////////////////////////////////////////////// FONCTION POUR SE CONNECTER


// ////////////////////////////////////////



public function connexion($login, $password)
{
    
    $select = $this->_db->prepare('SELECT * FROM users WHERE login = :login');
            $select -> bindParam('login', $login);
            $select -> execute();

            $checkuser = $select->rowCount();
            $data = $select->fetch(PDO::FETCH_OBJ);
            
            if ($checkuser == 1) {
                // VERIFIER SI PASSWORD EST JUSTE
                $verify = password_verify($password, $data->password);
                if ($verify == true) {
                    //CREE UNE COOKIE POUR STOCKER LE USER
                    return(json_encode($data));
                }else {
                    return(json_encode("Mot de passe incorrecte"));
                }
            }else {
                return(json_encode('Aucun utilisateurs'));
            }


}



public function deconnect()
{
    session_destroy();
    header("url=connexion.php");
}




public function addwish($idUser, $idFilm, $type)
{
    $select = $this->_db->prepare('INSERT INTO favoris (`id_user`, `id_element`, `type`) VALUES (:idUser, :idFilm, :type)');
    $select -> bindParam('id_user', $idUser);
    $select -> bindParam('id_element', $idFilm);
    $select -> bindParam('type', $type);
    $select -> execute();
}




public function deletewish($id)
{
    $select = $this->_db->prepare('DELETE FROM `favoris` WHERE id=:id');
    $select -> bindParam('id', $id);
    $select -> execute();
}



} 
?>