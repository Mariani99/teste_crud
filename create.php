<?php
require "./functions.php";

get_header("Create");
?>
<form action="data.php" method="POST">
    <input type="text" name="description" placeholder="Descrição">
    <input type="text" name="quantity" placeholder="Quantidade">
    <input type="text" name="price" placeholder="Preço">
    <input type="submit" name="register"> 

</form>