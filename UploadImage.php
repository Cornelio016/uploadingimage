<!DOCTYPE html>
<html>
<head>
  <title>Upload Image</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="process.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
	
</body>
</html>