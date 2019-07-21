<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>senior edit.</title>
		<meta name="keywords" content="iitg, guwahati, iit, timetable, academic, calendar, ece, eee" />
		<meta name="author" content="Sai Bhaskar Devatha" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../assests/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../assests/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../assests/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../assests/css/set2.css" />
		<link rel="stylesheet" type="text/css" href="../assests/css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="../assests/css/cs-skin-overlay.css" />
		<link rel="stylesheet" type="text/css" href="../assests/css/vicons-font.css" />
		<link rel="stylesheet" type="text/css" href="../assests/css/buttons.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="bgcolor-1">
	<?php
		include("helpers/config.php");
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	?>
		<div class="container">
			<header class="codrops-header">
				<h1>senior year.<span>edit your electives.</span></h1>
			</header>
			<form action="../helpers/edit-7.php" method="POST">
				<section class="content-drop">
					<select class="cs-select cs-skin-overlay" required style="z-index:1000;">
						<option value="" disabled selected>Select your Department Elective 1</option>
						<?php						
							$sql = "SELECT * FROM courses_6 where 'type' = 'de'";
							$result = mysqli_query($conn, $sql);
							$count = mysqli_num_rows($result);
							$half = $count/2;
							if (count > 0) {
								// output data of each row
								echo "<optgroup>";
								while($row = mysqli_fetch_assoc($result) && count > $half) {
									echo "<option value=\"".$row["id"]."\">".$row["name"]."</option>";
									$count = $count-1;
								}
								echo "</optgroup><optgroup>";
								while($row = mysqli_fetch_assoc($result)) {
									echo "<option value=\"".$row["id"]."\">".$row["name"]."</option>";
								}
								echo "</optgroup>";
							} 
						?>
					</select>
	
					<select class="cs-select cs-skin-overlay" required style="z-index:800;">
						<option value="" disabled selected>Select your Department Elective 2</option>
						<optgroup>
							<option value="1">Salmon Pecorino with Girolle Sauce</option>
							<option value="2">Pan-fried Gnocci in Tomato Sauce</option>
							<option value="3">Maple Glazed Potatoes in Truffle Reduction</option>
							<option value="4">Tenderstem Broccoli in Artichoke Vinaigrette</option>
						</optgroup>
						<optgroup>
							<option value="5">Smoked Herring in Oyster Gel</option>
							<option value="6">Broad Beans in Sea Rosemary Sauce</option>
							<option value="7">Grilled Asparagus with Pickled Apple</option>
							<option value="8">Cold-smoked Eel with Sea Purslane </option>
						</optgroup>
					</select>
	
					<select class="cs-select cs-skin-overlay" required style="z-index:600;">
						<option value="" disabled selected>Select your Open Elective</option>
						<optgroup>
							<option value="1">Salmon Pecorino with Girolle Sauce</option>
							<option value="2">Pan-fried Gnocci in Tomato Sauce</option>
							<option value="3">Maple Glazed Potatoes in Truffle Reduction</option>
							<option value="4">Tenderstem Broccoli in Artichoke Vinaigrette</option>
						</optgroup>
						<optgroup>
							<option value="5">Smoked Herring in Oyster Gel</option>
							<option value="6">Broad Beans in Sea Rosemary Sauce</option>
							<option value="7">Grilled Asparagus with Pickled Apple</option>
							<option value="8">Cold-smoked Eel with Sea Purslane </option>
						</optgroup>
					</select>
				</section>
				<div class="box">
					<button class="button button--itzel button--text-thick"><i class="button__icon icon icon-forward"></i><span>submit.</span></button>
				</div>
			</form>
		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="../assests/js/classie.js"></script>
		<script src="../assests/js/selectFx.js"></script>
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
