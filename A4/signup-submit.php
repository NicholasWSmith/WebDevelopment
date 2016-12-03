<html>
	<title>
	Signup Submited!
	</title>
	<head>
		<link href="./A4css.css" type= "text/css" rel="stylesheet" > 
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>

	<body>
	<h1> THANK YOU FOR SIGNING UP! </h1>
	<DIV style="position: absolute; top:10%; left:40%; width:1000px; height:1000px",  class ="strokeme">
	<p> We will match someone for you shortly, while you wait, watch some
	<a href = "https://www.youtube.com/user/HellKitties" target = "_blank"> vidoes!</a> </p>
	</div>

	</body>



	
	<?php
	$fName = $_POST['firstName']; 
	$lName = $_POST['lastName']; 
	$favGame = $_POST['favGame']; 
	$timePlayed = $_POST['timePlayed'];
	$sex = $_POST['sex'];  
	$attracted = $_POST['attracted']; 
	$birthdate = $_POST['birthdate']; 
	$avatar = $_POST['avatar'];

	$fileHandle= fopen("myDataFile.txt", 'w');
	fwrite($fileHandle, $fName);
	fwrite($fileHandle, " ");
	fwrite($fileHandle, $lName);
	fwrite($fileHandle, " ");
	fwrite($fileHandle, $favGame);
	fwrite($fileHandle, " ");
	fwrite($fileHandle, $timePlayed);
	fwrite($fileHandle, " ");
	fwrite($fileHandle, $sex);
	fwrite($fileHandle, " ");
	fwrite($fileHandle, $attracted);
	fwrite($fileHandle, " ");
	fwrite($fileHandle, $birthdate);
	fwrite($fileHandle, " ");
	fclose($fileHandle);


	$username = "/var/www/html/12nws/A4/pictures";
	if (is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
			move_uploaded_file($_FILES["avatar"]["tmp_name"], "$username/avatar.jpg");
			print "Saved uploaded file as $username/avatar.jpg\n";
	} else {
			print "Error: required file not uploaded";
	}			

	
	?>
</html>