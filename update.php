<?php

if (isset($_POST['submit'])) {
    $htype = $_POST['type'];
    $hId = $_POST['hId'];
    $name = $_POST['name'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "accomodation";
 
 // Create connection
 $conn =  mysqli_connect($servername, $username, $password, $dbname);
 //Check connection
 if ($conn === false) {
     die("Connection failed: " . mysqli_connect_error());
 }
 
 
  $sql = "SELECT * FROM hostels";
  $init = mysqli_query($conn, $sql);

  if ($init) {
    while ($row = mysqli_fetch_assoc($init)) {
        if ($row['hostel_id'] == $hId) {
            $query = "UPDATE hostels SET hostel_type = '$htype', hostel_name = '$name', two_in_one = '$two', three_in_one = '$three',
            four_in_one = '$four', location = '$location', contact = '$contact' WHERE hostel_id = '$hId'";
            $updat = mysqli_query($conn, $query);
            if ($updat) {
                header('Location: edit.php?update=successful');
                exit();
            }else {
              echo "error: could not update $query. " . mysqli_error($conn);
            }
        }
    }
  }
}


?>