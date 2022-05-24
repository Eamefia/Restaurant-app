<?php
session_start();
if (isset($_POST['login'])) {
	
	include_once './Database/dbh.inc.php';
	
	$uid = $_POST['uid'];
	$pass = $_POST['pass'];
	
	//error handlers
	//check if inputs are empty
	if (empty($uid) || empty($pass)) {
		header("Location: login.php?login=empty");
	    exit(); 
	}else {
		//creat a template
		$sql = "SELECT * FROM user WHERE user_uid=?;";
        //creat a prepared statement
		$stmt = mysqli_stmt_init($conn);
        //prepare the prepared statement
		 
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: login.php?login=failed");
	        exit();
		}else {
			//Bind parameters to the placeholder
			mysqli_stmt_bind_param($stmt, "s", $uid);
			//Run parameters inside database
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			
			while ($row = mysqli_fetch_assoc($result))  {
				echo $row['user_uid'];
				//De-hashing the password
				
				$hashedpassCheck = password_verify($pass, $row['user_pass']);
				
				if ($hashedpassCheck == false){
					header("Location: login.php?login=passfailed");
	                exit();
							
				}elseif ($hashedpassCheck == true) {
					//log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: index.php?login=success");
	                exit();
				}
			}
			
		}

	}

}