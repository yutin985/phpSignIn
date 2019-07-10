<!DOCTYPE html>
<html>
<head>
	<title>~網頁測試~</title>
	<link rel="stylesheet" type="text/css" href="cssReset.css">
    <link rel="stylesheet" type="text/css" href="webCss.css">
</head>
<body>
	<div id="blueBra">
	    <span id="signInLogo">
		    <a href="http://localhost/~zhouyuting/phpLoginTest/loginTest.php" style="text-decoration:none;color: #F0F8FF;">
		        
		        Sign in

		    </a>
	    </span>
    </div>
</body>
</html>

<?php

	$name = $_POST["name"];

	$password = $_POST["passwd"];

	$email = $_POST["email"];

	$gender = $_POST["gender"];

	$db_server = "127.0.0.1";

	$db_name = "testDataBase";

	$db_user = "root";
	
	$db_passwd = "19961118";

	$db = mysqli_connect($db_server , $db_user , $db_passwd , $db_name);

	if (!$db){
		die("連線失敗" . mysqli_connect_error($db));
	}

	$sqlStr = "INSERT INTO testMyTable (name,password,email,gender) 

	VALUES ('$name','$password','$email','$gender')";

	if (mysqli_query($db,$sqlStr)){
		print "<br>";
		print "<br>";
		print "<br>";
		echo "<span style='position:relative;left:40px; font-family:serif;'>註冊成功！ 請<a href = http://localhost/~zhouyuting/phpLoginTest/loginTest.php style='text-decoration:none'>重新登入</a></span>";
	}else{
		print "<br>";
		print "<br>";
		print "<br>";
		echo "<span style='position:relative;left:40px; font-family:serif; color: #EE0000;'>註冊失敗！ <a href = http://localhost/~zhouyuting/phpLoginTest/registeredTest.php? style='text-decoration:none'>再試一次</a></span>";
	}

	mysqli_close($db);

?>