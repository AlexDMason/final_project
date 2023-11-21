<?php
    session_start();
    if( isset($_SESSION['validuser']) ){
        
    }

    else{
        header('Location: recipe_manager.php');      
    }

    $eventID = $_GET['eventID'];    

    

    require 'dbConnect.php';       

    $sql = "DELETE FROM final_project WHERE header=:eventID";   
    
    $stmt = $conn->prepare($sql);   
    $stmt->bindParam(':eventID', $eventID); 
    $stmt->execute();       
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 

?>
    <li><a href="recipe_manager.php">Recipe Manager</a></li>