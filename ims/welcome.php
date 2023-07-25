<!DOCTYPE html>
<html>
<head>
  <title>Inventory Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #FCEBDB;
      margin: 0;
      padding: 0;
	  background-image: url('welcome.jpg');
    }
    
    .header {
      background-color: #000000;
      padding: 2px;
      color: #fff;
	  
    }
    
    .header-logo {
      width: 10px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 20px;
    }
    
    .content {
      margin-top: 200px;
	  font-size: 30px;
	  text-decoration: underline overline;
	  color: #E0B464;
	  
    }
    
    .login-button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 20px;
      border-radius: 5px;
      background-color: #9B7C73;
      color: #fff;
      text-decoration: none;
      margin: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="wibu.png" alt="Company Logo" class="header">
  </div>
  
  <div class="content">
    <h1>Inventory Management System</h1>
    <a href="login.php" class="login-button">Admin Login</a>
    <a href="loginAdmin.php" class="login-button">Staff Login</a>
  </div>
</body>
</html>
