<!DOCTYPE html>
<html>
<body>

<?php
echo "<h1>PHP is Fun!</h1>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 

<?php
print "<h3>PHP is Fun!</h3>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt1 = "Learn PHP";
$txt2 = "and gain deep understanding";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP  ' . $txt2 . '</p>';

$x = 5985;
var_dump($x);
?> 

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>

<?php
/* Note There is a big difference between double quotes and single quotes in PHP.
Double quotes process special characters, single quotes does not. */
?>

<pre>
<?php
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?> 
</pre>

<pre>
<?php
$x = "Hello\tWorld";
echo $x;
?> 
</pre>

<p>To preserve any whitespace or line breaks, we have wrapped the result in a PRE element</p>


<?php
// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));
?>  

<?php
// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>  

<pre>
<?php
/*
(string) - String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL
*/
?> 
</pre>



</body>
</html>
