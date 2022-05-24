<?php

if (isset($_POST['delete'])) {
 
    $hId = $_POST['h_id'];

    

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
            $query = "DELETE FROM hostels WHERE hostel_id = '$hId'";
            $updat = mysqli_query($conn, $query);
            if ($updat) {
                header('Location: edit.php?Delete=successful');
                exit();
            }else {
              echo "error: could not update $query. " . mysqli_error($conn);
            }
        }
    }
  }
}


?>