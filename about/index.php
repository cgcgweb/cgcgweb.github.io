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
.values li::marker {color: #2DD8A3; font-size:24px;}
.w25 {
width: 25%;
}
.w75 {
width: 75%;
}
.team .w25 span {transform: rotate(-90deg);display: block;width: 160px;margin-top: 48px;margin-left: -36px;font-weight:bold;font-size:21px;}
.values ul {padding-left: 0;}
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
.team .col-3 {
	min-height: 280px;
}
.input.container {padding:10px;}
</style>
<div class="row main" style="padding-left:0; padding-top:10px;">
	<?php include $r.'eagle.php'; ?>
	<div class="col-3 desktop" style="overflow: hidden;height: 1px;"></div>
	<div class="col-9" style="padding-left:3%;">
		<h1 style="color:#0166A3;">About</h1>
		<div class="proactive col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">proactive technology solutions</h2>
			<p>Cyber Guardian recognizes the common frustrations when dealing with some IT service providers. We pride ourselves on our customer service and support skills and work hard to eliminate problems like:</p>
			<br>
			<div>
				<div class="col-12">
					<div class="col-6 mixed"><ul><li>IT companies offering services they don’t fully understand with overpromising and under delivering, creating a very real problem.</li></ul></div>
					<div class="col-6 mixed"><ul><li>IT companies can have high-turnover and low morale which bleeds into the level of service given to the client.</li></ul></div>
				</div>
				<div class="col-12">
					<div class="col-6 mixed"><ul><li>IT companies with bad internal policy that can lead to breaches and attacks on their own system which can carry over to the client.</li></ul></div>
					<div class="col-6 mixed"><ul><li>IT companies often give clients invoices with no explanation of what they have done or where their money is going.</li></ul></div>
				</div>
				
			</div>
		</div>
		<div class="team col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">our team</h2>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Nick Martin</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://cgcg.biz/media/nm.jpeg" />
					<span class="col-12">CEO</span>
				</div>
			</div>
			
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Mo Abdelalim</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://cgcg.biz/media/team/mo.jpg" />
					<span class="col-12">Director of Engineering - Web</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Jordan Mesches</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://cgcg.biz/media/team/jordan.png" />
					<span class="col-12">Guardian Engineer II</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Mark Brayman</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://cgcg.biz/media/team/mark.jpg" />
					<span class="col-12">Ops Supervisor</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Nicole Shakarishvili</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,w_500,h_500,ret_img/https://cgcg.biz/media/team/nicole.png" />
					<span class="col-12">UI/UX Architect</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Matthew Pisano</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,w_500,h_500,ret_img/https://cgcg.biz/media/team/matt.jpg" />
					<span class="col-12">Guardian Engineer I</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Isaiah Pratt</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,w_500,h_500,ret_img/https://cgcg.biz/media/team/isaiah.jpg" />
					<span class="col-12">Executive Assistant</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Caleb Rogers</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,w_500,h_500,ret_img/https://cgcg.biz/media/team/caleb.jpg" />
					<span class="col-12">Guardian Analyst I</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Bruno Rocha</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,w_500,h_500,ret_img/https://cgcg.biz/media/team/bruno.jpg" />
					<span class="col-12">Network Administrator</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Angel Rojas</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,w_500,h_500,ret_img/https://cgcg.biz/media/team/angelr.jpg" />
					<span class="col-12">Guardian Analyst I</span>
				</div>
			</div>
			<div class="col-3">
				<div class="w25" style="float:left;"><span style="transform: rotate(-90deg);display: block;width: 300%;margin-top: calc(100% + 28px);margin-left: -60px;">Carson Parks</span></div>
				<div class="w75" style="float:right;">
					<img class="col-12" src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,w_500,h_500,ret_img/https://cgcg.biz/media/team/carsonp.jpg" />
					<span class="col-12">Guardian Analyst I</span>
				</div>
			</div>
		</div>
		<div class="beliefs col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">what do we believe in</h2>
			<h3>Here Are Our Five Core Values:</h3>
			<div class="col-12 values">
				<div class="col-2d4"><ul><li>Transparency</li></ul></div>
				<div class="col-2d4"><ul><li>Integrity</li></ul></div>
				<div class="col-2d4"><ul><li>Usability</li></ul></div>
				<div class="col-2d4"><ul><li>Suitability</li></ul></div>
				<div class="col-2d4"><ul><li>Value</li></ul></div>
			</div>
			<p>All of our services provide a conduit towards our most important goal: protecting your business from hackers and malware thieves who want to steal information, change or destroy data, extort money, or simply disrupt your operations.</p>
			<div class="desktop col-12 spacer"></div>
		</div>
	</div>
</div>
<?php include $r.'footer.php'; ?>
</body>

</html>