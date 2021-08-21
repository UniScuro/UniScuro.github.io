<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>L'Indispensable</title>
        <link rel="stylesheet" href="public2/css/base-inscription.css">
        <link rel="stylesheet" href="public2/css/header.css">
        <link rel="stylesheet" href="public2/css/connexion.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>

        <div class="page">
            <div class="container">
                <div class="header__navbar">
                    <a href="" class="header__navbar--title">L'Indispensable</a>
                    <div class="header__register--menu">
                        <a href="connexion.php" class="header__register--menu-link">CONNEXION</a>
                    </div>
                    <div class="header__navbar--menu">
                        <a href="index2.html" class="header__navbar--menu-link">Accueil</a>
                        <a href="utilisateurs.php" class="header__navbar--menu-link2">Utilisateurs</a>
                        <a href="" class="header__navbar--menu-link2">PAGE3</a>

                        <a href="" class="header__navbar--menu-link2">PAGE4</a>
                        <a href="" class="header__navbar--menu-link2">PAGE5</a>
                        <a href="" class="header__navbar--menu-link2">PAGE6</a>
                    </div>
                    <div class="header__navbar--toggle">
                        <span class="header__navbar--toggle-icons"></span>
                    </div>
                </div>

                <div class="ins">
                    <div class="ins__container">
                        <form class="ins__menu" action="" method="post">
                            <h1 class="ins__menu--title">INSCRIPTION</h1>
                            <input class="ins__menu--pseudo" type="text" name="pseudo" placeholder="Pseudo" require>
                            <input class="ins__menu--mail" type="text" name="email" placeholder="Adresse E-mail" require>
                            <input class="ins__menu--tel" type="text" name="Telephone" placeholder="Numéro de téléphone" require>
                            <input class="ins__menu--mdp" type="password" name="password" placeholder="Mot de passe" require>
                            <input class="ins__menu--mdp" type="password" name="cpassword" placeholder="Confirmer votre mot de passe" require>
                            <input class="ins__menu--button" type="submit" name="formsend" placeholder="Inscription">
                        </form>
                    </div>

                    <div class="con__container">
                        <form class="con__menu" action="" method="post">
                            <h1 class="con__menu--title">CONNEXION</h1>
                            <input class="con__menu--pseudo" type="text" name="" placeholder="Pseudo" require>
                            <input class="con__menu--mdp" type="password" name="" placeholder="Mot de passe" require>
                            <input class="con__menu--button" type="submit" name="" placeholder="Inscription" require>
                        </form>
                    </div>
                </div>
                
                <?php

                    if(isset($_POST['formsend'])) {
                        
                        $pseudo = $_POST['pseudo'];
                        $email = $_POST['email'];
                        $Telephone = $_POST['Telephone'];
                        $password = $_POST['password'];
                        
                        if(!empty($pseudo) && !empty($email) && !empty($Telephone) && !empty($password)) {

                            $options = ['cost' => 12];
                            $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

                            echo "Pseudo : " . $pseudo . "</br>Email :" . $email . "</br>Tel : " . $Telephone . "</br>Mot de passe :" . $hashPassword;

                            include 'database.php';
                            global $db;

                            $q = $db->prepare("INSERT INTO users(pseudo,email,Telephone,password) VALUES(:pseudo,:email,:Telephone,:password)");
                            $q->execute([
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'Telephone' => $Telephone,
                                'password' => $hashPassword
                            ]);
                        }

                        else {
                            echo "Merci de compléter TOUS les champs !";
                        }

                    }


                ?>
            </div>
        </div>

        
    
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="public2/js/app.js"></script>
    </body>
</html>