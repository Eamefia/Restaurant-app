<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Hostel</title>
</head>

<style>

body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}


    .register-form{
        max-width:450px;
        border:1px solid #ccc;
    }

    /* Full-width input fields */
    input[type=text], input[type=password]{
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    select{
        width: 100%;
        padding: 12px;
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

</style>
<body>

 <?php
  include_once('header.php');
  $accm = $_SESSION['host_name'];
 ?>

  <form action="apply.php" method="POST" class="register-form">
    <div class="personal-info">Hostel you are registering for</div>
    <input type="text" name="hostelName" value="<?php echo $accm?>">
    <select name="roomtype" id="roomtype">
      <option class="short" value="" disabled selected>Room type</option>
      <option class="short" value="4 in 1">4 in 1</option>
      <option class="short" value="3 in 1">3 in 1</option>
      <option class="short" value="2 in 1">2 in 1</option>
      <option class="short" value="1 in 1">1 in 1</option>
    </select>
     <div class="personal-info">Your infomation</div>
	<input type="text" name="studentId" placeholder="student ID">
	<input type="text" name="firstname" placeholder="First name">
    <input type="text" name="lastname" placeholder="Last name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="program" placeholder="Program">
    <select name="year" id="year">
      <option class="short" value="" disabled selected>Year of study</option>
      <option class="short" value="Year 1">Year 1</option>
      <option class="short" value="Year 2">Year 2</option>
      <option class="short" value="Year 3">Year 3</option>
      <option class="short" value="Year 4">Year 4</option>
      <option class="short" value="Year 5">Year 5</option>
      <option class="short" value="Year 6">Year 6</option>
    </select>
    <select name="gender" id="gender">
      <option class="short" value="" disabled selected>Gender</option>
      <option class="short" value="Male">Male</option>
      <option class="short" value="Female">Female</option>
    </select>
    <input type="text" name="location" placeholder="Your current residence">
    <input type="text" name="contact" placeholder="Your contact">
    <div class="personal-info">Guardian Info</div>
    <input type="text" name="guardian_name" placeholder="Name of guardian">
    <input type="text" name="relation" placeholder="Guardian relation">
    <input type="text" name="guardian_contact" placeholder="Guardian contact">
    <button type="submit" name="apply_submit">upload</button>
  </form>

  <?php
  include_once('footer.php');
 ?>
</body>
</html>