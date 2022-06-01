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
		<h1 style="color:#0166A3;">Resources from CGCG</h1>
		<div class="proactive col-10">
			<h3>Thank you for your interest in Cyber Guardian<br>We look forward to the opportunity to earn your business.</h3>
			<p>Download more detailed information about how we help New York businesses succeed with their technology, as well as our guide for small and medium business owners to IT pricing and a guide on how to keep your business protected against 90% of cyber attacks.</p>
		</div>
		<div class="casestudies col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">case studies</h2>
			<div class="col-4"><a href="<?php echo $r; ?>dl/Cyber-Guardian-Case-Studies-Construction-and-Design-Firm.pdf"><img class="col-12" src="<?php echo $r; ?>media/res1.svg"/></a></div>
			<div class="col-4"><a href="<?php echo $r; ?>dl/Cyber-Guardian-Case-Studies-Community-Center.pdf"><img class="col-12" src="<?php echo $r; ?>media/res2.svg"/></a></div>
			<div class="col-4"><a href="<?php echo $r; ?>dl/Cyber-Guardian-Case-Studies-Real-Estate-Agency.pdf"><img class="col-12" src="<?php echo $r; ?>media/res3.svg"/></a></div>
		</div>
		<div class="otherresources col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">other resources</h2>
			<div class="col-6"><a href="<?php echo $r; ?>business-owners-guide"><img class="col-12" src="<?php echo $r; ?>media/res4.svg"/></a></div>
			<div class="col-6"><a href="<?php echo $r; ?>3-steps-you-can-take"><img class="col-12" src="<?php echo $r; ?>media/res5.svg"/></a></div>
		</div>
	</div>
</div>

<?php include $r.'footer.php'; ?>

</body>

</html>