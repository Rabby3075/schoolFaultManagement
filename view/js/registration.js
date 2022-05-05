function validation(val){
	//value initialization
    var name = val.name.value;
    var fname = val.fname.value;
    var mname = val.mname.value;
    if (val.male.checked===true) {
        var gender = val.male.value;
    }
    else if (val.female.checked===true) {
        var gender = val.female.value;
    }
    else{
        gender="";
    }
    var religion = val.religion.value;
    var dob = val.dob.value;
    var phone = val.phone.value;
	var category = val.category.value;
	var email = val.email.value;
	var uname = val.uname.value;
	var pass = val.pass.value;
    var cpass = val.cpass.value;
	var image = val.image.value;
	var flag = true;
// js validation
    if(name==="")
	{
	   document.getElementById('nameError').innerHTML="Field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('nameError').innerHTML="";
	}
    if(fname==="")
	{
	   document.getElementById('fnameError').innerHTML="Field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('fnameError').innerHTML="";
	}
	if(mname==="")
	{
		document.getElementById('mnameError').innerHTML="Field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('mnameError').innerHTML="";
	}
	if(gender==="")
	{
		document.getElementById('genderError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('genderError').innerHTML="";
	}
    
	if(dob==="")
	{
		document.getElementById('dobError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('dobError').innerHTML="";
	}
	if(religion==="")
	{
		document.getElementById('religionError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('religionError').innerHTML="";
	}

	if(phone==="")
	{
		document.getElementById('phoneError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('phoneError').innerHTML="";
	}
	if(category==="")
	{
		document.getElementById('categoryError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('categoryError').innerHTML="";
	}
	if(email==="")
	{
		document.getElementById('emailError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('emailError').innerHTML="";
	}
	if(uname==="")
	{
		document.getElementById('unameError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('unameError').innerHTML="";
	}
	if(pass==="")
	{
		document.getElementById('passError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('passError').innerHTML="";
	}
    if(cpass==="")
	{
		document.getElementById('cpassError').innerHTML="field can't be empty";
		flag = false;
	}
	else{
		document.getElementById('cpassError').innerHTML="";
	}
	if(phone.length != 11)
	{
		document.getElementById('phoneError').innerHTML="Invalid phone number";
		flag = false;
	}
	else{
		document.getElementById('phoneError').innerHTML="";
	}
	if(pass!==cpass){
		document.getElementById('cpassError').innerHTML="Password & confirm password doesn't match";
		flag = false;
	}
	else{
		document.getElementById('cpassError').innerHTML="";
	}
	if(pass.length<8){
		document.getElementById('passError').innerHTML="Enter atleast 8 digit password";
		flag = false;
	}
	else{
		document.getElementById('passError').innerHTML="";
	}
  
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("name",pform.name.value);
		fd.append("fname",pform.fname.value);
		fd.append("mname",pform.mname.value);
		fd.append("gender",pform.gender.value);
		fd.append("dob",pform.dob.value);
		fd.append("religion",pform.religion.value);
		fd.append("phone",pform.phone.value);
		fd.append("category",pform.category.value);
		fd.append("email",pform.email.value);
		fd.append("uname",pform.uname.value);
		fd.append("pass",pform.pass.value);
        fd.append("cpass",pform.cpass.value);
		fd.append("image",pform.image.files[0]);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("post","../controller/registerAction.php"); //connected with backend
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}