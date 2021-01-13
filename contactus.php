<!DOCTYPE html>
<html>
<head>
    <title>Contact us form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <h3 style="text-align:center; color:#0080ff;">Contact us form</h3>
    <form action="data.php" method="POST">
        <div class="form-group ">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required placeholder="Enter your email">
        </div>
        <div class="form-group ">
            <label>Message:</label>
            <textarea class="form-control" name="message" required placeholder="Enter your message"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>


</body>
</html>