<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <form class="viewticket">
          <a href="#" id="viewticket" class="button">View your ticket</a>
          <a href="#" id="addcredit" class="button">Add credit</a>
    </form>

    <div class="QRpopup">
        <div class="QRpopup-content">
                <div class="QRclose">+</div>
                <h1>Congratulations!<br>This is your unique QR code!</h1>
                <?php
                require 'generator.php';
                ?>
        </div>
    </div>

    <div class="AddCreditpopup">
        <div class="AddCreditpopup-content">
            <div class="AddCreditclose">+</div>
                <form class="addcredit" action="includes/addcredit.inc.php" method = "post">
                    <input type="text" placeholder="Add credit.." name="addcredit">
                <button type="submit" name="addcredit-submit">Add credit</button>
               </form>
        </div>
    </div>
   
</body>

<script>
     document.getElementById('viewticket').addEventListener('click' , 
     function(){
         document.querySelector('.QRpopup').style.display = 'flex';
     });
     document.querySelector('.QRclose').addEventListener('click' , 
     function(){
         document.querySelector('.QRpopup').style.display = 'none';
     })

</script>

<script>
     document.getElementById('addcredit').addEventListener('click' , 
     function(){
         document.querySelector('.AddCreditpopup').style.display = 'flex';
     });
     document.querySelector('.AddCreditclose').addEventListener('click' , 
     function(){
         document.querySelector('.AddCreditpopup').style.display = 'none';
     })

</script>
</html>