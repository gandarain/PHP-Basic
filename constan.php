<!DOCTYPE html>
<html>
<body>

<!-- <?php
// case-sensitive constant name
// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;
?> -->

<!-- <?php
// case-insensitive constant name
// define("GREETING", "Welcome to W3Schools.com!", true);
// echo greeting;
?> -->

<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}

myTest();
?>

</body>
</html>
