<?php if (!isset($_SESSION["id"])): ?>
<form action="signup.php" method="post" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="clg">College:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="clg" name="clg" placeholder="Enter College">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="city">City:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tel">Contact Info:</label>
    <div class="col-sm-8">
      <input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter Telephone no.">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter correct email address">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter strong password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cpwd">Confirm Password:</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Retype password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Gender:</label>
    <div class="col-sm-8">
        <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
        <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-primary">SignUp</button>
    </div>
  </div>
</form>
<?php else: ?>
  <h1>Sorry!</h1>
  <h3>You must be logged out.</h3>
<?php endif ?>