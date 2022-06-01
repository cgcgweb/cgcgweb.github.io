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
	<div class="col-3 desktop" style="position:fixed;"><img class="col-12" src="<?php echo $r; ?>media/beagle.svg"/></div>
	<div class="col-3 desktop" style="overflow: hidden;height: 1px;"></div>
	<div class="col-9" style="padding-left:3%;">
		<h1 style="color:#0166A3;">Cloud Backup and <br>Disaster Recovery Services</h1>
		<h2 class="green" style="font-size:max(2vw, 22px);">Cloud-to-Cloud Backup</h2>
		<div class="proactive col-10">
			<h3>Cyber Guardian provides a variety of Managed IT service levels. We work within your budget, enhance your business productivity and provide a peace of mind about your cybersecurity needs. There are absolutely no exceptions.</h3>
			<p>Just because your data is in the cloud, doesn't mean that it is backed up. With Cloud-to-Cloud backup, information stored in the cloud is also copied to another cloud backup so that your data is completely protected.</p>
			<h3>Cyber Guardian uses a proprietary Software as a Service (SaaS) method to backup:</h3>
			<img src="<?php echo $r; ?>media/f83.svg" />
			<br>
			<img src="<?php echo $r; ?>media/why.svg" />
		</div>
		<div class="sector col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">Managed Cloud Backup</h2>
			<p>Our managed cloud-based backup and disaster recovery products are designed to reinforce your current infrastructure with complete end-to-end data protection and security. We follow the 3-2-1 Backup Rule which states: businesses need to keep at least three copies of their data stored on two types of media with one copy off-site.<br>Cloud backups use secure offsite storage centers to protect from data breaches in the case of disaster. This storage solution adds an extra layer of protection from:</p>
			<ul>
				<li>Human error</li>
				<li>Illegitimate deletion</li>
				<li>Malware and ransomware</li>
				<li>Hackers</li>
				<li>Failed Media (Hard Drives, Solid State Drives, Flash Drives, etc..)</li>
				<li>Programmatic errors</li>
			</ul>
			<h2 class="blue" style="font-size:max(2vw, 22px)">All of our managed backup services are:</h2>
			<ul>
				<li>Contained in secure redundant data centers that are SOC-2, ISO 27001, and PCI-DSS certified.</li>
				<li>Encrypted with a minimum of AES-256 (4096-bit/8192-bit RSA encryption upon request) and have 99.9999999999% durability.</li>
			</ul>
		</div>
		<div class="sector col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">Managed Cloud Backup & Disaster Recovery</h2>
			<h3>Providing complete end-to-end data protection and security</h3>
			<p>Planning is essential when it comes to protecting your data and business. We implement storage solutions to protect data and create disaster recovery guidelines that protect core functionalities of your enterprise – a true peace of mind.</p>
		</div>
		<div class="sector col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">Disaster Recovery Policy</h2>
			<h3>Every business needs a comprehensive disaster recovery policy.</h3>
			<p>Having backups is important, but those alone won’t get your business up and running following a disaster. Various metrics are weighed to create the best plan possible to restore not just data, but the functionality of your business.</p>
			<h3>Cyber Guardian will assist you in creating a recovery policy that outlines:</h3>
			<ul>
				<li>Recovery Point Objective (RPO): Planning for what portion of your data is needed to continue running your business normally, and making sure backups are capturing that data at appropriate intervals.</li>
				<li>Recovery Time Objective (RTO): The amount of time allowable for your business system to be down before there are unacceptable consequences.</li>
				<li>Worst-case scenario testing using a formulaic approach to determine the best outcome.</li>
				<li>How to access backed-up data.</li>
				<li>Disaster source detection.</li>
				<li>Equipment checks with repair/replacement guides.</li>
			</ul>
		</div>
	</div>
</div>
</body>

</html>