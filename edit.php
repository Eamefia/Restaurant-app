<!--new phones-->
<?php
  include ("header.php");

?>
<section id="Editing-page">
    <div class="container">
        <h4 class="font-rubik font-size-20 p-3">Update items</h4>
        <hr>

        <div class="edit-fluid">
            <?php foreach ($product_shuffle as $item) {
              if ($_SESSION['u_uid'] !== "ferrari") {?>
         <div class="row items-fluid" style="padding:2px">
             <div class="my-2 col-3" style="padding:2px;">
              <p><?php echo $item['hostel_name'] ?? "Unknown"; ?></p>
             </div>

             <div class="my-2 col-3" style="padding:2px;">
              <p><?php echo $item['hostel_type'] ?? "Unknown"; ?></p>
             </div>
            
             <div class="my-2 col-3" style="padding:2px;">
               <form action="editing.php" method="POST">
                  <input type="text" name="h_id" value="<?php echo $item['hostel_id'];?>" style="display:none">
                  <button name="edit" class="Contact btn btn-warning font-baloo font-size-16">Edit</button>
               </form>
             </div>
             <div class="my-2 col-3" style="padding:2px;">
              <form action="delete.php" method="POST">
                  <input type="text" name="h_id" value="<?php echo $item['hostel_id'];?>" style="display:none">
                  <button name="delete" class="Contact btn btn-warning font-baloo font-size-16">Delete</button>
               </form>
             </div>
         </div>
         <hr>
            <?php
                }
            }
        //closing for foreach function ?>
        </div>
    </div>
</section>
</main>
<!--end new phones-->
section id="other-items">
<?php
 foreach ($product->getfacility() as $items) {
     if ($items['id']== $item_id) {?>
    <div class="fact pl-4">
    <h4>Facilities</h4>
    <?php if ($items['kitchen'] !== 'none' || '0') {?>
       <li class="font-baloo pt-2 font-size-20" style="list-style: none;"><?php echo $items['kitchen']; ?></li>
    <?php } 
     if ($items['bed'] !== 'none' || '0') {?>
       <li class="font-baloo pt-2 font-size-20" style="list-style: none;"><?php echo $items['bed']; ?></li>
    <?php }
     if ($items['tv_room'] !== 'none' || '0') {?>
       <li class="font-baloo pt-2 font-size-20" style="list-style: none;"><?php echo $items['tv_room']; ?></li>
    <?php }
     if ($items['wardrobe'] !== 'none' || '0') {?>
       <li class="font-baloo pt-2 font-size-20" style="list-style: none;"><?php echo $items['wardrobe']; ?></li>
    <?php }
     if ($items['study_room'] !== "none" || '0') {?>
       <li class="font-baloo pt-2 font-size-20" style="list-style: none;"><?php echo $items['study_room']; ?></li>
    <?php } 
     if ($items['standby_plant'] !== 'none' || '0') {?>
       <li class="font-baloo pt-2 font-size-20" style="list-style: none;"><?php echo $items['standby_plant']; ?></li>
    <?php } ?>
      
    <hr>
    <h4>Other Details</h4>
    <p class="font-baloo pt-2 font-size-20"><?php echo $items['details']; ?></p>
     
    </div>



<?php
     }
 }
?>


        
               <div class = "Contact btn btn-warning font-baloo font-size-16">
				   <a href="payf.php">Call to book</a>
				</div>
                
				<a style="float: right" href="https://api.whatsapp.com/send?phone=<?php echo $item['contact']?>"><img src="./assets/WhatsApp.png" alt="whatapp" style="width:50px; height:50px"></a>
        <div class="Cart">
            
            <div class="p-8">
                <div class="text-center">
                    
                    <h4 class="font-baloo pt-5 font-size-20"><?php echo $item['hostel_name'] ?? "Unknown"; ?></h4>
                </div>

                <hr class="m-2">
                <!---    product price       -->

                <div class="row"> 
                    <table class="my-4 col-6">
                        <tr class="font-rale px-6 font-size-50">
                            <td>2 in 1</td>
                            <td class="font-size-50">GH&#x20B5;<span> <?php echo $item['two_in_one'] ?? 0; ?></span></td>
                        </tr>
                        <tr class="font-rale px-6 font-size-50">
                            <td>3 in 1</td>
                            <td class="font-size-50 px-6">GH&#x20B5;<span> <?php echo $item['three_in_one'] ?? 0; ?></span></td>
                        </tr>
                        <tr class="font-rale font-size-50">
                            <td>4 in 1</td>
                            <td class="font-size-50 px-6">GH&#x20B5;<span> <?php echo $item['four_in_one'] ?? 0; ?></span></td>
                        </tr>
                    </table>

                   
                    <!---    !product price       -->

                    <!--    #policy -->
                    
                </div>

               <p style="font-size:30px">Number of rooms left</p>
                <hr>
               </div>
            </div>
        
        </div>
</section>






