function validation(val){
	//value initialization
    var name = val.name.value;
    var fname = val.fname.value;
    var mname = val.mname.value;
    var phone = val.phone.value;
	var email = val.email.value;
	var flag = true;
// js validation
    if(name==="")
	{
	   document.getElementById('nameError').innerHTML="Field can't be empty";
		flag = false;
	}
    if(fname==="")
	{
	   document.getElementById('fnameError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(mname==="")
	{
		document.getElementById('mnameError').innerHTML="Field can't be empty";
		flag = false;
	}

	if(phone==="")
	{
		document.getElementById('phoneError').innerHTML="field can't be empty";
		flag = false;
	}
	if(email==="")
	{
		document.getElementById('emailError').innerHTML="field can't be empty";
		flag = false;
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
		fd.append("phone",pform.phone.value);
		fd.append("email",pform.email.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("post","../controller/updateProfileAction.php"); //connected with backend
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}