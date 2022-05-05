function valid() {
	// body...
	var userName = document.forms["form"]["userName"].value;
	var password = document.forms["form"]["password"].value;

	var flag = true;
	//validation
    if(userName===""){
    	document.getElementById('userNameError').innerHTML="Field can't be empty";
    	flag = false;
    }
	else{
		document.getElementById('userNameError').innerHTML="";
	}
     if(password===""){
    	document.getElementById('passwordError').innerHTML="Field can't be empty";
    	flag = false;
    }
	else{
		document.getElementById('passwordError').innerHTML="";
	}
    return flag;
}