<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/Authentication/register.css">
    <link rel="stylesheet" href="./profile.css">
    <link rel="stylesheet" href="/Common/common.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script src="/Common/common.js">
    </script>
    <script src="./profile.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body


>
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
        <h2 class="title">Your Profile</h2>
    
        <form action="" method="post" class="form">
          <img src="/Common/pictures/avatar.png" alt="" style="margin-left:94px; position: sticky; align-items: center;">
            
          <h3 style="text-align:center; position:sticky;">Swastik Dasgupta</h3>
              
            
            <input style="margin-top: 1vh;" type="button" value="Edit" name="submit" name="submit" onclick="window.location='./edit.php'" class="btn">

            <input style="margin-top: 1vh;" type="button" value="Logout" name="submit" onclick="window.location='/Authentication/login.php'" class="btn">
            </a> 
        </form>
    </div>
</body>
</html>