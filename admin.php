<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale+1.0">
        <title>Neverland Main</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section>
            <div style="background-color: rgba(255, 255, 255);" class = "container">
                <div class="logo">
                    <img style="width: 8cm;" src="images/Logo.jpg" alt="Logo">
                </div>           
            </div>
        </section>
    
        <section>
            <button style="width: 20%;" class="tablink" onclick="openPage('AddItem', this, '#65969e')">Add Item</button>
            <button style="width: 20%;" class="tablink" onclick="openPage('Edititem', this, '#65969e')" >Edit item</button>
            <button style="width: 20%;" class="tablink" onclick="openPage('ControlItem', this, '#65969e')">Control Item</button>
            <button style="width: 20%;" class="tablink" onclick="openPage('OrderHistory', this, '#65969e')">Order History</button>
            <button style="width: 20%;" class="tablink" onclick="openPage('RequestionOrder', this, '#65969e')">Requestion Order</button>

            <div id="AddItem" class="tabcontent">
                <form action="adm.php" method = "post" enctype="multipart/form-data">  

                <?php if (isset($_GET['error'])) {
                  ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                     <?php }?>

                    <label for="itName">Item Name</label>
                    <input type="text" id="itName" name="itName" placeholder="Item name.." required>
                    
                    <label for="itprice">Item Price</label>
                    <input type="text" id="lname" name="itPrice" placeholder="Item price.." required>
                
                   <p>Type of item<p>
                    
                    <label>Appetizer
                    <input type="radio" name="radio" value = "Appetizer" required>
                    <span class="checkmark"></span>
                    </label>
                    
                    <label>Main Course
                    <input type="radio" name="radio" value = "Main Course">
                    <span class="checkmark"></span>
                    </label>
                    
                    <label>Desserts
                    <input type="radio" name="radio" value = "Desserts">
                    <span class="checkmark"></span>
                    </label>
                    
                    <label>Beverages
                    <input type="radio" name="radio" value = "Beverages">
                    <span class="checkmark"></span>
                    </label>

                    <label for="itDes"><br><br>Describtion</label>
                    <textarea id="itDes" name="itDes" placeholder="Write something.." style="height:200px"></textarea>
                    
                    <input type="file" id="myFile" name="uploadfile"/>
                    <input type="submit"name= "uploadfilesub" value = "upload"/>
                    
                </form>
            </div>

            <div id="Edititem" class="tabcontent">
  
            </div>

            <div id="ControlItem" class="tabcontent">
    
            </div>

            <div id="OrderHistory" class="tabcontent">

            </div>

            <div id="RequestionOrder" class="tabcontent">
            </div>    
            
        
        </section>
    
        <script>
            function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
            }

            document.getElementById("defaultOpen").click();
        </script>

    <body>     

<html>