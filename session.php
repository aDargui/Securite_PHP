<?php
session_start();
//  Supprimer et remplacer le fichier cookie à chaque actualisation de la page :)
// session_regenerate_id pour générer un nouveau id ;)
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session secure</title>
</head>
<body>

<?php


echo "Session ID = " . session_id() . "<br>";

if(isset($_REQUEST['logout']) && isset($_SESSION['active'])){
    unset($_SESSION['active']);
    session_destroy();
}

if(isset($_SESSION['active'])){
    var_dump($_SESSION);

    echo "<h1>Bonjour ".$_SESSION['prenom'] . " " . $_SESSION['nom'] . "</h1>";
    echo "Vous êtes bien connecté avec " . $_SESSION['pseudo'] . "<br>";
    echo "<a href='?logout'>Déconnexion</a>";

    return ;
}

if(isset($_REQUEST['pseudo']) && isset($_REQUEST['password'])){
    
    $pseudo_ = $_REQUEST['pseudo'];
    $passHash_ = sha1($_REQUEST['password']);
    $nom_ = $_REQUEST['nom'];
    $prenom_ = $_REQUEST['prenom'];

    $pseudo = 'pseudo_Aaa';
    $passHash = sha1('aaaaaa');
    $nom = 'nom_aaa';
    $prenom = 'prenom_aaa';

    $_SESSION['postInfo']['pseudo'] = $pseudo;
    $_SESSION['postInfo']['password'] = $passHash;
    $_SESSION['postInfo']['nom'] = $nom;
    $_SESSION['postInfo']['prenom'] = $prenom;


    if($_REQUEST['pseudo'] === $pseudo && sha1($_REQUEST['password']) === $passHash){
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['active'] = true;

        var_dump($_SESSION);

        echo "<h1>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "</h1>";
        echo "Vous êtes bien connecté avec " . $_SESSION['pseudo'] . "<br>";
        echo "<a href='?logout'>Déconnexion</a>";

        return;
    }
    echo '<p style="background-color: red;">votre mot de passe ou pseudo est incorrect. veuillez le vérifier</p>';
}
print_r($_SESSION);
?>

    <form method="POST">
        <input type="text" name="pseudo" value="pseudo_Aaa">
        <input type="password" name="password" value="aaaaaa">
        <input type="text" name="nom" value="nom_aaa">
        <input type="text" name="prenom" value="prenom_aaa">
        <input type="submit" value="Submit Now">
    </form>
    
</body>
</html>