<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="icon" href="https://cgcg.biz/wp-content/uploads/2020/02/favicon.png" />
</head>
<body>
<?php 

$r = "";
$levels = substr_count(getcwd(), "/");
$levels -= 4;
for ($i = 0; $i < $levels; $i++) {
	$r .= "../";
}

include $r.'menu.php';

?>
<style>
h1 {
	color:#0166A3;
	font-size:max(3vw, 24px);
}
p {font-size:18px;}
li {
	list-style-position:inside;
}
iframe {
	width: 100% !important;
	border: 0;
}
.lgrey {background-color:#F0F8FC; padding:10px;border:5px solid white;border-radius:5px;}
li::marker {color: #2DD8A3; font-size:14px;}
.propbono img {padding:10px;}
.mixed {display:flex;margin-bottom:16px;}
.mixed img {width:20%; float:left; display:flex;align-items:center;padding:8px;}
.mixed span{width:80%; float:right; font-size:18px; padding-top:5px;display:flex; align-items:center; padding-left:16px;}
.reason {text-align:center;}
.reason p {padding:10px;}
.requestMorebtn {
	background-color: #2DD8A3;
	padding: 12px;
	width: 100% !important;
	display: inline-block;
	text-align: center;
	font-size: 21px;
	text-decoration: none;
	color: white;
	border-radius: 5px;
}
.help a {width:100%;display:inline-block;padding:10px;}
.help a img {width:100%;}
.input.text.col-12, .input.phone.col-12, .input.email.col-12, textarea.input {
	padding: 12px;
	border-radius: 5px;
	border: 3px solid gray;
}
.input.container {padding:10px;}
.smi {
	display: block;
}
.input.text.col-12, .input.phone.col-12, .input.email.col-12, textarea.input {
	padding: 12px;
	border-radius: 5px;
	border: 3px solid gray;
}
.input.container {padding:10px;}
.smi {
	display: block;
}
.input.text.col-12, .input.phone.col-12, .input.email.col-12, textarea.input {
	padding: 18px;
	border-radius: 5px;
	border: none;
	background-color: #F0F8FC;
}
.input.container {padding:10px;padding-left:0;}

.input::placeholder {
	font-size: 18px;
	font-weight: lighter;
	color: #000000 !important;
	opacity: 1;
}
textarea.input::placeholder {
	font-weight: normal;
	font-family: 'Open Sans', Arial;
}
.submitbutton {
	background-color: #0166A3;
	width:120px;
	float:right;
	display: inline-block;
	text-align: center;
	font-size: 21px;
	text-decoration: none;
	color: white;
	border-radius: 5px;
	padding:10px;
}
</style>
<div class="row main" style="padding-left:0; padding-top:10px;">
	<?php include $r.'eagle.php'; ?>
	<div class="col-3 desktop" style="overflow: hidden;height: 1px;"></div>
	<div class="col-9" style="padding-left:3%;">
		<h1 style="color:#0166A3;">Contact Cyber Guardian Today</h1>
		<div class="contact col-10">
			<h3>If you're interested in further exploring the proactive, security-first approach to technology and managed IT services that so many other businesses get to enjoy, Excellent! That's exactly what we want for you too.</h3>
			<p>Fill out the secure contact form below or give us a call at 845-44-GUARD so that we can discuss your unique situation with care and much attention to detail.</p>
		</div>
		<div class="propbono col-10">
			<div class="col-12"><a href="https://wrwdcountry.iheart.com/featured/coronavirus/content/2020-03-27-cyber-security-firm-offers-free-help-to-local-businesses-and-non-profits/" ><img class="col-12" style="padding: 0;" src="<?php echo $r; ?>media/probonohelp.svg"/></a></div>
		</div>
		<div class="propbono smp col-10">
			<div class="col-6">
				<h2 class="green" style="font-size:max(2vw, 22px);">what to expect</h2>
				<ul style="padding-left:0;">
					<li>One of our senior team members will contact you to schedule a call within the next business day</li>
					<li>Nobody knows your business as well as you do; we’re here to listen and to learn about how we can help</li>
					<li>If you’re looking for a strategic approach to IT with a strong focus on security, then there is a good chance we can help you</li>
				</ul>
			</div>
			<div class="col-6">
				<center>
					<img style="border-radius: 50%;border: 1px solid gray; width:50%;padding:20px;margin-top:5px;" src="<?php echo $r; ?>media/team/nickmartin.png"/>
					<h3>Nick Martin</h3>
					<h3>Chief Executive Officer</h3>
				</center>
			</div>
		</div>
		<div class="col-10 contacthome">
			<br>
			<div class="col-12">
				<form action="" method="POST">
					<div class="input container col-6"><input type="text" placeholder="First Name" class="input text col-12" name="fname" /> </div>
					<div class="input container col-6"><input type="text" placeholder="Last Name" class="input text col-12" name="lname" /> </div>
					<div class="input container col-12"><input type="text" placeholder="Business Name" class="input text col-12" name="bname" /> </div>
					<div class="input container col-6"><input type="tel" placeholder="Phone Number" class="input phone col-12" name="phone" /> </div>
					<div class="input container col-6"><input type="email" placeholder="Business Email" class="input email col-12" name="email" /> </div>
					<div class="input container col-12"><textarea placeholder="How can we help?" name="message" row="4" class="col-12 input" /></textarea></div>
					<div class="input container col-12"><input type="submit" class="submitbutton" value="send" /></div>
				</form>
			</div>
			<script>
			window.onscroll = function() {
				document.forms[0].action = "https://cgnew.wpengine.com/apis/cgcg/form/home/";
			}
		</script>
			<br><br>
			<div class="col-12"><h2 class="green" style="font-size:max(2vw, 22px);margin-top:32px;">contact us</h2></div>
			<div class="col-4 "><div class="lgrey"><h3 class="blue">Main Office</h3><div style="display:inline-block; width:100%;"><img src="../media/r1.svg" style="padding:16px;width: 25%;display: block;float: left;"><p style="width: 75%;display: block;float: right;padding:16px;">63 John Street #3<br>Kingston, NY 12401</p></div></div></div>
			<div class="col-4 "><div class="lgrey"><h3 class="blue">Reach Us:</h3><div style="display:inline-block; width:100%;"><img src="../media/r2.svg" style="padding:16px;width: 25%;display: block;float: left;"><p style="width: 75%;display: block;float: right;padding:16px;">E: help@cgcg.biz<br>P: 845-444-8273</p></div></div></div>
			<div class="col-4 "><div class="lgrey"><h3 class="blue">Technical Support</h3><div style="display:inline-block; width:100%;"><img src="../media/r3.svg" style="padding:16px;width: 25%;display: block;float: left;"><p style="width: 75%;display: block;float: right;padding:16px;">E: tickets@cgcg.biz<br>P: 845-444-8273</p></div></div></div>
			<iframe style="padding:5px; min-height:400px;" loading="lazy" src="https://www.google.com/maps/embed/v1/place?q=63+John+Street+%233%2C+Kingston%2C+NY+12401&amp;key=AIzaSyD09zQ9PNDNNy9TadMuzRV_UsPUoWKntt8"></iframe>
		</div>
	</div>
</div>
</body>
<?php include $r.'footer.php'; ?>
</html>