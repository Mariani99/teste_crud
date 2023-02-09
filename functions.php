<?php
function get_header($title){
?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=], initial-scale=1.0">
            <title><?php echo $title; ?></title>
        </head>
    <body>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="create.php">Create</a>
            </li>
            <li>
                <a href="read.php">Read</a>
            </li>
            <li>
                <a href="update.php">Update</a>
            </li>
            <li>
                <a href="delete.php">Delete</a>
            </li>
        </ul>
<?php
}

function get_footer(){
?>
  </body>
    </html>
<?php
}
