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
      signIn();
    } 
    else if (response.status == "400"){
      myDiv.innerHTML = "<p>Incorrect password for this email address. Please enter the password associated with this account, or reset your password.</p>";
    }
    else if (response.status == "404"){
      myDiv.innerHTML = "<p>No account attatched to this email. Please enter a valid email address, or sign up now!</p>";
    }
    else {
      myDiv.innerHTML = '<p>There was an error completing your log in. Please try again later.</p>';
    }
  });
});
