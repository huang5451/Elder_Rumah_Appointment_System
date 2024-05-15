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
$id1=$_GET['id'];
echo $id1;
    
if (isset($_POST['btnUpdate'])){
        $fname = $_POST['txtFname'];
        $lname = $_POST['txtLname'];
        $ic = $_POST['txtIc'];
        $gender= $_POST['gender'];
        $password= $_POST['txtPassword'];
        $email = $_POST['txtEmail'];
        $address= $_POST['txtAddress'];
        $UpdateQuery = "UPDATE `customer_table` SET `First Name`='$fname',`Last Name`='$lname',`Ic`='$ic',`Gender`='$gender',`Password`='$password',`Email`='$email',`Address`='$address' WHERE `First Name`='$id1'";
        if(mysqli_query($connection, $UpdateQuery)){
            echo 'Successfully Updated! ';
            header('Location: viewprofile.php');
        }else{
            echo'Failed to update';
        }
    
    }
    
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
  
.square3
	{
	width: 300px;
	height:120px;
	float:right;
	margin-top:-10px;
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
    height:700px;
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

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

#content2{
  width: 1500px;
  height: 50px;
  background-color: yellow;
  margin-top: -20px;
}

#word3{
  margin-left: 650px;
}

#backbutton{
  margin-top: -40px;
}

#content4{
  margin-left:500px;
  margin-top: -20px;
}
</style>

</head>

<body class="body1">
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
<form action="" method="get" class="form-container">
		<h1>Chat</h1>
		<label for="email"><b>Email</b></label>
		<input type="email" name="txtEmail" required/>

		<label for="msg"><b>Message</b></label>
		<textarea placeholder="Type message.." name="txtMsg" required></textarea>

		<button type="submit" name=btnSend>Send</button>
		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	</form>
	
	<?php
  include('dbconnection.php');
  if(isset($_GET['btnSend'])){
  $email=$_GET['txtEmail'];
  $feedback=$_GET['txtMsg'];

  $sqldQuery =" INSERT INTO `feedback_table`(`Email`,`Feedback`) 
  VALUES ('$email','$feedback')";
  if(mysqli_query($connection,$sqldQuery)){
    echo ' done send feedback';
  //header('Location: .php');
  } else{
    echo'Failed to send';
  		}
	}
	?>
	</div>
<script>
function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
}
</script>
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
        <div id= "content2">
          <div id="word3">
            <h2>Edit Profile</h2>
          </div>
          <div id = "backbutton">
              <a href="viewprofile.php"><input type="submit" value="Back" style ="font-size: 30px" name="back"></a>
          </div>
        </div>
        <div id = "content1">
        <?php
        $query = "SELECT * FROM customer_table WHERE `First Name` = '$id1'";
        $result = mysqli_query($connection,$query) or die(mysqli_error());
        $row = mysqli_fetch_assoc($result);
        ?>
    <div id = content4>
      <form action = "#" method ="post">
          <h2>First Name: <input type="text" name="txtFname" style ="font-size: 30px" value="<?php echo $row['First Name']; ?>"><br></h2>
          <h2>Last Name: <input type="text" name="txtLname" style ="font-size: 30px" value="<?php echo $row['Last Name']; ?>"><br></h2>
          <h2>Ic: <input type="text" name="txtIc" style ="font-size: 30px" value="<?php echo $row['Ic']; ?>"><br></h2>
          <h2>Gender <br></h2>
          <label>
              <?php $gender = $row['Gender'];?>
              <h2><input type="radio" name="gender" style ="font-size: 30px" value="Male" <?php if ($gender != "Female") echo "checked";?>> Male</h2>
          </label><br>
          <label>
              <h2><input type="radio" name="gender" style ="font-size: 30px" value="Female"<?php if ($gender != "Male") echo "checked";?>> Female</h2>
          </label><br>
          <h2>Password: <input type="text" name="txtPassword" style ="font-size: 30px" value="<?php echo $row['Password']; ?>"><br></h2>
          <h2>Email: <input type="email" name="txtEmail" style ="font-size: 30px" value="<?php echo $row['Email']; ?>"><br></h2>
          <h2>Address: <input type="text" name="txtAddress" style ="font-size: 30px" value="<?php echo $row['Address']; ?>"><br></h2>
          <input type="submit" value="Update" style ="font-size: 30px" name="btnUpdate">
      </form>
    </div>


<?php mysqli_close($connection); ?>
    

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
