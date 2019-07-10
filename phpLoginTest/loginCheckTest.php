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

    $db_server = "127.0.0.1";

    $db_user = "root";

    $db_passwd = "19961118";

    $db_name = "testDataBase";

    $db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);

   	if (!$db){
   		die("連線失敗" . mysqli_connect_erron());
   	}

	$sql = mysqli_query($db, "SELECT * from testMyTable WHERE name = '$name' AND password = '$password'");

	$row = mysqli_num_rows($sql);

	if ($row){
		print "<br>";
		print "<br>";
		print "<br>";
		echo "<span style='position:relative;left:40px; font-family:serif'>登入成功！ 你好 $name</span>";

		exit;

	}else{
		print "<br>";
		print "<br>";
		print "<br>";
		echo "<span style='position:relative;left:40px; font-family:serif; color: #EE0000;'>使用者名稱或密碼錯誤 請<a href = 'http://localhost/~zhouyuting/phpLoginTest/loginTest.php' style='text-decoration:none'> 再試一次</a></span>";

	}
?>