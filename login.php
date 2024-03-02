<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/index.css">
    
    
    <title>Sunkoshi Municipality</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="media container-fluid">
      <div class="mr-auto">
		    <a href="https://www.facebook.com" class="fa fa-facebook"></a>
		    <a href="https://www.twitter.com" class="fa fa-twitter"></a>
		  </div>
		  <div class="ml-auto" style="padding: 5px; color: #234A83;">
		    <i class="fa fa-phone-square">01-6921118</i>
		    <i class="fa fa-envelope">info@sunkoshimunsindhuli.gov.np</i>
		  </div>
    </div>
  <section id="logo">
    <div class="container-fluid text-center">
      <img src="images/logo.png" alt="Logo" height="105" style="padding-left: 30px; float: left;">
      <img src="images/nepal.gif" alt="Nepali flag" height="105" style="padding-right: 30px; float: right;">
      <p style="color: #E8E6E6; font-size: 24px; padding-top: 50px; font-family: Times New Roman,sans-serif;">Welcome To Sunkoshi Municipality</p>
    </div>
  </section>
  <section id="page" style="height: 500px; padding: 20px;">
   <center>
    <h4 style="color: #234A83;">Login Page</h4>
    <?php
      if ($_POST) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $encpassword=md5($password);
        //establish a database connection
        $con=mysqli_connect('localhost', 'root' ,'', 'sunkoshi');
        //
        $sql="SELECT * from user where Username='$username' and Password='$encpassword'";
        $res=mysqli_query($con,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
          session_start();
          $_SESSION['Username']=$username;
          header("location:homepage.php");
        }
        else
        {
          echo '<p class=text-danger>Login Failed!</p>';
        }
      }
      ?>
    
    <form action="" method="POST"> 
      <div class="form-group">
        <label>Username:</label>
        <input type="text" class="form-control" name="username" placeholder="Enter username" id="username" required>
      </div>

      <div class="form-group">
          <label>Password:</label>
          <input type="password" class="form-control" name="password" placeholder="Enter password" id="password" required>
      </div>

      <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
      </div> 

      <div class="form-group">
        <button type="submit" name="login" class="btn btn-primary" >Login</button>
      </div>
      <p>Not a User? <a href="register.php">Register Here</a>.</p>     
    </form>
    <p style="padding: 10px;">* By logging in, you agree to our Terms and acknowledge that you read our Privacy Policy.</p>
  </center>
</section>   
<div class="container-fluid text-center" style="color: #E8E6E6; background-color: #234A83; height: 60px; padding: 10px;">
  <p> © 2019 Sunkoshi Municipality</p>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
