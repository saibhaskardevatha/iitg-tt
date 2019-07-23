<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../assets/favicon.png" type="image/png"/>

	<link rel="stylesheet" href="../assets/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Resource style -->

    <title>timetable.</title>
    <meta name="description" content="A simple utility for all years of ECE/EEE students." />
    <meta name="keywords" content="iitg, guwahati, iit, timetable, academic, calendar, ece, eee" />
    <meta name="author" content="Sai Bhaskar Devatha" />
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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

$course1 = 'ee203';
if($roll < 180102100){
    $course2 = 'ee204';
}else{
    $course2 = 'ee205';
}
$course3 = 'ee210';
$course4 = 'ee220';
$course5 = 'ma201';

if($roll < 180102045){
    $tut1 = 'ee220ta';
}else if($roll < 180108010){
    $tut1 = 'ee220tb';
}else if($roll < 180108070) {
    $tut1 = 'ee220tc';
}

if($roll < 180102045){
    $tut3 = 'ma201ta';
}else if($roll < 180108010){
    $tut3 = 'ma201tb';
}else if($roll < 180108070) {
    $tut3 = 'ma201tc';
}

if($roll < 180102045){
    $tut2 = 'ee204ta';
}else if($roll < 180102100){
    $tut2 = 'ee204tb';
}else if($roll < 180108070) {
    $tut2 = 'ee205t';
}


if($roll < 180102045){
    $lab = 'ee211a';
}else if($roll < 180108010){
    $lab = 'ee211b';
}else if($roll < 180108070) {
    $lab = 'ee211c';
}

?>
<header class="cd-intro">
    <h1>timetable.</h1>
    <h3>
        <a href="../">Home</a>
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
						$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM monday a INNER JOIN courses_sophomore b ON a.id = b.id WHERE a.id = '$course1' OR a.id = '$course2' OR a.id = '$course3' OR a.id='$course4' OR a.id = '$course5' OR a.id = '$tut1' OR a.id = '$tut2' OR a.id = '$tut3' OR a.id = '$lab' ORDER BY start_time";
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
						$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM tuesday a INNER JOIN courses_sophomore b ON a.id = b.id WHERE a.id = '$course1' OR a.id = '$course2' OR a.id = '$course3' OR a.id='$course4' OR a.id = '$course5' OR a.id = '$tut1' OR a.id = '$tut2' OR a.id = '$tut3' OR a.id = '$lab' ORDER BY start_time";
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
						$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM wednesday a INNER JOIN courses_sophomore b ON a.id = b.id WHERE a.id = '$course1' OR a.id = '$course2' OR a.id = '$course3' OR a.id='$course4' OR a.id = '$course5' OR a.id = '$tut1' OR a.id = '$tut2' OR a.id = '$tut3' OR a.id = '$lab' ORDER BY start_time";
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
					$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM thursday a INNER JOIN courses_sophomore b ON a.id = b.id WHERE a.id = '$course1' OR a.id = '$course2' OR a.id = '$course3' OR a.id='$course4' OR a.id = '$course5' OR a.id = '$tut1' OR a.id = '$tut2' OR a.id = '$tut3' OR a.id = '$lab' ORDER BY start_time";
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
					$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM friday a INNER JOIN courses_sophomore b ON a.id = b.id WHERE a.id = '$course1' OR a.id = '$course2' OR a.id = '$course3' OR a.id='$course4' OR a.id = '$course5' OR a.id = '$tut1' OR a.id = '$tut2' OR a.id = '$tut3' OR a.id = '$lab' ORDER BY start_time";
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