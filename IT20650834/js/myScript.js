function checkPassword(){
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		alert("Password are mismatched!!");
		return false;
	}
	else{
		alert("Passwords matched!!");
		return true;
	}
}
function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("btn1").disabled=false;
	}
	else{
		document.getElementById("btn1").disabled=true;
	}
}