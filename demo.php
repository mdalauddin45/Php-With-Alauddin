<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<?php
$name = "ala uddin";
$x = "Hello World!";
$a = 5;
$b=6;
$sum = $a+$b;
 echo "hello world <br/>";
 echo "my name is $name <br/>";
 echo "The sum of a and b is $sum <br/>";
 echo strtoupper($name), "<br/>";
 echo strtolower($name), "<br/>";
 echo str_replace("World", "Dolly", $x), "<br/>";
 echo $name ," after replace this name is " , str_replace("ala", "sala", $name), "<br/>";
 $a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
?>
</body>
</html>
