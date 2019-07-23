<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../assets/favicon.png" type="image/png"/>

	<link rel="stylesheet" href="../assets/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Resource style -->

    <title>timetable.</title>
    <meta name="keywords" content="iitg, guwahati, iit, timetable, academic, calendar, ece, eee" />
    <meta name="author" content="Sai Bhaskar Devatha" />
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109652681-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109652681-3');
</script>

</head>
<body>
<?php
session_start();
include("../helpers/config.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$roll = $_SESSION['roll'];

if(empty($roll)){
	echo '<script type="text/javascript">
           window.location = "../"
    </script>';
}

$sql = "SELECT * from roll_data_senior where roll = $roll";

$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($result);

if(empty($result)){
	echo '<script type="text/javascript">
           window.location = "../"
    </script>';
}

$de1 = $result['de1'];
$de2 = $result['de2'];
$branch = $result['branch'];
$oe = $result['oe'];

if($roll < 160102045){
	$course = 'ee441';
    $lab = 'ee442a';
}else if($roll < 160108000){
	$course = 'ee441';
    $lab = 'ee442b';
}else if($roll < 160108030) {
	$course = 'ee480';
    $lab = 'ee482a';
}else{
	$course = 'ee480';
    $lab = 'ee482b';
}

?>
<header class="cd-intro">
    <h1>timetable.</h1>
    <h3>
        <a href="../">Home</a>
        <a href="../edit/senior.php">Edit Electives</a>
        <a href="https://www.facebook.com/saibhaskar.devatha" target='_blank'>Developer</a>
    </h3>
</header>
<div class="cd-schedule loading">
	<div class="timeline">
		<ul>
			<li><span>08:00</span></li>
			<li><span>08:30</span></li>
			<li><span>09:00</span></li>
			<li><span>09:30</span></li>
			<li><span>10:00</span></li>
			<li><span>10:30</span></li>
			<li><span>11:00</span></li>
			<li><span>11:30</span></li>
			<li><span>12:00</span></li>
			<li><span>12:30</span></li>
			<li><span>13:00</span></li>
			<li><span>13:30</span></li>
			<li><span>14:00</span></li>
			<li><span>14:30</span></li>
			<li><span>15:00</span></li>
			<li><span>15:30</span></li>
			<li><span>16:00</span></li>
			<li><span>16:30</span></li>
			<li><span>17:00</span></li>
		</ul>
	</div> <!-- .timeline -->

	<div class="events">
		<ul>
			<li class="events-group">
				<div class="top-info"><span>Monday</span></div>

				<ul>
					<?php						
						$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM monday a INNER JOIN courses_senior b ON a.id = b.id WHERE a.id = '$de1' OR a.id = '$de2' OR a.id = '$course' OR a.id = '$oe' OR a.id = '$lab' ORDER BY start_time";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
					
						    }
						} 
					?>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Tuesday</span></div>

				<ul>
				<?php

                        $sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM tuesday a INNER JOIN courses_senior b ON a.id = b.id WHERE a.id = '$de1' OR a.id = '$de2' OR a.id = '$course' OR a.id = '$oe' OR a.id = '$lab' ORDER BY start_time";						
                        $result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
						    }
						}
					?>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Wednesday</span></div>

				<ul>
				<?php
                        $sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM wednesday a INNER JOIN courses_senior b ON a.id = b.id WHERE a.id = '$de1' OR a.id = '$de2' OR a.id = '$course' OR a.id = '$oe' OR a.id = '$lab' ORDER BY start_time";						
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
						    }
						}
					?>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Thursday</span></div>

				<ul>
				<?php
                    $sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM thursday a INNER JOIN courses_senior b ON a.id = b.id WHERE a.id = '$de1' OR a.id = '$de2' OR a.id = '$course' OR a.id = '$oe' OR a.id = '$lab' ORDER BY start_time";
                    $result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
						    }
						}
					?>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Friday</span></div>

				<ul>
				<?php
                        $sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM friday a INNER JOIN courses_senior b ON a.id = b.id WHERE a.id = '$de1' OR a.id = '$de2' OR a.id = '$course' OR a.id = '$oe' OR a.id = '$lab' ORDER BY start_time";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						        echo "<li class=\"single-event\" data-start=".$row["start_time"]." data-end=".$row["end_time"]."  data-event=".$row["event_id"].">
						<a>
							<em class=\"event-name\">".$row["name"]."</em>
							<em class=\"event-date\">".$row["venue"]."</em>
						</a>
					</li>";
						    }
						}
					?>
				</ul>
			</li>
		</ul>
	</div>
	<?php mysqli_close($conn); ?>
</div> <!-- .cd-schedule -->
<script src="../assets/js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="../assets/js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="../assets/js/main1.js"></script> <!-- Resource jQuery -->
</body>
</html>