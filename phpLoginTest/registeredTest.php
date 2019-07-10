<!DOCTYPE html>
<html>
<head>
	<title>～註冊測試～</title>
	<link rel="stylesheet" type="text/css" href="cssReset.css">
	<link rel="stylesheet" type="text/css" href="webCss.css">
</head>
<body>
	<div id="blueBra">
		<form method="post" action="registeredCheckTest.php">
			<span id="signInLogo">
				<a href="http://localhost/~zhouyuting/phpLoginTest/loginTest.php" style="text-decoration:none;color: #F0F8FF;">

			        Sign in

			    </a>
			</span>
			<span id="registeredUser">
				<p>

				    使用者名稱：

				        <input name="name" type="text">
				</p>
			</span>
			<span id="registeredPsaawd">
			    <p>

				    密碼：

				        <input name="passwd" type="password" >
			    </p>
			</span>
			<span id="registeredEmail">
				<p>

					信箱：

					    <input name="email" type="email">
				</p>
			</span>
				<span id="registeredGender">
				<p>

					性別：男<input name="gender" type="radio" value = "男">

					     女<input name="gender" type="radio" value = "女">
					     
				</p>
			</span>
			<span style="position:relative;bottom:-75px;position: relative;left: 70px;">
			    <input type="submit" value="送出" id="registeredSubmit">
			</span>
		</form>
	</div>
</body>
</html>