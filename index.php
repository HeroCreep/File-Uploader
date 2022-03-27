<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">Upload</button>
          <button class="btn btn-success" onclick=" window.open('/file-upload-download/downloads.php','_blank')">Uploaded Files</button>
        </form>
      </div>
    </div>
    <p>Made by </p>
  </body>
</html>