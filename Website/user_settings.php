<?php
session_start();
include './auth.php';
include './login.php';
include './hide_login.php';
include './login_check.php';
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
    <meta charset="utf-8">
    <title>Change Settings</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <main>
      <header>
        <h1 class="logo">
          <a href="index.php"><img src="images/logo.jpg" alt="Edu Home" height="100" width="200"></a>
        </h1>
      </header>
      <nav class="navigation">
        <ul>
           <li class="active"><a href="index.php">Home</a></li>
           <li ><a href="search.php">Search</a></li>
           <li ><a href="advertise.php">Advertise</a></li>
           <li ><a href="about.php">About</a></li>
           <li ><a href="register.php">Register</a></li>
        </ul>
      </nav>
      <section class="loginBar">
        <article id="signin">
        </article>
      </section>
      <section>
          <h3>Change Settings</h3>
          <form action="change_settings.php" method="post" accept-charset='UTF-8'>
            New Email: <input type="text" name="email"><br>
            New Password: <input type="text" name="password"><br>
            <button type='submit' name='change' value='Change Settings'>Change Settings</button>
          </form>
      </section>

        <section>
          <h4>Terminate account</h4>
          <form action="delete_account.php" method='post' accept-charset='UTF-8'>
            <button type='submit' name='delete' value='Delete Account'>Delete Account</button>
          </form>
        </section>
  </main>
  <footer>
    <p>
      Edu Home
    </p>
  </footer>
  </body>
</html>
