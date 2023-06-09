<?php include 'header.php' ?>

<html>
<head>
  <title>Google Sign-In Example</title>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
</head>
    <div class="bg-dark text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <h3 class="text-center mt-5">Login</h3>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <hr>
          <div class="g-signin2" data-onsuccess="onSignIn">
          <div class="text-center">
            <p>Or sign in with:</p>
            <a href="#" class="btn btn-danger">Google</a>
          </div>
          </div>
          <div class="text-center mt-3">
            <p>Don't have an account?</p>
            <a href="register.php" class="btn btn-link">Register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
    </div>
</html>
<?php
// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the credentials
  if (validateCredentials($username, $password)) {
    // Redirect to the dashboard or desired page upon successful login
    header('Location: dashboard.php');
    exit();
  } else {
    // Display an error message for invalid credentials
    echo "Invalid username or password.";
  }
}

// Function to validate user credentials against a database
function validateCredentials($username, $password) {
  // Replace this with your own code to query the database and validate the credentials
  // Example: Checking against a users table with username and hashed password
  $validUsername = 'admin';
  $validPasswordHash = '$2y$10$C7Tz5NwY4NPA.BKsmQMuYOZoJ6P0/f4aQa41InEh/MWlzhXmWmuWe'; // Example password hash
  
  // Perform the validation
  if ($username === $validUsername && password_verify($password, $validPasswordHash)) {
    // Valid credentials
    return true;
  } else {
    // Invalid credentials
    return false;
  }
}
?>

<?php include 'footer.php' ?>