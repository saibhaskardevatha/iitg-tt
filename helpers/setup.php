<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $roll = $_POST['roll'];
    $year = $roll[1];
    $branch = $roll[5];

    $_SESSION['roll']=$roll;
    $_SESSION['year']=$year;
    $_SESSION['branch']=$branch;

    include('config.php');

    switch($year){
        case '8':
            header('Location: ../edit/3.php');
            break;
        case '7':
            header('Location: ../edit/5.php');
            break;
        case '6':
            header('Location: ../edit/7.php');
            break;
        case '9':
            header('Location: ../edit/8.php');
            break;
    }
}else{
    header('Location: ../');
}
    
?>