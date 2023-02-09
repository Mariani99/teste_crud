<?php
require "./functions.php";

get_header("Update");
?>
<form action="data.php" method="POST">
    <input type="text" name="Id" placeholder="ID Produto">
    <input type="text" name="description" placeholder="Descrição">
    <input type="text" name="quantity" placeholder="Quantidade">
    <input type="text" name="price" placeholder="Preço">

    <input type="submit" name="update" value="Update">

</form>