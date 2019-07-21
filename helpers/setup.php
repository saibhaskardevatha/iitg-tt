<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    $roll = $_POST['roll'];
    $year = $roll[1];
    $branch = $roll[5];

    $_SESSION['roll']=$roll;
    $_SESSION['year']=$year;
    $_SESSION['branch']=$branch;

    include('config.php');
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    switch($year){
        case '8':
            $sql = "SELECT * from roll_data_8 where roll = $roll";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($result);

            if(empty($result)){
                header('Location: ../edit/3.php'); 
            }else{
                header('Location: ../tt/2.php');
            }
            mysqli_close($conn);
            break;
        case '7':
            $sql = "SELECT * from roll_data_7 where roll = $roll";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($result);

            if(empty($result)){
                header('Location: ../edit/5.php'); 
            }else{
                header('Location: ../tt/3.php');
            }
            mysqli_close($conn);
            break;
        case '6':
            $sql = "SELECT * from roll_data_6 where roll = $roll";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($result);

            if(empty($result)){
                header('Location: ../edit/7.php'); 
            }else{
                header('Location: ../tt/4.php');
            }
            mysqli_close($conn);
            break;
        case '9':
            header('Location: ../tt/1.php');
            break;
    }
}else{
    header('Location: ../');
}
    
?>