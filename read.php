<?php
require "./functions.php";
require "./Database.class.php";

get_header("Product List");
?>

<table>
        <tr>
            <td>
                ID
            </td>
            <td>
                Descrição
            </td>
            <td>
                Quantidade
            </td>
            <td>
                Preço
            </td>
        </tr>
    <?php
        $db = new Database();
        $products = $db->fetch_product();

        foreach($products as $product){
            echo '<tr>';
            echo '<td>'.$product['Id'].'</td>';                          
            echo '<td>'.$product['descript']."</td>";
            echo '<td>'.$product['quantity'].'</td>';
            echo '<td>'.$product['price'].'</td>';
            echo '</tr>';
        }
    ?>
    </table>