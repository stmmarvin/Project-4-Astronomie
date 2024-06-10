<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="../css/main.css" />
</head>

<body>

  <div class="Register">
    <h1>Register</h1>
    <?php
    include('../config/config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

      try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO user (Username, Emailadress, Password) VALUES (:username, :email, :password)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);
        $statement->execute();

        echo '<p>Registration successful!</p>';
      } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
      }
    }
    ?>

    <form method="POST" action="">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" required>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
      <input type="submit" value="Register">
    </form>

  </div>

</body>

</html>
