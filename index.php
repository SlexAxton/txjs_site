<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <base href="http://texasjavascript.com/" /> 
    <link rel="icon" href="favicon.ico" type="image/x-icon" /> 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
    <meta name="author" content="http://yayquery.com/" /> 
    <title>TXJS | Texas Javascript Conference - June 5th, 2010</title> 
    <link type="text/css" rel="stylesheet" media="all" href="css/base.css" /> 
</head> 
<body>
<div id="flag">
    <h1><a href="http://txjs.eventbrite.com/">TXJS</a></h1>
    <h2>June 5th, 2010</h2>
    <h3>Austin, TX</h3>
    <div style="overflow: hidden; position: relative; height: 550px;width:700px;margin:0 auto;">
    <iframe scrolling="no" width="100%" src="http://txjs.eventbrite.com/" style="position: absolute; top: -591px; width: 665px; height: 3000px; left: 18px;"></iframe>
    </div>
    <div style="display:block;width:700px;margin:0 auto;"><iframe src="http://www.eventbrite.com/tickets-external?eid=582129164&ref=etckt" frameborder="0" marginwidth="5" marginheight="5" vspace="0" hspace="0" width="100%" height="400" style="height:310px;overflow:hidden;" allowtransparency="true"></iframe></div>
</div>
<div id="parallax">
    <div id="bluebonnets"><img src="images/bluebonnets.jpg" width="333" height="208" alt="" /></div>
    <div id="cloud1"><img src="images/cloud.png" width="542" height="317" alt="" /></div>
    <div id="cloud2"><img src="images/cloud.png" width="542" height="317" alt="" /></div>
    <div id="cloud3"><img src="images/rainbow_clouds.png" width="386" height="303" alt="" /></div>
</div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.jparallax.js" type="text/javascript"></script>
    <script type="text/javascript">
	// Localize
	window.TX = $;
	TX(function(){
	    (function(){
		var plx = TX('#parallax'),
		    win = TX(window);
		plx.width(win.width());
		plx.height(win.height())
	    })();
	    // Parallax
	    TX('#parallax').jparallax({},
		{xtravel: '50px', ytravel: '0px'},
		{xtravel: '200px', ytravel: '90px'},
		{xtravel: '300px', ytravel: '100px'},
		{xtravel: '400px', ytravel: '110px'},
		{xtravel: '0px', ytravel: '0px'}
	    );
	    
	    TX('#bluebonnets').css({'top':($('body').height()-104)+'px'});
	    TX('#cloud1').css({'top':'10%', 'left': '80%'});
	    TX('#cloud2').css({'top':'50%', 'left': '20%'});
	    TX('#cloud3').css({'top':'60%', 'left': '75%'});
	});
    </script>
</body>
</html>