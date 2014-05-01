 
 <?php 

//Connects to your Database 
mysql_connect("localhost", "root", "applehorsebanana") or die(mysql_error()); 
 mysql_select_db("test") or die(mysql_error()); 


 //Checks if there is a login cookie
 if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page
 { 
    $username = $_COOKIE['ID_my_site']; 

    $pass = $_COOKIE['Key_my_site'];

        $check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

    while($info = mysql_fetch_array( $check ))  

        {

        if ($pass != $info['password']) 

            {

                        }

        else

            {

            header("Location: members.php");



            }

        }

 }


 //if the login form is submitted 

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

    if(!$_POST['username'] | !$_POST['pass']) {

        die('You did not fill in a required field.');

    }

    // checks it against the database



    if (!get_magic_quotes_gpc()) {

        $_POST['email'] = addslashes($_POST['email']);

    }

    $check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

        die('That user does not exist in our database. <a href=add.php>Click Here to Register</a>');

                }

 while($info = mysql_fetch_array( $check ))     

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

    $info['password'] = stripslashes($info['password']);

    $_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

    if ($_POST['pass'] != $info['password']) {

        die('Incorrect password, please try again.');

    }
 else 

 { 

 
 // if login is ok then we add a cookie 

$_POST['username'] = stripslashes($_POST['username']); 
$hour = time() + 3600; 
setcookie(ID_my_site, $_POST['username'], $hour); 
setcookie(Key_my_site, $_POST['pass'], $hour);   
 
//then redirect them to the members area 
header("Location: members.php"); 
 } 
} 
} 

else 

{    

 

 // if they are not logged in 

 ?> 

 <!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js">
    
    
    
    <meta charset="utf-8">

    <link rel="stylesheet" href="index.css" type = "text/css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="index.js">
    
    
    
    </script>

</head>
<body>
    
    <div id="front">
        <div class="site-header" style=" background-color:#FFFFFF;">
            <div class="container" background-color:#FFFFFF;>
                <div class="row" background-color:#FFFFFF;>
                    <div class="col-md-4 col-sm-6 col-xs-6 background-color:#FFFFFF;">
                        
                        
                        <div id="try">
                           <br>
                           <img src="UofRshield.png" height="60px" width="60px" align="left" alt="URSheild">
                           <h2 ><b>UR PLANNER<b></H2>
                           
                        </div> <!-- /.logo -->
                        
                      
                       
                        
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-6" background-color:#FFFFFF;>
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                        <div class="main-menu" >
                            <ul>
                                <li><a href="#front">Home</a></li>
                                <li><a href="#services">About</a></li>
                                <li><a href="23.html">Log In</a></li>
                               
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="#front">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#products">Products</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

<style type="text/css">
.site-slider {
 
  position:relative;
  top:100px;
    background-color: #66CC99;
  padding:10px;
}
</style>

    <div class="site-slider">
    
    <h2 style="color:white; " align="center">Log In</h2>
        
               <div id=outbox style="background-color:white; width:800px; padding:10px; position:relative; left:250px;"   >
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
            <div class="form-group">
              <label class="control-label">Email: </label>
              <input type="text" name="username" maxlength="40"> 
            </div>
            <div class="form-group">
              <label class="control-label">Password: </label>
              <input type="password" name="pass" maxlength="50">                
            </div>
            <input type="submit" name="submit" value="Login"> 
          </form>
          <p class="no-account">Don't have an account? <a href="add.php">Register Now</a></p>
        </div>
      </div>

           </div> 
            
          </div>
       
		
			</div>
     
  
     
     
        </div>
      


    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <span>Copyright &copy; 2014 <a href="#">Egg Drop Soup</a> </span>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
 
</body>
</html>
<?php
}
?>