document.getElementById("login-button").addEventListener('submit', (event) => {
  event.preventDefault();
  
  import { sql } from '@vercel/postgres';
   
  export default async function handler(
    request: VercelRequest,
    response: VercelResponse,
  ) {
    try {
      const result =
        const email = document.getElementById("email");
        const password = document.getElementById("password");
      
        if (!email) throw new Error('Email required for login.');
        else if (!password) throw new Error('Password required for login.');
      
        var emailCheck = await sql`SELECT email FROM accounts WHERE email = '` . $email . `';`;
        console.log(enailCheck);
    } catch (error) {
        return response.status(500).json({ error });
    }
    return response.status(200).json({ result });
  }


  
  //const jsonSend = email + ", " + password;
  
/*  fetch("api/php/in.php", {
    method: 'POST',
    body: JSON.stringify(jsonSend)
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
  });*/
});
