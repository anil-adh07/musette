<?php
  session_start();
  $acc=$_SESSION["username"];
  if (!empty($acc))
  {
    $dir=$_SESSION["directory"];
    if (!empty($dir))
    {
      header('location: artist.php');
      die();
    }
    else
    {
      header('location: loged-user.htm');
      die();
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Musette</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/theme.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/validate-form.js"></script>
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top" id="header">
	<img src="logo.png" alt="logo" id="logo">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MUSETTE</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
          	  <li>
          	  	<form class="navbar-form navbar-left">
            		<input type="text" class="form-control" placeholder="Search...">
          		</form>
          	  </li>
              <li class="dropdown" id="theme">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Theme
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li onclick="changeDefault()"><a href="#">Default</a></li>
                    <li onclick="changeMidnightBlack()"><a href="#">Midnight Black</a></li>
                    <li onclick="changeRed()"><a href="#">Royal Red</a></li>
                    <li onclick="changeBlue()"><a href="#">Blue</a></li>
                    <li onclick="changeCyan()"><a href="#">Cyan</a></li>
                    <li onclick="changeAuto()"><a href="#">Choose</a></li>
                  </ul>
              </li>
              <li id="theme" data-toggle="modal" data-target="#popUpWindow"><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
<div id="popUpWindow" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 align="center" style="color:green" class="modal-title">LogIn</h3>
      </div>
      <!--Body-->
      <div class="modal-body">
        <form onsubmit="return checklogin()" action="php/login.php" role="form" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="usrname" name="usrname" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="Password" class="form-control" id="pwrd" name="pwrd" placeholder="Password">
          </div>
          <div class="form-group">
            <label>Account</label>
            <select class="form-control" name="account-type">
              <option value="User">User</option>
              <option value="Artist">Artist</option>
            </select>
          </div>
          <div class="form-group">
            <input type="checkbox" value="1"><label> Remember me</label>
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn-success" value="LOG IN">
          </div>
        </form>
        <a href="#">Forgot your password?</a></td>
      </div>
      <!--Footer-->
      <div class="modal-footer">
      <h2 align="center" class="text-primary">Signup</h2>
        <ul align="left">
              <a href="signup-artist.htm" style="text-decoration:none;"><li style="list-style-type: none;"><h3>Artist</h3></li></a>
              <a href="terms.htm" style="text-decoration:none"><li style="list-style-type: none;"><h3>User</h3></li></a>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--begins the body-->
<div class="container-fluid jumbotron">
  <div class="row">
    <div class="col-sm-3 bg-primary">
      <div class="artist">
      <div class="artist-p">
        <p align="center">popular artists</p>
      </div>
      <div class="artist-f">
        <p align="center">featured artist</p>
      </div>
      </div>      
    </div>
    <div class="col-sm-9 bg-success">
        <div class="iframe">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>      
    </div>    
  </div>    
</div>
</body>
</html>
