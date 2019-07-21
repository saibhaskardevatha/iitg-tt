<?php session_start(); ?>
<?php
    echo $_SESSION['roll'];
    echo $_POST['de1'];
    echo $_POST['de2'];
    echo $_POST['oe'];
    session_abort();
?>