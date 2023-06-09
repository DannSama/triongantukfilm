<?php include 'header.php' ?>
<html>
    <div class="bg-dark text-white">
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <h3 class="text-center mt-5">Register</h3>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Enter your username">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">address</label>
            <input type="address" class="form-control" id="address" name="address" placeholder="Enter your address">
          </div>
          <div class="mb-3">
          <div class="form-check">
  <input class="form-check-input" type="radio" name="male" id="male" value="male">
  <label class="form-check-label" for="male">
    Male
  </label>
</div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="female" id="female" value="female">
        <label class="form-check-label" for="female">
        Female
        </label>
    </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-primary">submit</button>
          <hr>
        </form>
      </div>
    </div>
  </div>
    </div>
</html>
<?php include 'footer.php' ?>
<?php 
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

if ($password === $confirmPassword) {
    echo "Password confirmed!";
    header('Location: index.php');
exit;
} else {
    
    echo '<script>alert("password in does not match");</script>';
}
 ?>