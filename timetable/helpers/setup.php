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

    $sql2 = "SELECT * from roll_count where roll = $roll";
    $result = mysqli_query($conn, $sql2);
    $result = mysqli_fetch_assoc($result);

    if(empty($result)){
        $sql3 = "INSERT INTO roll_count (roll, count) VALUES ($roll, 1)";
        $conn->query($sql3);
    }else{
        $count = $result['count']+1;
        $sql3 = "UPDATE roll_count SET count = $count WHERE roll = $roll";
        $conn->query($sql3);
    }
    
    switch($year){
        case '8':
            header('Location: ../sophomore/');
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
            header('Location: fresher.php');
            break;
    }
}else{
    header('Location: ../');
}
    
?>