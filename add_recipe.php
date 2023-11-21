<?php

$confirmMessage = false;

$eventNameMsg = "";


if(isset($_POST['submit'])){
    echo "<h1> Process the form, it has been submitted, ";


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
    background-color: aliceblue;
}
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
<label for="image">Image: </label>
<input type="file" name="image" id="image" accept="image/*">
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

</html>
<?php
}
?>      