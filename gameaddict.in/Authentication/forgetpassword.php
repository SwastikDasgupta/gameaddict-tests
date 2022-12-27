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

<?php
    $msg = "";

    if (isset($_POST['submit'])) {
        $username = $_POST['
username'];
        $email = $_POST['email'];


        if (empty($username) || empty($email)) {
            $msg = "<div class='alert alert-danger'>All fields are required.</div>";
        }else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "<div class='alert alert-danger'>Enter a valid email.</div>";
            }else {
                
                   
                        $msg = "<div class='alert alert-success'>Please check your mail inbox to get back in your account</div>";
                        $username = "";
                        $email = "";
                     
                     
                    }
                }
            }
        
    
?>

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
        <h2 class="title">Recover</h2>
       
        <form action="" method="post" class="form">
        <?php echo $msg; ?>
            <div class="input-field">
                <label for="
username" class="input-label">Full Name</label>
                <input type="text" name="
username" class="input" id="
username" placeholder="Enter your full name"
                    value="<?php if (isset($_POST['submit'])) { echo $username; } ?>">
            </div>
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="text" name="email" class="input" id="email" placeholder="Enter your email"
                    value="<?php if (isset($_POST['submit'])) { echo $email; } ?>">
            </div>
          
            
            <button type="submit" name="submit" class="btn" onclick="">Recover</button>
            <p style="margin-left: 1.25vh; margin-top:1vh">Already have an account? <a href="./login.php">Login Now!</a></p>
        </form>
    </div>
</body>

</html>
</body>
</html>