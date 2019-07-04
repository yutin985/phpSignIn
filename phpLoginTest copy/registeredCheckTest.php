<?php
	$name = $_POST["name"];

	$password = $_POST["passwd"];

	$email = $_POST["email"];

	$gender = $_POST["gender"];

	$db_server = "127.0.0.1";

	$db_name = "testDataBase";

	$db_user = "root";
	

	$db = mysqli_connect($db_server , $db_user, $db_name);

	if (!$db){
		die("連線失敗" . mysqli_connect_error($db));
	}

	$sqlStr = "INSERT INTO testMyTable (name,password,email,gender) 

	VALUES ('$name','$password','$email','$gender')";

	if (mysqli_query($db,$sqlStr)){
		echo "註冊成功！ 請<a href = http://localhost/~zhouyuting/phpLoginTest/loginTest.php>重新登入</a>";
	}else{
		echo "註冊失敗：可能是密碼或信箱重複";
	}

	mysqli_close($db);

?>