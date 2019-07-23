<?php session_start(); ?>
<?php
    $roll = $_SESSION['roll'];
    $hss =  $_POST['hss'];

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
    $sql1 = "SELECT roll from roll_data_junior WHERE roll = $roll";
    $result = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_assoc($result);
    if(!empty($result)){
        $sql3 = "DELETE FROM roll_data_junior WHERE roll = $roll";
        $conn->query($sql3);
    }
    $sql = "INSERT INTO roll_data_junior (roll, branch, hss)
    VALUES ($roll, '$branch', '$hss')";
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
            window.location = "../junior/"
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>