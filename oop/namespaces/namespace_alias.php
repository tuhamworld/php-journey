<?php
// Giving namespace an alias or class to make it easier to write.

include "html.php";
use Html as H;

$table = new H\Table();
$table ->title = "Our Table";
$table -> numRows = 5;

?>

<html>
    <body>
        <?php
$table-> message();
        ?>
    </body>
</html>