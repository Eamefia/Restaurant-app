<!--new phones-->
<?php
  include ("header.php");
shuffle($product_shuffle);
?>
<section id="Editing-page">
    <div class="container">
        <h4 class="font-rubik font-size-20 p-3">Update items</h4>
        <hr>

        <div class="edit-fluid">
            <?php foreach ($product_shuffle as $item) {?>
        
             <div>
               <p><?php echo $item['hostel_name'] ?? "Unknown"; ?></p>
             </div>
             <div>
              <?php echo $item['hostel_type'] ?? "Unknown"; ?>
             </div>
             <div>
              <a href="#">Edit</a>
             </div>
             <div>
              <a href="#">Delete</a>
             </div>
            <?php
                }
          //closing for foreach function ?>
        </div>
    </div>
</section>
</main>
<!--end new phones-->
