<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="/Common/common.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script src="/Common/common.js">
    </script>
    <script src="./register.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php
    $msg = "";

    if (isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];

        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if (empty($full_name) || empty($email) || empty($password) || empty($cpassword)) {
            $msg = "<div class='alert alert-danger'>All fields are required.</div>";
        }else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "<div class='alert alert-danger'>Enter a valid email.</div>";
            }else {
                
                    if ($password !== $cpassword) {
                        $msg = "<div class='alert alert-danger'>Password and confirm password do not match.</div>";
                    }else {
                        $msg = "<div class='alert alert-success'>Register successfully completed.</div>";
                        $full_name = "";
                        $email = "";
                     
                        $password = "";
                        $cpassword = "";
                    }
                }
            }
        }
    
?>

<nav>
  <ul class="menu">
      <li class="logo"><a href="#">GameAddict</a></li>
      <li class="item"><a href="/Home/unregistered
.php">Home</a></li>
      <li class="item"><a href="/About/about
.php">About</a></li>
      <li class="item"><a href="/About/team
.php">Our Team</a></li>
      <li class="item"><a href="/Contact/contact
.php">Contact</a></li>
      </li>
      <li class="item button"><a href="/Authentication/login
.php">Log In</a></li>
      <li class="item button secondary"><a href="/Authentication/register
.php">Sign Up</a></li>
      <li class="toggle"><span class="bars"></span></li>
  </ul>
</nav>
<script>
    Validated = false;
</script>

<script>
    Validated = false;
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Validation PHP - Brave Coder</title>
</head>

<body>
    <div class="wrapper">
        <h2 class="title">Register</h2>
        <?php echo $msg; ?>
        <form action="" method="post" class="form">
            <div class="input-field">
                <label for="full_name" class="input-label">Full Name</label>
                <input type="text" name="full_name" class="input" id="full_name" placeholder="Enter your full name"
                    value="<?php if (isset($_POST['submit'])) { echo $full_name; } ?>">
            </div>
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="text" name="email" class="input" id="email" placeholder="Enter your email"
                    value="<?php if (isset($_POST['submit'])) { echo $email; } ?>">
            </div>
          
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" class="input" id="password" placeholder="Enter your password"
                    value="<?php if (isset($_POST['submit'])) { echo $password; } ?>">
            </div>
            <div class="input-field">
                <label for="cpassword" class="input-label">Confirm Password</label>
                <input type="password" name="cpassword" class="input" id="cpassword"
                    placeholder="Enter confirm password"
                    value="<?php if (isset($_POST['submit'])) { echo $cpassword; } ?>">
            </div>


            <input style="margin-top: 1vh;" type="submit" value="Register" name="submit" class="btn" onclick="window.location='https:/'" class="btn">

            <p style="margin-left: 1.25vh; margin-top:1.5vh;">Already have an account? <a href="./login.php">Login Now!</a></p>
            
        </form>
    </div>
</body>

</html>
</body>
</html>