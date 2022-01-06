<?php
    session_start();
    session_regenerate_id(true);
    if(isset($_SESSION['user'])){
        echo "Welcome to your profile";
    }else{
        echo "You are not loged in";
    }


    

?>
    <script type="text/javascript">
    let cookie = document.cookie;
    alert(cookie);
</script>