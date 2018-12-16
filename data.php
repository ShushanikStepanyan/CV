

<?php

session_start();

if (isset($_POST['submit'])) {

$dir = "images/" ;
$file = $dir  . basename ($_FILES["img"]["name"]);
move_uploaded_file($_FILES["img"]["tmp_name"], $file);


	if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['date']) &&  !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['adress']) || !empty($_POST['gender']) && !empty($_POST['company']) && !empty($_POST['job']) && !empty($_POST['ddate']) && !empty($_POST['faculty']) && !empty($_POST['institution']) && !empty($_POST['edate'])  || !empty($_POST['degree'])) {


    $firstname = $_POST['firstname'];
    $_SESSION['firstname'] = $firstname;

	$lastname = $_POST['lastname'];
    $_SESSION['lastname'] = $lastname;

    $date = $_POST['date'];
    $_SESSION['date'] = $date;

    $email = $_POST['email'];
    $_SESSION['email'] = $email;
	
	$phone = $_POST['phone'];
    $_SESSION['phone'] = $phone;
	
	$adress = $_POST['adress'];
    $_SESSION['adress'] = $adress;

	$gender = $_POST['gender'];
	$_SESSION['gender'] = $gender;
	

	$company = $_POST['company'];
	$_SESSION['company'] = $company;

	$job = $_POST['job'];
	$_SESSION['job'] = $job;

	$ddate = $_POST['ddate'];
	$_SESSION['ddate'] = $ddate;

	$institution = $_POST['institution'];
	$_SESSION['institution'] = $institution;

	$faculty = $_POST['faculty'];
	$_SESSION['faculty'] = $faculty;

	$edate = $_POST['edate'];
	$_SESSION['edate'] = $edate;

	$degre = $_POST['degre'];
	$_SESSION['degre'] = $degre;

	
} else {
		echo "<div class='alert alert-danger'> All fields required </div>" ;
	exit ;
} 
 
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</head>
<body style="background-color: #ededed ">

	<div class = "container mx-auto text-center" style="width: 70%; margin-top: 10%; background-color: #fff; padding: 20px; border-radius: 5px">

	<center>  <u> <h1> Curriculum Vitae </h1></u> 

	</center>
	<hr>

	<img style = "width:100px ; height:100px ; border-radius: 50px; >" src="<?=$file?>" alt = "img">


    <p>Your First name:   <strong> <?= $_SESSION['firstname']?> </strong> </p> 
      <p>Your Last name: <?= $_SESSION['lastname']  ?> </p>
      <p>Your Birth Day: <?= $_SESSION['date'] ?> </p>   
      <p>Your Email: <?= $_SESSION['email']  ?> </p> 

     <p>Your Adress: <?= $_SESSION['adress']  ?> </p> 
    <p>Your gender: <?= $_SESSION['gender']  ?> </p> 



</div>




</body>
</html>

