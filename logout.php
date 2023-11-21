<?php

session_start();
session_unset();
session_destroy();

header("Location:recipe_manager.php")

?>