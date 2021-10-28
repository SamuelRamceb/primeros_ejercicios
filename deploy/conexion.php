<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <style>
    form {
      background-color: #ddd;
      width: 230px;
      padding: 30px;
      border-radius: 8px;
    }

    input {
      margin: 2px;
    }
  </style>
</head>

<body>
  <form action="validar.php" method="POST">
    <input type="text" name="user" id="user" placeholder="Usuario">
    <br>
    <input type="password" name="pass" id="pass" placeholder="Password">
    <br>
    <input type="submit" value="login">
  </form>
  <?php
  if (isset($_COOKIE['error']) && $_COOKIE['error'] == "1") {
    echo ('<p style="color:red;">error de password! error: ' . $_COOKIE['error'] . '</p>');
    setcookie('error', 0, time() - 1);
  }
  ?>
</body>

</html>