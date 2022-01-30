<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale+1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>Register</title>
  </head>
  <body>
    <form action="reg.php" method='post' >
      <h2>Register</h2>
        <label for="">Full Name</label>
        <input type="text" name="uname" value="" placeholder="User Name" required><br>

        <label for="">Password</label>
        <input type="password" name="pass" value="" placeholder="Password" required><br>

        <label for="">Email</label>
        <input type="text" name="email" value="" placeholder="Email" required><br>

        <label for="">Address</label>
        <input type="text" name="addr" value="" placeholder="Adrress" required><br>

        <label for="">Phone</label>
        <input type="text" name="phone" value="" placeholder="01XXXXXXXX" required><br>
        
        <p>
               You are our Member  <a href="login.php"> Login here!</a>
        </p>

        <button type="submit" name="reg">Register</button><br>

        <p></p>
    </form>
  </body>
</html>
