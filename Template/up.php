<?php
$extension=array('jpeg','jpg','png','gif');
session_start();

if (isset($_POST['child'])) {
    $kitchen = $_POST['kitchen'];
    $bed = $_POST['bed'];
    $tv = $_POST['tv'];
    $wardrobe = $_POST['wardrobe'];
    $study = $_POST['study'];
    $plant = $_POST['plant'];
    $details = $_POST['details'];
    foreach ($_FILES['files']['tmp_name'] as $key => $value) {
        $filename = $_FILES['files']['name'][$key];
        $filename_tmp = $_FILES['files']['tmp_name'][$key];
        echo '<br>';

        $ext=pathinfo($filename,PATHINFO_EXTENSION);

        $finalimg='';
		if(in_array($ext,$extension))
		{
			if(!file_exists('../assets/childImages/'.$filename))
			{
			move_uploaded_file($filename_tmp, '../assets/childImages/'.$filename);
			$finalimg=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, '../assets/childImages/'.$newfilename);
				 $finalimg=$newfilename;
			}
			$creattime=date('Y-m-d h:i:s');
            //insert
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "accomodation";
    
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            //Check connection
            if ($conn->connect_error) {
                echo 'could not connect to database';
            }
    
            $query = "SELECT * FROM hostels";
            $init = $conn->query($query);
            if ($init) {
                $rowNumber = $_SESSION['lastId'];
            } else {
              echo "Error: " . $query . "<br>" . $conn->error;
            }
			$insertqry="INSERT INTO images(images_name, uploaded_on, uploads_id) VALUES ('$finalimg','$creattime', '$rowNumber')";
           $conn->query($insertqry);
		}
    }
    $query = "INSERT INTO facility (id, kitchen, bed, tv_room, wardrobe, study_room, standby_plant, details) VALUES('$rowNumber', '$kitchen', '$bed', '$tv', '$wardrobe', '$study', '$plant', '$details')";
    $conn->query($query);

    header('Location: .../Hostel/edit.php');
}