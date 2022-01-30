<?php
  include "db.php";
  if(isset($_POST['log'])){
    $pass = $_POST["pass"];
    $email = $_POST["email"];


      $logq = "SELECT * FROM customer WHERE cuEmail ='$email' And cuPass ='$pass'";
      $result = mysqli_query($conn, $logq);

              if (mysqli_num_rows($result)) {
                echo ('<script>alert("Login has been successfully"); window.location.href="index.php"</script>');
                  } 
                  
                  else {
                    echo ('<script>alert("Email And Password not much"); window.location.href="login.php"</script>');
                  
                }
              }


  ?>