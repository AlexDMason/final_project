<!DOCTYPE html>
<head>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfiwqsoAAAAAKi_EXfv4d6tGatz-IFfZifA9Zs5" async defer></script>
    <script>
    grecaptcha.enterprise.ready(function() {
      grecaptcha.enterprise.execute('6Lf9XBMjAAAAAGQoI08F5ku6AkYFVJEkTDLSr5Jf', {action: 'login'}).then(function(token) {
      });
  });
  </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Intro HTML and CSS</title>
<action><files>
<formHandler class="php"></formHandler></action>
<style>

	form	{
		width:600px;
		margin:auto;
		background-color:lightblue;	
		padding-left: 20px;
	}
	
	form legend	{
		font-size:larger;
		text-align:center;
	}
	
	.special {
    display: none;
  }

        .eventBox {
            border:thin solid black;
            margin-bottom:20px;
        }

        .boldEvent {
            font-weight:bold;
        }

        .flex-container {
            display: flex;
            background-color:coral;
            }

.flex-container > div {
  background-color: #f1f1f1;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
}

body {
  text-align: center;
  background: rgb(223,123,41);
background: radial-gradient(circle, rgba(223,123,41,1) 76%, rgba(255,209,0,1) 100%);
}

header {
  background-color: #ff7b00;
  padding: 3%;
}

header h1{
  color: white;
  font-family: sans-serif;
  font-size: 300%;
  font-style: italic;
}

header select {
  width: 50%;
  height: 40px;
  font-size: 100%;
}

form {
  padding: 1%;
  margin: 5%;
  margin-right: 25%;
  margin-left: 25%;
  width: 50%;
  background-color: #a0beda;
  border-radius: 20px;
  border: 2px solid black;

}

form input[type=text] {
  width: 20%;
}

form input[type=number] {
   width: 5%;
}

form input {
   margin-bottom: 2%;
}

canvas {
  width: 20%;
}

@media only screen and (max-width: 750px) {
  body {
    font-size: 150%;
    font-weight: bold;
  }

  form {
    width: 100%;
    margin: 0%;
    padding: 0%;
  }

  form input[type=text] {
    width: 55%;
  }

  form input[type=number] {
     width: 15%;
  }


  form input {
     margin-bottom: 5%;
  }

  header select {
    width: 100%;
  }

  button {
    padding: 6px 15px;
  }

  img {
    width: 50%;
  }

  header select {
    width: 100%;
  }}

</style>

</head>

<body>

<form id="form1" name="form1" method="post" action="contact_handler.php">

  <legend>Example Form</legend>
  
  <p>
  	<label for="first_name">First Name:</label> 
    <input type="text" name="first_name" id="first_name" />
  </p>
  
  <p>
  	<label for="last_name">Last Name:</label> 
    <input type="text" name="last_name" id="last_name" />
  </p>

  <p>
    <label for="email_address">Email Address</label>
    <input type="email" name="email_address" id="email_address"/>
  </p>
<p class="special">
  <label for="gotcha">gotcha</label>
  <input type="text" name="gotcha" id="gotcha">
</p>

  <p>Message:<textarea name="comment" rows="6" cols="20"></textarea></p>
  
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
    <input type="reset" name="button2" id="button2" value="Reset" />
  </p>
  
</form>

<script>
  function onSubmit(token) {
    document.getElementById("button").submit();
    g-recaptcha-response
  }
  
function onClick(e) {
  e.preventDefault();
  grecaptcha.enterprise.ready(async () => {
    const token = await grecaptcha.enterprise.execute('6LfiwqsoAAAAAKi_EXfv4d6tGatz-IFfZifA9Zs5', {action: 'LOGIN'});
    // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
    // reCAPTCHA Enterprise to the end user's browser.
    // This token must be validated by creating an assessment.
    // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
  });
}
</script>
<li><a href="recipe_manager.php">Recipe Manager</a></li>
<p>&nbsp;</p>
</body>

</html>
