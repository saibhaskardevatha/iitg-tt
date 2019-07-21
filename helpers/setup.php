<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
            header('Location: ../edit/3');
            break;
        case '7':
            header('Location: ../edit/5');
            break;
        case '6':
            $sql = "SELECT * from roll_data_6 where roll = $roll";
            $result = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($result);

            if(empty($result)){
                header('Location: ../edit/7'); 
            }else{
                header('Location: ../tt/4');
            }
            mysqli_close($conn);
            break;
        case '9':
            header('Location: ../tt/1');
            break;
    }
}else{
    header('Location: ../');
}
    
?>