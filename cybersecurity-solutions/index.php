<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="icon" href="https://cgcg.biz/wp-content/uploads/2020/02/favicon.png" sizes="32x32" />
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

.point.col-12 img, .point.col-12 > div {
	display: inline-block;
	padding: 10px;
}

.point div {
	width: 80%;
}

li::marker {color: #2DD8A3; font-size:18px;}
.casestudies img, .otherresources img {padding:10px;}
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
	<?php include $r.'eagle.php'; ?>
	<div class="col-3 desktop" style="overflow: hidden;height: 1px;"></div>
	<div class="col-9" style="padding-left:3%;">
		<h1 style="color:#0166A3;">Cybersecurity Solutions</h1>
		<h2 class="green" style="font-size:max(2vw, 22px);">innovative solutions</h2>
		<div class="proactive col-10">
			<p>With a security-first mindset, Cyber Guardian provides an array of services that provide real-time insight into how your technology infrastructure is functioning. This information allows us to give the best advice possible, and you to make suitable informed decisions.</p>
			<div class="point col-12"><img src="<?php echo $r; ?>media/i1.svg" /><div><h3>ACTION, NOT REACTION</h3><p>When an alert is issued during an attack you won’t have to tell us, because we’ll already be on the case. You’ll know who’s attacking, what technique they’re using, and what we’re doing to stop it.</p></div></div>
			<div class="point col-12"><img src="<?php echo $r; ?>media/i2.svg" /><div><h3>UNPARALLELED FLEXIBILITY</h3><p>Our services are tailored to your needs and designed to give you the best protection possible. With constantly evolving cybersecurity threats, we ensure our solutions are current and our clients secure.</p></div></div>
			<div class="point col-12"><img src="<?php echo $r; ?>media/i3.svg" /><div><h3>ONGOING SUPPORT</h3><p>You’ll have peace of mind knowing our proactive security solutions are continuously working for you. You can stop worrying and focus on the important work you’re doing.</p></div></div>
		</div>
		<div class="otherresources col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">three phases of cybersecurity protection</h2>
			<p>We offer cybersecurity services in three different phases. These phases are independent of each other and combining them is encouraged and discounted!</p>
			<div class="col-4"><a><img class="col-12" src="<?php echo $r; ?>media/ix1.svg"/></a></div>
			<div class="col-4"><a><img class="col-12" src="<?php echo $r; ?>media/ix2.svg"/></a></div>
			<div class="col-4"><a><img class="col-12" src="<?php echo $r; ?>media/ix3.svg"/></a></div>
		</div>
	</div>
</div>
<?php include $r.'footer.php'; ?>
</body>

</html>