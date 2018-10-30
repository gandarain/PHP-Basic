<!DOCTYPE html>
<html>
<body>

  <!-- <?php
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;

    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
  ?> -->

  <!-- <?php
    $txt = "W3Schools.com";
    echo "I love $txt!";
  ?> -->

  <!-- <?php
    $txt = "W3Schools.com";
    echo "I love " . $txt . "!";
  ?> -->

  <!-- <?php
    $x = 5;
    $y = 4;
    echo $x + $y;
  ?> -->

  <!-- <?php
    // $x = 5; // global scope
    //
    // function myTest() {
    //   global $x;
    //   //using x inside this function will generate an error
    //   echo "<p>Variable x inside function is: $x</p>";
    // }
    // myTest();
    //
    // echo "<p>Variable x outside function is: $x</p>";
  ?>  -->

  <!-- <?php
  //   function myTest() {
  //   $x = 5; // local scope
  //   echo "<p>Variable x inside function is: $x</p>";
  // }
  //   myTest();
  //   // using x outside the function will generate an error
  //   echo "<p>Variable x outside function is: $x</p>";
  ?> -->

  <?php
    $x = 5;
    $y = 10;

    function myTest() {
      global $x, $y, $total;
      $total = $x + $y;
    }

    myTest();
    echo $total; // outputs 15
  ?>

</body>
</html>
