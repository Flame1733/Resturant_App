<?php
  include "db.php";


  function show ($orderType){

    $logq = "SELECT * FROM item WHERE orType ='$orderType'";
    $result = mysqli_query($conn, $logq);

       if(mysqli_num_rows ($result) > 0){

            while($row = mysqli_fetch_array($result)){        
            }
       }
  }

?>