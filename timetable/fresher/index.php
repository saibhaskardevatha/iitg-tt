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

$ee101 = 'ee101_'.$_SESSION['div'];
$ce101 = 'ce101_'.$_SESSION['div'];
$ma101 = 'ma101_'.$_SESSION['div'];
$ch101 = 'ch101_'.$_SESSION['div'];
$ph101 = 'ph101_'.$_SESSION['div'];

$ee101t = 'ee101t_'.$_SESSION['tut'];
$ma101t = 'ma101t_'.$_SESSION['tut'];
$ch101t = 'ch101t_'.$_SESSION['tut'];
$ph101t = 'ph101t_'.$_SESSION['tut'];

$lab1 = 'ch110_'.$_SESSION['lab'];
$lab2 = 'ce110_'.$_SESSION['lab'];
$lab3 = 'ph110_'.$_SESSION['lab'];
$lab4 = 'me110_'.$_SESSION['lab'];


?>
<header class="cd-intro">
    <h1>timetable.</h1>
    <h3>Not <?php echo $roll;?>? Go to <a href="../">Home</a>
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
	</div>

	<div class="events">
		<ul>
			<li class="events-group">
				<div class="top-info"><span>Monday</span></div>

				<ul>
					<?php						
						$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM monday_fresher a INNER JOIN courses_fresher b ON a.id = b.id WHERE a.id = '$ee101t' OR a.id = '$ch101t' OR a.id = '$ma101t' OR a.id = '$ph101t' OR a.id = '$ee101' OR a.id = '$ce101' OR a.id = '$ma101' OR a.id = '$ph101' OR a.id='$ch101' OR a.id = '$lab1' OR a.id = '$lab2' OR a.id = '$lab3' OR a.id = '$lab4' ORDER BY start_time";
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

						$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM tuesday_fresher a INNER JOIN courses_fresher b ON a.id = b.id WHERE a.id = '$ee101t' OR a.id = '$ch101t' OR a.id = '$ma101t' OR a.id = '$ph101t' OR a.id = '$ee101' OR a.id = '$ce101' OR a.id = '$ma101' OR a.id = '$ph101' OR a.id='$ch101' OR a.id = '$lab1' OR a.id = '$lab2' OR a.id = '$lab3' OR a.id = '$lab4' ORDER BY start_time";
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
						$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM wednesday_fresher a INNER JOIN courses_fresher b ON a.id = b.id WHERE a.id = '$ee101t' OR a.id = '$ch101t' OR a.id = '$ma101t' OR a.id = '$ph101t' OR a.id = '$ee101' OR a.id = '$ce101' OR a.id = '$ma101' OR a.id = '$ph101' OR a.id='$ch101' OR a.id = '$lab1' OR a.id = '$lab2' OR a.id = '$lab3' OR a.id = '$lab4' ORDER BY start_time";
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
                    $sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM thursday_fresher a INNER JOIN courses_fresher b ON a.id = b.id WHERE a.id = '$ee101t' OR a.id = '$ch101t' OR a.id = '$ma101t' OR a.id = '$ph101t' OR a.id = '$ee101' OR a.id = '$ce101' OR a.id = '$ma101' OR a.id = '$ph101' OR a.id='$ch101' OR a.id = '$lab1' OR a.id = '$lab2' OR a.id = '$lab3' OR a.id = '$lab4' ORDER BY start_time";
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
						$sql = "SELECT a.id, b.name, a.start_time, a.end_time, b.venue, b.event_id FROM friday_fresher a INNER JOIN courses_fresher b ON a.id = b.id WHERE a.id = '$ee101t' OR a.id = '$ch101t' OR a.id = '$ma101t' OR a.id = '$ph101t' OR a.id = '$ee101' OR a.id = '$ce101' OR a.id = '$ma101' OR a.id = '$ph101' OR a.id='$ch101' OR a.id = '$lab1' OR a.id = '$lab2' OR a.id = '$lab3' OR a.id = '$lab4' ORDER BY start_time";
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
