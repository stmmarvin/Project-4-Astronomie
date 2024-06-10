<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>registeer</title>
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>

  <div class="Login">
    <h1>Login</h1>
    <?php
    include('../config/config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM user WHERE Emailadress = :email";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['Password'])) {
          session_start();
          $_SESSION['user'] = $user;
          header('Location: ../index.php');
          exit();
        } else {
          echo '<p>Incorrect email or password</p>';
        }
      } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
      }
    }
    ?>

    <form method="POST" action="">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
      <input type="submit" value="Login">
      <a href="register.php">Don't have an account? Register here.</a>
    </form>

  </div>

</body>

</html>
