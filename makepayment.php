<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 .contacts{
   display: flex;
   flex-direction: row;
   justify-items: center;
   align-items: center;
 }

</style>
<body>
    <?php
      include_once('header.php');
    ?>
    <h2>Contact hostel agent Albert with the call or WhatsApp buttons provided before making any payment</h2>
    <div class="contacts">

      <div class="Contact btn btn-warning font-baloo font-size-16">
        <a href="tel:0555872739">Make a call</a>
      </div>
      <div>
      <a style="float: right" href="https://api.whatsapp.com/send?phone=0555872739"><img src="./assets/WhatsApp.png" alt="whatapp" style="width:50px; height:50px"></a>
      </div>
    </div>
<?php
  include_once('footer.php');
 ?>
</body>
</html>