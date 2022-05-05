function showCustomer(str) {
    
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("table").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../controller/faultHistoryUserController.php?filter="+str);
    xhttp.send();
  }