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
		<h1 style="color:#0166A3;">Managed IT Services</h1>
		<h2 class="green" style="font-size:max(2vw, 22px);">more than technology - value!</h2>
		<div class="proactive col-10">
			<h3>Cyber Guardian provides a variety of Managed IT service levels. We work within your budget, enhance your business productivity and provide a peace of mind about your cybersecurity needs. There are absolutely no exceptions.</h3>
			<p>Cyber Guardian generates value-added benefits for our clients that go above and beyond traditional managed IT services.<br><br>There’s no “one size fits all” technology solution. Cyber Guardian’s customized services are designed with your input to leverage the strengths that make your business unique and increase productivity at every step.</p>
		</div>
		<div class="casestudies col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">backup solutions</h2>
			<p>Planning is essential when it comes to protecting your data and business. Utilizing available storage solutions to protect your data and creating a disaster recovery policy to defend your business’s functionality are key steps to obtaining peace of mind.<br><br>We offer Cloud & Cloud-to-Cloud backup for storing all your business’s data should you need it. We also offer Disaster Recovery Policy creation services for those true emergency situations.<br><br><a href="https://filescience.io">To find out more, click here.</a></p>
		</div>
		<div class="otherresources col-10">
			<div class="col-4"><a><img class="col-12" src="<?php echo $r; ?>media/m1.svg"/></a></div>
			<div class="col-4"><a><img class="col-12" src="<?php echo $r; ?>media/m2.svg"/></a></div>
			<div class="col-4"><a><img class="col-12" src="<?php echo $r; ?>media/m3.svg"/></a></div>
		</div>
	</div>
</div>
<?php include $r.'footer.php'; ?>
</body>

</html>