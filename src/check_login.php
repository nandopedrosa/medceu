
<?php
    
    if(!isset($_SESSION['userid'])) {
        header("location: login.php?erro=loginrequired");
        exit();
    }