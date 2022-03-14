
<!--
Author : Vadim
Create Date : 8/16/2021
Email : snowfirst312@outlook.com
Skype : live:.cid.d66694e683af316e
Description : Minr Project
-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>MINR</title>
    
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>	
	<header>
		<div class="back">
			<div class="top-bar mb-5">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-8 small">
							<span class="address">Contract Address: </span>
							<span class="address-value">
								<input type="text" id="copyAddress1" class="copy-address" value="0x42f28259cab02d809a1719353a873175d2a018f1" readOnly/>	
								<img class="contract" src="assets/image/icon-01.png" onclick="copyToClipboard1()"/>
								<span id="copyStatus1"></span>
							</span>
							<img class="spread" src="assets/image/icon-06.png" id="contract-address"/>
						</div>
						<div class="col-md-3">
							<a href = "https://twitter.com/Minr25429987" target="_blank"><img class="pigeon" src="assets/image/icon-02.png"/></a>
							<a href = "https://t.me/minr1" target="_blank"><img class="butterfly" src="assets/image/icon-03.png"/></a>							
						</div>
					</div>
				</div>		
			</div>
			<nav class="navbar-expand-lg nav-bar my-3">
			<!-- <nav class="nav-bar my-3"> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="https://drive.google.com/file/d/1YL2IpVw0_yM6CmMqbmWZm7fml1dwIyXZ/view?usp=sharing" target="_blank">Whitepaper</a></li>
					<li><a class="right" href="investment.php">Mining Investments</a></li>
					<li><img class="logo" src="assets/image/icon-04.png"/></li>
					<li><a class="left" href="http://spark.minr.tech:3000/" target="_blank">spark.minr</a></li>
					<li><a href="index.php#Roadmap">Roadmap</a></li>
					<li><a href="buy.php">How to invest</a></li>
				</ul>
			  </div>	
			</nav>
			<div class="banner text-center">
				<img class="mobile-logo" src="assets/image/icon-04.png"/>
				<h1 class="my-4">Minr<span class="thin">($minr)</span></h1>
				<div class="jobs">
					<h1 class="special text-success mb-5">JOBS</h1>								
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 mb-4">
								<div class="jobs-paragraph">
									<p class="mb-5">As out team grows we will list jobs here</p>
									<p class="mb-5">We are always interested in speaking with top talent	around crypto mining setup, community management and marketing</p>
									<p class="mb-5">Currently actively recruiting for</p>
									<p class="mb-5">Crypto mining Engineer - Role is to support the CTO in the assessment of 3rd party Crypto mining partnership and to establish our own crypto mining facility.</p>
									<p class="mb-5">Familiariity with dedicated Crypto mining facility setup, hardware, software, yield optimisation</p>
									<p class="mb-5">Any enquiries to <span class="bold">HR@minr.tech</span></p>
								</div>
							</div>
							<div class="col-md-6 mb-4">
								<div class="job-image"><img class="logo" src="assets/image/jobs.png"/></div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</header>

	<div class="footer pt-5">
		<ul class="container text-center py-4">
			<li><img class="logo" src="assets/image/icon-04.png"/></li>
			<li class="title">Minr($minr)</li>
		</ul>
		<div class="container pt-3">
			<div class="row">
				<div class="col-md-4 mb-4">
					<h5 class="mb-3">Various</h5>			
					<h6 class="thin my-2"><a href="https://drive.google.com/file/d/1YL2IpVw0_yM6CmMqbmWZm7fml1dwIyXZ/view?usp=sharing" target="_blank">Whitepaper</a></h6>		
					<h6 class="thin my-2"><a href="buy.php" target="_blank" >How to buy</a></h6>		
					<h6 class="thin my-2"><a href="https://drive.google.com/drive/folders/1Jun1NSifp3G-EhN7elbVtpoS73hvueKw" >Branding Package</a></h6>				
				</div>
				<div class="col-md-4 mb-4">
					<h5 class="mb-3">About</h5>			
					<h6 class="thin my-2"><a href="#" >Jobs</a></h6>			
				</div>
				<div class="col-md-4 mb-4">
					<h5 class="mb-3">Community</h5>			
					<div>
						<a href = "https://twitter.com/Minr25429987"><img class="pigeon" src="assets/image/icon-02.png"/></a>
						<a href = "https://t.me/minr1"><img class="butterfly" src="assets/image/icon-03.png"/></a>
					</div>		
				</div>
			</div>
		</div>
		<div class="faq text-center pt-4 pb-3">
			<hr/>
			<h6>(C) 2021 Minr All Rights Reserved</h6>
		</div>
	</div>
	<button type="button" class="btn btn-success btn-floating btn-lg" id="btn-back-to-top"></button>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
		//Get the button
		let mybutton = document.getElementById("btn-back-to-top");
		// When the user scrolls down 800px from the top of the document, show the button
		window.onscroll = function () {
		  scrollFunction();
		};
		function scrollFunction() {
		  if ( document.body.scrollTop > 800 || document.documentElement.scrollTop > 800 ) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
		// When the user clicks on the button, scroll to the top of the document
		mybutton.addEventListener("click", backToTop);
		function backToTop() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}	

		let addressbutton = document.getElementById("contract-address");
		addressbutton.addEventListener("click", addressView);
		function addressView() {
			//document.getElementById("")
		    if (addressbutton.parentNode.classList.contains("open")) {
				addressbutton.parentNode.classList.remove("open");
			} else {
				addressbutton.parentNode.className += " open";
			}	 
		}	
		copyToClipboard1 = (e) => {
			document.getElementById("copyAddress1").select();
			document.execCommand('copy');
			// This is just personal preference.
			// I prefer to not show the whole text area selected.
			//e.target.focus();
			document.getElementById("copyStatus1").innerHTML='Copied!';
		};
		// //Get the Data from BSCscan and display on screen
		// const Http = new XMLHttpRequest();
		// const url='https://api.bscscan.com/api?module=account&action=balance&address=0xe63b38f4490D685D76585e025803e2941dC19491&tag=latest&apikey=536NCBDYVREIJDEM66KFETYK6N76PY89GT';
		// Http.open("GET", url);
		// Http.send();

		// Http.onreadystatechange = (e) => {
		// 	if (Http.readyState == 4){
		// 		JSON.parse(Http.response);
		// 		console.log(JSON.parse(Http.response))
		// 	}
		// 	//console.log(Http.responseText)
		// }
	</script>
  </body>
</html>
