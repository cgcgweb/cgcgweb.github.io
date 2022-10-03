<style>
html {
	scroll-behavior: smooth;
} 
body {
	margin: 0;
	overflow-x:hidden;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	width:100vw;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;} 
[class*="col-"] {float: left;}
.row {
	width:100%;
	padding-right:3%;
	padding-left:3%;
}
* {
	box-sizing:border-box;
}
@media screen and (max-width:900px) {
	[class*="col-"] {
		width: 100%;
	}
	.row.header {
		padding: 0;
	}
	.desktop {display:none !important;}
	nav .menu {
		padding: 40px;
		min-width: 101vw;
		text-align: center;
		padding-left: 0;
		padding-right: 0;
		background-color: #F0F8FC;
	}
}
@media screen and (min-width:900px) {
	.mobile {display:none !important;}
	nav .menu {
		padding: 40px;
		min-width: 60%;
		text-align: center;
	}
}
nav {overflow:hidden;}
.nav {
	text-decoration:none; color:black;
}
.nav.forbes {
	float: right;
}
nav div {
	float: left;
}

nav .logo {
  padding: 20px;
}

nav .logo.eagle {
	width: 100%;
	padding: 0;
	position: absolute;
	text-align: center;
	top: 16px;
}
.eagle .nav.logo {
	width: 33%;
}

.menu .nav {
	margin: 1vw;
}
.dropdown {
  position: relative;
}
.dropdown-content {
	display: none;
	background-color: #E5E5E5;
	min-width: 100%;
	overflow: auto;
	z-index: 1;
	padding-top: 16px;
}
.dropdown-content a {
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.show {display: inline;}
#dropper a {
	color: #757575 !important;
	font-weight: bold;
}
.green {
	color:#2DD8A3;
}
.blue {
	color:#0166A3;
}
.spacer {
	margin-top:24px;
}
.gray {
	color:gray;
}
</style>

<div class="row header">
<nav>
<div class="logo"><img class="nav logo" src="media/CGCG.svg"/></div>
<div class="logo eagle mobile"><img class="nav logo" src="media/eagle.svg"/></div>
<div class="menu">
	<a class="nav navlink" href="#">home</a>
	<a class="nav navlink" href="#">about</a>
	<a class="nav navlink" id="sopener" onclick="drop()" href="#">services ▼</a>
	<a class="nav navlink" href="#">resources</a>
	<a class="nav navlink" href="#">contact</a>	
	<br>
	<div id="dropper" class="dropdown-content">
		<div style="width:50%">
			<span class="sh">Managed Services:</span>
			<a href="#">Managed IT Services</a>
			<a href="#">Cybersecurity Solutions</a>
			<a href="#">Cloud Backup and Disaster Recovery</a>
			<a href="#">Reputation Management</a>
		</div>
		<div style="width:50%">
			<span class="sh">Advisory Services:</span>
			<a href="#">CISOaaS</a>
			<a href="#">CTOaS</a>
			<a href="#">CIOaS</a>
			<a href="#">SOCaS</a>
			<a href="#">Private Digital Investigations</a>
		</div>
	</div>
</div>
<img class="nav forbes desktop" src="media/Forbes.svg"/>
</nav>

<script>
function drop() {
  document.getElementById("dropper").classList.toggle("show");
  if(document.getElementById("sopener").innerText == "services ▼") {
	  document.getElementById("sopener").innerText = "services ▲"
  }else {
	  document.getElementById("sopener").innerText = "services ▼"
  }
}

</script>
</div>

