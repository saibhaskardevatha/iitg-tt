<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>timetable.</title>
		<meta name="description" content="A simple utility for all years of ECE/EEE students." />
		<meta name="keywords" content="iitg, guwahati, iit, timetable, academic, calendar, ece, eee" />
		<meta name="author" content="Sai Bhaskar Devatha" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/set2.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="bgcolor-1">
		<div class="container">
			<header class="codrops-header">
				<h1>timetable.<span>search for your roll number.</span></h1>
			</header>
			<section class="content">
				<form action="helpers/setup.php" method="POST">
					<span class="input input--makiko">
						<input class="input__field input__field--makiko" type="text" name="roll" id="roll" pattern="(\b1801020\w+|\b1801080\w+|\b1601020\w+|\b1601080\w+|\b1701020\w+|\b1701080\w+|\b19\w+)" maxlength="9" title="Must be a valid IITG roll number"/>
						<label class="input__label input__label--makiko" for="roll">
							<span class="input__label-content input__label-content--makiko">search.</span>
						</label>
					</span>	
					<input id="rollSub" type="submit" hidden value="submit">
				</form>
				
				<p>developed by </p>
				<h4><a href="https://www.saibhaskardevatha.co.in/" target="_blank">sai bhaskar devatha.</a></h4>
			</section>
		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
		<script>
			$(function() {
				var $id = $('#roll');
				$id.keyup(function(e) {
					if ($id.val().length >= 9) {
						if($(this.form)[0].checkValidity()){
							$(this.form).submit();
						}
						else{
							$(this.form)[0].reportValidity()
						}
					}
				});
			});
		</script>
	</body>
</html>
