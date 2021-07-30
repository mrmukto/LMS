<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">



</head>
<body>

<form method="post" action="user_login.php">
  <div class="header">
    <h1>login</h1>
  </div>
    <p>Please fill in this form to login.</p>
    <hr>
    
    <div class="input-group">
     <label>Username</label>
     <input type="text" name="username" required>
    </div>

   
<div class="input-group">
     <label>Password</label>
     <input type="password" name="password_1" required>
    </div>


    
<div class="input-group">
    <button type="submit" name="login" class="btn">login</button>
  </div>

<p> Not yet register? <a href="registration.php">Sign up</a> </p>
  
</form>

</body>
</html>