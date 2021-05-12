<!doctype html>
<html>
    <head>
<!---- GOOGLE TRACKING CODE --->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-15728210-3', 'auto');
  ga('send', 'pageview');
</script>
<!--- GOOGLE ANALYTICS OUTBOUND LINK TRACKING ---->
<script type="text/javascript">
    function _gaLt(event) {
        /* If GA is blocked or not loaded, or not main|middle|touch click then don't track */
        if (!ga.hasOwnProperty("loaded") || ga.loaded != true || (event.which != 1 && event.which != 2)) {
            return;
        }
        var el = event.srcElement || event.target;
        /* Loop up the DOM tree through parent elements if clicked element is not a link (eg: an image inside a link) */
        while (el && (typeof el.tagName == 'undefined' || el.tagName.toLowerCase() != 'a' || !el.href)) {
            el = el.parentNode;
        }
        /* if a link with valid href has been clicked */
        if (el && el.href) {
            var link = el.href;
            /* Only if it is an external link */
            if (link.indexOf(location.host) == -1 && !link.match(/^javascript\:/i)) {
                /* Is actual target set and not _(self|parent|top)? */
                var target = (el.target && !el.target.match(/^_(self|parent|top)$/i)) ? el.target : false;
                /* Assume a target if Ctrl|shift|meta-click */
                if (event.ctrlKey || event.shiftKey || event.metaKey || event.which == 2) {
                    target = "_blank";
                }
                var hbrun = false; // tracker has not yet run
                /* HitCallback to open link in same window after tracker */
                var hitBack = function() {
                    /* run once only */
                    if (hbrun) return;
                    hbrun = true;
                    window.location.href = link;
                };
                if (target) { /* If target opens a new window then just track */
                    ga(
                        "send", "event", "Outgoing Links", link,
                        document.location.pathname + document.location.search
                    );
                } else { /* Prevent standard click, track then open */
                    event.preventDefault ? event.preventDefault() : event.returnValue = !1;
                    /* send event with callback */
                    ga(
                        "send", "event", "Outgoing Links", link,
                        document.location.pathname + document.location.search, {
                            "hitCallback": hitBack
                        }
                    );
                    /* Run hitCallback again if GA takes longer than 1 second */
                    setTimeout(hitBack, 1000);
                }
            }
        }
    }
    var _w = window;
    /* Use "click" if touchscreen device, else "mousedown" */
    var _gaLtEvt = ("ontouchstart" in _w) ? "click" : "mousedown";
    /* Attach the event to all clicks in the document after page has loaded */
    _w.addEventListener ? _w.addEventListener("load", function() {document.body.addEventListener(_gaLtEvt, _gaLt, !1)}, !1)
        : _w.attachEvent && _w.attachEvent("onload", function() {document.body.attachEvent("on" + _gaLtEvt, _gaLt)});
</script>


    <meta charset="utf-8">
    <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Use the latest (edge) version of IE rendering engine -->
    <title>Time for Spring Memories</title>

    <!-- CSS Reset -->
    <style type="text/css">
/* What it does: Remove spaces around the email design added by some email clients. */
      /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
