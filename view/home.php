<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $titre ?></title>
</head>
<body>
    <header>
        <a href="../index.php"><h1 id="blogTitle">PokéManiac</h1></a>
    </header>
    <div class="container">
        <?= $contenu ?>
    </div>
    <aside>
        <?php
            if(isset($_SESSION['user'])){
                echo "Bonjour ".$_SESSION['user']."
                <form method='POST'>
                    <input type='submit' name='logout' value='Logout'>
                </form>";
            }else{
            echo "<div class='loginBlock'>
                <form name='userConnexion' method='POST' action='view/viewLogin.php'>
                    <input type='submit' value='Se connecter'>
                </form>
                ou
                <form name='userRegister' method='POST' action='view/viewRegister.php'>
                    <input type='submit' value='S inscrire'>
                </form>
            </div>";
        }
        ?>
    </aside>
</body>
</html>