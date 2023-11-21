<?php

    require 'dbConnect.php';
    $sql = "SELECT header,image,ingredients,instructions FROM final_project"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="recipe_info.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1 style="font-size: 400%; border:dashed">Recipe Manager</h1>
    <h3 style="text-decoration:underline">Formatted in PHP</h3>
    <h1><a href="add_recipe.php">Add Recipe!</a></h1>
    <h1><a href="contact_us.php">Contact Us</a></h1>
    <h4><a href="login.php">Admin Login</a></h4>
    <div class="flex-container">
    <?php 
        while($row = $stmt->fetch() ){ 
            echo "<div class='eventBox'>";
                echo "<h3>";
                    echo "Name:  ", $row["header"];
                echo "</h3>";
                    echo $row["image"];
                echo "</p>";
                echo  "<b>Ingredients:   </b>", $row["ingredients"];
                echo "</p>";
                echo "<b>Instructions:  </b>",  $row["instructions"];
                echo "</p>";
            echo "</div>\n"; 
        }

    ?>
    <?php



$sql = "SELECT * FROM final_project";
$result = $conn->query($sql);



?>
</div>
<?php
    session_start();

    
    $errorMsg = ""; 
    $validuser = false;


    if(isset($_POST['submit'])){
        echo "Form Submitted";

        $inUserName = $_POST['inUserName'];
        $inPassword = $_POST['inPassword'];

        require 'dbConnect.php';
        $sql = 'SELECT event_username, event_password FROM wdv341_eventuser WHERE event_username = :username and event_password = :password';
    
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':username', $inUserName);
        $stmt->bindParam(':password', $inPassword);

        $stmt->execute();
    
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();

        if($row){
            $errorMsg = "";
            $validuser = true;
            $_SESSION['validuser'] = true;
            $_SESSION['username'] = $inUserName;

        }
        else{
            $errorMsg = "Invalid";
            $validuser = false;
        }
    
    }
    else{
        if(isset($_SESSION['validuser'])){
            $validuser = true;
        }
    }


?>
&copy; <?php echo date("Y"); ?>

    
 
</body>
</html>