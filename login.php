<!DOCTYPE html>
<html>
<head>
	<title>OSP DA</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<style type="text/css">
	.head{
		margin-bottom: 50px;
		background-color: #2bbbad;
		padding: 5px;
	}
	.fhead{
		padding: 10px;
		text-align: center;
	}
	.navbar{
		text-align: right;
	}
	.navbar li{
		display: inline;
		margin: 5px;
	}
</style>
<body>
	<div class="head">
		<ul class="navbar">
			<li><a href="./login.php"><button class="btn red">LOGIN</button></a></li>
			<li><a href="./index.php"><button class="btn red">SIGNUP</button></a></li>
		</ul>
		<h2 style="text-align: center;">
			LOGIN
		</h2>
	</div>
	<div style="text-align: center;">
		    <form class="card darken-1" action="./mainlogin.php" method="post" style="display: inline-block; padding: 40px;">
		      <div class="row">
		        <div class="input-field col s12">
		          <i class="material-icons prefix">account_box</i>
		          <input id="username" name="uname" type="text" class="validate">
		          <label for="password">User Name</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <i class="material-icons prefix">verified_user</i>
		          <input id="password" name="pwd" type="password" class="validate">
		          <label for="password">Password</label>
		        </div>
		      </div>
		      <div class="row" style="text-align: center;">
		      	<button type="submit" class="btn">SUBMIT</button>
		      </div>
		    </form>
	  </div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>