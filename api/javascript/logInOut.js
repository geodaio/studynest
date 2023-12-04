function storeCookies(name, value){
  var myDate = new Date();
	myDate.setMonth(myDate.getMonth() + 1);
	document.cookie=name+"="+value+"; expires="+myDate.toUTCString()+"; path=/";
	console.log(document.cookie);
}
function signIn() {
	storeCookies("loggedIn", "true");
	window.location.assign("https://study-nest.vercel.app/");
	console.log(document.cookie);
}
function signOut() {
	event.preventDefault();
	storeCookies("loggedIn", "false");
	window.location.assign("https://study-nest.vercel.app/");
	console.log(document.cookie);
}
function toLogin() {
	window.location.assign("https://study-nest.vercel.app/api/php/login.php");
}
function toQNA() {
	window.location.assign("https://study-nest.vercel.app/api/php/questionaire.php");
}
function backToHome() {
	window.location.assign("https://study-nest.vercel.app/");
}
window.onload = function () {
	var found = false;
 	console.log("test");
 	var allCookies = document.cookie;
 	
 	var splitCookies = allCookies.split(";");
 	
 	for (var c = 0; c<=splitCookies.length; c++){
 		var cleanCookie;
 	    if (c != splitCookies.length){
 	      cleanCookie = splitCookies[c].trim();
 		}
 		var cleanerCookie = cleanCookie.split("=");
 		console.log(cleanerCookie);
 		if (cleanerCookie[c] === "true") {
 	        	window.location.assign("https://study-nest.vercel.app/");
 			console.log("loggedin2");
			found = true;
 		}
	 }
	if (found == false){
		console.log("loggedout");
		storeCookies("loggedIn", "false");
	}
};
