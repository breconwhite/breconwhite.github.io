<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
  	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
	<!--HEADER-->

	<div id="Header">
		<a href="index.html">
			<div id="hInfo">
				<div id="Name"><p>Brecon White</p></div>
				<div id="LogoBack"></div>
				<div id="Logo"><img src="Images/logo.png"> </div>
			</div>
		</a>
		<div id="hNav">
			<div id="hLinks">
				<a href="about.html" class="NavButtonA">About</a>
				<a href="portfolio.php" class="NavButtonP">Portfolio</a>
			</div>
			<div id="hSubLinks">
		</div>
	</div>

	<!--MAIN-->

	<div id="Main">
		<div id="portfolio">
			<div id="portNav">
				<a id="portNavButton" style="background:url('Images/beer1.jpeg') center" href="portfolio.php?f=web">
					<span>WEB</span>					
					<span class="shh">WEB</span>
				</a>
				
				<a id="portNavButton" style="background:url('Images/beer2.png') center" >				
					<span>DESIGN</span>
					<span class="shh">COMING SOON</span>
				</a>

				<a id="portNavButton" style="background:url('Images/beer3.jpg') center" >				
					<span>GAMES</span>
					<span class="shh">COMING SOON</span>
				</a>	
			</div>				
			<div id="portContent">
			</div>
		</div>
	</div>

	<!--CONTACT-->

	<div id="Contact">Copyright <i class="fa fa-copyright"></i> 2015 &nbsp | &nbsp
		<a href="mailto:breconwhite@gmail.com"><i class="fa fa-envelope"></i></a>&nbsp
		<a href="https://github.com/breconwhite"><i class="fa fa-github"></i></a>
		<a style="position:fixed; right:15; opacity:0.5" href="notthepage.html"><i class="fa fa-rebel"></i></a>
	</div>


	<script>

		$( "a.NavButtonA" ).hover(
		  function() {
		    $( this ).append( $( 
		    	"<div id='subNav' class='NavButtonA'><a>Resume</a><a href='https://github.com/breconwhite'>Github</a><a href='mailto:breconwhite@gmail.com'>Message</a></div>" ) );
		  }).mouseleave(
	    	function(){
    			$(this).find( "div#subNav" ).remove();
    	});
		 
		$( "a.NavButtonP" ).hover(
		  function() {
		    $( this ).append( 
		    	$( "<div id='subNav'><a>Web</a><a>Design</a><a>Games</a></div>" ) 
		    );
		  }).mouseleave(
	    	function(){
	    		$(this).find( "div#subNav" ).remove();
    	});

  	</script>

</body> 