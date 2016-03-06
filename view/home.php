<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,800,700italic,700,600italic,600,400italic,800italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>
<body>
    <div id="push_sidebar">
        <ul class="list-unstyled">
            <li><a href="index.php"><div class="fa fa-home"></div>Acceuil</a></li>
            <li><a href="view/viewPokedex.php"><div class="fa fa-pokedex"></div>Pokédex</a></li>
            <li><a href="#"><div class="fa fa-tips"></div>Astuces</a></li>
            <li><a href="#"><div class="fa fa-contact"></div>Contact</a></li>
            <?php
                if(isset($_SESSION['user'])){
                    echo '<li><a href="view/viewProfil.php"><div class="fa fa-user"></div>'.$_SESSION['user'].'</a></li><li><a href="#"><div class="fa fa-deco"></div>Deconnexion</a></li>';
                }else{
                    echo '<li><a href="view/viewLogin.php"><div class="fa fa-login"></div>Connexion</a></li><li><a href="view/viewLogin.php"><div class="fa fa-register"></div>Inscription</a></li>';
                }
            ?>
        </ul>
    </div>
    <div id="wrapper">
    <header class="header">
        <div class="nav_trigger" id='hamburgerMenu'><img id='imgHamburgerMenu' src='images/hamburgerMenu.png'></div>
        <ul class='onglets part1'>
            <a href="index.php"><li>Acceuil</li></a>
            <a href="view/viewLogin.php"><li>PokéDex</li></a>
        </ul>
        <div id='blogTitle'><a href="index.php"><img id='blogLogo' src='images/blogLogo.png'></a></div>
        <ul class='onglets part2'>
            <a href="#"><li>Astuces</li></a>
            <a href="#"><li>Contact</li></a>
        </ul>
    </header>
    <div class="container">
        <div class='loginBlock'>
        <?php
            if(isset($_SESSION['user'])){
                echo "Bonjour ".$_SESSION['user']."
                <form method='POST'>
                    <input type='submit' name='logout' value='Logout'>
                </form>";
            }else{
            echo "Veuillez vous connecter:
                <form name='userConnexion' method='POST' action='view/viewLogin.php'>
                    <input type='submit' value='Se connecter'>
                </form>
                ou
                <form name='userRegister' method='POST' action='view/viewRegister.php'>
                    <input type='submit' value='Inscrire'>
                </form>";
        }
        ?>
        </div>
        <div class='content'><?= $contenu ?></div>
    </div>
</body>
</html>