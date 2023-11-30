<?php

$confirmMessage = false;

$eventNameMsg = "";


if(isset($_POST['submit'])){
    echo "<h1> Please input header<br>";
    


    $inEventName = $_POST['header'];
    $inEventDesc = $_POST['image'];
    $inEventPresenter = $_POST['ingredients'];
    $inEventTime = $_POST['instructions'];

    function validateEventName($inName){
      if($inName == ""){
        global $validInput, $eventNameMsg;
        $validInput = false;
        $eventNameMsg = "Invalid name";
      }
    }

    $validInput = true;
    validateEventName($inEventName);
    if($validInput){

    }
    else{

    }

    $host = $_POST['header'];
    if(!empty($host)){
        header("refresh:0");
        
    }else{
      $eventName = $_POST['header'];
      $eventDescription = $_POST['image'];
      $eventPresenter = $_POST['ingredients'];
      $eventTime = $_POST['instructions'];
}

    require 'dbConnect.php';

    $sql = "INSERT INTO final_project";
    $sql .= "(header, image, ingredients, instructions)";
    $sql .=" VALUES ";
    $sql .="(:eventName, :eventDesc, :eventPresenter, :eventTime)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':eventName', $inEventName);
    $stmt->bindParam(':eventDesc', $inEventDesc);
    $stmt->bindParam(':eventPresenter', $inEventPresenter);
    $stmt->bindParam(':eventTime', $inEventTime);

    $stmt->execute();

    $confirmMessage = true;
    
}

?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
div {
  display: none;
}

label, input {
    font-size: 250%;
}

body {
    text-align: center;
    background: rgb(223,123,41);
background: radial-gradient(circle, rgba(223,123,41,1) 76%, rgba(255,209,0,1) 100%);
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
  background-color: rgb(226, 193, 121);
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
if($confirmMessage){
?>
  <div class="confirmMessage">
  <h2>Thank you, your information has been inputted</h2>
</div>

<?php
}
else{
?>


<form method="post" action="add_recipe.php">

<label for="header">Header: </label>
<input type="text" name="header" id="header">
<br></br>
<label for="image">Amount of Time: </label>
<input type="text" name="image" id="image" accept="image/*">
<br></br>
<label for="ingredients">Ingredients: </label>
<input type="text" name="ingredients" id="ingredients">
<br></br>
<label for="instructions">Instructions: </label>
<input type="instructions" name="instructions" id="instructions">
<br></br>

<p>
    <input type="submit" value="submit" name="submit">
    <input type="reset">
</p>
</form>
<li><a href="recipe_manager.php">Recipe Manager</a></li>
</body>
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

</html>
<?php
}
?>      