<?php session_start(); ?>
<?php
    $roll = $_SESSION['roll'];
    $de1 =  $_POST['de1'];
    $de2 =  $_POST['de2'];
    $oe =  $_POST['oe'];

    if($_SESSION['branch'] == '2'){
        $branch = 'ece';
    }else{
        $branch = 'eee';
    }

    include('config.php');
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql1 = "SELECT roll from roll_data_senior WHERE roll = $roll";
    $result = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_assoc($result);
    if(!empty($result)){
        $sql3 = "DELETE FROM roll_data_senior WHERE roll = $roll";
        $conn->query($sql3);
    }
    $sql = "INSERT INTO roll_data_senior (roll, branch, de1, de2, oe)
    VALUES ($roll, ,'$branch', '$de1', '$de2', '$oe')";
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
            window.location = "../senior/"
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>