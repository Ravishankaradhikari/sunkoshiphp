<!DOCTYPE html>
<html>
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
      <p style="color: #E8E6E6; font-size: 24px; padding-top: 50px; font-family: Times New Roman,sans-serif;">Sunkoshi Municipality</p>
    </div>
  </section>
  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #E8E6E6; height: 50px; font-size: 20px; padding: 30px;">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>        
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Data Entry</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="personal.php">Personal</a>
            <a class="dropdown-item" href="organizational.php">Organizational</a>
            <a class="dropdown-item" href="industrial.php">Industrial</a>
          </div>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="personaldata.php">Data</a>
       </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      </div>
      <div class="ml-auto">
        <a class="btn btn-primary" href="logout.php" role="button">Logout</a>
      </div>
  </nav>
<section id="organizational">
  <center>
    <h4 style="color: #234A83; ">Organizational Details</h4>
    <?php
      if($_POST)
      {
        $orgname = $_POST['orgname'];
        $location = $_POST['location'];
        $estdate = $_POST['estdate'];
        $owned = $_POST['owned'];
        $type = $_POST['indtype'];

        if (empty($orgname) || empty($location) ||empty($estdate)|| empty($owned) || empty($type)) 
        {
         echo '<p class=text-danger>*Please fill in the requested field</p>';
        }
        else
        {
        $con=mysqli_connect('localhost', 'root', '', 'sunkoshi');
        $rem ="INSERT INTO organizational(Org_name, Location, Established_date, Org_ownership, Org_type) VALUES('$orgname', '$location', '$estdate', '$owned', '$type')";
          mysqli_query($con, $rem);
          echo '<p class=text-success>*Organizational Details Inserted Successfully</p>'; 
          header('location: organizationaldata.php'); 
        }
      }
    ?>
  <form method="POST" action="">
    <div class="form-group">
      <label>Organization Name</label>
          <input type="text" class="form-control" placeholder="Enter Organization Name" name="orgname" required>
    </div>
    <div class="form-group">
      <label>Location</label>
      <input type="text" class="form-control" placeholder="Enter Location" name="location" required>
    </div>
    <div class="form-group">
      <label>Established Date</label>
      <input type="Date" class="form-control" name="estdate" required>
    </div>

    <div class="form-group row">
      <div class="col-sm-2">Owned<br>By:</div>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" value="Private" name="owned" required>
          <label class="form-check-label">Private</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="Government" name="owned">
          <label class="form-check-label">Government</label>
        </div>
      </div>
    </div> 
    
    <div class="form-group row">
      <div class="col-sm-2">Type:</div>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" value="School" name="indtype" required>
          <label class="form-check-label">School</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="Hospital" name="indtype">
          <label class="form-check-label">Hospital</label>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</center>
</section>
<section id="footer">
<div class="row container-fluid">
  <div class="col-sm-4" style="padding: 20px;">
    <h3>Notices</h3><hr>
    <ul type="disc">
      <li><a href="#">सूचना तथा समाचार</a></li>
      <li><a href="#">सार्वजनिक खरीद /बोलपत्र सूचना</a></li>
      <li><a href="#">एन, कानुन तथा निर्देशिका</a></li>
      <li><a href="#">कर तथा शुल्कहरु</a></li>
    </ul>
  </div>
  <div class="col-sm-4" style="padding: 20px;">
    <h3>eGov Services</h3><hr>
    <ul type="disc">
      <li><a href="#"> घटना दर्ता</a></li>
      <li><a href="#">सामाजिक सुरक्षा</a></li>
      <li><a href="#">नागरिक वडापत्र</a></li>
    </ul>
  </div>
  <div class="col-sm-4" style="padding: 20px;">
    <h3>Location</h3><hr>  
    <div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d784.2231917062763!2d85.9001437193753!3d27.40670795162807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb937400000001%3A0x14acca8cce0ed6ea!2sSunkoshi+Gaunpalika+Office!5e1!3m2!1sen!2snp!4v1560842453873!5m2!1sen!2snp" allowfullscreen=""></iframe>
    </div>    
  </div>
</div>
</section>
<div class="container-fluid text-center" style="color: #E8E6E6; background-color: #234A83; height: 55px; padding: 10px;">
  <p> © 2019 Sunkoshi Municipality</p>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>