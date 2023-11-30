onload = document.getElementById("body").style.display = "block";
function changeLang(id) {
  event.preventDefault();
  document.getElementById("lang").innerHTML = "\<img src=\"Globe_icon.svg\" alt=\"ALTTEXT\" id=\"dropdown-img\"\>"+id;
}
