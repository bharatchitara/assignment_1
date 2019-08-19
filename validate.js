
function validateName() {
  var a = document.insertion.name.value;
  if (a == "") {
    alert("Name cannot be empty.");
    return false;
  }
  else if(a == "/^[a-zA-Z]*$/"){
	  alert("special chararters are not allowed.");
    return false;
}


fuction validatenumber(){
	
	var b= document.insertion.phone.value;
   if(isNaN(b)){
	   document.getElementById("numloc").innerHTML="Enter Numeric value only.";  
  return false;  
   }
	
}