html,  body {
	margin: 0 !important;
	padding: 0 !important;
	height: 100% !important;
	width: 100% !important;
}
/* What it does: Stops email clients resizing small text. */
* {
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}
/* What it does: Forces Outlook.com to display emails full width. */
.ExternalClass {
	width: 100%;
}
/* What is does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
	margin: 0 !important;
}
/* What it does: Stops Outlook from adding extra spacing to tables. */
table,  td {
	mso-table-lspace: 0pt !important;
	mso-table-rspace: 0pt !important;
}
/* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
table {
	border-spacing: 0 !important;
	border-collapse: collapse !important;
	table-layout: fixed !important;
	margin: 0 auto !important;
}
table table table {
	table-layout: auto;
}
/* What it does: Uses a better rendering method when resizing http://www.multidestinationsclub.co.za/mailers/quarterly/2017/Aug in IE. */
img {
	-ms-interpolation-mode: bicubic;
}
/* What it does: Overrides styles added when Yahoo's auto-senses a link. */
.yshortcuts a {
	border-bottom: none !important;
}
/* What it does: Another work-around for iOS meddling in triggered links. */
a[x-apple-data-detectors] {
	color: inherit !important;
}
</style>

    <!-- Progressive Enhancements -->
    <style type="text/css">
        
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing http://www.multidestinationsclub.co.za/mailers/quarterly/2017/Aug beyond their max-width. */
            .fluid,
            .fluid-centered {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            /* And center justify these ones. */
            .fluid-centered {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
        
            /* What it does: Generic utility class for centering. Useful for http://www.multidestinationsclub.co.za/mailers/quarterly/2017/Aug, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
                
        }

    </style>
    </head>
    <body bgcolor="#ffffff" width="100%" style="margin: 0;" yahoo="yahoo">
      
    <table bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse;">
    
      <tr>
        <td><center style="width: 100%;">
          <table align="center" width="600" class="email-container">
            <tr>

							
                  <td align="center" style="padding: 0px 0;"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/Logo-Head1.jpg" width="300" height="87" alt="Quality Vacation Club" style=" align-content: center"/><a href="#" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/Logo-Head2.jpg" width="300" height="87" alt="" style="align-content: center"/></a></td>
            </tr>
          </table>
           
            <!-- Email Header : END --> 
            
            <!-- Email Body : BEGIN -->
            <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container">
            
            <!-- Hero Image, Flush : BEGIN -->
            <tr>
                <td class="full-width-image"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/Head-Wander.jpg" width="600" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto;"></td>
              </tr>
              <tr>
						<td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
					</tr>
              <tr>
						<td height="10" align="center" style="font-size: 10px; line-height: 10px;"><a href="http://online.qvc.co.za/login/auth" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/login.jpg" width="200" height="38" alt=""/></a><a href="http://www.qvc.co.za/documents/QVC_Userguide.pdf" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/booking.jpg" width="200" height="38" alt=""/></a><a href="http://www.qvc.co.za/notices.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/NB-notices.jpg" width="200" height="38" alt=""/></a></td>
					</tr>
					<tr>
						<td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
					</tr>
<tr>
						<td align="center" class="main-header" style="color: #343434; font-size: 24px; font-family: 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:700;letter-spacing: 3px; line-height: 35px;">
						<div style="line-height: 35px">Dear QVC <span style="color: #7D046D;">TRAVELLER,</span></div>
						</td>
				</tr>
            <tr>
                <td style="padding: 15px; text-align: justify; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;"><p>                  While the fond memories of winter remain close to our  hearts, it&rsquo;s time for a new chapter. This Spring, we have a special surprise for  you. We&rsquo;ve given the QVC Newsletter a brand new look! We hope you like it!</p>
<p><strong>Enjoy  the read,</strong><span style="margin-top: 0;margin-bottom: 0;padding-top: 0;padding-bottom: 0;"><br />
  <strong style="color: #7D046D">Quality Vacation Club</strong></span><br>
              </p></td>
              </tr>

            <tr>
                <td dir="ltr" align="center" valign="top" width="100%" style="padding: 10px;">
                   <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" >
                    
                    <tr>
                    <td width="214" class="stack-column-center">
                       
                       <table align="center" border="0" cellpadding="5" cellspacing="0" width="213" >
                        <tr>
                        <td dir="ltr" valign="top" ><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/referbs.jpg" width="194" alt="Referbishments" border="0" class="center-on-narrow"></td>
                      </tr>
                      </table></td>
                    <td width="367" class="stack-column-center"><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"  >
                        <tr>
                        <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px; text-align: left;" class="center-on-narrow"><span style="line-height: 28px"><strong>QVC BUZZ: RESORT UPGRADES &amp; REFURBISHMENTS</strong></span><br>
                            <br>
                            Stay up to date with resort upgrades and refurbishments<br>
                            <br>
                            
                            <!-- Button : Begin -->
                            
                            <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">
                            <tr>
                                <td style="border-radius: 3px; background: #4ba99b; text-align: center;" class="button-td"><a href="http://blog.qvc.co.za/index.php/2017/08/10/resort-upgrades-refurbishments/" target="_blank" class="button-a" style="background: #4ba99b; border: 15px solid #4ba99b; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 12px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;"> 
                                  <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->READ MORE<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]--> 
                                  </a></td>
                              </tr>
                          </table>
                            
                            <!-- Button : END --></td>
                      </tr>
                      
                      </table></td>
                  </tr>
                                  </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" >
                    
                    <tr>
                    <td width="214" class="stack-column-center">
                       
                       <table align="center" border="0" cellpadding="5" cellspacing="0" width="213" >
                        <tr>
                        <td dir="ltr" valign="top" ><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/godsWindow.jpg"  width="194" alt="Gods Window" border="0" class="center-on-narrow"></td>
                      </tr>
                      </table></td>
                    <td width="367" class="stack-column-center"><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"  >
                        <tr>
                        <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px; text-align: left;" class="center-on-narrow"><span style="line-height: 28px"><strong>FEATURED DESTINATION: GOD’S WINDOW</strong></span><br>
                            <br>
                            Explore one of the most scenic
viewpoints in SA<br>
                            <br>
                            
                            <!-- Button : Begin -->
                            
                            <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">
                            <tr>
                                <td style="border-radius: 3px; background: #4ba99b; text-align: center;" class="button-td"><a href="http://blog.qvc.co.za/index.php/2017/08/10/gods-window-experience/" target="_blank" class="button-a" style="background: #4ba99b; border: 15px solid #4ba99b; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 12px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;"> 
                                  <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->READ MORE<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]--> 
                                  </a></td>
                              </tr>
                          </table>
                            
                            <!-- Button : END --></td>
                      </tr>
                      
                      </table></td>
                  </tr>
                                  </table>
                                  
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
                                 <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" >
                    
                    <tr>
                    <td width="214" class="stack-column-center">
                       
                       <table align="center" border="0" cellpadding="5" cellspacing="0" width="213" >
                        <tr>
                        <td dir="ltr" valign="top" ><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/CoolDurbs.jpg"  width="194" alt="Cool Durban" border="0" class="center-on-narrow"></td>
                      </tr>
                      </table></td>
                    <td width="367" class="stack-column-center"><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"  >
                        <tr>
                        <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px; text-align: left;" class="center-on-narrow"><span style="line-height:28px"><strong>DURBAN IS COOLER THAN YOU THINK!</strong></span><br>
                            <br>
                            <span style="line-height: 24px">Is Durban too Cool for You?</span><br>
                            <br>
                            
                            <!-- Button : Begin -->
                            
                            <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">
                            <tr>
                                <td style="border-radius: 3px; background: #4ba99b; text-align: center;" class="button-td"><a href="http://blog.qvc.co.za/index.php/2017/07/31/durban-bucket-list/" target="_blank" class="button-a" style="background: #4ba99b; border: 15px solid #4ba99b; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 12px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;"> 
                                  <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->READ MORE<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]--> 
                                  </a></td>
                              </tr>
                          </table>
                            
                            <!-- Button : END --></td>
                      </tr>
                      
                      </table></td>
                  </tr>
                                  </table>
                                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>

  </tbody>
</table>
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#F1F1F1">
                    <tr>
                    <td class="stack-column-center"><table cellspacing="0" cellpadding="0" border="0">
                        <tr bgcolor="#F1F1F1">
                        <td style="padding:15px 5px; text-align: center" ><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/Mrs SA.jpg" width="258" height="205" alt=""/></td>
                      </tr>
                        <tr>
                        <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> Special Guest @ African Blessings; Mrs SA Finalist<br>
                       <br> <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" >
                            <tr>
                                <td style="border-radius: 3px; background: #4ba99b; text-align: center;" class="button-td" width="160"><a href="http://blog.africanblessings.co.za/2017/05/05/mrs-south-africa-finalist/" target="_blank" class="button-a" style="background: #4ba99b; border: 15px solid #4ba99b; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 12px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;"> 
                                  <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->VISIT THE BLOG<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]--> 
                                   </a></td>
                              </tr>
                          </table>
                       <br></td>
                      </tr>
                      </table></td>
                    <td class="stack-column-center"><table cellspacing="0" cellpadding="0" border="0">
                      <tr bgcolor="#F1F1F1">
                        <td style="padding:15px 5px; text-align: center"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/calendar.jpg" width="258" height="205" alt=""/></td>
                      </tr>
                        <tr>
                        <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> Plan ahead and checkout your 2018 Holiday Calendar <br>
                          <br><table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" >
                            <tr>
                                <td style="border-radius: 3px; background: #4ba99b; text-align: center;" class="button-td" width="160"><a href="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/QVC_Calendar_2018.pdf" target="_blank" class="button-a" style="background: #4ba99b; border: 15px solid #4ba99b; padding: 0 10px; color: #ffffff; font-family: sans-serif; font-size: 12px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;"> 
                                VIEW CALENDAR
                                  </a></td>
                              </tr>
                          </table>
                          <br></td>
                      </tr>
                      </table></td>
                  </tr>
                  </table>
                                  
                                  
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>

  </tbody>
</table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
              <tr>
                <td class="full-width-image"><a href="http://www.qvc.co.za/specials.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/Sizzling.jpg" width="580" alt="Sizzling Specials" border="0" align="center" style="width: 100%; max-width: 600px; height: auto;"></a></td>
              </tr>
  </tbody>
</table></td>
              </tr>
            <!-- Thumbnail Left, Text Right : END --> 
            
            <!-- Thumbnail Right, Text Left : BEGIN -->            <!-- Thumbnail Right, Text Left : END -->
            
          </table>
            <!-- Email Body : END --> 
            
            <!-- Email Footer : BEGIN -->
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="email-container" style="font-size: 14px;border: 0;" width="600">
	<tbody>
		<tr>
			<td style="color: #343434; font-size: 12px; font-family: 'Trebuchet MS', Verdana, 'sans-serif'; line-height: 22px; text-align: justify;">
			<div style="line-height: 22px">
			<table border="0" cellpadding="0" cellspacing="0" style="font-size: 14px;border: 0;" width="100%">
				<tbody>
					<tr align="center" >
					  <td style="font-family:Century Gothic; font-size:14px; color:#4D4D4D; text-align: center; font-weight: bold; "><strong>CONTACT QVC</strong></td>
					  </tr>
					  <tr align="center" bgcolor="#9F2063">
						<td height="65" style="font-family:Century Gothic; font-size:14px; color:#fff; text-align: center; font-size: 12px;"><strong>Tel:  012 492 1230 |
                            <a href="Mailto: correspondence@oaks.co.za" style="text-decoration: none; color: #FFFFFF">correspondence@oaks.co.za</a> | <a href="http://www.qvc.co.za/" target="_blank" style="text-decoration: none; color: #FFFFFF">www.qvc.co.za</a><br>
					    QVC blog: <a href="http://blog.qvc.co.za/" target="_blank" style="text-decoration: none; color: #FFFFFF">www.blog.qvc.co.za</a></strong></td>
					</tr>
     <tr>
      <td align="center"><img src="http://multidestinationsclub.co.za/mailers/quarterly/2017/jun/MDC_Newsletter_June_163.jpg" width="52" height="56" alt="Twitter Icon"/></td>
    </tr>
    <tr>
      <td bgcolor="#3dbff8">&nbsp;</td>
    </tr>
    <tr>
		<td bgcolor="#3dbff8" style="font-family:Century Gothic; font-size:13px; color:#fff; text-align: center"><a href="https://twitter.com/ABjochebed" target="_blank" style="text-decoration:none; color:white">African Blessings</a> | <a href="https://twitter.com/kaggakamma" target="_blank" style="text-decoration:none; color:white">Kagga Kamma</a> | <a href="https://twitter.com/ngwenyalodge" target="_blank" style="text-decoration:none; color:white">Ngwenya Lodge</a></td>
    </tr>
    <tr>
      <td bgcolor="#3dbff8">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><img src="http://multidestinationsclub.co.za/mailers/quarterly/2017/jun/MDC_Newsletter_June_167.jpg" width="58" height="66" alt="Facebook Icon"/></td>
    </tr>
    <tr>
      <td bgcolor="#4e71a8">&nbsp;</td>
    </tr>
    <tr>
		<td bgcolor="#4E71A8" style="font-family:Century Gothic; font-size:12px; color:#fff; text-align: center"><a href="https://www.facebook.com/AfricanBlessings" target="_blank" style="text-decoration:none; color:white">African Blessings</a> | <a href="https://www.facebook.com/CrystalSpringsMountainLodge?fref=ts" target="_blank" style="text-decoration:none; color:white">Crystal Springs</a> | <a href="https://www.facebook.com/pages/Ekuthuleni-Hoedspruit/317263885106873?fref=ts" target="_blank" style="text-decoration:none; color:white">Ekuthuleni</a> | <a href="https://www.facebook.com/KaggaKamma/" style="text-decoration:none; color:white" target="_blank">Kagga Kamma  </a>| <a href="https://www.facebook.com/KridzilWoonstelle/" style="text-decoration:none; color:white" target="_blank">Kridzil</a> <a href="https://www.facebook.com/MabalingweVRS?fref=ts" target="_blank" style="text-decoration:none; color:white">| Mabalingwe</a><a href="https://www.facebook.com/Manzi-Monat%C3%A9-190987287630729/" style="text-decoration:none; color:white" target="_blank"> <br>
						  Manzi Monate </a>| <a href="https://www.facebook.com/mnarani.hotel.kenya?fref=ts" style="text-decoration:none; color:white" target="_blank">Mnarani</a> | <a href="https://www.facebook.com/MountAmanzi?fref=ts" target="_blank" style="text-decoration:none; color:white">Mount Amanzi</a> | <a href="https://www.facebook.com/MonatengSafariLodge?fref=ts" target="_blank" style="text-decoration:none; color:white">Monateng</a> | <a href="https://www.facebook.com/NgwenyaLodge?fref=ts" target="_blank" style="text-decoration:none; color:white">Ngwenya Lodge</a> | <a href="https://www.facebook.com/SudwalaLodge/?fref=ts" target="_blank" style="text-decoration:none; color:white">Sudwala Lodge <br>
						  </a><a href="https://www.facebook.com/Uvongo-River-Resort-505669162940165/?fref=ts" target="_blank" style="text-decoration:none; color:white">Uvongo River Resort</a>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#4e71a8">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><img src="http://multidestinationsclub.co.za/mailers/quarterly/2017/jun/MDC_Newsletter_June_170.jpg" width="58" height="66" alt="Blog Icon"/></td>
    </tr>
    <tr>
      <td bgcolor="#a0b400">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#a0b400" style="font-family:Century Gothic; font-size:12px; color:#fff; text-align: center"><p><a href="http://blog.africanblessings.co.za/" target="_blank" style="text-decoration:none; color:white">African Blessings</a> | <a href="http://blog.crystalsprings.co.za/" target="_blank" style="text-decoration:none; color:white">Crystal Springs</a> | <a href="http://blog.kaggakamma.co.za/" target="_blank" style="text-decoration:none; color:white">Kagga Kamma</a> | <a href="http://blog.kridzil.co.za/" target="_blank" style="text-decoration:none; color:white">Kridzil</a> | <a href="http://blog.mabalingwenaturereserve.co.za/" target="_blank" style="text-decoration:none; color:white">Mabalingwe</a> | <a href="http://www.mnarani.co.za/Blog-MnaraniTales/" target="_blank" style="text-decoration:none; color:white">Mnarani</a></p></td>
    </tr>
    <tr>
      <td bgcolor="#a0b400">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><img src="http://multidestinationsclub.co.za/mailers/quarterly/2017/jun/MDC_Newsletter_June_173.jpg" width="56" height="65" alt="Youtube Icon
"/></td>
    </tr>
    <tr>
      <td bgcolor="#ca3737">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CA3737" style="font-family:Century Gothic; font-size:12px; color:#fff; text-align: center"><a href="https://www.youtube.com/user/africanblessings#p/u" target="_blank" style="text-decoration:none; color:white">African Blessings </a> | &nbsp;<a href="http://www.youtube.com/user/CrystalSpringsSA" style="text-decoration:none; color:white" target="_blank">Crystal Springs</a> &nbsp;| &nbsp;<a href="https://www.youtube.com/user/KaggaKammaSA" style="text-decoration:none; color:white" target="_blank">Kagga Kamma</a> &nbsp;| <a href="https://www.youtube.com/watch?v=1j_u7ykmnwM" style="text-decoration:none; color:white" target="_blank" >Kridzil</a> |&nbsp;<a href="http://www.youtube.com/user/NgwenyaLodgeSA" style="text-decoration:none; color:white" target="_blank">Ngwenya Lodge</a> &nbsp;| &nbsp;<a href="https://www.youtube.com/channel/UCGGICudK19BAx3dsEvC730w" style="text-decoration:none; color:white" target="_blank">Mnarani</a><br /></td>
    </tr>
    <tr>
      <td bgcolor="#ca3737">&nbsp;</td>
    </tr>
    <tr>
						<td align="center">
						<p style="margin-top: 0;margin-bottom: 0;padding-top: 0;padding-bottom: 0;"><br />
						<span style="font-size:11px; font-family:Tahoma, Geneva, sans-serif; color:#333">Mooikloof Office Park East,<br />
						Cnr Atterbury and Jollify Main Road, Mooikloof, 0059<br />
						P.O. Box 35580, Menlo Park, 0102<br />
						<br />
						Tel: 012 492 1220 | Fax: 012 996 0556<br />
						<a href="mailto:correspondence@oaks.co.za" style="text-decoration:none; color: #333">correspondence@oaks.co.za</a></span></p>

						<p style="margin-top: 0;margin-bottom: 0;padding-top: 0;padding-bottom: 0;"><a href="http://www.vrsonline.co.za/" target="_blank"><img alt="" height="90" src="http://www.qvc.co.za/mailers/quarterly-mailers/August2017/VRS.jpg" width="240" /></a><br />
						&nbsp;</p>
						</td>
					</tr><tr>
      <td>&nbsp;</td>
    </tr>
				</tbody>
			</table>
			</div>
			</td>
		</tr>
	</tbody>
</table>
            <!-- Email Footer : END -->
            
          </center></td>
      </tr>
    </table>
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	</script><script>
    $(document).ready(function () {

      if(!Cookies.get('__utma')){
        $('.cookieinfo').show();
      }

      $('.cookieinfo-close').click(function(){
        $('.cookieinfo').hide();
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      })

    });
  </script>  </body>
</html>
