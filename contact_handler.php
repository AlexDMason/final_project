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
