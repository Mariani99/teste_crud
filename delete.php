<?php
require "./functions.php";

get_header("Delete");
?>
<form action="data.php" method="POST">
    <input type="text" name="Id" placeholder="ID Produto">
    <input type="submit" name="delete" value="Deletar">

</form>