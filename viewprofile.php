<?php
session_start();
if (!empty($_SESSION["username"])){
	echo '<br>User IC: ' . $_SESSION["username"];
} else{
	echo ' <br>Welcome Guest,';
}
?>
<?php
include 'dbconnection.php';

$id1=$_SESSION["username"];
echo $id1;

   
    $query = "SELECT * FROM customer_table WHERE Ic = '$id1'";
    $result=mysqli_query($connection,$query);

    //last step
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elder Rumah Appointment</title>
    <link rel="shortcut icon" href="logo.png"/>
	<link href="website_settings.css" rel="stylesheet" type="text/css"/>
	<script src="aa06e83e4b.js"></script>
    <link rel="stylesheet" href="ionicons.min.css"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <style>
	#wrapper
	{
	width:1500px;
	margin:0,auto;
	margin-left:200px;
	text-decoration:none;
	}
	

#wrapper1
	{
	width:1500px;
	margin:0,auto;
	margin-left:200px;
	text-decoration:none;
	}


#header1
	{
	width:1500px;
	height:30px;
	background-color:#56A5EC;
	clear:both;
	padding-top:-50px;
	}

#word1
	{
	margin-top:-12px;
	margin-left:1000px;
	padding-left:20px;
	}

#header2
	{
	width:1500px;
	height:120px;
	background-color:#5CB3FF;
	}

.square
	{
	height:120px;
	width:180px;
	float:left;
    border-radius:50%
	}

.square1
	{
	height:120px;
	width:300px;
	object-fit: contain;
	margin-left: 350px;
	}
	
.square2
	{
	width: 300px;
	height:120px;
	float:right;
	margin-top:40px;
    margin-left: 350px;
	word-spacing:1px;
	}
/*navigation*/ 
	#nav
	{
	height:50px;
	width:1500px;
	background-color:gray;
	position:absolute;
    text-align:center;
	}

	#nav li 
	{
	display:inline;
	float: left;
	}
	
	#nav li a
	{
	display: block;
  	color: #333;
  	text-align:justify;
  	text-decoration:none;
	}
	
	#nav li a:hover 
	{
  	background-color: gray;
	}
	
	#nav a 
	{
  	display: block;
  	padding:16px;
 	background-color: gray;
	}
	
	#nav ul
	{
	list-style-type: none;
  	margin: 0;
  	padding: 0;
 	margin: 0;
  	padding: 0;
  	background-color: gray;
	}

/*navigation*/

.title{
	position:absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%); 
	color:white;
	font-size:30px;
	}	
	
.button{
	position:absolute;
	top: 61%;
	left:50%;
	transform: translate(-50%,-50%);
}

.body1
{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(old_man_bg.jpg);
	background-size: cover;

}

.footer-dark {
  height:250px;
  width:1500px;
  margin-top: 0px;
  margin-left: 0px;
  padding:50px 0;
  color:#f0f9ff;
  background-color:black;
  padding:25px;
  text-decoration:none;
  padding:20px 20px;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}

#content1{
    height:550px;
    width: 1500px;
    float:center;
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(bg.jpg);
	  background-size: cover;
}

#innercontent{
    width:1500px;
    height:300px;
    text-align:center;
}

#box1{
    width:500px;
    height:300px;
    background-color:orange;
    margin-top:50px;
    text-align:center;
}

#box2{
    width:500px;
    height:300px;
    background-color:green;
    margin-left:500px;
    margin-top:-320px;
    text-align:center;
}

#box3{
    width:500px;
    height:300px;
    background-color:blue;
    float:right;
    margin-top: -300px;
    text-align:center;
}

#box4{
    width:500px;
    height:300px;
    background-color:yellow;
    float:left;
    text-align:center;
}

#content2{
    height:50px;
    width: 1500px;
    float:center;
    background-color:yellow;
    margin-top:-19px;
}
#backbutton{
    margin-top:-40px;
}

#word2{
    margin-left:675px;
}

#content3{
  width:1500px;
  margin-top:-20px;
  margin-left:650px;
  
}

#content4{
  margin-top: 20px;
}



</style>

</head>

<body class="body1">
   
	<div id="wrapper">
		<div id="header1">
			<br/>
				<div id="word1">	
				<i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Contact us 60+ 18 7703883               
				</div>
		</div>
		<div id="header2">
    <a href="index.php"><img class="square" src="old_man_logo.jpg" alt="old_man_logo" title="elder_rumah_system"/>
			<img class="square1" src="text.png" alt="best_price" title="best_price"/>
			<div class="square2">
			<?php if (!empty($_SESSION["username"])){?>
      
				<a href="viewprofile.php"><img height="80px" src="profile.jpg" width="99px" class="auto-style1" /></a>
                <a href="customerlogout.php"><img height="80px" src="logout.png" width="99px" class="auto-style1" /></a> 
			</div>
            
		
			<?php } else {?>
			<div class="square3">
				<a href="assignment_login.php"><img height="80px" src="login1.png" width="99px" class="auto-style1" /></a>
                <a href="assignment_signup.php"><img height="80px" src="signup.png" width="99px" class="auto-style1" /></a> 
			</div>
			<?php }?>	
		</div>
    <div id = "content2">
      <div id= "word2">
        <h2>Your Profile</h2>
      </div>
      <div id = "backbutton">
        <a href="index.php"><input type="submit"  style ="font-size: 30px" value="Back" name="back"></a>
      </div>
    </div>	
      
        <div id = "content1">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div id = "content3">
                    <div id="content4">
                      <h3>Press First Name to edit profile</h3>
                      <h2>First Name: <a href="customeredit.php?id=<?php echo $row['First Name']; ?>"><?php echo $row['First Name']; ?></a></h2>
                      <h2>Last Name: <?php echo $row['Last Name']; ?></h2>
                      <h2>IC No.: <?php echo $row['Ic']; ?></h2>
                      <h2>Gender: <?php echo $row['Gender']; ?></h2>
                      <h2>Password: <?php echo $row['Password']; ?></h2>
                      <h2>Email: <?php echo $row['Email']; ?></h2>
                      <h2>Address: <?php echo $row['Address']; ?></h2>
                    </div>
                </div>
            <?php } ?>
        </table>
    </div>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
         <h2>About us</h2>
         <i class="fa fa-envelope-o" aria-hidden="true"></i>henryheng1577@gmail.com
         <br/><br/>
		<i class="fa fa-envelope-o" aria-hidden="true"></i>huang5451@gmail.com
		
</ul>

                    </div>
                                        <div class="col-sm-6 col-md-3 item">

                    </div>
                                        <h2>Thank You For Using</h2>
                </div>
                <p class="copyright">Elder Rumah Online Management System © 2022</p>
            </div>
        </footer>
    </div>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script></div>
    
 </body>
 </html>