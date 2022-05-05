function validation(val){
	var title = val.title.value;
	var description = val.description.value;
	var location = val.location.value;
	var flag = true;

//validation
	if(title===""){
		document.getElementById('titleError').innerHTML="Field can't be empty";
		flag = false;
	}
    else{
        document.getElementById('titleError').innerHTML="";
    }
	if(description===""){
		document.getElementById('descriptionError').innerHTML="Field can't be empty";
		flag = false;
	}
    else{
        document.getElementById('descriptionError').innerHTML="";
    }

	if(location===""){
		document.getElementById('locationError').innerHTML="Field can't be empty";
		flag = false;
	}
    else{
        document.getElementById('locationError').innerHTML="";
    }


	return flag;
}

function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
		fd.append("title",pform.title.value);
		fd.append("description",pform.description.value);
		fd.append("location",pform.location.value);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("POST","../controller/rfaultAction.php");
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
