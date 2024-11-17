<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload with PHP</title>
</head>
<body>

<form action="./upload.php" method="post" enctype="multipart/form-data" >

<h2>Select Image to upload: </h2>

<p><input type="file" name="fileToUpload" id="fileToUpload"></p>
<p><input type="submit" value="Upload Image" name="submit"></p>
</form>
    
</body>
</html>