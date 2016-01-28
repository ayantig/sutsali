<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_REG_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_EMAIL']);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Perfect place to find your partner</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Noticia+Text' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var maxLength = 110;
	$(".show-read-more").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append('<br>');
			$(this).append(' <a href="javascript:void(0);" class="read-more">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read more...</a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap();
		$(this).remove();
	});
});
</script>
<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
	.grow img {
  height: 175px;
  width: 125px;
 
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
 
.grow img:hover {
  width: 150px;
  height: 200px;
}
</style>
</head>
<body>
<div class="wrap">	
  <div class="header">
	<div class="logo">
		<a href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logo.png" alt=""></a><a href="admin_login.php">&nbsp;&nbsp;<img src="images/jivl.jpg" width="45" height="50" alt=""></a>
	</div>
	<div class="clear"></div>
  </div>
  <div class="banner">
	<div class="lsidebar span_1_of_3">
		<div class="login-title">
           <h2 class="title">User Login</h2>
				<div id="loginbox" class="loginbox">
					<form action="login_exec.php" method="post" id="login-form" enctype="multipart/form-data">
					 <?php
					if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
					echo '<ul class="err">';
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
						echo "<p style='font-family:Times New Roman; color:white;'>".$msg."</p>"; 
						}
					echo '</ul>';
					unset($_SESSION['ERRMSG_ARR']);
					}
				?>
					  <fieldset class="input">
					    <p id="login-form-username">
					      <label for="modlgn_username">Email Id</label>
					      <input id="modlgn_username" type="text" name="email" class="inputbox" size="18" autocomplete="off">
					    </p>
					    <p id="login-form-password">
					      <label for="modlgn_passwd">Password</label>
					      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
					    </p>
						 <p id="login-form-remember">
					     <a href="forgotpass.php"> <label for="modlgn_remember">Forgot Password</label></a>
					    </p>
					    <input type="submit" name="formsubmitted" class="button" value="Login">
					  </fieldset>
					 </form>
				</div>
		</div>
		<div class="right-box">
				 <div class="right-box-grid">
						<div class="right-box-grid-img">
							<a href="#"><img src="images/Marriage.jpg" title="img"></a>
						</div>
						<div class="right-box-grid-info">
							<span>Best Matches</span>
							<p class="show-read-more">SutSali.org dedicates to help people, meet their life partners for marriage in a comfortable environment. We  provide complete and wide-ranging listing of Indian matrimonial profiles for people seeking their soul mates. If you are looking for Life Partner, enroll yourself for this facility and find suitable life partner for YOU.</p>
						</div>
						<div class="clear"> </div><br>
		  </div>
					 <div class="right-box-grid">
						<div class="right-box-grid-img">
							<a href="#"><img src="images/ind.jpg" title="img"></a>
						</div>
						<div class="right-box-grid-info">
							<span>Individual Likings</span>
							<p class="show-read-more">SutSali.org is an open platform to find best matching life partner of individual liking and interest for      marriageable Indian Boys and Girls and the source of information for life partner look-up space in a clear and transparent process. Our in-depth analysis and revolutionarycustomized next-gen services specifically for  Life-Partner seekers made SutSali.org one of the best online life partner search website</p>
						</div>
						<div class="clear"> </div><br>
					</div>
					 <div class="right-box-grid">
						<div class="right-box-grid-img">
							<a href="#"><img src="images/wed.jpg" title="img"></a>
						</div>
						<div class="right-box-grid-info">
							<span>Our Motto</span>
							<p class="show-read-more">Our motto is to provide a pleasant and superior matchmaking experience to our brides and grooms to meet their prospective life partners along with protecting their privacy and security. We are very passionate in providing the best service to our members and expand the opportunities for our members.</p>
						</div>
						<div class="clear"> </div><br>
					</div>
			</div>
		</div>
		<div class="cont span_2_of_3">
					  <img src="images/wall.jpg" alt=""/>
			<div class="welcome-text">
			 <?php 
			if(isset($_SESSION['login_msg']))
			{ 
			echo "<br />"; 
			echo "<p style='text-align:center; font-size:20px; font-family:Times New Roman; color:red;'>".$_SESSION['login_msg']."</p>";
			unset($_SESSION['login_msg']);
			}
			?>
			 <p style="font-size: 20px; font-weight:bold; font-family:'Times New Roman', Times, serif; color:#000099" align="center"><a href="reg.php">Click here to register for the bride/groom</a></p>
			 <p style="font-size: 14px; font-weight:bold; color:#FF0000; font-family:'Times New Roman', Times, serif" align="center">If already registered then login using your registered email id and password.</p>
<div class="grow pic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/1.jpg" width="150" height="200" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/2.jpg" width="150" height="200"></div>
		<marquee behavior="scroll" scrolldelay="60" direction="left">
			<img src="images/white.jpg"></marquee>  
		  </div>
		</div>	
		<div class="clear"></div>			
	</div>
	<div class="footer">
    	<ul class="footermenu">
        	
        </ul>
		<div class="footer-right">
			<div class="copy">
				<p>@SutSali.org © 2016 All rights reserved | Published by <a href="mailto:tambe123@hotmail.com">Prakash Tambe</a> | Developed & Designed by <a href="mailto:ayantig@gmail.com">Ayanti Goswami Ghosal</a></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</body>
</html>
