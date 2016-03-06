<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='assets/css/custom-style.css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,800,700italic,700,600italic,600,400italic,800italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>
<body>
    <div id="push_sidebar">
        <ul class="list-unstyled">
            <li><a href="#"><div class="fa fa-home"></div>Accueil</a></li>
            <li><a href="#"><div class="fa fa-pokedex"></div>Pokédex</a></li>
            <?php
                if(isset($_SESSION['user'])){
                    echo '<li><a href="#"><div class="fa fa-user"></div>'.$_SESSION['user'].'</a></li><li><a href="#"><div class="fa fa-deco"></div>Deconnexion</a></li>';
                }else{
                    echo '<li><a href="#"><div class="fa fa-login"></div>Connexion</a></li><li><a href="#"><div class="fa fa-register"></div>Inscription</a></li>';
                }
            ?>
        </ul>
    </div>
    <div id="wrapper">
    <header class="header">
        <div class="nav_trigger" id='hamburgerMenu'><img id='imgHamburgerMenu' src='images/hamburgerMenu.png'></div>
        <ul class='onglets part1'>
            <li>Accueil</li>
        </ul>
        <div id='blogTitle'><a href="index.php">PokéManiac</a></div>
        <ul class='onglets part2'>
            <li>PokéDex</li>
            <?php
            if(!$_SESSION['user']){
                '<li>Inscription</li>';
            }
            ?>
        </ul>
    </header>
    <div class="container">
        <?= $contenu ?>
    </div>
    <!--<aside>
        <?php
            if(isset($_SESSION['user'])){
                echo "Bonjour ".$_SESSION['user']."
                <form method='POST'>
                    <input type='submit' name='logout' value='Logout'>
                </form>";
            }else{
            echo "<div class='loginBlock'>
                <form name='userConnexion' method='POST' action='viewLogin.php'>
                    <input type='submit' value='Se connecter'>
                </form>
                ou
                <form name='userRegister' method='POST' action='viewRegister.php'>
                    <input type='submit' value='S inscrire'>
                </form>
            </div>";
        }
        ?>
    </aside>-->
    </div>
    <script>

    </script>
</body>
</html>