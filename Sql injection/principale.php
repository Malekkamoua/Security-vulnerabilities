<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""&&$_SESSION['password'] !== ""){
                    $user = $_SESSION['username'];
                   $password =  $_SESSION['password'];
                   $security =  $_SESSION['security'];
                    // afficher un message
                    echo $security;
                    echo " password is $password <br>";
                    echo "Bonjour $user, vous êtes connecté avec mot de passe";
                }
            ?>
            
        </div>
    </body>
</html>