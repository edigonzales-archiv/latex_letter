// detect, and if linux -> don't display it
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;

// detect flash version (win?)
function ControlVersion(){
	var version;
	var axo;
	var e;

	// NOTE : new ActiveXObject(strFoo) throws an exception if strFoo isn't in the registry

	try {
		// version will be set for 7.X or greater players
		axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
		version = axo.GetVariable("$version");
	} catch (e) {
	}

	if (!version)
	{
	try {
		// version will be set for 6.X players only
		axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
		
		// installed player is some revision of 6.0
		// GetVariable("$version") crashes for versions 6.0.22 through 6.0.29,
		// so we have to be careful. 
		
		// default to the first public version
		version = "WIN 6,0,21,0";

		// throws if AllowScripAccess does not exist (introduced in 6.0r47)		
		axo.AllowScriptAccess = "always";

		// safe to call for 6.0r47 or greater
		version = axo.GetVariable("$version");
	     } 
	catch (e) {}
	}

	if (!version)
	{
		try {
			// version will be set for 4.X or 5.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = axo.GetVariable("$version");
		} catch (e) {
		}
	}

	if (!version)
	{
		try {
			// version will be set for 3.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = "WIN 3,0,18,0";
		} catch (e) {
		}
	}

	if (!version)
	{
		try {
			// version will be set for 2.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
			version = "WIN 2,0,0,11";
		} catch (e) {
			version = -1;
		}
	}
	
	return version;
}
// detect plugin
// JavaScript helper required to detect Flash Player PlugIn version information
function GetSwfVer(){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	var flashVer = -1;
	
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
			var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;			
			var descArray = flashDescription.split(" ");
			var tempArrayMajor = descArray[2].split(".");
			var versionMajor = tempArrayMajor[0];
			var versionMinor = tempArrayMajor[1];
			if ( descArray[3] != "" ) {
				tempArrayMinor = descArray[3].split("r");
			} else {
				tempArrayMinor = descArray[4].split("r");
			}
			var versionRevision = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
			var flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	else if ( isIE && isWin && !isOpera ) {
		flashVer = ControlVersion();
	}	
	return flashVer;
}

// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision)
{
	versionStr = GetSwfVer();
	if (versionStr == -1 ) {
		return false;
	} else if (versionStr != 0) {
		if(isIE && isWin && !isOpera) {
			// Given "WIN 2,0,0,11"
			tempArray         = versionStr.split(" "); 	// ["WIN", "2,0,0,11"]
			tempString        = tempArray[1];			// "2,0,0,11"
			versionArray      = tempString.split(",");	// ['2', '0', '0', '11']
		} else {
			versionArray      = versionStr.split(".");
		}
		var versionMajor      = versionArray[0];
		var versionMinor      = versionArray[1];
		var versionRevision   = versionArray[2];

        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
		if (versionMajor > parseFloat(reqMajorVer)) {
			return true;
		} else if (versionMajor == parseFloat(reqMajorVer)) {
			if (versionMinor > parseFloat(reqMinorVer))
				return true;
			else if (versionMinor == parseFloat(reqMinorVer)) {
				if (versionRevision >= parseFloat(reqRevision))
					return true;
			}
		}
		return false;
	}
}


if (isWin && DetectFlashVer(8,0,0)){











var jcorner987 = new Object();

jcorner987.ad_url = escape('http://www.sponsorads.de/b_click.php?u=4454&s=57002&c=2079&h=fd73d05622f16c7e289388814f758ef5');

jcorner987.small_path = 'http://imgserv.sponsorads.de/images/corner/small.swf';
jcorner987.small_image = escape('http://imgserv.sponsorads.de/endwelt/cornerklein.jpg');
jcorner987.small_width = '100';
jcorner987.small_height = '100';
jcorner987.small_params = 'ico=' + jcorner987.small_image;

jcorner987.big_path = 'http://imgserv.sponsorads.de/images/corner/big.swf';
jcorner987.big_image = escape('http://imgserv.sponsorads.de/endwelt/cornergross.jpg');
jcorner987.big_width = '650';
jcorner987.big_height = '650';
jcorner987.big_params = 'big=' + jcorner987.big_image + '&ad_url=' + jcorner987.ad_url;



function sizeup987(){
	document.getElementById('jcornerBig').style.top = '0px';
	document.getElementById('jcornerSmall').style.top = '-1000px';
}

function sizedown987(){
	document.getElementById("jcornerSmall").style.top = "0px";
	document.getElementById("jcornerBig").style.top = "-1000px";
}


jcorner987.putObjects = function () {
// <jcornerSmall>
document.write('<div id="jcornerSmall" style="position:absolute;width:'+ jcorner987.small_width +'px;height:'+ jcorner987.small_height +'px;z-index:9999;right:0px;top:0px;">');
// object
document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"');
document.write(' codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"');
document.write(' id="jcornerSmallObject" width="'+jcorner987.small_width+'" height="'+jcorner987.small_height+'">');

// object params
document.write(' <param name="allowScriptAccess" value="always"/> ');
document.write(' <param name="movie" value="'+ jcorner987.small_path +'?'+ jcorner987.small_params +'"/>');
document.write(' <param name="wmode" value="transparent" />');
document.write(' <param name="quality" value="high" /> ');
document.write(' <param name="FlashVars" value="'+jcorner987.small_params+'"/>');
// embed	
document.write('<embed src="'+ jcorner987.small_path + '?' + jcorner987.small_params +'" name="jcornerSmallObject" wmode="transparent" quality="high" width="'+ jcorner987.small_width +'" height="'+ jcorner987.small_height +'" flashvars="'+ jcorner987.small_params +'" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>');
document.write('</object></div>');
document.write('</script>');
// </jcornerSmall>

// <jcornerBig>
document.write('<div id="jcornerBig" style="position:absolute;width:'+ jcorner987.big_width +'px;height:'+ jcorner987.big_height +'px;z-index:9999;right:0px;top:0px;">');

// object
document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"');
document.write(' codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"');
document.write(' id="jcornerBigObject" width="'+ jcorner987.big_width +'" height="'+ jcorner987.big_height +'">');

// object params
document.write(' <param name="allowScriptAccess" value="always"/> ');
document.write(' <param name="movie" value="'+ jcorner987.big_path +'?'+ jcorner987.big_params +'"/>');
document.write(' <param name="wmode" value="transparent"/>');
document.write(' <param name="quality" value="high" /> ');
document.write(' <param name="FlashVars" value="'+ jcorner987.big_params +'"/>');

// embed	
document.write('<embed src="'+ jcorner987.big_path + '?' + jcorner987.big_params +'" id="jcornerBigEmbed" name="jcornerBigObject" wmode="transparent" quality="high" width="'+ jcorner987.big_width +'" height="'+ jcorner987.big_height +'" flashvars="'+ jcorner987.big_params +'" swliveconnect="true" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>');
document.write('</object></div>');
// </jcornerBig>

setTimeout('document.getElementById("jcornerBig").style.top = "-1000px";',1000);
}

jcorner987.putObjects();








}