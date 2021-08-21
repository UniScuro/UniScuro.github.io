<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>L'Indispensable</title>
        <link rel="stylesheet" href="public2/css/base.css">
        <link rel="stylesheet" href="public2/css/header.css">
        <link rel="stylesheet" href="public2/css/utilisateurs.css">
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

                <?php
                    include 'database.php';
                    global $db;
                ?>   

                <div class="utilisateurs">
                    <p class="utilisateurs__title">UTILISATEURS</p>
                    <?php
                    $q = $db->query("SELECT * FROM users");
                    while ($user = $q->fetch()) {?>
                        <p class="utilisateurs__info">Pseudo : <?php echo $user['pseudo']; ?></p>
                    <?php  }?>
                </div>
                

            </div>
        </div>

        
    
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="public2/js/app.js"></script>
    </body>
</html>