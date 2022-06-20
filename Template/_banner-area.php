<?php
  shuffle($product_shuffle);
?>

<style>
  #image-fluid{
    width: 100%;
    height:50vw;
    border-radius: 20px;
  }
  #banner-area{
    background: rgb(253, 251, 251);
    border: 1px solid rgb(251, 251, 251);
    border-radius: 25px;
  }
</style>
<!-- Owl-carousel -->
<div id="banner-area">
    <div class="owl-carousel owl-theme p-3">
    <?php foreach ($product_shuffle as $item) {
         if($item['hostel_type'] == 'Banner'){
        ?>
        <div class="item">
        <img src="<?php echo $item['hostel_image'] ?? "./assets/products/1.jpg"; ?>" alt="product1" class="img-fluid" id="image-fluid"></a>
        </div>
        <?php
          }
        }
        ?>
    </div>
      </div>
<!--end Owl-carousel -->
<div id="category">
  <div class="category-items">
    <div class="main-dish"><a class="item" href="#scrollspyHeading1">Main dishes</a></div>
    <div class="breakfast"><a class="item" href="#scrollspyHeading2">Breakfast</a></div>
    <div class="drinks"><a class="item" href="#scrollspyHeading3">Drinks</a></div>
  </div>

      </div>
