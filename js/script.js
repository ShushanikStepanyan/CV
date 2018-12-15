

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
}); 

function f1() {
document.body.innerHTML += "<div class = "container mx-auto" style="float:left; width: 50%;border: solid; color: rgb(141, 168, 153); margin-top: 5%; margin-bottom: 5%">	
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
<input type="file" name = "img" id = "img"></div>"
}