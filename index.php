<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>회원가입</title>
</head>
<body>
	<h1>회원가입</h1>
	<hr>
	<form action="/join.php" method="POST" accept-charset="utf-8">
		아이디 <input type="text" name="userId"><br>
		비밀번호 <input type="password" name="userPassword"><br>
		이름 <input type="text" name="userName"><br>
		성별
		남 <input type="radio" name="userGender" value="M">
		여 <input type="radio" name="userGender" value="F">
		<br>
		<button type="submit">가입</button>
	</form>
</body>
</html>