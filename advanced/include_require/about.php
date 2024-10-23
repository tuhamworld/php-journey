<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
</head>

<body>

    <h2>About PHP Dummy Learn</h2>
    <p>
        PHP Learn is a simply a dummy site by Tuham
    </p>

    <!-- Using require for a non-existing file -->
    <?php
    require "FileNotExist.php";
    echo "What is the " . $start_year;
    ?>

</body>

</html>