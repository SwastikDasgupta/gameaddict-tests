<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/Authentication/register.css">
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
      <li class="item"><a href="../index.php">Home</a></li>
      <li class="item"><a href="/About/about(signed).php">About</a></li>
      <li class="item"><a href="/About/team(signed).php">Our Team</a></li>
      <li class="item"><a href="/Contact/contact(signed).php">Contact</a></li>
      </li>
      <li class="item button"><a href="/Profile/profile.php">Profile</a></li>
      
      <li class="toggle"><span class="bars"></span></li>
  </ul>
</nav>


    <div class="wrapper">
        <h2 class="title">Change your credentials</h2>

        <form action="" method="post" class="form">
            <div class="input-field">
                <label for="
username" class="input-label">Full Name</label>
                <input type="text" name="
username" class="input" id="
username" placeholder="Change your full name">
            </div>
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="text" name="email" class="input" id="email" placeholder="Change your email">
            </div>
          
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" class="input" id="password" placeholder="Change your password">
            </div>
            <div class="input-field">
                <label for="cpassword" class="input-label">Confirm Password</label>
                <input type="password" name="cpassword" class="input" id="cpassword" placeholder="Confirm new password">
            </div>
            <div class="input-field">
                <label for="avatar" class="input-label">Change your avatar</label>
                <input type="file" name="avatar" class="input" id="avatar" placeholder="Change your avatar" accept="img/jpg, img/png, img/jpeg, img/webp">
            </div>
        
            <a href="./profile.php">
            <input style="margin-top: 1vh;" type="button" value="Save" name="submit" name="submit" onclick="window.location='./profile.php'" class="btn">

            </a>
        </form>
    </div>
</body>
</html>