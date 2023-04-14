<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("college.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
    
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="bg">
<div class="container"><br><br>
    <h1>Email form</h1>

    <form action="mail.php" method="POST"  >
        <div class="row">
        <div class="col-md-4">
        <div class="card-body">

        <div class="form-group">
            <label>Name</label>
        <input type="text" name="name" class="form-control" required>
        </div>
<div class="form-group">
            <label>Email</label>
        <input type="email" name="" class="form-control" required>
</div>
<div class="form-group">
            <label>Body</label>
        <textarea type="text" name="message" class="form-control" required></textarea>
</div>
        <Button type="submit" class="btn btn-primary">Submit</button>
</div>
    </form>
</div>
</div>
</div>
</div>

</body>
</html>