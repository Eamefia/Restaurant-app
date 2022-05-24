<?php

if (isset($_POST['submit'])) {
	
	include_once './Database/dbh.inc.php';
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pass = $_POST['pass'];
	
	
	//Errror handlers
	//check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pass)) {
	  	  header("Location: SignUp.php?SignUp=empty");
          exit();
		
    }else {
	//check if input characters are valid
	    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
	   header("Location: SignUp.php?SignUp=invalid email");
       exit();
	   
	    }else {
		    //check if email is valid
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		        header("Location: ../signup.php?signup=email");
                exit();
		   	
		    }else {
			    $sql = "SELECT * FROM user WHERE user_uid='$uid'";
			    $result = mysqli_query($conn, $sql);
			    $resultCheck = mysqli_num_rows($result);
			
			    if ($resultCheck > 0) {
			       header("Location: ../signup.php?signup=usertaken");
                   exit();
			    }else {
				    //Hashing the password
				    $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
				    //Insert the user into the database
				    $sql = "INSERT INTO user (user_first, user_last, user_email, user_uid, user_pass) VALUES (?, ?, ?, ?, ?);";
			        $stmt = mysqli_stmt_init($conn);
				    if (!mysqli_stmt_prepare($stmt, $sql)) {
					    echo "SQL error";
				    }else {
					  mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $hashedpass);
					  mysqli_stmt_execute($stmt);
				    }
				          header("Location: index.php?signup=sucess");
                         exit();
			    }
		    }
	    }
	
    }
 
}else {
  header("Location: ../signup.php");
  exit();
}