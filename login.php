<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale+1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>Login</title>
  </head>
 
  <body>

    <form Action ="log.php"  method='post'>
      <h2>Login</h2>
        <label for="">Email</label>
        <input type="text" name="email" value="" placeholder="Email" required><br>

        <label for="">Password</label>
        <input type="password" name="pass" value="" placeholder="Password" required><br>
        <p>
               New member? <a href="sign_in.php"> Register here!</a>
        </p>
        <button type="submit" name="log">Login</button><br>
        <p></p>
    </form>
  </body>
</html>
