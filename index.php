<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login | Hospital Management</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style_new.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<?php
if((isset($_GET['pid']))&&($_GET['pid']==01)) {
    require("include/dbinfo.php");
    $link=mysqli_connect($server,$user,$pass)or die(errorReport(mysqli_error()));
    mysqli_select_db($link, $db)or die(errorReport(mysqli_error()));
    $username=$_POST['login'];
    $result=mysqli_query($link, "select * from Passwords where Username='$username'");
    if($row=mysqli_fetch_array($result))
    {
        if((!strcmp($row['Username'],$_POST['login']))&&(!strcmp($row['Password'],$_POST['password'])))
        {
            $username=$_POST['login'];
            $result=mysqli_query($link, "select * from Session where Username='$username'");
            $row=mysqli_fetch_array($result);
            if(strcmp($row['Username'],""))
            {
                echo "<script type=\"text/javascript\">alert(\"Multiple logins not allowed. Access Denied.\")</script>";
                header('Location: error.php');
            }
            else
            {
                session_start();
                $sessionid=$_COOKIE['PHPSESSID'];
                $_SESSION['username']=$username;
                mysqli_query($link, "insert into Session value ('$username','$sessionid')"); // Thinking of adding privileges here
                setcookie("username",$_POST['login'],time()+3600);
                header('Location: login.php');
            }
        }
        else echo "<script type=\"text/javascript\">alert(\"Wrong Password. Access Denied.\")</script>";
    }
    else echo "<script type=\"text/javascript\">alert(\"Username doesn't exist.\")</script>";
}
if((isset($_GET['pid']))&&($_GET['pid']==02)) {
    require("include/dbinfo.php");
    $link=mysqli_connect($server,$user,$pass)or die(errorReport(mysqli_error()));
    mysqli_select_db($link, $db)or die(errorReport(mysqli_error()));
    $newname=$_POST['user'];
    $password=$_POST['passwd'];
    $cpassword=$_POST['conpasswd'];
    if(!strcmp($password, $cpassword)) {
        $result=mysqli_query($link, "select * from Passwords where Username='$newname'");
        $empresult=mysqli_query($link, "select * from Employee where Username='$newname'");
        if(!mysqli_fetch_array($result) && @mysqli_fetch_array($empresult)) {
            mysqli_query($link, "insert into Passwords value (\"$newname\",\"$password\");"); 
            echo "<script type=\"text/javascript\">alert(\"New User Added.\")</script>";
        }
        else 
            echo "<script type=\"text/javascript\">alert(\"Username already exist, or is not a Employee\")</script>";
    }
    else
        echo "<script type=\"text/javascript\">alert(\"Passwords Don't match.\")</script>";
}
?>
<br/>
<div text-color='#000000'><h1> Hospital Management</h1></div>

<div class="form">
    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>
      
<div class="tab-content">
    <div id="signup">   
        <h1>Sign Up</h1>
        <form action="index.php?pid=02" method="post">
    <!--
        <div class="top-row">
            <div class="field-wrap">
            <label>
                First Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
            <label>
                Last Name<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
            </div>
        </div>
    -->

        <div class="field-wrap">
            <label>
                Enter A Username<span class="req">*</span>
            </label>
            <input type="text" name="user" required autocomplete="off"/>
        </div>

        <div class="field-wrap">
            <label>
                Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="passwd" required autocomplete="off"/>
        </div>
        
        <div class="field-wrap">
            <label>
                Confirm Password<span class="req">*</span>
            </label>
            <input type="password" name="conpasswd" required autocomplete="off"/>
        </div>
        <p class="submit"><input type="submit" name="commit" value="Create Account"></p>

    </form>
</div>

    <div id="login">   
        <h1>Welcome Back!</h1>
        <form method="post" action="index.php?pid=01">
        <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="login" value=""></p>
        </div>
        
        <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" value=""></p>
        </div>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
        </div>
    </div><!-- tab-content -->
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
<script  src="js/index.js"></script>























<!--

<h1><center>Hospital Management System</center></h1>
  <section class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="post" action="index.php?pid=01">
        <p><input class="tab active" type="text" name="login" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

  </section>
-->
</body>
</html>
