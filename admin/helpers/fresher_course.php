<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $venue = $_POST["venue"];
    $day1 = $_POST["day1"];
    $day2 = $_POST["day2"];
    $day3 = $_POST["day3"];
    $time1_old = $_POST["time1"];
    $time1_explode = explode('|', $time1_old);
    $time2_old = $_POST["time2"];
    $time2_explode = explode('|', $time2_old);
    $time3_old = $_POST["time3"];
    $time3_explode = explode('|', $time3_old);
    $time1 = $time1_explode[0];
    $time2 = $time2_explode[0];
    $time3 = $time3_explode[0];
    $time4 = $time1_explode[1];
    $time5 = $time2_explode[1];
    $time6 = $time3_explode[1];
    $event_id = 'event-2';

    include("../../helpers/config.php");
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql1 = "INSERT INTO courses_fresher (id, name, venue, event_id)
    VALUES ('$id', '$name', '$venue', '$event_id')";

    $sql2 = "INSERT INTO {$day1} (id, start_time, end_time)
    VALUES ('$id', '$time1', '$time4')";

    $sql3 = "INSERT INTO {$day2} (id, start_time, end_time)
    VALUES ('$id', '$time2', '$time5')";

    $sql4 = "INSERT INTO {$day3} (id, start_time, end_time)
    VALUES ('$id', '$time3', '$time6')";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE) {
        echo '<script type="text/javascript">
            window.location = "../fresher.php"
        </script>';
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

    $conn->close();
?>