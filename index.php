<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doc</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body> 


<div style="float:left; margin-top: 5%">
    <div class="container"> 
<h3>Նույնականացման տվյալներ</h3>
  <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Նույնականացման տվյալներ</a>
</div>
<button onclick = "f1()" class="btn btn-outline-info" style = "width:250px"> Նույնականացման տվյալներ </button ><br>
<button onclick = "f3()" class="btn btn-outline-info" style = "width:250px"> Կրթություն </button><br>
<button onclick = "f2()" class="btn btn-outline-info" style = "width:250px"> Աշխատանքային փորձ </button><br>
<button onclick = "f2()" class="btn btn-outline-info" style = "width:250px"> Որակավորում </button><br>
<button onclick = "f3()" class="btn btn-outline-info" style = "width:250px"> Նախասիրություններ </button><br>
</div>
<div class = "container mx-auto" style="float:left; width: 50%;border: solid; color: rgb(141, 168, 153); margin-top: 5%; margin-bottom: 5%">
<b> <i> Նույնականացման տվյալներ <i> <b>

<form action="data.php" method="post" enctype="multipart/form-data">
	
<input class = "form-control" type="text" name="firstname" placeholder="First name" style="margin-top:10px "> <br>
<input class = "form-control" type="text" name="lastname" placeholder="Last name" style="margin-top:10px "> <br>
Ծննդյան տարեթիվ  <input class = "form-control" type="date" name="birthdate" placeholder="Birth date" style="margin-top:10px "> <br>
Հասցե <input class = "form-control" type="text" name="adress" placeholder="Adress" style="margin-top:10px"> <br>
Էլ․հասցե <input class = "form-control" type="email" name="email" placeholder="Email"><br>
Հեռախոսահամար <input class = "form-control" type="tel" name="phone" placeholder="Phone"><br>
<label>
<input type="radio" name="gender" value="male">Տղամարդ</label> 
<label>
<input type="radio" name="gender" value="female" style="margin-left: 15px">Կին</label> <br>
<input type="file" name = "img" id = "img"> <br> <br>

	<b> <i> Աշխատանքային փորձ <i> <b> <br>
	<input type="text" name="company" placeholder="Company name" style="float: left; margin-top:10px; margin-left:8px">
	<input  type="text" name="job" placeholder="Job title" style="float: left ; margin-top:10px ; margin-left:7px "> 
	<input  type="text" name="ddate" placeholder="Start-End" style="float: left ; margin-top:10px ; margin-left:7px "> <br> <br>
	 <input class = "form-control" type="text" name="OI" placeholder="Other Information" style="margin-top:15px"> <br> 

	 <b> <i> Կրթություն <i> <b>  <br>
	<input type="text" name="institution" placeholder="Institution name" style="float: left; margin-top:10px; margin-left:8px">
	<input  type="text" name="faculty" placeholder="Faculty" style="float: left ; margin-top:10px ; margin-left:7px "> 
	<input  type="text" name="edate" placeholder="Start-End" style="float: left ; margin-top:10px ; margin-left:7px "> <br> <br>

<label>	<input type="radio" name="degree" value="Bachelor" style = "margin-left:10px" > Բակալավրի աստիճան </label>

<label> <input type="radio" name="degree" value="Master" style = "margin-left:10px"> Մագիստրոսի աստիճան </label>

<label> <input type="radio" name="degree" value="Phd" style = "margin-left:10px"> PhD </label> <br> <b>
	<input type="submit" name = "submit" value="Save" class="btn btn-success" style= "width : 100%"> <br> <br>

</form>


</div>

	

</body>
</html>