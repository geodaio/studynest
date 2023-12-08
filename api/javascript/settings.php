function toGen() {
  document.getElementById("gen-settings").style.display = "block";
  document.getElementById("prof-settings").style.display = "none";
  document.getElementById("notif-settings").style.display = "none";
  document.getElementById("priv-settings").style.display = "none";
}
function toProf() {
  document.getElementById("gen-settings").style.display = "none";
  document.getElementById("prof-settings").style.display = "block";
  document.getElementById("notif-settings").style.display = "none";
  document.getElementById("priv-settings").style.display = "none";
}
function toNofif() {
  document.getElementById("gen-settings").style.display = "none";
  document.getElementById("prof-settings").style.display = "none";
  document.getElementById("notif-settings").style.display = "block";
  document.getElementById("priv-settings").style.display = "none";
}
function toPriv() {
  document.getElementById("gen-settings").style.display = "none";
  document.getElementById("prof-settings").style.display = "none";
  document.getElementById("notif-settings").style.display = "none";
  document.getElementById("priv-settings").style.display = "block";
}

