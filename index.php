<!DOCTYPE html>
<html>
<head>
	<title>Securimage Test</title>
</head>
<body>
	<form action="check.php" method="POST">
	<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /> 
	<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false" style="text-decoration: none">
		<img src="images/refresh.ico">
	</a>
	<br/>
	<input type="text" name="captcha_code" size="10" maxlength="6" /> <!-- change size and maxlength to fit your needs -->
	<input type="submit" value="go!">
	</form>
</body>
</html>