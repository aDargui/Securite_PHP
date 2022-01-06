<?php
    session_start();
    if(isset($_SESSION['logedIn']) && $_SESSION['logedIn']===true){
        echo "Welcome to your profile";
    }else{
        echo "You are not loged in";
    }
    

?>