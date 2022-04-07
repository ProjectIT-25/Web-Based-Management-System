var login = document.getElementById("login");
var register = document.getElementById("register");
var btn_switch = document.getElementById("btn");

function Register(){
	login.style.left = "-400px";
	register.style.left = "300px";
	btn_switch.style.left = "110px";
}

function Login(){
	login.style.left = "250px";
	register.style.left = "1600px";
	btn_switch.style.left = "0px";
}