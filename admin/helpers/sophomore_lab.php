<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $venue = $_POST["venue"];
    $day = $_POST["lab_day"];
    $time_old = $_POST["time"];
    $time_explode = explode('|', $time_old);
    $time1 = $time_explode[0];
    $time2 = $time_explode[1];
    $event_id = $_POST['event_id'];

    include("../../helpers/config.php");
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql1 = "INSERT INTO courses_sophomore (id, name, venue, event_id)
    VALUES ('$id', '$name', '$venue', '$event_id')";

    $sql2 = "INSERT INTO {$day} (id, start_time, end_time)
    VALUES ('$id', '$time1', '$time2')";


    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        echo '<script type="text/javascript">
            window.location = "../sophomore.php"
        </script>';
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

    $conn->close();
?>