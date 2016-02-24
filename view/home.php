<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $titre ?></title>
</head>
<body>
    <header>
        <a href="index.php"><h1 id="blogTitle">PokéManiac</h1></a>
    </header>
    <div class="container">
        <?= $contenu ?>
    </div>
    <aside>
        <div class='loginBlock'>
            Merci de vous connecter :
            <form name='userConnexion' method="POST">
                <input type="text" placeholder='Pseudo' name="username"><br>
                <input type="password" placeholder='Mot de passe' name="password"><br>
                <input type="submit" value="Se connecter">
            </form>
            ou
            <form name='userRegister' method="POST">
                <input type="submit" value="S'inscrire">
            </form>
        </div>
    </aside>
</body>
</html>