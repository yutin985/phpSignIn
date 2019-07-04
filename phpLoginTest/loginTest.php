<!DOCTYPE html>
<html>
<head>
	<title>~網頁測試~</title>
</head>
<body>
	
	<form action="loginCheckTest.php" method="post">
		<h1>登入</h1>
		<table cellspacing = "1">
			<tbody>
		<tr>
			<td>

		<label for = name><h5>使用者</h5></label>
	</td>
			<td>
		<label for = passwd><h5>密碼</h5></label>
	</td>
</tr>
<br>
		<tr>
		<td>
		<input name="name" type="name" id = "name">
	</td>
		<td>
		<input name="passwd" type="password" id = "passwd">
	</td>
</tr>
</tbody>
</table>
<table>
		<br><br>
		<input type="submit" value="送出">
	</form>
	<br>

	<form action="registeredTest.php">
		<br>
		<input type = "submit" value="註冊">

	</form>
	</table>

</body>
</html>