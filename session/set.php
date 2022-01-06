<?php
    session_start();
    $_SESSION['username'] = 'Abdel';
    // l'emplacement de dossier 'tmp' pour voir le fichier session : 
    // xamp/tmp/.. pour windows ou 
    // Applications/MAMP/tmp/php/sess_jfvbbqstpqb72gdjne81vtdo16 pour mac
    echo 'session started';
?>