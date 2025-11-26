<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | My Daily Journal</title>
  <link rel="icon" href="img/logo.webp" type="image/webp" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center" 
style="
  min-height: 100vh;
  background: linear-gradient(135deg, #e0f7fa, #b2ebf2);
  font-family: 'Inter', sans-serif;
">

  <div class="card shadow-lg border-0 rounded-4 p-4" 
  style="width: 420px; background-color: rgba(255, 255, 255, 0.95);">
    <div class="text-center mb-3">
      <i class="bi bi-person-circle display-3" style="color: #0288d1;"></i>
      <h4 class="mt-2 fw-bold" style="color: #0288d1;">My Daily Journal</h4>
    </div>
    <hr>

    <form action="" method="post">
      <input type="text" name="user" class="form-control form-control-lg rounded-4 mb-3" placeholder="Username" required>
      <input type="password" name="pass" class="form-control form-control-lg rounded-4 mb-4" placeholder="Password" required>

      <button type="submit" class="btn text-white w-100 rounded-4 py-2 fw-semibold" 
      style="background-color: #0288d1; border: none; transition: 0.3s;">
        Login
      </button>
    </form>
  </div>

  <?php
  //set variable username dan password dummy
  $username = "admin";
  $password = "123456";

  $status = "";

  //check apakah ada request POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      //check username dan password
      if ($_POST['user'] == $username && $_POST['pass'] == $password) {
          $status =
              "<div class='alert alert-success text-center rounded-4 py-2 shadow-sm'>
                  <div class='mb-1'>Username : <b>{$_POST['user']}</b></div>
                  <div class='mb-1'>Password : <b>{$_POST['pass']}</b></div>
                  <hr>
                  Username dan Password Benar
              </div>";
      } else {
          $status =
              "<div class='alert alert-danger text-center rounded-4 py-2 shadow-sm'>
                  <div class='mb-1'>Username : <b>{$_POST['user']}</b></div>
                  <div class='mb-1'>Password : <b>{$_POST['pass']}</b></div>
                  <hr>
                  Username dan Password Salah
              </div>";
      }
  }
  ?>
  
  <?php if ($status != "") { ?>
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="min-width: 320px;">
      <?= $status ?>
    </div>
  <?php } ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>