<?php
    session_start();
    $_SESSION['logedIn']=true;
    echo "you are logged in"
?>

<!-- la Methode de recuperation de fichier cookie -->

<script type="text/javascript">
    let cookie = document.cookie;
    alert(cookie);
</script>

<!-- shift f2 pour la liste des cookies sur firefox pour l'éditer -->