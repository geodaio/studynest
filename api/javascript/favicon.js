const favicon = document.getElementById("favicon");
const mode = window.matchMedia("(prefers-color-scheme: dark)");

 //Entry
if (window.matchMedia("(prefers-color-scheme: dark)")) {
   console.log("test")
   favicon.setAttribute("href", "api/images/favicon-dark.php");
 }
else {
   favicon.setAttribute("href", "api/images/favicon-light.php");
 }

console.log(mode);
console.log(favicon);
//Event listener for changes
mode.addEventListener("change", (event) => {
  if (event.matches) {
    favicon.setAttribute("href", "api/images/favicon-dark.php");
    console.log("darkmode");
  }
  else {
    favicon.setAttribute("href", "api/images/favicon-light.php");
    console.log("lightmode");
  }
});
