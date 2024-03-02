
<!DOCTYPE html>
<html lang="en">
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

<section id="edit">
<center>
   <h2 style="color: #234A83;">Update Industrial Data</h2>
    <strong>*Please edit the input values and submit to update the record.</strong>
  <?php
    $id = $_GET['id'];
    // Establish database connection
    $con = mysqli_connect('localhost', 'root', '', 'sunkoshi');
    if ($_POST) {
    $name = $_POST['indname'];
    $location = $_POST['location'];
    $date = $_POST['estdate'];
    $type = $_POST['type'];

    $sql1 = "UPDATE industrial SET
      Indus_name = '$name',
    Location = '$location', Established_date = '$date', Indus_type = '$type'
      WHERE
      Indus_id = $id";

    $res1 = mysqli_query($con, $sql1);

    if ($res1) {
      echo '<p class=text-success><b>Update successful</p>';
    } else {
      echo '<p class=text-danger>Update failed</p>';
    }
  }
     $sql = "SELECT * FROM industrial WHERE Indus_id = $id";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);

  ?>
 
  <form method='POST' action="">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Industrial Name</td>
            <td> <input required type="text" class="form-control" name="indname" value=<?php echo $row['Indus_name']; ?>></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><input type="text" class="form-control" name="location" required value=<?php echo $row['Location']; ?>></td>
        </tr>
        <tr>
            <td>Established Date</td>
            <td><input required type="Date" class="form-control" name="estdate" value=<?php echo $row['Established_date']; ?>></td>
        </tr>
        <tr>
          <td>Industrial Type</td>
          <td>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="type" value="Local" required>
            <label class="form-check-label">Local</label>
        </div>
        <div class="form-check">
          <input required class="form-check-input" type="radio" name="type" value="Mini">
          <label class="form-check-label">Mini</label>
        </div>
        <div class="form-check">
          <input required class="form-check-input" type="radio" name="type" value="Micro">
          <label class="form-check-label">Micro</label>
        </div>
       </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Submit' class='btn btn-primary'>
                <a href='industrialdata.php' class='btn btn-danger'>Back</a>
            </td>
        </tr>
    </table>
</form>
</center>
</section>

</section>
<div class="container-fluid text-center" style="color: #E8E6E6; background-color: #234A83; height: 55px; padding: 10px;">
  <p> © 2019 Sunkoshi Municipality</p>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
