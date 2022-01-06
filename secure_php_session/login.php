<?php
    // session_start();
    // $_SESSION['user'] = 33;
    // echo 'session started : user '. $_SESSION['user'] ;

    function sessionStart($lifetime, $path, $domain, $secure,$httpOnly){
        session_set_cookie_params($lifetime, $path, $domain, $secure,$httpOnly);
        session_start();
        //session_regenerate_id:  va remplacer l'identifiant de session courant par un nouveau, généré automatiquement, tout en conservant les valeurs de session.
        session_regenerate_id(true);
    }
    //sessionStart(0, '/','localhost',true,true); 'true' pour afficher le cookies seulement avec le 'https'
    sessionStart(0, '/','localhost',false,true);
    $_SESSION['user'] = 33;
    echo 'session started : user '. $_SESSION['user'];
    echo '<br><a href="profile.php">Mon profil</a>';
    
    
?>

<script type="text/javascript">
    let cookie = document.cookie;
    alert(cookie);
</script>