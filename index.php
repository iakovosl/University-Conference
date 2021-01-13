<?php
session_start();
//include auth.php file on all secure pages
include("auth.php");
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

<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/img1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Registration Fees</h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="images/img2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3> <button type="button" class="btn btn-success">Registration Fees</button>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/img3.png" class="img-responsive" style="width:100%" alt="Image">
      <p>International Conference on Computer and Data Management, 2021 in London, United Kingdom</p>
    </div>
    <div class="col-sm-4"> 
      <img src="images/Science_conference.jpg" class="img-responsive" style="width:100%" alt="Science_conference">
      <p>International Conference on Computing Architecture and Artificial Intelligence
         January, 2021 in Amsterdam, Netherlands</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>The International Research Conference Aims and Objectives
          The International Research Conference is a federated organization
          dedicated to bringing together a significant number of diverse scholarly
          events for presentation within the conference program. Events will run over
          a span of time during the conference depending on the number and length of the presentations.
          With its high quality, it provides an exceptional value for students, academics and industry 
          researchers.</p>
      </div>
      <div class="well">
       <p>The International Research Conference is a federated organization dedicated to bringing together
          a significant number of diverse scholarly events for presentation within the conference program. 
          Events will run over a span of time during the conference depending on the number and length of 
          the presentations. With its high quality, it provides an exceptional value for students, academics
          and industry researchers.</p>
      </div>
    </div>
  </div>
</div><br>

<?php
require 'footer.php';
?>

</body>
</html>
