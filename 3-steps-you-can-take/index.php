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
		<h1 style="color:#0166A3;">3 Steps you can take</h1>
		<div class="proactive col-10">
			<h2 class="green">A 3-step guide about the most important steps to take to protect your business against major cyber attacks.</h2>
			<p>You're about to access a fantastic guide to protect yourself from cyber threats.</p>
		</div>
		<div class="casestudies col-10">
			<div class="col-12"><img class="col-12" src="<?php echo $r; ?>media/r46.svg"/></div>
		</div>
		<div class="otherresources col-10">
			<form action="https://cgnew.wpengine.com/apis/cgcg/form/three/" method="POST">
				<div class="input container col-6"><input type="text" placeholder="First Name" class="input text col-12" name="fname"> </div>
				<div class="input container col-6"><input type="email" placeholder="Business Email" class="input email col-12" name="email"> </div>
				<input type="submit" class="requestMorebtn" value="send"> 
				</form>
		</div>
	</div>
</div>

<?php include $r.'footer.php'; ?>

</body>

</html>