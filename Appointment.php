<?php
session_start();
if (!empty($_SESSION["username"])){
	echo '<br>User IC: ' . $_SESSION["username"];
} else{
	echo ' <br>Welcome Guest,';
}
?>

<?php
  include('dbconnection.php');

  if(isset($_GET['submit'])){
  $fname=$_GET['txtFname'];
  $lname=$_GET['txtLname'];
  $ic=$_GET['txtIc'];
  $gender = $_GET['gender'];
  $contact=$_GET['txtContact'];
  $email=$_GET['txtEmail'];
  $reason=$_GET['request'];
  $other=$_GET['txtOther'];
  $date=$_GET['Date'];
  $time=$_GET['time'];


  //$sqlcQuery =" INSERT INTO `appointment_table`(`Date`, `Time`) 

  if(trim($fname) ==''){
    echo ' PLease enter all information to register</br>';
  }
  $sqlaQuery =" INSERT INTO `appointment_table`(`First Name`, `Last Name`, `Ic`, `Gender`,`Contact Number`, `Email`, `Request`, `Other`,`Date`, `Time`) 
  VALUES ('$fname','$lname','$ic','$gender','$contact','$email','$reason','$other','$date','$time')";
  if(mysqli_query($connection,$sqlaQuery)){
    echo ' successfully registered!!';  
  //header('Location: .php');
  } else{
    echo'Failed to register';
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
	margin-top:50px;
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
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
                <li><a href="Appointment.php">Book Appointment</a></li>
				<li><a href="assignment_view.php">Check Booked Appointment</a></li>
				<li><a href="aboutus.php">About us</a></li>
			</ul>
		</div>
        <div id = "content1">
            <div id="innercontent">
            <?php if (!empty($_SESSION["username"])){?>
             
                <br><br/><br/><br/><?php echo '<h1>Appointment Details</h1>';?>
                <form action= "#" method="get">
                First Name: <input type="text" name="txtFname" /><br/><br/>
                Last Name: <input type="text" name="txtLname"/><br/><br/>
                IC: <input type="text" name="txtIc"/><br/>
                <br/>Gender:

                <label>
                <input type="radio" name="gender" value="Male" >Male<br/>
                </label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
                <input type="radio" name="gender" value="Female">Female <br/>
                </label>
                Contact:<input type="text" name="txtContact"/><br/><br/>
                Email:  <input type="text" name="txtEmail" value="<?php echo $_SESSION["email"];?>" >  <br/><br/>
                <label for="requestS">Request:</label>
                <select name="request">
                    <option name="op1" value="bodyCheck">Body Check</option>
                    <option name="op1" value="EyeSight">EyeSight Check</option>
                    <option name="op1" value="Sick">Sick</option>
                    <option name="op1" value="Injury">Injury</option>
                    <option name="op1" value="Other">Other</option>
                </select>
                <br/>
                <br/>Other:<textarea name="txtOther" clos="50" rows="5" placeholder="If You Choose Others, Please Type Your Request." ></textarea>
                <br><br>
                <label for="birthday">Please Choose a Date of appointment:</label></br></br>
                <input type="date" id="date" name="Date"></br></br>
                <label for="time">Please Choose a Time for appointment:</label>
                <select name="time" >
                    <option value="8AM">8AM</option>
                    <option value="9AM">9AM</option>
                    <option value="10AM">10AM</option>
                    <option value="11AM">11AM</option>
                    <option value="12PM">12PM</option>
                    <option value="1PM">1PM</option>
                    <option value="2PM">2PM</option>
                    <option value="3PM">3PM</option>
                    <option value="4PM">4PM</option>
                    <option value="5PM">5PM</option>
                    <option value="6PM">6PM</option>
                    <option value="7PM">7PM</option>
                    <option value="8PM">8PM</option>
                    <option value="9PM">9PM</option>
                    <option value="10PM">10PM</option>
                </select> 
                <br/><br/>
                <input type="submit" value="Next" name="submit">  
            </div>
            
            <?php } else {?>
			<br><br>
      <h1>Press <a href="assignment_login.php" >Log in</a> to book appointment</h1>
			<?php }?>	

      
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