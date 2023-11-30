<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email_address = $_POST["email_address"];
$gotcha = $_POST["gotcha"];

if( empty($gotcha) ){
$message = "Thank you, $first_name $last_name, an email has been sent to $email_address (user is legit)";
}
else{
$message = "Bot Alert";
}
?>
<style>
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
<?php
echo $message;
?>
<br><br><br>

Dear <?php echo $_POST["first_name"]; ?> <?php echo $_POST["last_name"]; ?><br>
<br><br>
Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $_POST["email_address"]; ?>.
<br><br>
You have shared the following message:
<br><br>
<?php echo $_POST["comment"]; ?>
<li><a href="recipe_manager.php">Recipe Manager</a></li>
</body>
</html>
