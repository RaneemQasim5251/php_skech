
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Arithmetic operators</title>
</head>
<body>
    <?php 
      $a = 5;
      print ("<p>the value of var a is $a</p>");

      define ("VALUE", 5);
      $a = $a + VALUE;
      print ("<p>the value of add constant to a is $a</p>");
      $a *= 2;
      print ("multiply a by 2 = $a <br>");
      if ($a < 50)
      print ("var a is = $a , it's less then 50 <br>");
      $a += 40;
      print ("var a = $a , after add 40 <br>");
      if ($a <= 50)
      print ("var a = $a is still less than or equal 50 <br>");
      elseif ($a < 101)
      print ("var a = $a is between 50 and 100 <br>");
      else 
      print ("var a = $a , the number above 100 <br>");
      $str = "7 sweets";
      $a += $str;
      print ("var a after add string to it = $a <br>");
    ?>
</body>
</html>
