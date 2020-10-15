<!DOCTYPE html>
<html>
<head>
	<title>Strings</title>
</head>
<body>
	<form action="q2_string_functions.php" method="post">
		<label for="string">Enter any string: </label>
		<input type="text" name="string"><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
	$string = $_POST["string"];
  echo strlen($string)."<br>";
  $exparray=explode(" ",$string);
  foreach($exparray as $value)
  {
  echo $value."<br>";
  }

  echo "<br>"."Reverse the string is: ".strrev($string)."<br>";
  echo "All alphabet to upper case: ".strtoupper($string)."<br>";
  echo "All alphabet to Lower case: ".strtolower($string)."<br>";
	$substring="Lisa";
	echo "Before replacing Substring= ".$substring."<br>";
	$res=substr_replace($string, $substring,11,strlen($string));
	echo "After replacing Substring= ".$res."<br>";

}
?>
