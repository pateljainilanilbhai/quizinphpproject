<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Quiz in php</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
   
  </ul>

    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3><button type="button" class="btn btn-primary" href="C:\\wamp\\www\\My-Quiz\\index.php" >Logout</button>
	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
			<?php   } ?>
		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
		</form>
	  </div>
	  </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile </h3>
	  
	  
	  <table class="table">
    <thead>
      <tr>
        <th>id</th>
		<th>name</th>
		<th>email</th>
      </tr>
    </thead>
    <tbody>
	<?php
	foreach($profile->data as $prof)
	{ ?>
		 <tr>
        <td><?php echo $prof['id']; ?></td>
        <td><?php echo $prof['name']; ?></td>
		<td><?php echo $prof['email']; ?></td>
      </tr>
    </tbody>
	<?php } ?>
  </table>
	  
	  
      
    </div>
    
  </div>
</div>

</body>
</html>