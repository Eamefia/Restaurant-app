<!--Top Sale-->
<?php
  shuffle($product_shuffle);
  
  //request method post
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
      if (isset($_POST['top_sale_submit'])){
          //call method cart
          $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
      }
  }
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Apartment</h4>
        <hr>

        <!--owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) {
                if($item['hostel_type'] == 'Apartment'){
                ?>
            <div class="item py-5">
                <div class="product font-rale">
                    <a href="<?php printf('%s?hostel_id=%s', 'Product.php', $item['hostel_id']); ?>">
                       <img src="<?php echo $item['hostel_image'] ?? "./assets/products/1.jpg"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['hostel_name'] ?? "Unknown"; ?></h6>
                        <div class="price py-2">
                            <span><i class="fas fa-map-marker-alt"></i><?php echo $item['location'] ?? '0'; ?></span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php
                }
         } //closing for foreach function ?>
        </div>
        <!--end owl carousel-->
    </div>
</section>
<!-- end Top Sale-->
