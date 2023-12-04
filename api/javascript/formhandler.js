const form = document.getElementById("form-login");
form.addEventListener('submit', (event) => {
  event.preventDefault();
  
  const formData = new FormData(form);

  fetch("api/php/in.php", {
    method: 'POST',
    body: JSON.stringify(formData)
  })
  .then(response => {
    if (response.ok) {
      logInOut.signIn();
    } 
    else if (response.text != ""){
      myDiv.innerHTML = "</p>" + response.text + "</p>";
    }
    else {
      myDiv.innerHTML = '<p>There was an error completing your log in. Please try again later.</p>';
    }
  });
});
