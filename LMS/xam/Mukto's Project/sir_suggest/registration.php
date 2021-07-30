
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

<form method="post" action="user.php">
  <div class="header">
    <h1>Register</h1>
  </div>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <div class="input-group">
     <label>Username</label>
     <input type="text" name="username" required>
    </div>

   <div class="input-group">
     <label>Email</label>
     <input type="text" name="email" required>
    </div>
   
<div class="input-group">
     <label>Password</label>
     <input type="password" name="password_1" required>
    </div>

<div class="input-group">
     <label>Confirm Password</label>
     <input type="password" name="password_2" required>
    </div>
    
<div class="input-group">
    <button type="submit" name="register" class="btn">Register</button>
  </div>

<p> Already a member? <a href="login.php">Sign in</a> </p>
  
</form>

</body>
</html>