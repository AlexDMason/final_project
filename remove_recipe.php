<?php
    session_start();

    if( isset($_SESSION['validuser']) ){
        
    }
    else{
        header('Location: recipe_manager.php');  
    }
   
    require 'dbConnect.php'; 

    $sql = "SELECT header,image,ingredients,instructions FROM final_project"; 
    $stmt = $conn->prepare($sql);  
    $stmt->execute();  
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Events</title>
<style>
        body {
        background-color: black;
    }

    li, p, h1, h3, td {
        color: green;
        font-size: larger;
    }
    </style>
</head>
<body>
  
    <div class="displayEvents">
        <table>
            
        <?php
            while($row = $stmt->fetch() ){
                echo "<tr>";
                echo "<td>" . $row["header"] . "</td>";
                echo "<td>" . $row['image'] . "</td>";
                echo "<td>" . $row['ingredients'] . "</td>";
                echo "<td>" . $row['instructions'] . "</td>";
                echo "<td><a href='delete_recipe.php?eventID=" . $row['header'] . "'><button>Delete</button></a> </td>";
                echo "</tr>";  
            }
        ?>
        </table>
    </div>
    <li><a href="recipe_manager.php">Recipe Manager</a></li>
</body>
</html>
