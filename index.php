<?php 
  include("./backend/path.php");
  include("./backend/config/config.php");
  include("./backend/config/create_tables.php");

  // Initialize variables
  $error = "";

  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $password = $_POST['password'];

      // Verify the password
      if ($password === "1111") {
          header("Location: ./pages/dashboard.php");
          exit;
      } else {
          $error = "Invalid password. Please try again.";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
  <div class="login-container">
    <h3 class="text-center mb-4">School Admin Login</h3>
    <?php if ($error): ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>