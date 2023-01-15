<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newSocial</title>
    <script src="js/form-handling.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/css/styles.css">
</head>
<body>
<header>
    <h1>newSocial</h1>
  </header>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Search</a></li>
    </ul>
  </nav>
  <main>
    <section>
        <button id="login-btn">Login</button>
        <button id="register-btn">Register</button>

        <form action="login.php" method="post" id="login-form" style="display: none;">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Login">
        </form> 

        <form action="register.php" method="post" id="register-form" style="display: none;">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <input type="submit" value="Register">
        </form> 

    </section>
  </main>
  <footer>
    <p>Copyright ©2022 newSocial</p>
</footer>
</body>
</html>
