
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="Index.php" method="post">
  <label> Number1: 
  <input type="number" name="num1" min=0> </label> <br>
  <label> Number2: 
  <input type="number2" name="num2" min=0> </label> <br>
  <input type="submit" value="send">
</form>

</body>
</html>
<?php
  $x = $_POST["num1"];
  $y = $_POST["num2"];
  if ($x == $y) {
    echo "heeeh don't enter eqals number";
  }
    else if($x > $y) {
      echo $x;
    }
        else {
          echo $y;
      }
?>
