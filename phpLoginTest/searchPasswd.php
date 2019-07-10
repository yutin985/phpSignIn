<!DOCTYPE html>
<html>
    <head>
        <title>~網頁測試~</title>
    	<link rel="stylesheet" type="text/css" href="cssReset.css">
    	<link rel="stylesheet" type="text/css" href="webCss.css">
    <body>
    	<div id="blueBra">
	        <span id="signInLogo">
		        <a href="http://localhost/~zhouyuting/phpLoginTest/loginTest.php" style="text-decoration:none;color: #F0F8FF;">

		            Sign in

		        </a>
	        </span>
        </div>
    </body>
    </head>
</html>





<?php

    $email = $_POST["email"];

    $db_server = "127.0.0.1";

    $db_user = "root";

    $db_passwd = "19961118";

    $db_name = "testDataBase";

    $db = mysqli_connect($db_server,  $db_user, $db_passwd, $db_name);

    if(!$db){

    	die("連線失敗" . mysqli_connect_erron());

    }

    $sql = mysqli_query($db, "SELECT name , password FROM testMyTable WHERE email = '$email'");

    $row = mysqli_num_rows($sql);

    if ($row){

    	while ($row = mysqli_fetch_array($sql)) {
    		print "<br>";
		    print "<br>";
		    print "<br>";
    	    echo "<span style='position:relative;left:40px; font-family:serif'>使用者名稱：</span>" ."<span style='position:relative;left:40px; font-family:serif'>" .$row["name"] . "</span>" . "<br><br>" . "<span style='position:relative;left:40px; font-family:serif'>密碼：</span>" . "<span style='position:relative;left:40px; font-family:serif'>" . $row["password"] . "</span>";
    }

    }else{
    	print "<br>";
		print "<br>";
		print "<br>";
    	echo "<span style='position:relative;left:40px; font-family:serif; color: #EE0000;'>無效的電子郵件地址！</span>";
    }
?>