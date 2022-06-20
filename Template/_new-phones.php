<!--new phones-->
<?php
shuffle($product_shuffle);
?>
<div id="scrollspyHeading1" height="35"> </div>
<section id="new-phones">
    <div class="container">
        <h4 class="font-rubik font-size-20">Main dish</h4>
        <hr>

        <div class="container-fluid"> 
            <?php foreach ($product_shuffle as $item) {
                if($item['hostel_type'] == 'Hostel'){
                ?>
                <div class="items-wrapper">
                  <div class="item-p py-2 bg-white">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?hostel_id=%s', 'Product.php', $item['hostel_id']); ?>">
                        <img src="<?php echo $item['hostel_image'] ?? "./assets/products/1.jpg"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['hostel_name'] ?? "Unknown"; ?></h6>
                            <div class="price py-2">
                            GH&#x20B5;<span><?php echo $item['two_in_one'] ?? 0; ?></span>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            <?php
                }
         } //closing for foreach function ?>
        </div>
    </div>
</section>
<div id="scrollspyHeading2" height="35"> </div>
<section id="breakfas-category">
    <h3>Breakfast</h3>
    <hr>
  <div class="breakfast-items">
     <div class="image-item">
        <a href="#"><img src="./assets/products/coffeclick.jpg" alt=""></a>
     </div>
     <div class="desc-item">
        <h4>Coffee</h4>
        <p>start your with some coffee</p>
     </div>
  </div>
  <div class="breakfast-items">
    <div class="image-item">
        <a href="#"><img src="./assets/products/tea.jpg" alt=""></a>
    </div>
    <div class="desc-item">
        <h4>Tea</h4>
        <p>start your with some tea</p>
    </div>
  </div>
</section>
<div id="scrollspyHeading3" height="35"> </div>
<section id="breakfas-category">
    <h3>Drinks</h3>
    <hr>
  <div class="breakfast-items">
     <div class="image-item">
        <a href="#"><img src="./assets/products/yog.png" alt=""></a>
     </div>
     <div class="desc-item">
        <h4>Yogot</h4>
        <p>Get some yogot for yourself</p>
     </div>
  </div>
  <div class="breakfast-items">
    <div class="image-item">
        <a href="#"><img src="./assets/products/sol.jpeg" alt=""></a>
    </div>
    <div class="desc-item">
        <h4>Sobolo</h4>
        <p>fresh sobolo to keep your day going</p>
    </div>
  </div>
</section>
</main>
<!--end new phones-->
