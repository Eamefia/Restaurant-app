<?php
  if (isset($_POST['apply_submit'])) {
      $hostel_name = $_POST['hostelName'];
      $roomtype = $_POST['roomtype'];
      $stId = $_POST['studentId'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $program = $_POST['program'];
      $year = $_POST['year'];
      $gender = $_POST['gender'];
      $location= $_POST['location'];
      $contact= $_POST['contact'];
      $guardian_name = $_POST['guardian_name'];
      $relation = $_POST['relation'];
      $guardian_contact = $_POST['guardian_contact'];


      $dbServername = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbName = "accomodation";

      $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if ($conn === false) {
        die("ERROR: Could not connect. " .mysqli_connect_error());
    }
      $sql = "INSERT INTO applicants(hostel_name, roomtype, student_id, firstname, lastname, email, program, year, gender, residence, contact, guardian_name, relation, guardian_contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "failed to prepare insert: $sql. " .mysqli_error($conn);
      }else {
        mysqli_stmt_bind_param($stmt, "ssssssssssssss", $hostel_name, $roomtype, $stId, $firstname, $lastname, $email, $program, $year, $gender, $location, $contact, $guardian_name, $relation, $guardian_contact);
        mysqli_stmt_execute($stmt);
      }
      header("Location: makepayment.php?registeration=sucess");
      exit();
  }

?>