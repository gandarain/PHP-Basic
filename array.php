<!DOCTYPE html>
<html>
<body>

<!-- <?php
// $cars = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> -->

<!-- <?php
// $cars = array("Volvo", "BMW", "Toyota");
// echo count($cars);
?> -->

<!-- <?php
// $cars = array("Volvo", "BMW", "Toyota");
// $arrlength = count($cars);
//
// for($x = 0; $x < $arrlength; $x++) {
//     echo $cars[$x];
//     echo "<br>";
// }
?> -->

<!-- <?php
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.";
?> -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

</body>
</html>
