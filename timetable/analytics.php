<?php
    include('helpers/config.php');
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql2 = "SELECT count(roll) as count1, sum(count) as count2 from roll_count;";
    $result = mysqli_query($conn, $sql2);
    $result = mysqli_fetch_assoc($result);

    echo 'Unique Count :'.$result['count1'];
    echo 'Total Views :'.$result['count2'];
?>