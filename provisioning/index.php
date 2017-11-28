<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr"><head profile="http://gmpg.org/xfn/11">
	<title>FAN: Fully Automated Nagios</title>
	<link rel="shortcut icon" href="images/fanicon.png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/internet_services_2.css">
	<script type="text/javascript" src="js/mootools.js"></script>
	<script type="text/javascript">
		window.addEvent('domready', function(){
			//-vertical
			var mySlide = new Fx.Slide('nagios');
			mySlide.toggle();
			$('nagios_toggle').addEvent('click', function(e){
				e = new Event(e);
				mySlide.toggle();
				e.stop();
			});
			var mySlide2 = new Fx.Slide('centreon');
			mySlide2.toggle();
			$('centreon_toggle').addEvent('click', function(e){
				e = new Event(e);
				mySlide2.toggle();
				e.stop();
			});
			var mySlide3 = new Fx.Slide('nagvis');
			mySlide3.toggle();

			$('nagvis_toggle').addEvent('click', function(e){
				e = new Event(e);
				mySlide3.toggle();
				e.stop();
			});

			var mySlide4 = new Fx.Slide('dokuwiki');
			mySlide4.toggle();

			$('dokuwiki_toggle').addEvent('click', function(e){
				e = new Event(e);
				mySlide4.toggle();
				e.stop();
			});
			var mySlide5 = new Fx.Slide('nagiosgraph');
			mySlide5.toggle();

			$('nagiosgraph_toggle').addEvent('click', function(e){
				e = new Event(e);
				mySlide5.toggle();
				e.stop();
			});
		});
	</script>
</head>
<body class="front not-logged-in page-node two-sidebars">
	<div id="wrapper">
		<div id="container" class="clear-block">
			<div id="header">
				<div id="logo"> <img src="images/bandeau.png"> </div>
				<div id="slogan-floater"><h1 class="site-name"><a href="">FAN: Fully Automated Nagios</a></h1></div>

			</div>
			<div id="primary-links">
				<ul class="primary-links">
					<li class="menu-113 first"><a href="http:\/\/github.com/brunocantisano/rpi-nagios" title="GitHub Project's"><img src="images/docker_paperinik_120x120.png" height="30"/></a></li>
					<li class="menu-143"><a href="http:\/\/##MANTISBT##" title="Mantis Bug Tracker - login: ##LOGIN_MANTISBT##, password: ##PASSWORD_MANTISBT##"><img src="images/screenie_mantis.png" height="30"/></a></li>
				</ul>
			</div>
			<div id="sidebar-left" class="sidebar">
				<div id="block-menu-primary-links" class="block block-menu">
					<h2>Direct Links</h2>
					<div class="content">
						 <ul class="menu">
								<li class="leaf first"><a href="/nagios/" title="site NAGIOS - login: nagiosadmin, password: admin" target="_blank">Nagios</a></li>
                                <li class="leaf first"><a href="/nagvis/" title="site Nagvis - login: admin, password: admin" target="_blank">NagVis</a></li>
                                <li class="leaf first"><a href="/nagiosgraph/cgi-bin/show.cgi/" target="_blank">Nagios Graph</a></li>
                                <li class="leaf first"><a href="http:\/\/##CENTREON##" title="site CENTREON - login: ##LOGIN_CENTREON##, password: ##PASSWORD_CENTREON##" target="_blank">Centreon</a></li>
                                <li class="leaf first"><a href="http:\/\/##DOKUWIKI##" title="site Doku Wiki - login: ##LOGIN_DOKUWIKI##, password: ##PASSWORD_DOKUWIKI##" target="_blank">Dokuwiki</a></li>
                        </ul>
					</div>
				</div>
			</div>
			<div id="center">
				<div id="squeeze">
					<div id="breadcrumb"></div>
					<div class="node" <h2="">Software provided
						<div class="content" here="" is="" the="" list="" of="" tools="" provided="" by="" fan:="" <ol="">
							<li><a id="nagios_toggle" href="#">Nagios: Core monitoring application</a><div style="margin: 0px; position: static; overflow: hidden; height: auto;"><div id="nagios" style="margin: 0px;"><a href="/nagios/" target="_blank"><img src="images/screenie_nagios.png"></a></div></div></li>							
							<li><a id="nagvis_toggle" href="#">NagVis : a great tools for configuring maps</a><div style="margin: 0px; position: static; overflow: hidden; height: auto;"><div id="nagvis" style="margin: 0px;"><a href="/nagvis/" target="_blank"><img src="images/screenie_nagvis.png"></a></div></div></li>
							<li><a id="nagiosgraph_toggle" href="#">Nagios Graph : Parses output and performance data from Nagios plugins, and stores the data in RRD files.</a><div style="margin: 0px; position: static; overflow: hidden; height: auto;"><div id="nagiosgraph" style="margin: 0px;"><a href="/nagiosgraph/cgi-bin/show.cgi/" target="_blank"><img src="images/screenie_nagiosgraph.png"></a></div></div></li>
							<li><a id="centreon_toggle" href="#">Centreon: web frontend for Nagios</a><div style="margin: 0px; position: static; overflow: hidden; height: auto;"><div id="centreon" style="margin: 0px;"><a href="http:\/\/##CENTREON##" target="_blank"><img src="images/screenie_centreon.png"></a></div></div></li>
							<li><a id="dokuwiki_toggle" href="#">Dokuwiki : online wiki</a><div style="margin: 0px; position: static; overflow: hidden; height: auto;"><div id="dokuwiki" style="margin: 0px;"><a href="http:\/\/##DOKUWIKI##" target="_blank"><img src="images/screenie_dokuwiki.png"></a></div></div></li>							
							<li>Official Nagios plugins : plugins to monitor servers</li>
							<li>Contrib Nagios plugins : plugins offer by Nagios community</li>
							<li>NDOUtils : Nagios module to store monitoring data in MySQL</li>
							<li>NRPE: daemon provided</li>
							Authentification require for Nagios, Nagvis, Centreon and DokuWiki.<br>
							<map name="mymap">
								<area shape="rect" title="Nagios" coords="134,148,278,209" href="/nagios/" target="_blank">
								<area shape="rect" title="Centreon" coords="390,94,284,209" href="http:\/\/##CENTREON##" target="_blank">
								<area shape="rect" title="Nagvis" coords="10,120,133,185" href="/nagvis/" target="_blank">
								<area shape="poly" title="Doku Wiki" href="http:\/\/##DOKUWIKI##" coords="98,45,114,115,194,105,188,25,116,35" target="_blank" />
								<area shape="poly" title="NagiosGraph" href="/nagiosgraph/cgi-bin/show.cgi" coords="200,19,201,109,307,105,307,23" target="_blank" />
								<area shape="poly" title="Mantis BT" href="http:\/\/##MANTISBT##" coords="44,278,142,255,130,197,67,173,11,187,18,241" target="_blank" />						 
							</map>
							<img src="images/fan-schema-global.png" align="left" usemap="#mymap" border="0/">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
