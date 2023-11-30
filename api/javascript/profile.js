function toSGProfile(){
  document.getElementById("profile-section-sb").style.display = "none";
  document.getElementById("profile-section-ra").style.display = "none";
  document.getElementById("profile-section-sg").style.display = "block";
} 
function toSBProfile(){
  document.getElementById("profile-section-sg").style.display = "none";
  document.getElementById("profile-section-ra").style.display = "none";
  document.getElementById("profile-section-sb").style.display = "block";
}
function toRAProfile(){
  document.getElementById("profile-section-sb").style.display = "none";
  document.getElementById("profile-section-sg").style.display = "none";
  document.getElementById("profile-section-ra").style.display = "block";
}
