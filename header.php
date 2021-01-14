<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">
    <img src="images/img1.jpg" width="30" height="30" alt="">
  </a>
      <a href="index.php" class="navbar-brand">Welcome <?php echo $_SESSION['username']; ?></p></a>
    </div>
    <ul class="nav navbar-nav">
    <?php
    if(isset($_SESSION['username'])){
    ?>
    
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Upcoming Events</a></li>
          <li><a href="#">Previous Events</a></li>
          <li><a href="#">News and Blog</a></li>
        </ul>
      </li>
      <li><a href="upload.php">Submit Your Paper</a></li>
      <li><a href="#">Registration Fees</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <?php
        }else{
        ?>
              <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Upcoming Events</a></li>
          <li><a href="#">Previous Events</a></li>
          <li><a href="#">News and Blog</a></li>
        </ul>
      </li>
      
      <li><a href="#">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php
        }
    ?>
    </ul>
  </div>
</nav>