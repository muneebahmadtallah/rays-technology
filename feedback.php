<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Title Here</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  include 'slider.php';
  ?>

  <!-- feedback area -->
<section class="feedback-area pb-60">
    <div class="container">
        <h1 class="text-center pt-40 pb-60">FEEDBACK</h1>
        <p class="text-center">Please use the following form for sending us any query or comments</p><br>
<div class="row justify-content-center">
    <div class="col-md-8">

<form class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Your Name:</label>
    <input type="text" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Company Name:</label>
    <input type="text" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Country:</label>
    <input type="country" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Phone:</label>
    <input type="text" class="form-control">
  </div>
   <div class="col-md-6">
    <label class="form-label">Fax:</label>
    <input type="country" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" class="form-control">
  </div>
  <div class="col-12">
    <label class="form-label">Postal Address</label>
    <input type="text" class="form-control">
  </div>
  <div class="col-12">
  <label class="form-label">Your Requirement:</label>
  <textarea class="form-control" rows="3"></textarea>
  </div>
  
</form>


</div>
</div>
    </div>
</section>



<?php
include 'footer.php';
?>




  

</body>
</html>