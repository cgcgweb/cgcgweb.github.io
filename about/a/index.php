<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

</head>
<body>
<?php 

$r = "";
$levels = substr_count(getcwd(), "/");
$levels -= 4;
for ($i = 0; $i < $levels; $i++) {
	$r .= "../";
}

echo $r . 'media/';

include $r.'menu.php';

?>
<style>
h1 {
	color:#0166A3;
	font-size:max(3vw, 24px);
}
p {font-size:18px;}
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
</style>
<div class="row main" style="padding-left:0; padding-top:10px;">
	<div class="col-3 desktop" style="position:fixed;"><img class="col-12" src="media/beagle.svg"/></div>
	<div class="col-3 desktop" style="overflow: hidden;height: 1px;"></div>
	<div class="col-9" style="padding-left:3%;">
		<img src="media/main.svg" style="width:100%;" />
		<h1 style="color:#0166A3;">Cybersecurity and IT Services</h1>
		<div class="mission col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">our mission</h2>
			<h3>To Create a Complete IT Solution Designed to Help Your Business Thrive</h3>
			<p>We’re a security-first Managed IT and Cybersecurity Consultancy that keeps your business and network safe and healthy so you can perform your work unimpeded and worry-free.</p>
			<h3 class="blue">How we stand above competition</h3>
			<br>
			<div>
				<div class="col-4 mixed"><img src="media/protection.svg" /><span>Our Proprietary CGCG 7-Layer Cyber Armor System ™</span></div>
				<div class="col-4 mixed"><img src="media/team.svg" /><span>Our Hand Picked Team</span></div>
				<div class="col-4 mixed"><img src="media/protection.svg" /><span>Our Proprietary CGCG 7-Layer Cyber Armor System ™</span></div>
				<div class="desktop col-12 spacer"></div>
				<div class="col-4 mixed"><img src="media/setting.svg" /><span>Savings & Productivity Byproducts</span></div>
				<div class="col-4 mixed"><img src="media/scale.svg" /><span>Scalable Model with Granular Control</span></div>
				<div class="col-4 mixed"><img src="media/setting.svg" /><span>Savings & Productivity Byproducts</span></div>
			</div>
		</div>
		<div class="partner col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">What makes us a <br> greet business partner</h2>
			<p>We take your business as seriously as your technology and believe that your peace of mind is our most important product. Here at Cyber Guardian, we achieve that goal using the three business-technology principles we were founded on:</p>
			<div class="desktop col-12 spacer"></div>
			<div>
				<div class="col-4 reason"><img src="media/tech.svg" /><br><h3 class="blue">Technology</h3><p>We always deliver the best possible solution that will grow and evolve with your business.</p></div>
				<div class="col-4 reason"><img src="media/partnership.svg" /><br><h3 class="blue">Partnership</h3><p>We are the trusted business partner you can rely on for solutions that make sense.</p></div>
				<div class="col-4 reason"><img src="media/value.svg" /><br><h3 class="blue">Value</h3><p>We always optimize your technology to bring the best return on investment.</p></div>
				<a href="#" class="requestMorebtn">Request More Information</a> 
				<div class="desktop col-12 spacer"></div>
				<p class="gray">Our established plans might not be for everyone, but we will work with you to find a solution that fits. Request a call with one of our team members to discuss how we can help your organization with managed IT and cybersecurity services.</p>
			</div>
		</div>
		<div class="help col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">how we help</h2>
			<h3>We Offer Comprehensive IT and Security Solutions</h3>
			<p>Our cybersecurity and technology experts are ever vigilant in finding new ways to boost productivity and protect our clients. We can help your business by providing managed IT services, cybersecurity services, or both.</p>
			<div class="col-12">
				<div class="col-6"><a href="#"><img src="media/managedservices.svg" /></a></div>
				<div class="col-6"><a href="#"><img src="media/cybersecurity.svg" /></a></div>
			</div>
		</div>
		<div class="col-10 testmonials">
			<h2 class="green" style="font-size:max(2vw, 22px);">Testmonials</h2>
			<p class="gray">Sometimes our clients can explain the value we provide even better than we can. Here is what a few other organizations have had to say about their experience partnering with Cyber Guardian Consulting Group:</p>
			<div class="col-12">
				<div class="col-6"><a href="#"><img src="media/win.svg" /></a></div>
				<div class="col-6"><a href="#"><img src="media/butter.svg" /></a></div>
			</div>
		</div>
		<div class="col-10 ourpartners">
			<h2 class="green" style="font-size:max(2vw, 22px);">Our Partners</h2>
			<div class="col-12"><img src="media/our.svg" /></div>
		</div>
		<div class="col-10 contacthome">
			<h2 class="green" style="font-size:max(2vw, 22px);">We are here to help</h2>
			<h3>Forget about Long-Term Contracts and Pushy Sales Tactics</h3>
			<p>If this sounds like the approach to cybersecurity and managed IT solutions that you've been looking for, terrific - fill out the contact form or <b>call us at 845-444-8273</b> today to schedule a consultation with one of senior team members today.</p>
			<div class="col-12">
				<form action="" method="POST">
					<div class="input container col-6"><input type="text" placeholder="First Name" class="input text col-12" name="fname" /> </div>
					<div class="input container col-6"><input type="text" placeholder="Last Name" class="input text col-12" name="lname" /> </div>
					<div class="input container col-12"><input type="text" placeholder="Business Name" class="input text col-12" name="bname" /> </div>
					<div class="input container col-6"><input type="tel" placeholder="Phone Number" class="input phone col-12" name="phone" /> </div>
					<div class="input container col-6"><input type="email" placeholder="Business Email" class="input email col-12" name="email" /> </div>
					<div class="input container col-12"><textarea row="4" class="col-12 input" /> </textarea></div>
					<input href="#" class="requestMorebtn" value="send" /> 
				</form>
			</div>
		</div>
	</div>
</div>
</body>

</html>