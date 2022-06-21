<style>
.circle {
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  font-size: 30px;
  color: #fff;
  text-align: center;
  background: #000;
  -webkit-animation: spin 5s linear infinite;
  -moz-animation: spin 5s linear infinite;
  animation: spin 5s linear infinite;
}

@-webkit-keyframes spin{
    100%{-webkit-transform: rotate(140deg);}
}
@-moz-keyframes spin{
    100%{-webkit-transform: rotate(140deg);}
}
@keyframes spin{
    100%{-webkit-transform: rotate(140deg);}
}


.three {
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 30px;
  color: #fff;
  text-align: center;
  background: blue;
  -webkit-animation: rotate 4s linear infinite;
  -moz-animation: rotate 4s linear infinite;
  animation: rotate 4s linear infinite;
}

@-webkit-keyframes rotate{
    100%{-webkit-transform: rotate(-45deg);}
}
@-moz-keyframes spin{
    100%{-webkit-transform: rotate(-45deg);}
}
@keyframes spin{
    100%{-webkit-transform: rotate(-45deg);}
}

.four {
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  font-size: 30px;
  color: #fff;
  text-align: center;
  background: #00ffff;
  -webkit-animation: spin 5s linear infinite;
  -moz-animation: spin 5s linear infinite;
  animation: spin 5s linear infinite;
}

.details-images{
    width: 100%;
    height:50vw;
}

.product-images{
    background: rgb(95, 77, 73);
}
.facts{
    width:100%;
    height: 570px;
    background: rgb(95, 77, 73);
}

.other-facts{
    width:100%;
    height:570px;
    background: white;
    border: none;
    border-radius: 40px 40px 0px 0px;
}
@-webkit-keyframes spin{
    100%{-webkit-transform: rotate(140deg);}
}
@-moz-keyframes spin{
    100%{-webkit-transform: rotate(140deg);}
}
@keyframes spin{
    100%{-webkit-transform: rotate(140deg);}
}
</style>

<?php

ob_start();

  //request method post
   $item_id = $_GET['hostel_id'];
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "accomodation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>

<script>
function show(){
	document.getElementById("phone").style.display = "block";
}
</script>

<section class="product-images">
  <div id="product" class="product py-0">
    <div class="owl-carousel owl-theme">

        <?php

        $sql = "SELECT * FROM images";
        $init = $conn->query($sql);
        while ($row = mysqli_fetch_assoc($init)){
            if ($row['uploads_id'] == $item_id) {?>
              <div class="item pl-1 pr-1">
                  <img src="./assets/childImages/<?php echo $row['images_name']?>" class="details-images">
              </div>
            <?php
            }
        }

        ?>

    </div>
  </div>

  <?php
   foreach ($product->getData() as $item):
    if ($item['hostel_id'] == $item_id):
        $_SESSION['hostel_name'] = $item['hostel_name'];
 ?>

<div class="facts">
        <div class="other-facts">
           <div class="name-price">
               <div class="name">
                   <p><?php echo $item['hostel_name'] ?? "Unknown"; ?></p>
               </div>
               <div class="price">
                   <h4>GH&#x20B5;<?php echo $item['two_in_one'] ?? 0; ?></h4>
               </div>
           </div>
           <hr>
           <div class="delivery-datails">
             <h3>Food description</h3>
             <p><?php echo $item['facilities'] ?? 'unknown'; ?></p>
          </div>
          <hr>
          <div class="delivery-datails">
            <h3>Delivery details</h3>
             <div class="delivery-item">
                 <div class="delv-img">
                     <img src="./assets/products/delv.png" alt="">
                 </div>
                 <div class="delv-desct">
                    <p>delivered in the shottest posible time</p>
                 </div>
             </div>
             <div class="order-contact">
            <div class = "Contact btn btn-warning font-baloo font-size-16">
			  <a href="tel:0593152806">Call to order</a>
            </div>
            <div class="whatsapp">
              <a style="float: right" href="https://api.whatsapp.com/send?phone=233593152806"><img src="./assets/WhatsApp.png" alt="whatapp" style="width:50px; height:50px"></a>
            </div>
          </div>
        </div>
          </div>
    </div>
</section>
<?php
endif;
endforeach;
?>