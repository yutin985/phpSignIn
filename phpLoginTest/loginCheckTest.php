
<html>
<head>
	<title>~網頁測試~</title>
</head>
<body>
	<?php

    $name = $_POST["name"];

    $password = $_POST["passwd"];

    $db_server = "127.0.0.1";

    $db_user = "root";

    $db_name = "testDataBase";

    $db = mysqli_connect($db_server, $db_user, $db_name);

   	if (!$db){
   		die("連線失敗" . mysqli_connect_erron());
   	}

	$sql = mysqli_query($db, "SELECT * from testMyTable WHERE name = '$name' AND password = '$password'");

	$row = mysqli_num_rows($sql);

	if ($row){
		echo "登入成功！ 你好 " . $name;

		exit;
	}else{
		echo "使用者名稱或密碼錯誤 請";

		echo "<a href = 'http://localhost/~zhouyuting/phpLoginTest/loginTest.php'>再試一次</a>";
	}


?>


	</form>

</body>
</html>

