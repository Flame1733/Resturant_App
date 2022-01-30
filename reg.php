<?php
include "db.php";
if(isset($_POST['reg'])){

    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $addr = $_POST["addr"];
    $phone = $_POST["phone"];


    $logq = "SELECT * FROM customer WHERE cuEmail ='$email' And cuPhone ='$phone'";
    $result = mysqli_query($conn, $logq);

            if (mysqli_num_rows($result)) {
              echo ('<script>alert("You are one of our lovely Customer please Login!"); window.location.href="login.php"</script>');
                } 
                
                else {
                    $qur = "INSERT INTO customer (cuName,cuPass,cuEmail,cuAdd,cuPhone) VALUES  ('$uname','$pass','$email',
                    '$addr','$phone')";
        
                    if (mysqli_query($conn, $qur)) {
                        echo ('<script>alert("Registration has been successfully"); window.location.href="login.php"</script>'); 
        
                        } 
                        
                        else {
                            echo ('<script>alert("Registration has been failed"); window.location.href="sign_in.php"</script>'); 
                        }
                
              }




    
            }
?>