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
.otherresources.col-10 div.col-6 {min-height: 380px;}
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
		<h1 style="color:#0166A3;">Reputation Management</h1>
		<h2 class="green" style="font-size:max(2vw, 22px);">reputation management and repair services</h2>
		<div class="proactive col-10">
			<h3>Removing defamatory, negative, and other unwanted information.</h3>
			<p>Sometimes businesses receive defamatory, negative, or unwanted press. The implication of this press is vast as it impacts the morale of your company, your reputation in your industry and community, and can also negatively affect your sales. To mitigate the backlash from the unwanted press, it is critical to have that content removed from the web.<br><br>Most companies that address reputation management problems can only go as far as creating new content and hoping they rank above the bad content, but it’s never really gone. Cyber Guardian goes the extra step to restore your reputation. Our team of SEO experts will mitigate the situation by analyzing the link profile and removing toxic links impacting your business and life.<br><br>Cyber Guardian makes sure these links are completely off Google’s radar. Your reputation will not be compromised by any link removal actions or negative SEO.</p>
		</div>
		<div class="otherresources col-10">
			<div class="col-12">
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/g1.svg"/></div>
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/g2.svg"/></div>
			</div>
			<div class="col-12">
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/g3.svg"/></div>
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/g5.svg"/></div>
			</div>
			<div class="col-12">
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/g6.svg"/></div>
				<div class="col-6"><img class="col-12" src="<?php echo $r; ?>media/g4.svg"/></div>
			</div>
		</div>
	</div>
</div>
<?php include $r.'footer.php'; ?>
</body>

</html>