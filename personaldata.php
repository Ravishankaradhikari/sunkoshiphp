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
<body>
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
        <li class="nav-item active">
          <a class="nav-link" href="personaldata.php">Personal Data<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="organizationaldata.php">Organizational Data</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="industrialdata.php">Industrial Data</a>
        </li>        
        </div>
        <div class="ml-auto">
      <a class="btn btn-primary" href="homepage.php" role="button">Back</a>
    </div>
  </nav>
<section class="pertb">
  <div class="container-fluid">
  <?php
    $con=mysqli_connect('localhost','root','','sunkoshi');
    $sql='SELECT *FROM personal';
    $res=mysqli_query($con,$sql);

    $result=array();
    while($row=mysqli_fetch_assoc($res))
    {
      $result[]=$row;
    }
  ?>
 <div class="table-wrapper-scroll-y my-custom-scrollbar">
  <table class="table table-bordered table-striped mb-0">
    <thead>
      <tr>
      <th scope="col">Personal ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Address</th>
     <th scope="col">Gender</th>
      <th scope="col">Profession</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 
    <?php foreach ($result as $value) {?>
      <tr>
        <th scope="row"><?php echo $value['Personal_id'];?></th>
        <td><?php echo $value['First_name'];?></td>
        <td><?php echo $value['Last_name'];?></td>
        <td><?php echo $value['Date_of_Birth'];?></td>
        <td><?php echo $value['Address'];?></td>
        <td><?php echo $value['Gender'];?></td>
        <td><?php echo $value['Profession'];?></td>
        <td><a class="btn btn-primary" href="personaledit.php?id=<?php echo $value['Personal_id']?>">Edit</a>
          <a class="btn btn-danger" href="personaldelete.php?id=<?php echo $value['Personal_id']?>">Delete</a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</div>
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