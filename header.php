<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodies</title>

    <!--bootstrapCDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--owl caroselCDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
     
     

    <!--font AwesomeIcon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" />
     
     <?php
         session_start();
       ?>

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="Style.css">


    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


    <?php
    //require function.php
    require ('function.php');
    ?>

</head>
<body>
<div id="header">
  <div class="header p-3 position-sticky shadow bg-body rounded" style="display: flex; justify-content:center; height:70px; width: 100%">
            <a class="brand" href="index.php" ><h4 class="p-2 mb-1 text-center shadow bg-body rounded" style="background-color: #f2f2f2; border-radius:25px; color:black; font-size: 26">Book A Room</h4></a>
            <?php
               if(isset($_SESSION['u_uid'])){
                  if($_SESSION['u_uid'] !== "ferrari"){?>
                  <a class="nav-link pl-6" href="Template/formOne.php" style="color: black; float: right">post item</a>
                       <a class="nav-link pl-6" href="logout.php" style="color: black; float: right">Logout</a>
                <?php
                  }else{?>
                    <a class="nav-link pl-6" href="logout.php" style="color: white; float: right">Logout</a>
                <?php
                  }
               }else {?>
                
               <!---<div class="nav-item pr-2">
                  <a href="login.php" style="color: black; text-decoration: none; font-size: 20px">Login</a>
               </div>-->
               <?php
               }
            ?>
    </dev>
</div>
<!---<div class="header p-2 position-fixed"" style="text-align:center; z-index: 100">
          <a class='logo pt-5'>
                <h5 class="header__logo__text">Foodies Restaurant</h5>
          </a>
   </div>---->
  
<main id="main-site">
