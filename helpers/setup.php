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
            $sql = "SELECT * from roll_data_sophomore where roll = $roll";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($result);

            if(empty($result)){
                header('Location: ../edit/sophomore.php'); 
            }else{
                header('Location: ../sophomore/');
            }
            mysqli_close($conn);
            break;
        case '7':
            $sql = "SELECT * from roll_data_junior where roll = $roll";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($result);

            if(empty($result)){
                header('Location: ../edit/junior.php'); 
            }else{
                header('Location: ../junior/');
            }
            mysqli_close($conn);
            break;
        case '6':
            $sql = "SELECT * from roll_data_senior where roll = $roll";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($result);

            if(empty($result)){
                header('Location: ../edit/senior.php'); 
            }else{
                header('Location: ../senior/');
            }
            mysqli_close($conn);
            break;
        case '9':
            header('Location: ../fresher/.php');
            break;
    }
}else{
    header('Location: ../');
}
    
?>