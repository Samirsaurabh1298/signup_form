<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Signup</title>
  <meta name="viewport" content="width=device-with,initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">  
</head>
<body>
  
  <div class="col-sm-4">
    <div class="signup_form">
      <form class="method_form">
        <div class="form-group">
          
        <label class="label_text">First Name</label>
        <input type="text" class="form-control" name="fname" required="">
        </div>

        <div class="form-group">
          <label class="label_txt">Last Name</label>
          <input type="text" class="form-control" name="lname" required="">
        </div>

        <div class="form-group">
          <label class="label_txt">Username</label>
          <input type="text" class="form-control" name="Username" required="">
        </div>

        <div class="form-group">
          <label class="label_txt">Email</label>
          <input type="text" class="form-control" name="email" required="">
        </div>

        <div class="form-group">
          <label class="label_txt">Password</label>
          <input type="text" class="form-control" name="password" required="">
        </div>

        <div class="form-group">
          <label class="label_txt">confirm password</label>
          <input type="password" name="passwordConfirm" class="form-control" required="">
        </div>

        <button type="submit"name="signup" class="btn btn-primary btn-group-lg form_btn">Signup</button>
        <p>Have an account? <a href="login.php">Log in</a></p>
      </form>
    </div>

</div class="col-sm-4"> 
</div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
</script>   
</body>
</html>