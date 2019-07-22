<?php
session_start();
if(!isset($_SESSION['roll'])){
	header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>junior edit.</title>
		<meta name="keywords" content="iitg, guwahati, iit, timetable, academic, calendar, ece, eee" />
		<meta name="author" content="Sai Bhaskar Devatha" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/set2.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/cs-skin-overlay.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/vicons-font.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/buttons.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="bgcolor-1">
	<?php
		include("../helpers/config.php");
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	?>
		<div class="container">
			<header class="codrops-header">
				<h1>junior year.<span>edit your elective.</span></h1>
			</header>
			<form action="../helpers/junior.php" method="POST">
				<section class="content-drop">
					<select class="cs-select cs-skin-overlay" required name="hss">
						<option value="" disabled selected>Select your HSS Elective</option>
						<?php						
							$sql = "SELECT * FROM courses_junior where type = 'hss'";
							$result = mysqli_query($conn, $sql);	
							$count = mysqli_num_rows($result);
							$half = round($count/2);
							if (mysqli_num_rows($result) > 0) {
								// output data of each row
								echo "<optgroup>";
								while($row = mysqli_fetch_assoc($result)) {
									if($count > $half){
										echo "<option value=\"".$row["id"]."\">".$row["name"]."</option>";
										$count = $count - 1;
									}else if($count == $half){
										echo "</optgroup><optgroup><option value=\"".$row["id"]."\">".$row["name"]."</option>";
										$count = $count - 1;
									}else {
										echo "<option value=\"".$row["id"]."\">".$row["name"]."</option>";
										$count = $count - 1;
									}
								}
								echo "</optgroup>";
							} 
						?>
					</select>
				</section>
				<div class="box">
					<button class="button button--itzel button--text-thick"><i class="button__icon icon icon-forward"></i><span>submit.</span></button>
				</div>
			</form>
		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="../assets/js/classie.js"></script>
		<script src="../assets/js/selectFx.js"></script>
		<script>
			(function() {	
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el, {
						stickyPlaceholder: false
					});
				} );
			})();
		</script>
	</body>
</html>
