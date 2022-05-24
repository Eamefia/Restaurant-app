<?php
session_start();
    if (isset($_POST['item-submit'])){
        $location = '../assets/products/';
        $filepath = '';
        $folder = './assets/products/';
        $type = $_POST['type'];
        $hostel_name = $_POST['hostelName'];
        $two = $_POST['twoInOne'];
		$place = $_POST['location'];
		$facilities = $_POST['facilities'];
		$Contact = $_POST['contact'];
		
        $file = $_FILES['file']['name'];
        $fileTemp = $_FILES['file']['tmp_name'];
        $filepath .=$folder.$file." ";
        //call method cart
        $res = move_uploaded_file($fileTemp, $location.$file);
        if ($res){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "accomodation";

           // Create connection
             try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               	 $query = "SELECT COUNT(*) FROM hostels";
                $init = $conn->query($query);
              
                $rowNumber = $init->fetchColumn();
                 $rowCount = $rowNumber + 1;
				
				$sql = "INSERT INTO hostels (hostel_type, hostel_image, hostel_name, two_in_one, location, contact, facilities)
                VALUES ('$type', '$filepath', '$hostel_name', '$two', '$place', '$Contact', '$facilities')";
               // use exec() because no results are returned
               $result = $conn->exec($sql);
               $latest_id = $conn->lastInsertId();
               
			   $_SESSION['lastId'] = $latest_id;
			   header("Location: form2.php?upload=success");
			   
            } catch(PDOException $e) { 
                echo $sql . "<br>" . $e->getMessage(); 
            }
            $conn = null;

        }
    }





?>
<html>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }
	
	 textarea[type=text] {
        width: 100%;
		height: 200px;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
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
<body>

<form action="" method="post" enctype="multipart/form-data" class="pt-6 text-center" style="width: 50%; height: 100%">
<div class="file"> 
  <label for="file" class="btn">Select Image</label>
  <input id="file" style="visibility:hidden;" type="file" name="file">
</div>
    <label>Accomodation Type</label>
    <input type="text" name="type" placeholder="eg apartment...">
    <label>name of hostel or appartment or homestel</label>
    <input type="text" name="hostelName" placeholder="name of hostel...">
    <label>Amount for 2 in 1</label>
    <input type="text" name="twoInOne" placeholder="price...">
    <label>location</label>
	<input type="text" name="location" placeholder="location...">
    <label>Contact</label>
	<input type="text" name="contact" placeholder="contact...">
    <label>Facilities</label>
	<textarea type="text" name="facilities"></textarea>
    <button type="submit" name="item-submit">upload</button>
</form>

</body>
</html>
