var modal=document.getElementById('myModal');
var btn=document.getElementById("login");
var span=document.getElementsByClassName("close")[0];

btn.onclick=function(){
	modal.style.display="block";
}
span.onclick=function(){
	modal.style.display="none";
}
window.onclick=function(event){
	if(event.target==modal){
		modal.style.display="none";
	}
}

var modals=document.getElementById('signup');
var sbtn=document.getElementById("signin");
var close=document.getElementsByClassName("signinclose")[0];
 
sbtn.onclick=function(){
	modals.style.display="block";
}
close.onclick=function(){
	modals.style.display="none";
}

window.onclick=function(event){
if(event.target==modals){
		modals.style.display="none";
	}	
}