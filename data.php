<?php
require "Database.class.php";


if(isset($_POST['register'])){
    $description   = $_POST['description'];
    $quantity  = $_POST['quantity'];
    $price    = $_POST['price'];
    
    $db = new Database();
    $db->register_product($description, $quantity, $price);
}

else if(isset($_POST['delete'])){
    $Id    = $_POST['Id'];
    
    $db = new Database();
    $db->delete_product($Id);
}
else if(isset($_POST['update'])){
    $Id    = $_POST['Id'];
    $description   = $_POST['description'];
    $quantity  = $_POST['quantity'];
    $price    = $_POST['price'];
    
    $db = new Database();
    $db->update_product($Id,$description,$quantity,$price);
}



?>