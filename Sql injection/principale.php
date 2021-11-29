<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<style>
body {
    background: linear-gradient(253deg, #0cc898, #1797d2, #864fe1);
    background-size: 300% 300%;
    -webkit-animation: Background 25s ease infinite;
    -moz-animation: Background 25s ease infinite;
    animation: Background 25s ease infinite;
}

@-webkit-keyframes Background {
    0% {
        background-position: 0% 50%
    }

    50% {
        background-position: 100% 50%
    }

    100% {
        background-position: 0% 50%
    }
}

@-moz-keyframes Background {
    0% {
        background-position: 0% 50%
    }

    50% {
        background-position: 100% 50%
    }

    100% {
        background-position: 0% 50%
    }
}

@keyframes Background {
    0% {
        background-position: 0% 50%
    }

    50% {
        background-position: 100% 50%
    }

    100% {
        background-position: 0% 50%
    }
}

.full-screen {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: url(https://i.imgur.com/wCG2csZ.png);
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column
        /* works with row or column */

        flex-direction: column;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    text-align: center;
}

h1 {
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-weight: 800;
    font-size: 4em;
    letter-spacing: -2px;
    text-align: center;
    text-shadow: 1px 2px 1px rgba(0, 0, 0, .6);
}

h1:after {
    display: block;
    color: #fff;
    letter-spacing: 1px;
    font-family: 'Poiret One', sans-serif;
    content: 'You are now connected';
    font-size: .4em;
    text-align: center;
}

.button-line {
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: transparent;
    border: 1px solid #fff;
    color: #fff;
    text-align: center;
    font-size: 1.4em;
    opacity: .8;
    padding: 20px 40px;
    text-decoration: none;
    transition: all .5s ease;
    margin: 0 auto;
    display: block;
    width: 100px;
}

.button-line:hover {
    opacity: 1;
}
</style>

<body>
    <div class="full-screen">
        <div>
            <h1>Welcome !</h1>
            <br>
            <?php
                session_start();
                if($_SESSION['username'] !== ""&&$_SESSION['password'] !== ""){
                    $user = $_SESSION['username'];
                   $password =  $_SESSION['password'];
                   $security =  $_SESSION['security'];
                    // afficher un message
                    if($security == "not secure"){
                        echo "<Button class='btn btn-danger' >$security: Did not sanitize the query</Button> <br><br>";
                    }else{
                        echo "<Button class='btn btn-success' >$security </Button> <br><br>";

                    }
                   
                    echo "<h4> Hello $user, you are connected with the password: $password </h4>";
                }
            ?>

        </div>
    </div>
</body>

</html>