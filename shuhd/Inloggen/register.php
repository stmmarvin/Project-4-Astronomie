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
    <form method="POST" action="create.php">
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
