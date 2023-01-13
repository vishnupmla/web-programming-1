<html>
<head>
<title>Factorial program using loop in PHP</title>
</head>
<body>
<form method="post">
Enter the number:
<input type="number" name="number" id="number">
<input type="submit" name="submit" value="submit">
</form>
<?php 
if($_POST){
$fact=1;
$number=$_POST['number'];
echo"Factorial of $number:";
for($i=1;$i<=$number;$i++){
$fact=$fact*$i;
}
echo$fact."";
}
?>
</body>
</html>