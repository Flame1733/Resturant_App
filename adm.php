<?php
include"db.php";

if(isset($_POST['uploadfilesub'])){
    $itName=$_POST['itName'];
    $itPrice= $_POST['itPrice'];
    $itType = $_POST['radio'];
    $itDes= $_POST['itDes'];
    $filename = $_FILES['uploadfile']['name'];
    $filetempname = $_FILES['uploadfile']['tmp_name'];
    $folder='images/';
    move_uploaded_file($filetempname,$folder.$filename);
    

$additemq = "INSERT INTO `item`(`itName`, `itPrice`, `itType`, `itDes`, `itDir`) 
            VALUES ('$itName','$itPrice','$itType','$itDes','$filename')";

if (mysqli_query($conn, $additemq)) {
    echo ('<script>alert("Item has added successfully"); window.location.href="admin.php"</script>'); 
 
    }  

    else{ 
        echo ('<script>alert("Try again! WE missed Somting !!"); window.location.href="admin.php"</script>');
    }
}
?>