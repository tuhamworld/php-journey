<?php
namespace Html; // without Html namespace;
include "html.php";


$table = new Table(); // Use classes from the Html namespace without the need for the Html\Table:
$table-> title = "Tuham Table";
$table -> numRows = 10;


$row = new Row();
$row-> numCells = 5;


?>


<html>
    <body>
        <?php
        $table ->message();
        ?>
        <?php
        $row ->message();
        ?>
    </body>
</html>