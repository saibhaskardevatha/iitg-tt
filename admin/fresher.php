<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Fresher</title>
		<meta charset="utf-8" />
        <link rel="shortcut icon" href="../assets/favicon.png" type="image/png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body>

		<!-- Main -->
			<section id="main" class="wrapper" style="padding-top:1.5em;padding-bottom: 0">
				<div class="inner">
					<header class="align-center">
						<h2>Add Courses</h2>
                    </header>
                    <div class="row uniform">
                        <div class="3u 12u(large)"></div>
                        <div class="6u 12u(large)">
                            <form method="post" action="helpers/fresher_course.php">
                                <input type="text" name="id" id="id" placeholder="Course ID (Small Letters and without spaces)" /><br>
                                <input type="text" name="name" id="name" placeholder="Course Name (As Short as possible)" /><br>
                                <input type="text" name="venue" id="venue" placeholder="Venue" /><br>
                                <div class="row uniform">
                                    <div class="4u 12u">
                                    <div class="select-wrapper">
                                        <select name="day1" id="day1">
                                            <option value="monday_fresher">Monday</option>
                                            <option value="tuesday_fresher">Tuesday</option>
                                            <option value="wednesday_fresher">Wednesday</option>
                                            <option value="thursday_fresher">Thursday</option>
                                            <option value="friday_fresher">Friday</option>
                                        </select>
                                    </div><br>
                                    <div class="select-wrapper">
                                        <select name="time1" id="time1">
                                            <option value="08:00|09:00">8:00 - 9:00</option>
                                            <option value="09:00|10:00">9:00 - 10:00</option>
                                            <option value="10:00|11:00">10:00 - 11:00</option>
                                            <option value="11:00|12:00">11:00 - 12:00</option>
                                            <option value="12:00|13:00">12:00 - 13:00</option>
                                            <option value="13:00|14:00">13:00 - 14:00</option>
                                            <option value="14:00|15:00">14:00 - 15:00</option>
                                            <option value="15:00|16:00">15:00 - 16:00</option>
                                            <option value="16:00|17:00">16:00 - 17:00</option>
                                            <option value="17:00|18:00">17:00 - 18:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="4u 12u">
                                    <div class="select-wrapper">
                                        <select name="day2" id="day2">
                                            <option value="monday">Monday</option>
                                            <option value="tuesday">Tuesday</option>
                                            <option value="wednesday">Wednesday</option>
                                            <option value="thursday">Thursday</option>
                                            <option value="friday">Friday</option>
                                        </select>
                                    </div><br>
                                    <div class="select-wrapper">
                                        <select name="time2" id="time2">
                                            <option value="08:00|09:00">8:00 - 9:00</option>
                                            <option value="09:00|10:00">9:00 - 10:00</option>
                                            <option value="10:00|11:00">10:00 - 11:00</option>
                                            <option value="11:00|12:00">11:00 - 12:00</option>
                                            <option value="12:00|13:00">12:00 - 13:00</option>
                                            <option value="13:00|14:00">13:00 - 14:00</option>
                                            <option value="14:00|15:00">14:00 - 15:00</option>
                                            <option value="15:00|16:00">15:00 - 16:00</option>
                                            <option value="16:00|17:00">16:00 - 17:00</option>
                                            <option value="17:00|18:00">17:00 - 18:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="4u$ 12u$">
                                    <div class="select-wrapper">
                                        <select name="day3" id="day3">
                                            <option value="monday">Monday</option>
                                            <option value="tuesday">Tuesday</option>
                                            <option value="wednesday">Wednesday</option>
                                            <option value="thursday">Thursday</option>
                                            <option value="friday">Friday</option>
                                        </select>
                                    </div><br>
                                    <div class="select-wrapper">
                                        <select name="time3" id="time3">
                                            <option value="08:00|09:00">8:00 - 9:00</option>
                                            <option value="09:00|10:00">9:00 - 10:00</option>
                                            <option value="10:00|11:00">10:00 - 11:00</option>
                                            <option value="11:00|12:00">11:00 - 12:00</option>
                                            <option value="12:00|13:00">12:00 - 13:00</option>
                                            <option value="13:00|14:00">13:00 - 14:00</option>
                                            <option value="14:00|15:00">14:00 - 15:00</option>
                                            <option value="15:00|16:00">15:00 - 16:00</option>
                                            <option value="16:00|17:00">16:00 - 17:00</option>
                                            <option value="17:00|18:00">17:00 - 18:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="row uniform">
                                    <div class="4u 12u(small)"></div>
                                    <div class="4u 12u">
                                        <input type="submit" value="Add Course"/>
                                    </div>
                                    <div class="4u$ 12u$"></div>
                                </div>
                            </form>
                        </form>
                        <div class="3u$ 12u(large)"></div>
                    </div>

                    <div class="row uniform">
                        <div class="3u 12u(large)"></div>
                        <div class="6u 12u(large)">
                            <form method="post" action="helpers/fresher_lab.php">
                                <input type="text" name="id" id="id" placeholder="Course ID (Small Letters and without spaces)" /><br>
                                <input type="text" name="name" id="name" placeholder="Course Name (As Short as possible)" /><br>
                                <input type="text" name="venue" id="venue" placeholder="Venue" /><br>
                                <div class="row uniform">
                                    <div class="4u 12u"></div>
                                <div class="4u 12u">
                                    <div class="select-wrapper">
                                        <select name="lab_day" id="lab_day">
                                            <option value="monday_fresher">Monday</option>
                                            <option value="tuesday_fresher">Tuesday</option>
                                            <option value="wednesday_fresher">Wednesday</option>
                                            <option value="thursday_fresher">Thursday</option>
                                            <option value="friday_fresher">Friday</option>
                                        </select>
                                    </div><br>
                                    <div class="select-wrapper">
                                        <select name="time" id="time">
                                            <option value="09:00|12:00">Morning</option>
                                            <option value="14:00|17:00">Afternoon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="4u$ 12u$"></div>                                    
                                <div class="row uniform">
                                    <div class="4u 12u(small)"></div>
                                    <div class="4u 12u">
                                        <input type="submit" value="Add Course"/>
                                    </div>
                                    <div class="4u$ 12u$"></div>
                                </div>
                            </form>
                        </form>
                        <div class="3u$ 12u(large)"></div>
                    </div>
				</div>

			</section>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>