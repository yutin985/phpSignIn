
<!DOCTYPE html>

<html>
<head>
	 <link rel="stylesheet" type="text/css" href="cssReset.css">
	 <link rel="stylesheet" type="text/css" href="webCss.css">
	 <title>~網頁測試~</title>
</head>
<body>
	<div>
	    <form action="loginCheckTest.php" method="post" >
		    <div id="blueBra">
			    <span id="signInLogo">
				    <a href="http://localhost/~zhouyuting/phpLoginTest/loginTest.php" style="text-decoration:none;color: #F0F8FF;">

		                Sign in

		            </a>
		        </span>
	        </div>

		    <table cellspacing = "1" >

			    <tr>
				    <td>
			            <label for = name>
				            <span id="user">

				                使用者

			                </span>
			            </label>
		            </td>
				    <td >
			            <label for = passwd>
				            <span id="passwd">

				                密碼

			                </span>
			            </label>
		            </td>
	            </tr>
	        </table>

            <br><br>

	        <table>
			    <tr>
			        <td id="userImputTd">	
			            <input name="name" type="name" id = "name" id="userImput">
		            </td>
			        <td id="psaawdimputTd">
			            <input name="passwd" type="password" id = "passwd" id="passwdImput">
			        </td>
			        <td id="loginImputTd">
			            <input type="submit" value="登入" id="loginImput">
			        </td>
	            </tr>
	        </table>		
	    </form>
	    <table>
	        <tr>
		        <th>
		            <span id="forgetPasswd">
		                <a href="missPasswdTest.php" style="text-decoration:none;color: #A2B5CD">

		                    忘記密碼？

		                </a>
		            </span>
		        </th>
	        </tr>
        </table>
	    <div>
			<span id="addInMember">

		        還不是會員嗎？
		        
		    </span>
		</div>

		<form action="registeredTest.php">
			<button type = "submit" value="註冊" id="registeredButton">註 冊</button>
		</form>
    </div>
</body>
</html>