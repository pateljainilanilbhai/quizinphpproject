<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
 <br><br><BR><BR>
 <center> <div class="container">
<div class="row">
    <div class="col-sm-6">
 <div class="panel panel-danger">
      <div class="panel-heading">Quiz project in php</div>
      <div class="panel-body">PHP Quiz</center></div>
    </div>
 </div>
 </div>
 </div></center>
 <BR><BR>
<div class="container">
<div class="row">
  <div class="col-sm-6">
     <div class="panel panel-success">
	 <div class="panel-heading">
  <h3>Login Form</h3>
  </div>
     <div class="panel-body">
	     <?php 
	     if(isset($_GET['run']) && $_GET['run']=="failed" )
		 {
			 echo "failed";
	     } 
		 ?>
  <form role="form" action="signin_sub.php" method="POST" >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  </div>
  </div>
     <div class="col-sm-6">
     <div class="panel panel-success">
	 <div class="panel-heading">
  <h3>Signup Form</h3>
  </div>
     <div class="panel-body">
	 <?php 
	     if(isset($_GET['run']) && $_GET['run']=="success" )
		 {
			 echo "successul";
	     } 
		 ?>
  <form role="form" method="POST" action="signup_sub.php" enctype="multipart/form-data" >
     <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="n" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  </div>
</div>
</div>
</body>
</html>
