<!DOCTYPE html>
<html>
<body>

<!-- <?php
// $t = date("H");
//
// if ($t < "20") {
//     echo "Have a good day!";
// }
?> -->

<!-- <?php
// $t = date("H");
// echo "Jam" . $t . "<br>";
// if ($t < "20") {
//     echo "Have a good day!";
// } else {
//     echo "Have a good night!";
// }
?> -->

<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

</body>
</html>
