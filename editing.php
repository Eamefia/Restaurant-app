<?php
  include ("header.php");

 if (isset($_POST['edit'])) {
     $hId=$_POST['h_id'];
     foreach ($product->getData() as $item) {
         if ($item['hostel_id'] == $hId) {
             $htype = $item['hostel_type'];
             $hname = $item['hostel_name'];
             $two = $item['two_in_one'];
             $three = $item['three_in_one'];
             $four = $item['four_in_one'];
             $contact = $item['contact'];
             $location = $item['location'];
         }
     }
     
     
     ?>
     <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }
</style>
     <form action="update.php" method="POST" style="border:1px solid #ccc">
    <div class="container">
        <h3>Update <?php echo $hname?></h3>
        <hr>

        <label for="email"><b>Hostel type</b></label>
        <input type="text" value="<?php echo $htype; ?>" name="type" required>

        <input type="text" value="<?php echo $hId; ?>" name="hId" style="display:none" required>

        <label for="email"><b>Hostel name</b></label>
        <input type="text" value="<?php echo $hname; ?>" name="name" required>

        <label for="email"><b>Price of Two in One</b></label>
        <input type="text" value="<?php echo $two; ?>" name="two" required>

        <label for="email"><b>Price of Three in One</b></label>
        <input type="text" value="<?php echo $three; ?>" name="three" required>

        <label for="psw"><b>Price of Four in One</b></label>
        <input type="text" value="<?php echo $four; ?>" name="four" required>

        <label for="psw"><b>Location</b></label>
        <input type="text" value="<?php echo $location; ?>" name="location" required>

        <label for="psw"><b>Contact</b></label>
        <input type="text" value="<?php echo $contact; ?>" name="contact" required>

        <div class="clearfix">
            <button type="submit" name="submit" class="signupbtn">Update</button>
        </div>
    </div>
</form>
<?php
 }
?>