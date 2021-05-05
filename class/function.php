<?php

class cinetech 
{
public $_db;


// ////////////////////////////////////////


// ///////////////////////////////////////////////// INSTANCIER CONNEXION A LA BDD


// ////////////////////////////////////////



public function dbconnect(){
$db = new PDO("mysql:host=localhost; dbname=cinetech", 'root', '');
$this->_db = $db;
}



// ////////////////////////////////////////


// ///////////////////////////////////////////////// FONCTION POUR S'INSCRIRE


// ////////////////////////////////////////



public function inscription($email, $login, $motdepasse, $confirm)
{
    $db = $this->_db;
    $msg = '';

    $login = htmlspecialchars($login);
    $email = htmlspecialchars($email);
    $motdepasse = htmlspecialchars($motdepasse);
    $confirm = htmlspecialchars($confirm);

    $_login = trim($login);
    $_email = trim($email);
    $_motdepasse = trim($motdepasse);
    $cryptage = password_hash($_motdepasse, PASSWORD_BCRYPT);
    $_confirm = trim($confirm);

    $verification = $db->prepare("SELECT `login` FROM `utilisateurs` WHERE `login` = '$_login'");
    $verification->execute();
    $verification2 = $db->query("SELECT `email` FROM utilisateurs WHERE email = '$_email'");
    $verification2->execute();




    if(!empty($_email) && !empty($_login) && !empty($_motdepasse) && !empty($_confirm)){
        if($verification2->fetch(PDO::FETCH_ASSOC) == 0 ){
            if($verification->fetch(PDO::FETCH_ASSOC) == 0 ){
                if($motdepasse == $confirm){
                    $requete = "INSERT INTO `utilisateurs` (`email`, `login`, `password`) VALUES ('$_email', '$_login', '$cryptage')";
                    $db->query($requete);
                    $msg = 'Bienvenue ! ';
                }else{
                    $msg ='Les mots de passe ne correspondent pas';
                }       
            }else{
                $msg = 'Cette identifiant éxiste déjà';
            }
        }else{
            $msg = 'Cette email est déja utilisé';
        }
    }else{
        $msg = "Remplissez tout les champs ! ";
    }
echo $msg ; 
}



// ////////////////////////////////////////


// ///////////////////////////////////////////////// FONCTION POUR SE CONNECTER


// ////////////////////////////////////////



public function connexion($login, $password)
{
    
    $db = $this->_db;

    $msg = "";

    $login = htmlspecialchars($login);
    $password = htmlspecialchars($password);

    $_login = trim($login);
    $_password = trim($password);

    $requete = $db->prepare("SELECT * FROM utilisateurs WHERE login = '$_login'");
    $requete->execute();

    $verification = $requete->RowCount();

    if(!empty($_login) && !empty($_password)){
            if($verification == 1){
                $info = $requete->fetch();
                if( $_password == password_verify($_password, $info['password'])){
                    $_SESSION['login'] = $info['login'];
                    $_SESSION['password'] = $info['password'];
                    $_SESSION['email'] = $info['email'];
                    $_SESSION['id'] = $info['id'];
                    
                    $msg = "Connexion établie !";
                    header("refresh: 1; url=profil.php");
                }else{
                $msg = "Mauvais mot de passe ! ";
                }
            }else{
            $msg = "Cette identifiant n'existe pas ! ";
            }
    }else{
    $msg = "Remplissez tout les champs !";
    }
    echo $msg;
}



// ////////////////////////////////////////


// ///////////////////////////////////////////////// FONCTION POUR SE DECONNECTER


// ////////////////////////////////////////



public function deconnect()
{
    session_destroy();
    header("url=connexion.php");
}
} 
?>