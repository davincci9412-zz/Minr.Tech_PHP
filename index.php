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
								<input type="text" id="copyAddress1" class="copy-address" value="0x42f28259cab02d809a1719353a873175d2a018f1" readOnly />	
								<img class="contract" src="assets/image/icon-01.png" onclick="copyToClipboard1();" />
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
					<li><a href="#">Home</a></li>
					<li><a href="https://drive.google.com/file/d/1YL2IpVw0_yM6CmMqbmWZm7fml1dwIyXZ/view?usp=sharing" target="_blank">Whitepaper</a></li>
					<li><a class="right" href="investment.php">Mining Investments</a></li>
					<li><img class="logo" src="assets/image/icon-04.png"/></li>
					<li><a class="left" href="http://spark.minr.tech:3000/" target="_blank">spark.minr</a></li>
					<li><a href="#Roadmap">Roadmap</a></li>
					<li><a href="buy.php">How to invest</a></li>
				</ul>
			  </div>	
			</nav>
			<div class="banner text-center">
				<img class="mobile-logo" src="assets/image/icon-04.png"/>
				<h1 class="my-4">Minr<span class="thin">($minr)</span></h1>
				<h2 class="container my-3">The deflationary DeFi token investing in crypto mining which reinvest profits back into the minr token - keeping it constantly growing.</h2>
				<h4 class="thin">Utilising token currency infrastructure to enable anyone to invest in crypto mining with fractional investment.</h4>
				<div class="container">
					<ul class="nav banner-button my-5">
						<li class=""><a class="btn" href="buy.php">Invest Now</a></li>
						<li class=""><a class="btn" href="https://poocoin.app/tokens/0x42f28259cab02d809a1719353a873175d2a018f1" target="_blank">Live chart</a></li>
					</ul>
				</div>
				<div class="container banner-icon my-5">
					<ul class="nav justify-content-center ">
						<li class="icon first">
							<img src="assets/image/icon-05.png"/>
							<h4 class="my-4">Crypto Mined</h4>
						</li>
						<li class="go-right">
							<img class="right" src="assets/image/icon-06.png"/>
						</li>
						<li class="icon second">
							<img src="assets/image/icon-07.png"/>
							<h4 class="my-4">Mining Yields</h4>
						</li>
						<li class="go-right">
							<img class="right" src="assets/image/icon-06.png"/>
						</li>
						<li class="icon third">
							<img src="assets/image/icon-08.png"/>
							<h4 class="my-4">Invest back into Minr</h4>
						</li>
						<li class="go-right">
							<img class="right" src="assets/image/icon-06.png"/>
						</li>
						<li class="icon fourth">
							<img src="assets/image/icon-09.png"/>
							<h4 class="my-4">Burn Tokens from Redistribution Wallet</h4>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
    <div class="container-fluid green-section">
      <div class="container text-center">  
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<div><img class="right" src="assets/image/icon-10.png"/></div>
				<h6>Mining is in process, amounts and values will be updated once we receive yield from our mining investments.</h6>
			</div>
			<div class="col-md-5">
				<div><img class="right" src="assets/image/icon-11.png"/></div>
				<h6>Mining is in process, amounts and values will be updated once we receive yield from our mining investments.</h6>
			</div>
			<div class="col-md-1"></div>
		</div>
      </div>
    </div>	
	<div class="blue-section pt-5 text-center">
		<div class="container-fluid pt-5">
			<div class="row">
				<div class="col-md-3 mb-3">
					<h4 id="price" class="text-success">Preparing...</h4>			
					<h5 class="thin">Current Price</h5>
				</div>
				<div class="col-md-3 mb-3">
					<h4 id="price_change" class="text-success">Preparing...</h4>			
					<h5 class="thin">Price 24hr Change</h5>
				</div>
				<div class="col-md-3 mb-3">
					<h4 id="volume_amount" class="text-success">Preparing...</h4>			
					<h5 class="thin">Volume 24hrs</h5>
				</div>
				<div class="col-md-3 mb-3">
					<h4 id="volume_change" class="text-success">Preparing...</h4>			
					<h5 class="thin">Volume 24hr Change</h5>
				</div>
			</div>
		</div>
		<div class="container-fluid py-4">
			<div class="row">
				<div class="col-md-3 mb-3">
					<h4 id="holder_number" class="text-success">Preparing...</h4>			
					<h5 class="thin">Holders</h5>
				</div>
				<div class="col-md-3 mb-3">
					<h4 id="liquidity" class="text-success">Preparing...</h4>			
					<h5 class="thin">Liquidity Generated</h5>
				</div>
				<div class="col-md-3 mb-3">
					<h4 id="market" class="text-success">Preparing...</h4>			
					<h5 class="thin">Market Cap</h5>
				</div>
				<div class="col-md-3 mb-3">
					<h4 id="mining" class="text-success">Preparing...</h4>			
					<h5 class="thin">Money invested into Crypto Mining</h5>
				</div>
			</div>
		</div>
		<div class="py-5 container-fluid " id="brandingPackage">
			<div class="row">
				<div class="col-md-3">
					<img class="middle" src="assets/image/icon-12.png"/>
					<h1 class="py-4">Crypto Mining</h1>			
					<h5 class="thin px-33">$minr is a project focused on building a sustainable token by making fractional investments into existing crypto mining operations that then reinvests the mined currencies back into the minr token. This model creates a new hybrid token which automatically grows in value for its holders.
					</h5>
				</div>
				<div class="col-md-3">
					<img class="middle" src="assets/image/icon-13.png"/>
					<h1 class="py-4">Community Focus</h1>			
					<h5 class="thin px-33">Making money is great, making money together is better. We choose to share our success with the world in an effort to better the lives of our community, their families and thzeir bank accounts. The $minr community will be involved in deciding which currencies to mine, be engaged in developing new hashing tech and algorithms which will benefit all ofthe minr holders.
					</h5>
				</div>
				<div class="col-md-3">
					<img class="middle" src="assets/image/icon-14.png"/>
					<h1 class="py-4">Unlocking real world value</h1>			
					<h5 class="thin px-33">Crypto mining yields will be reinvested back into minr tokens which will be redistributed to minr holders. Join the minr community to decide which currencies are mined and get money back from you investment.
					</h5>
				</div>
				<div class="col-md-3">
					<img class="middle" src="assets/image/icon-15.png"/>
					<h1 class="py-4">Transparency</h1>			
					<h5 class="thin px-33">We take pride in being open about who we are and where our values lie. We aren’t afraid to give our opinions in AMAs or to answer any and all questions. We are transparent with as much as we can while still remaining competitive.
					</h5>
				</div>
			</div>			
		</div>
	</div>
	<div class="blue-section py-4" >
		<div class="container py-3" id="Roadmap">
			<h1 class="special text-center"><span class="text-success">MINR</span>&nbsp;<span class="thin">ROADMAP</span></h1>
		</div>
		<div class="world container-fluid py-5">
			<div class="map">
				<div class="first">	
					<div class="image">
						<img class="first-map" src="assets/image/mobile3-1.png"/>	
					</div>	
					<div class="text">	
						<h1>Bit Minr</h1>
						<div><h5 class="thin"><div><input type="checkbox" checked="checked" /></div><div>Successful Launch</div></h5></div>
						<div><h5 class="thin"><div><input type="checkbox" checked="checked" /></div><div>Incorporate business</div></h5></div>
						<div><h5 class="thin"><div><input type="checkbox" checked="checked" /></div><div>Influencer Promotions</div></h5></div>
						<div><h5 class="thin"><div class="mobile-left"><input type="checkbox" checked="checked" /></div><div class="mobile-right">Hire a social media team (3 people)</div></h5></div>
						<div><h5 class="thin"><div><input type="checkbox"  /></div><div>Poocoin Advertisement</div></h5></div>
						<div><h5 class="thin"><div><input type="checkbox"  /></div><div>Coin marketcap</div></h5></div>
						<div><h5 class="thin"><div><input type="checkbox"  /></div><div>CoinGecko</div></h5></div>
						<div><h5 class="thin"><div class="mobile-left"><input type="checkbox"  /></div><div class="mobile-right">Partner with 2 large scale mining operations</div></h5></div>
						<div><h5 class="thin"><div class="mobile-left"><input type="checkbox"  /></div><div class="mobile-right">Begin BETA testing of the spark.minr platform</div></h5></div>
						<div><h5 class="thin"><div><input type="checkbox"  /></div><div>Expand the core dev team</div></h5></div>
					</div>	
				</div>
				<div class="mobile second">
					<div class="image">
						<img class="first-map" src="assets/image/mobile3-2.png"/>	
					</div>	
					<div class="text">	
						<h1>Diamond Minr</h1>
						<div><h5 class="thin"><div><input type="checkbox" /></div><div>Build out partnership team</div></h5></div>
						<div><h5 class="thin"><div class="mobile-left"><input type="checkbox" /></div><div class="mobile-right">Large scale mining operation generating</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">+250k USD per month in mining revenues to the minr Token</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Minr token shall have invested more than 10 million USD in fractional mining investments globally</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Minr platform shall be used by more than 100.000 users per month</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Strategic partnership with influencers and crypto loyalist</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Minr aim to develop a environmentally friendly policy and ensure that it’s mining investment comply with these guidelines for clean energy deployment. This will be done with the help from our community.</div></h5></div>
					</div>
				</div>
				<div class="third">
					<div class="image">
						<img class="first-map" src="assets/image/mobile3-3.png"/>	
					</div>	
					<div class="text">	
						<h1>Mega Minr</h1>
						<div><h5 class="thin"><div><input type="checkbox" /></div><div>Smart contract audit</div></h5></div>
						<div><h5 class="thin"><div><input type="checkbox" /></div><div>Listing on exchanges</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">10x fractional investments into our ongoing mining contracts</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Add an additional 2-3 mining partners globally</div></h5></div>
						<div><h5 class="thin"><div class="mobile-left"><input type="checkbox" /></div><div class="mobile-right">More strategic marketing investments</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Scope out additional capabilities with the community for the platform</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Scope out app where you can track mining yields and profit in real time</div></h5></div>
					</div>
				</div>
			</div>
			<div class="map">
				<div class="second">
					<div class="image">	
					</div>	
					<div class="text">	
						<h1>Diamond Minr</h1>
						<div><h5 class="thin"><div><input type="checkbox" /></div><div>Build out partnership team</div></h5></div>
						<div><h5 class="thin"><div><input type="checkbox" /></div><div>Large scale mining operation generating</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">+250k USD per month in mining revenues to the minr Token</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Minr token shall have invested more than 10 million USD in fractional mining investments globally</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Minr platform shall be used by more than 100.000 users per month</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Strategic partnership with influencers and crypto loyalist</div></h5></div>
						<div><h5 class="thin"><div class="long-left"><input type="checkbox" /></div><div class="long-right">Minr aim to develop a environmentally friendly policy and ensure that it’s mining investment comply with these guidelines for clean energy deployment. This will be done with the help from our community.</div></h5></div>
					</div>
				</div>
				<div class="fourth">
					<div class="image">
						<img class="first-map" src="assets/image/mobile3-4.png"/>	
					</div>	
					<div class="text">	
						<h1>Moon Minr</h1>
						<div><h5 class="thin"><div><input type="checkbox" /></div><div>Community will decide</div></h5></div>
					</div>
				</div>
			</div>
		</div>
		<div class="my-3 py-3"></div>
		<div class="faq py-4">
			<h1 class="special text-center">FAQ</h1>
			<hr/>
			<div class="section my-5">
				<div class="section-header" id="headingOne">
					<h1 class="thin">What is Minr?</h1>
					<span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="cursor icon collapsed"></span>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					<h5 class="thin">$minr is a project focused on investing in fractional mining in existing mining operations, leaving the mining to process to the experienced professionals. Minr will through its community develop policies for environmentally friendly partnerships to ensure that the mines that receive minr investments comply with a clean energy protocol.</h5>
					<h5 class="thin">All mining proceeds (yields) from the fractional investments will be placed into a minr redistribution wallet who will buy back minr tokens and then burn the minr tokens acquired. This model creates a new hybrid token which automatically grows in value for its holders.
									The $minr community will be involved in deciding which currencies to mine, be engaged in developing new hashing tech and algorithms which will benefit all of the minr holders and ultimately we will work together to define the policies that we would like the mining operations to comply with.</h5>
					<h5 class="thin">As an added benefit our dev team has developed a platform called Spark which will have three base functionalities at launch: My Address, Address Tracker and Exchange Arbitrage</h5>
				
				</div>
			</div>
			<hr/>
			<div class="section my-5">
				<div class="section-header" id="headingTwo">
					<h1 class="thin">How does Minr work?</h1>
					<span data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="cursor icon collapsed"></span>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<h5 class="thin  my-4">$minr is the first token to be linked to to a tangible business. The mining of Crypto currency. We are investing clearly defined funds into sustainable crypto mining and returning the profits to the token. This enables people at any level of investment to be involved in the potential that crypto mining and a currency token has to offer.</h5>
					<h5 class="thin  my-4">We have built a token that will reward you for holding it, without having to manually stake it. Just sit back, relax, and watch your minrs increase in value. In addition, and perhaps the most compelling thing with minr is the reinvestment of crypto mining profit back into the token. As profits from the Crypto Mining are realized they will be deployed into a reinvestment wallet and then burnt. This will automatically increase the overall price of all $minr holders and as the operation scale we will all benefit as holders!</h5>
						
					<h5 class="thin  my-4">When you invest Each transaction triggers a 10% fee which will be sent into an investment wallet, this wallet is used to invest in fractional mining contracts. When you sell your minr tokens 5% will be redistributed to all current minr holders, in proportion to their current holdings and additionally, 5% will be sent to the Pancakeswap LP v2.
						Why Minr over other Tokens?</h5>
					
				</div>
			</div>
			<hr/>
			<div class="section my-5">
				<div class="section-header" id="headingThree">
					<h1 class="thin">How can I buy Minr?</h1>
					<span data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="cursor icon collapsed"></span>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<h5 class="thin"><a href="buy.php" target="_blank">Link to How to Buy</a></h5>
				</div>
			</div>
			<hr/>
			<div class="section mt-5">
				<div class="section-header"  id="headingFour">
					<h1 class="thin">Why Minr over other Tokens?</h1>
					<span data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="cursor icon collapsed"></span>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
					<h5 class="thin">Minr token is a unique token to all other tokens as it combines real world business with the tokenomics of other tokens. This makes it a much more attractive investment option than others. In addition to standard deflationary tokenomics you will receive actual yield from crypto currencies mined.</h5>

					<h5 class="thin">This increases the overall yield for your investment and you are encouraged to hold. Real Diamond Hands will truly be rewarded with Minr as reinvestments will always continue through the redistribution wallet.</h5>
						
				</div>
			</div>
		</div>
		<div class="faq py-4">
			<h1 class="special text-center">Disclaimer</h1>
			<hr/>
			<div class="section my-4">
				<div id="headerFive">
					<div class="my-5 text-center" ><img class="disclaimer cursor collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"  src="assets/image/icon-18.png"/></div>
				</div>
				<div id="collapseFive" class="collapse" aria-labelledby="headerFive" data-parent="#accordion">
					<h3 class="thin  my-5">The content shared on this website is for informational purposes only and, thus, should not be considered as financial advice.</h3>
					<h3 class="thin  my-5">Trading crypto/digital assets is highly risky and highly volatile, and you should never invest more than you can afford to lose. Always seek professional advice before making any investment.</h3>
					<h3 class="thin  my-5">The website visitor alone assume the sole responsibility of evaluating the merits and risks associated with the use of any information or other content on the website before making any decisions based on such information or other content. The website visitor indemnifies the website creators and all members of project creation and administration, from any responsibility regarding their financial decisions.</h3>
				</div>
			</div>
		</div>
		<div class="my-5"></div>		
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

		//get the token price from BSCscan API
		const Http = new XMLHttpRequest();
		var url='https://api.bscscan.com/api?module=token&action=tokeninfo&contractaddress=0x42f28259cab02d809a1719353a873175d2a018f1&apikey=536NCBDYVREIJDEM66KFETYK6N76PY89GT';
		Http.open("GET", url);
		Http.send();
		Http.onreadystatechange = (e) => {
			if (Http.readyState == 4){
				var result = JSON.parse(Http.response);
				if (result.message == "OK"){					
					document.getElementById("price").innerHTML="$"+result.result[0].tokenPriceUSD
					document.getElementById("price").className=""
				} else {
					document.getElementById("price").className="text-success"
				}
			}
		}
		
		//get the number of holders from BSCscan API
		const Http1 = new XMLHttpRequest();
		url='https://api.bscscan.com/api?module=token&action=tokenholderlist&contractaddress=0x42f28259cab02d809a1719353a873175d2a018f1&page=1&offset=10000&apikey=536NCBDYVREIJDEM66KFETYK6N76PY89GT';
		Http1.open("GET", url);
		Http1.send();
		Http1.onreadystatechange = (e) => {
			if (Http1.readyState == 4){
				var result = JSON.parse(Http1.response);
				if (result.message == "OK"){					
					document.getElementById("holder_number").innerHTML=result.result.length
					document.getElementById("holder_number").className=""
				} else {
					document.getElementById("holder_number").className="text-success"
				}
			}
		}	
		//Get the Price 24hr change, market cap, 24hr volume from coingecko API
		var today_volume = 0;
		<?php
			$url = 'https://api.coingecko.com/api/v3/simple/token_price/binance-smart-chain?contract_addresses=0x42f28259cab02d809a1719353a873175d2a018f1&vs_currencies=usd&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($response, true);
			//$result = json_decode('{"0x8076c74c5e3f5852037f31ff0093eeb8c8add8d3":{"usd":2.08e-06,"usd_market_cap":1203804968.13423,"usd_24h_vol":13710286.101155782,"usd_24h_change":-5.027576980021837}}', true);
			if ($result == null){
				$usd_market_cap = $usd_24h_vol = $usd_24h_change = '';
			} else {
				$usd_market_cap = $result["0x42f28259cab02d809a1719353a873175d2a018f1"]["usd_market_cap"];
				$usd_24h_vol = $result["0x42f28259cab02d809a1719353a873175d2a018f1"]["usd_24h_vol"];
				$usd_24h_change = $result["0x42f28259cab02d809a1719353a873175d2a018f1"]["usd_24h_change"];
			}
		?>
		<?php if ($usd_market_cap != '' && $usd_24h_vol != '' && $usd_24h_change != '') { ?>
			document.getElementById("market").innerHTML="$"+<?php echo $usd_market_cap?>;
			document.getElementById("market").className="";

			today_volume = <?php echo $usd_24h_vol?>;
			document.getElementById("volume_amount").innerHTML="$"+<?php echo $usd_24h_vol?>;
			document.getElementById("volume_amount").className="";

			var price_change = (Number(<?php echo $usd_24h_change?>)).toFixed(2);
			var price_change_class = "";
			if (price_change < 0) price_change_class = "text-danger";
			price_change = price_change + "%";
			document.getElementById("price_change").innerHTML = price_change;
			document.getElementById("price_change").className = price_change_class;
		<?php } ?>
		
		//Get the Volume 24hr change from coingecko API
		<?php
			//$url = 'https://api.coingecko.com/api/v3/coins/safemoon/market_chart?vs_currency=usd&days=1&interval=daily';
			$url = 'https://api.coingecko.com/api/v3/coins/minr/market_chart?vs_currency=usd&days=1&interval=daily';
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($response, true);
			//$result = json_decode('{"prices":[[1628726400000,2.0704974101697713e-06],[1628732710000,2.0515953199677365e-06]],"market_caps":[[1628726400000,1218705515.9877381],[1628732710000,1189055719.2262988]],"total_volumes":[[1628726400000,14030491.308213959],[1628732710000,13794205.637356335]]}', true);
			if ($result == null || $result['error']){
				$yesterday_volume = '';
			} else {
				$yesterday_volume = ($result['total_volumes'][0][1] + $result['total_volumes'][1][1])/2;
				//$yesterday_volume = '';
			}
		?>

		<?php if ($yesterday_volume != '') { ?>
			var volume_change = ((Number(today_volume)-Number(<?php echo $yesterday_volume ?>))/Number(today_volume)*100).toFixed(2);
			var volume_change_class = "";
			if (volume_change < 0) volume_change_class = "text-danger";
			volume_change = volume_change + "%";
			document.getElementById("volume_change").innerHTML=volume_change;
			document.getElementById("volume_change").className=volume_change_class;
		<?php } ?>
		
		//get the Market cap, 24hr volumes, price 24hr changes  from Coingecko API
		// const Http2 = new XMLHttpRequest();
		// var today_volume = 0;
		// url='https://api.coingecko.com/api/v3/simple/token_price/binance-smart-chain?contract_addresses=0x8076c74c5e3f5852037f31ff0093eeb8c8add8d3&vs_currencies=usd&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';
		// Http2.open("GET", url, true);
		// Http2.onload = function () {
		// 	console.log(Http2.responseURL); // http://example.com/test
		// };
		// Http2.send();
		// Http2.onreadystatechange = (e) => {
		// 	if (Http2.readyState == 4){
		// 		var result = JSON.parse(Http2.response);
		// 		document.getElementById("market").innerHTML=result[0].usd_market_cap
		// 		document.getElementById("market").className=""
		// 		today_volume = result[0].usd_24h_vol;
		// 		document.getElementById("volume_amount").innerHTML=result[0].usd_24h_vol
		// 		document.getElementById("volume_amount").className=""
		// 		document.getElementById("price_change").innerHTML=result[0].usd_24h_change
		// 		document.getElementById("price_change").className=""
		// 	}
		// }

		// //get the volume 24 changes from Coingecko API
		// const Http3 = new XMLHttpRequest();
		// url='https://api.coingecko.com/api/v3/coins/safemoon/market_chart?vs_currency=usd&days=1&interval=daily';
		// Http3.open("GET", url);
		// Http3.send();
		// Http3.onreadystatechange = (e) => {
		// 	if (Http3.readyState == 4){
		// 		var yesterday_volume = (result.total_volumes[0][1] + result.total_volumes[1][1])/2
		// 		document.getElementById("volume_change").innerHTML=(Number(today_volume)-Number(yesterday_volume))/Number(today_volume)*100;
		// 		document.getElementById("volume_change").className=""
		// 	}
		// }
	</script>
  </body>
</html>
