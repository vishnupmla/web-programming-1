<html>
<head>
<title>ODD OR EVEN</title>
</head>
<body>
<form name="forms" method="post" action="<?php echo 
$_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="name"><br><br>
Email ID:<input type="email" name="mail"><br><br>
Address:<textarea name="address"></textarea><br><br>
Gender:
<input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" 
value="female">Female<br><br>
Date of Birth:<input type="date" name="dob"><br><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_REQUEST['name'];
$mail=$_REQUEST['mail'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
echo"Name:".$name."<br>";
echo"Email ID:".$mail."<br>";
echo"Address:".$address."<br>";
echo"Gender:".$gender."<br>";
echo"Date of Birth:".$dob."<br>";
}?>
