<html>
	<title>
	Nerds Getting it on'
	</title>
	<head>
	<link href="./A4css.css" type= "text/css" rel="stylesheet" > 
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>


	<body>

	<h1> Welcome to Nick's Gaming Dating Site! For all the nerds who want to date other nerds &hearts;</h1>
	<DIV style="position: absolute; top:10%; left:40%; width:1000px; height:1000px",  class ="strokeme">
	<form action = "signup-submit.php" method = "post" enctype="multipart/form-data" target="_blank">
	First name: <input type="text" name="firstName"><br><br>
	Last name: <input type="text" name="lastName"> <br><br>
	What is your favourite video game? <input type="text" name="favGame"> <br><br>
	Time playing video gamers per week?  <input type="text" name="timePlayed"> <br><br><br>
	Which gender do you identify as? <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="male">Male
	<input type="radio" name="sex" value="female">Female
	<br>
	Which gender would you be interested in dating?
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="male">Male
	<input type="radio" name="attracted" value="female">Female
	<input type="radio" name="attracted" value="both">Both
	<br><br><br>
	<label> Birthday (dd/mm/yyyy):</label>  
	<input type="text" size="10" name="birthdate" /> <br> <br> <br>




	<label>Upload a Picture of Yourself! 
	<input type="file" name="avatar"> <br> <br> <br> 
	</label>

	<button type="reset" value="reset">Reset</button>
	<button type="submit" value="signup">Sign up!</button>

	</form>
	</DIV>


	</body>
</html>