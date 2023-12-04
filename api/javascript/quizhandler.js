const form = document.getElementById("introQuiz");
form.addEventListener('submit', (event) => {
  event.preventDefault();

  var 
  const formData = new FormData(form);

  fetch("api/php/quiz-in.php", {
    method: 'POST',
    body: JSON.stringify(formData)
  })
  .then(response => {
    if (response.ok) {
      
    } 
    else if (response.text != ""){
      myDiv.innerHTML = "</p>" + response.text + "</p>";
    }
    else {
      myDiv.innerHTML = '<p>There was an error completing your log in. Please try again later.</p>';
    }
  });
});
