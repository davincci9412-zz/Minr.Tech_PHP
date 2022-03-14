
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

  <body class="investment">	
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
					<li><a class="right" href="#">Mining Investments</a></li>
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
				<h1 class="special"><span class="text-success">MINING</span> INVESTMENT</h1>
				<div class="container">
					<ul class="banner-button mb-4">
						<li class=""><a class="btn" href="buy.php">Invest Now</a></li>
						<li class=""><a class="btn" href="#">Live chart</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>	
	<div class="blue-section-grad">
		<div class="para-1 text-center ">
			<h4 class="thin">10% of all inbound investment into the MINR token is immediately invested into fractional crypto mining ownership via named facilities with proven track record of successful return on crypto mining. The contracts secured for fractional ownership, due to industry sensitivities, are confidential in nature however the outline is that we invest to support expansion of existing facilities which enables the facilities to buy more equipment up front. The yield from these machines is part shared after deduction of standard direct costs such as electricity, management etc. Our combined fractional ownership value can be seen in the table below - Mining investment table (updated weekly) and the return on investment from the mining investments can be seen in the table - Mining Yields (updated weekly but converted at random times).</h4>
		</div>
	</div>
	<div class="blue-section text-center">
		<div class="para-2">
			<img src="assets/image/invest11.png"/>
		</div>
		<div class="para-3">			
			<h1 class="special"><span class="text-success">MINING</span> INVESTMENT TABLE</h1>
			<h4 class="thin my-5 py-2">Below is a table detailing the amounts and dates as well as the transactions on where we have sent the money for mining expansion.</h4>
			<div class="table">
				<div class="tr thead">
					<div class="td">
						<div class="flex">
							<span class="text">Date</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="date"></span>
								<span class="down-arrow sort-icon" name="date"></span>
							</span>
						</div>
					</div>
					<div class="td">
						<div class="flex">
							<span class="text">Minr Tokens Invested</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="invest"></span>
								<span class="down-arrow sort-icon" name="invest"></span>
							</span>
						</div>
					</div>
					<div class="td">
						<div class="flex">
							<span class="text">Transaction Details</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="transaction"></span>
								<span class="down-arrow sort-icon" name="transaction"></span>
							</span>
						</div>
					</div>
					<div class="td">
						<div class="flex">
							<span class="text">Balance</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="balance"></span>
								<span class="down-arrow sort-icon" name="balance"></span>
							</span>
						</div>
					</div>
				</div>
				<div class="tr italic">
					<div class="td">Sample Record: 2021-07-20</div>
					<div class="td">120 000 000</div>
					<div class="td"><a href="#">Txn 1</a></div>
					<div class="td">320 000 000</div>
				</div>
			</div>
		</div>
		<div class="para-3">			
			<h1 class="special"><span class="text-success">MINING</span> YIELDS</h1>
			<h4 class="thin my-5 py-2">Below is a table detailing the amount that we have profited, when the mined coins were converted to Minr Tokens and when they were burnt.</h4>
			<div class="table six">
				<div class="tr thead">
					<div class="td">
						<div class="flex">
							<span class="text">Week</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="week"></span>
								<span class="down-arrow sort-icon" name="week"></span>
							</span>
						</div>
					</div>
					<div class="td">
						<div class="flex">
							<span class="text">Yield(in BTC)</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="yield"></span>
								<span class="down-arrow sort-icon" name="yield"></span>
							</span>
						</div>
					</div>
					<div class="td">
						<div class="flex">
							<span class="text">Conversion Date</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="date"></span>
								<span class="down-arrow sort-icon" name="date"></span>
							</span>
						</div>
					</div>
					<div class="td">
						<div class="flex">
							<span class="text">Conversion</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="conversion"></span>
								<span class="down-arrow sort-icon" name="conversion"></span>
							</span>
						</div>
					</div>
					<div class="td">
						<div class="flex">
							<span class="text">Balance in BTC</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="balance"></span>
								<span class="down-arrow sort-icon" name="balance"></span>
							</span>
						</div>
					</div>
					<div class="td">
						<div class="flex">
							<span class="text">Transaction</span>
							<span class="sort">
								<span class="up-arrow sort-icon" name="transaction"></span>
								<span class="down-arrow sort-icon" name="transaction"></span>
							</span>
						</div>
					</div>
				</div>
				<div class="tr italic">
					<div class="td">Sample Record:28</div>
					<div class="td">0.73</div>
					<div class="td">2021-7-20</div>
					<div class="td">100 000 000 Minr : 0.3 BTC</div>
					<div class="td">0.43</div>
					<div class="td"><a href="#">Txn 1</a></div>
				</div>
			</div>
			<h4 class="thin mt-5">You can see the details of the MINR token purchases from the profits and tokens subsequently burnt in this address.</h4>
		</div>
		<div class="para-3">			
			<h1 class="special">TOKENOMICS</h1>
			<div class="container-fluid">
				<div class="row pt-4">
					<div class="col-md-6 text-left mb-4">
						<h4 class="thin italic bold">The combination of 5% burn on sale plus the mining revenue burn gives MINR a powerful hold incentive as the token deflationary volumes will mean a far quicker increase in price for all investors than other tokens we know of. Plus the volume of profit from crypto mining is a dependable income stream which can be accounted for reliably into the future giving achievable milestones not dependent on the token trading market but dependent	on the crypto mining market</h4>
					 </div>
					<div class="col-md-6">
						<img class="invest2" src="assets/image/invest2.png"/>
					</div>
				</div>
			</div>
		</div>
		<div class="para-3">			
			<h1 class="special"><span class="text-success">CRYPTO MINING</span><br/>INVESTMENT EXPLAINED</h1>
			<div class="container-fluid">
				<div class="row pt-4">
					<div class="col-md-6">
						<img class="invest3" src="assets/image/invest3.png"/>
					 </div>
					<div class="col-md-6 text-left">
						<h4 class="thin">
							Fractional crypto ownership facility owners charge a percentage of fees to manage costs and there are additional variables that impact ROI (coins mined, location, operating costs such as electricity etc. So the intention is to work with multiple partners based on best ROI as well as build in house mining facilities. Fractional ownership shares can be bought or sold in order to move investments into better performing contracts, the proceeds from sales will be re-allocated into other mining investments,coins and facilities however, ownership transactions and yield volumes will always be publicly available and directly related to the 10% fee on inbound investments and the return of investment provided by the crypto mining operations.
						</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="para-3">			
			<h1 class="special"><span class="text-success">CRYPTO MINING</span> OPERATORS</h1>
			<div class="container-fluid">
				<div class="row pt-4">
					<div class="col-md-6 text-left pl-0 pr-3 mb-4">
						<h4 class="thin">
							We are able to invest upfront to support expansion and development of established professional crypto mining operations. MINR has standard fractional ownership contracts which enable us to invest upfront in return for fractional ownership of facilities and a proportional share of net profit after reasonable fees. These contracts can be re-sold at any time but are not required to be re-purchased by the seller.
						</h4>
					 </div>
					<div class="col-md-6 text-left pl-4 pr-0">
						<h4 class="thin">
							Mining operations are often funded by multiple sources and fractional ownership is common. For any mining facilities out there looking for additional investment we request details of historic ROI, confirmation of legal entity and If you are investing in crypto mining facilities with competitive ROI through location / hashing algorithms etc then please get in touch with us at minr@minr.tech
						</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="para-3">	
			<img class="invest2" src="assets/image/invest4.png"/>
		</div>
		<div class="para-3">			
			<h1 class="special">FAQ'S</h1>
			<h4 class="thin my-5">
				For any queries please see our FAQ’s page and if not detailed there contact MINR @ contact@minr.tech
			</h4>
		</div>
		<div class="para-3"></div>
	</div>
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
					<h6 class="thin my-2"><a href="jobs.php" >Jobs</a></h6>			
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
