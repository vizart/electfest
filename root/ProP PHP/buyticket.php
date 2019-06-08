<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="buyticket.css">
</head>

<body>
    <form class="bigmoney">
          <a href="#" id="button" class="button">Gimme your MONEY</a>
          <a href="#" id="moremoney" class="button">Gimme more of your MONEY</a>
          <form  action="includes/logout.inc.php" method="post">
           <a href="#" id="button4" class="button">Log out</a> 
          </form>
    </form>

    <div class="popup">
        <div class="popup-content">
                <div class="close">+</div>

                <form class="name" action="includes/buyticketNOCAMP.inc.php" method = "post">
                <input type="text" placeholder="First name.." name="firstname"><br>
                <input type="text" placeholder="Last name.." name="lastname"><br> 
                <input type="text" placeholder="IBAN.." name="IBAN"><br>   
                <button type="submit" name="buyticketNOCAMP-submit">MONEY MONEY MONEY</button>
               </form>
               
        </div>
    </div>

    <div class="CAMPpopup">
        <div class="CAMPpopup-content">
                <div class="CAMPclose">+</div>

                <form class="name" action="includes/buyticketCAMP.inc.php" method = "post">
                <input type="text" placeholder="First name.." name="firstname2"><br>
                <input type="text" placeholder="Last name.." name="lastname2"><br> 
                <input type="text" placeholder="IBAN.." name="IBAN2"><br>   
                <button type="submit" name="buyticketCAMP-submit">MOREEEEE MONEY</button>
               </form>
               
        </div>
    </div>

</body>

<script>
     document.getElementById('button').addEventListener('click' , 
     function(){
         document.querySelector('.popup').style.display = 'flex';
     })
     document.querySelector('.close').addEventListener('click' , 
     function(){
         document.querySelector('.popup').style.display = 'none';
     })
</script>
<script>
     document.getElementById('moremoney').addEventListener('click' , 
     function(){
         document.querySelector('.CAMPpopup').style.display = 'flex';
     })
     document.querySelector('.CAMPclose').addEventListener('click' , 
     function(){
         document.querySelector('.CAMPpopup').style.display = 'none';
     })

</script>

</html>