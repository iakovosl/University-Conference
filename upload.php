<?php
    session_start();
    require 'db.php';

    if (!isset($_SESSION['username'])) {
      header('location: login.php');
    } else {
      $username = $_SESSION['username'];
    }
?>

<?php
#connection string
$conn = mysqli_connect('localhost', 'root', '12345678', 'register');

$userPapersSql = "SELECT username, title, file FROM papers WHERE username = '$username' ORDER BY created_at DESC";
$papers = mysqli_query($conn, $userPapersSql);

if (isset($_POST["submit"]))
{
    #retrieve file title
    $title = $_POST["title"];

    #file name with a random number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

    #upload directory path
    $uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    #sql query to insert into database
    $sql = "INSERT into papers( username, title , file) VALUES('$username', '$title','$pname')";

    if(mysqli_query($conn,$sql)){
        $success = true;
    }
    else{
        echo "Error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>University Conference</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require 'header.php';
?>
<div class="upload-form container">
  <div class="row">
    <div class="col-sm" style="text-align:center;">
      <h1 class="mt-5">Upload your paper</h1>
      <form method="post" enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title">
        <label>File Upload</label>
        <input type="File" name="file">
        <input type="submit" name="submit" value="Submit">
      </form>
      <?php
      if (isset($success)) {
        echo "<p>File Sucessfully uploaded</p>";
      }
      ?>
    </div>

  </div>
  <div class="row">
    <div class="col-sm" style="color:blue; text-align:center;">
      <?php

      if ($papers->num_rows > 0) {
        echo "<h2>Your Papers</h2>";
        // output data of each row
        $index = 1;
        while($row = $papers->fetch_assoc()) {
          echo $index++.". ".$row["title"]. " - filename: " . $row["file"]."<br>";
        }
      } else {
        echo "0 papers submitted";
      }
      ?>
    </div>
  </div>
</div>
<?php
require 'footer.php';
?>

</body>
</html>




