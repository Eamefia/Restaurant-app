<?php
   ob_start();
   // include header.php file
   include ("header.php");
?>

<?php
    /* include banner-area*/
     include ("Template/_banner-area.php");
    /* emd include banner-area*/

     /* include new phones*/
     include ("Template/_new-phones.php");
     /* emd include new phones*/
?>

<?php
// include footer.php file
include ("footer.php");
?>