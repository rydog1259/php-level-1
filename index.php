<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
$numbers = array("5", "10", "15", "20");
$numvalue = "5";
foreach ($numbers as $value) {
  // code...
  echo $value . "<br>";
}
echo "What number would you like to multiply by?";
  ?>
  <form method="post">
  <input type="text" name="NumValue">
  <input type="submit">
  </form>
  <?php
  foreach ($numbers as $value) {
    // code...
    echo ($value * $_POST["NumValue"]) . "<br>";
  }
  ?>
  </body>
</html>
