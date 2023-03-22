<?php


if (isset($_POST['login'])) {
  include"config.php";
  $username = $_POST['username'];
  $password = $_POST['password'];
 
  
  $result_query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";

  $user_result = mysqli_query($con, $result_query);

 
  

  if (!$user_result) {
    echo "Error: " . mysqli_error($con);
    exit();
  }

 

  

  // Check if the query returned any rows
  if (mysqli_num_rows($user_result) > 0) {
      // User has been found, log them in
      // echo "Logged in successfully";
     
      // set session variables and redirect to admin page
session_start();
$_SESSION['username'] = $username;
$_SESSION['user_type'] = 'admin';
// echo "<script>showMessage();</script>";
header("Location: dashboard.php");
exit();
      
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Restaurant Management System</title>
  <link rel="stylesheet" href="design.css">
</head>
<body>
  <header class="header-section">
    <nav class="Nav-bar">
      <h1>Restaurant</h1>
      <ul type="none" class="nav_link_list">
        <li><a href="#days">AboutUs</a></li>
        <li><a href="#days">Contact us</a></li>
        <li><a href="#days">Book us</a></li>
      </ul>
    </nav>
  </header>
  <center>
    <form method="POST"action = "login.php">
    <div class="box">
      <h1>Login Form</h1>
      <?php if (isset($error)) : ?>
        <div style="color: red;"><?php echo $error; ?></div>
      <?php endif; ?>
      <div >
        <!-- <label for="username" class="username-label">Username</label> -->
        <input type="text" placeholder="Username" name="username" required>
      </div>
      <div>
        <!-- <label for="password" class="password-label">Password</label> -->
        <input type="password"  placeholder="Password" name="password" required >
      </div>
      <div>
        <input type="submit" value="Login" name="login">
      </div>
    </div>
    </form>
  </center>
</body>
</html>

