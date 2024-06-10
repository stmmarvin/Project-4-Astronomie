<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inloggen</title>
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>

  <div class="Login">
    <h1>Login</h1>
    <form method="POST" action="create.php">
      <label for="username">gebruikersnaam</label>
      <input type="username" name="username" id="username"  placeholder="Voer hier je gebruikersnaam in."required>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Voer hier je wachtwoord in."required>
      <input type="submit" value="Login">
      <a href="register.php">Don't have an account? Register here.</a>
    </form>

  </div>

</body>

</html>
