<?php
include "html.php";
use Html\Table as T;

$table = new T();
$table -> title = "His table";
$table -> numRows = 8;

?>

<html>
    <body>
        <?php $table->message(); ?>
    </body>
</html>