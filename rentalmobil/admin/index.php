<!DOCTYPE html>
<html>
<head>
	<title>Login | Ascen RentCar</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="align">
  <div class="grid">
    <form action="" method="post" class="form login">
      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>
      <div class="login__body">
        <div class="form__field">
          <input type="text" placeholder="Username" name="username" required>
        </div>
        <div class="form__field">
          <input type="password" placeholder="Password" name="password" required>
        </div>
      </div>
      <footer class="login__footer">
        <input type="submit" value="Login" name="login">
        <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
      </footer>
    </form>
  </div>
<?php
	if (isset($_POST['login'])){
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'db_rental');
			$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
			$myusername = mysqli_real_escape_string($db,$_POST['username']);
			$mypassword = mysqli_real_escape_string($db,$_POST['password']);
			$sql = "SELECT username FROM admin WHERE username = '$myusername' and password = '$mypassword'";
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
			if($count == 1) {
				header('Location: http://localhost/rentalmobil/backend/web/index.php?r=home');
			}else {
				$message = "Username dan Password salah!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
	?>
</body>
</html>
