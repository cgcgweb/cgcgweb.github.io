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
.otherresources.col-10 div.col-6 {min-height: 350px;}
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
		<h1 style="color:#0166A3;">Chief Information Security<br>Officer Advisory<br>Services (CISOaaS)</h1>
		<h2 class="green" style="font-size:max(2vw, 22px);">CISO advisory services</h2>
		<div class="proactive col-10">
			<h3>Managing Businesses Sercurity and Compliance</h3>
			<p>Stay focused on your business while an experienced, cost-effective CISO from Cyber Guardian’s security experts team takes care of your security and compliance.</p>
		</div>
		<div class="proactive col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">why do you need a CISO</h2>
			<p>Most businesses don’t have the resources to employ a full-time Chief Information Security Officer (CISO), and often don’t know exactly how to articulate the needs and responsibilities a CISO would undertake. Some companies may have an existing CISO who needs the guidance of a senior expert to improve their security or compliance. By working with a CISO from Cyber Guardian we can:</p>
			<ul>
				<li>Provide your organisation with a cost-effective way of maintaining information security systems and managing risk</li>
				<li>Build a CISO role that fits your exact business needs – nothing more, nothing less</li>
				<li>Offer an extension to your organisation’s information security capabilities</li>
				<li>Improve the overall security of your systems, networks, infrastructures, and applications</li>
				<li>Ensure compliance standards are being met, including industry-specific regulations (for example GDPR, PCI, DFARS/CMMC, HIPAA etc.)</li>
			</ul>
		</div>
		<div class="proactive col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">our process</h2>
			<p>Cyber Guardian’s CISO advisory process will provide you with the most accurate information based on practical data. Our aim is to create a security environment that allows your business to grow.</p>
		</div>
		<div class="otherresources col-10">
			<div class="col-12">
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/gn1.svg"/></div>
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/gn2.svg"/></div>
			</div>
			<div class="col-12">
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/gn3.svg"/></div>
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/gn4.svg"/></div>
			</div>
			
		</div>
	</div>
</div>
<?php include $r.'footer.php'; ?>
</body>

</html>