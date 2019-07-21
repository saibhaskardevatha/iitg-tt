<?php
    session_start();
    echo $_SESSION['roll'];
    
    session_destroy();
?>