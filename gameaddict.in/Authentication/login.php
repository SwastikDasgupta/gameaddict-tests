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



<nav>
  <ul class="menu">
      <li class="logo"><a href="#">GameAddict</a></li>
      <li class="item"><a href="../home.php">Home</a></li>
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

   
        $password = $_POST['password'];
        

        if (empty($username)|| empty($password)) {
            $msg = "<div class='alert alert-danger'>All fields are required.</div>";
        }else {
   
                        $msg = "<div class='alert alert-success'>Logged in successfully</div>";
                        $username = "";
                      
                        $password = "";
                       
                    }
                }
    
?>


    <div class="wrapper">
        <h2 class="title">Login</h2>
        <?php echo $msg; ?>
        <form action="" method="post" class="form">
            <div class="input-field">
                <label for="
username" class="input-label">Username</label>
                <input type="text" name="
username" class="input" id="
username" placeholder="Enter your full name" value="<?php if (isset($_POST['submit'])) { echo $username; } ?>">
            </div>
       
            
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" class="input" id="password" placeholder="Enter your password" value="<?php if (isset($_POST['submit'])) { echo $password; } ?>">
            </div>
           
            <button type="submit" name="submit" class="btn">Login</button>
            <p style="margin-left: 1.25vh; margin-top: 1.5vh;">Dont' have an account? <a href="./register.php">Register Now!</a></p>
            <p style="margin-left: 1.25vh;">Lost your password <a href="./forgetpassword.php">Recover now!</a></p>
            <style>
                
            </style>
        </form>
    </div>
</body>
</html>