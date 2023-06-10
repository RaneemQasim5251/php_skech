
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="Index.php" method = "post">
        <label for = username>username:</label> <br>
        <input type="text" id="user" neme="username"> <br>
        <label>password:</label> <br>
        <input type="password" neme="password"> <br>
        <input type="submit" value="Log in"> <br> 
    </form>
</body>
</html>


<?php
    echo $_POST["password"];
?>

