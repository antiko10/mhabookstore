<?php  
session_start();

# If the admin is logged in
if (!isset($_SESSION['user_id']) &&
    !isset($_SESSION['user_email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>LOGIN</title>
    <!-- bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div>
		<form class="div"
		      method="POST"
		      action="php/auth.php">
			  
			  <h2>ADMIN SIGNIN PAGE</h2><br>
			  <h5>LOGIN</h5>
		  <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
			  <?=htmlspecialchars($_GET['error']); ?>
		  </div>
		  <?php } ?><br><br>
		    <input type="email"        name="email" 	   placeholder="Enter Your Username"
		          ><br><br>
		  
		  
		    
		    <input type="password" 
		           
		           name="password" 
				   placeholder="Enter Your Password"
		          >
		 


		  <button type="submit" class="btn">Login</button>
		   
		</form>
	</div>
</body>
</html>

<?php }else{
  header("Location: admin.php");
  exit;
} ?>