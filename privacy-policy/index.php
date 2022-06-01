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
		<h1 style="color:#0166A3;">Privacy Policy</h1>
		<div class="proactive col-10">
			<div class="fl-row-content fl-row-fixed-width fl-node-content">
<div class="fl-col-group fl-node-5e6b78174fa19" data-node="5e6b78174fa19">
<div class="fl-col fl-node-5e6b78174fa1c" data-node="5e6b78174fa1c">
<div class="fl-col-content fl-node-content">
<div class="fl-module fl-module-rich-text fl-node-5e6b77f19b04f" data-node="5e6b77f19b04f">
<div class="fl-module-content fl-node-content">
<div class="fl-rich-text">
<p>Cyber Guardian respects your privacy. In the course of providing our services, we sometimes collect, store, and use your personal and business information for specifically defined purposes. We use your information to support and enhance our relationship with you, to provide service and support, and to share product, service, and company news and offerings with you. Under no circumstances do we sell your information to a third party. We do however reserve the right to share your information outside the company as required by specific law, or if compelled to do so by a subpoena. If it is deemed necessary to share your information with a third party, we will only do so with your express written consent, and then only with partners who are also legally bound to Cyber Guardian to protect your privacy and data.</p>
<p>Agents, employees, or contractors of Cyber Guardian who have access to your information are required to keep the information confidential and not use it for any other purpose than to carry out the services they are performing for Cyber Guardian. Cyber Guardian may anonymously enhance, alter, or merge your information with data from third parties for purposes of marketing our products or services.</p>
<p>Cyber Guardian may be required to disclose your information in connection with law enforcement, fraud prevention, government regulation, or other legal action, or if Cyber Guardian reasonably believes it is necessary to do so to protect itself, its customers, or the public.</p>
<h3>Limitation of Liability</h3>
<p>UNDER NO CIRCUMSTANCES, INCLUDING, BUT NOT LIMITED TO, NEGLIGENCE, SHALL CYBER GUARDIAN BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES, INCLUDING, BUT NOT LIMITED TO, LOSS OF DATA OR PROFIT, ARISING OUT OF ANY BREACH OF THIS PRIVACY POLICY, EVEN IF CYBER GUARDIAN OR ONE OF ITS AUTHORIZED AGENTS HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
<h3>Privacy Policy Revisions</h3>
<p>Cyber Guardian may at any time revise this Privacy Policy by updating this posting. By using Cyber Guardian's services, you agree to be bound by any such revisions and should therefore periodically visit this page to determine the then-current Privacy Policy to which you are bound.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
		</div>
	</div>
</div>
<?php include $r.'footer.php'; ?>
</body>

</html>