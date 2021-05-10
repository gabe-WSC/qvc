<!doctype html>
<html>
    <head>
    
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>QVC- SPRING 2017</title>
    
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
<!---- GOOGLE TRACKING CODE --->
    
   <style type="text/css">

span.preheader { display: none !important; }

</style>

   
    <style type="text/css">

html,  body {
	margin: 0 !important;
	padding: 0 !important;
	height: 100% !important;
	width: 100% !important;
}

* {
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}

.ExternalClass {
	width: 100%;
}

div[style*="margin: 16px 0"] {
	margin: 0 !important;
}

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
/* What it does: Uses a better rendering method when resizing http://www.qvc.co.za/mailers/pensioners/2017/Spring in IE. */
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
.uppercase { text-transform: uppercase;} 
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
        @media screen and (max-width: 680px) {

            .email-container {
                width: 100% !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing http://www.qvc.co.za/mailers/pensioners/2017/Spring beyond their max-width. */
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
        
            /* What it does: Generic utility class for centering. Useful for http://www.qvc.co.za/mailers/pensioners/2017/Spring, buttons, and nested tables. */
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
    <body bgcolor="#FFFFFF" width="100%" style="margin: 0;" yahoo="yahoo">
    
   <span class="preheader">Deals this good don’t come around often. Check it out now!</span>
    
    <table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse;">
      <tr>
        <td><center style="width: 100%;">
            

            <!-- Visually Hidden Preheader Text : END --> 
            
            <!-- Email Header : BEGIN -->
            
            <!-- Email Header : END --> 
            
            <!-- Email Body : BEGIN -->
          <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="680" class="email-container" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';">
            
            				<tr height="90px">
                <td align="center"><img src="http://www.qvc.co.za/mailers/pensioners/2017/Spring/Logo-Head1.jpg" alt="Attending the" width="338" height="90" style="width:338;  height: auto; text-align: center;" border="0" align="center"><img src="http://www.qvc.co.za/mailers/pensioners/2017/Spring/Logo-Head2.jpg" width="338" height="90" alt="kilifi gold triathlon" style="width:171;  height: auto; text-align: center;" border="0" align="center"/></td>
            </tr>
            
            <tr>
              <td class="full-width-image"><img src="http://www.qvc.co.za/mailers/pensioners/2017/Spring/Pensioners-header.jpg" width="680" alt="Mnarani header" border="0" align="center" style="width: 100%; max-width: 680px; height: auto;"></td>
            </tr>
      
      <tr>
            <td height="15">&nbsp;</td></tr>
      
			<tr>
			  <td align="center" style="font-size: 5px; color: #505050">
                <table width="95%" border="2" bgcolor="#FFFFFF" bordercolor="#105c6c" cellpadding="10">
  <tbody>
    <tr>
      <td style="color: #105c6c; font-size: 15px; text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';"><em>Smell the sweet scent of <strong>flowers blossoming</strong> all around you. <br>
          Listen to the birds as they playfully welcome spring and rejoice.
          <br>
          See the<strong> little green bulbs</strong> starting to peak out as <strong>new life</strong> and greenery comes. <br>
          Taste the tangy, honey-sweet and juicy <strong>fresh fruit</strong> that comes with the season. <br>
          And most amazingly, feel your soul <strong>be revitalised</strong> as the spring-air flows through you…</em></td>
    </tr>
  </tbody>
</table></td></tr>
              
              <tr>
                <td  align="center" style="font-size: 18px; color: #505050; padding: 11px 13px 11px 13px; line-height: 30px">Enjoy <strong>not one, not two,</strong> but <strong style="color: #105c6c">FOUR DAYS</strong> of <strong>blissful spring holiday memories! </strong>And enjoy a second <strong style="color: #105c6c">FOUR-DAY</strong> midweek holiday  <strong>on us!</strong></td></tr>
           
           		<tr>
              <td class="full-width-image"><img src="http://www.qvc.co.za/mailers/pensioners/2017/Spring/Pensioners-head.jpg" width="680" alt="Mnarani header" border="0" align="center" style="width: 100%; max-width: 680px; height: auto;"></td>
            </tr>
           			<tr>
           			  <td  align="center" style="font-size: 26px; color: #505050; padding: 11px 13px 15px 13px; line-height: 30px">BOOK A MIDWEEK, <strong style="color: #105c6c">GET A MIDWEEK</strong> FOR <strong style="color: #105c6c">FREE!</strong></td>
		    </tr>
           			<tr>
           			  <td  align="center" style="font-size: 18px; color: #505050; ">Deals this good don&rsquo;t come around often. <strong><br>
       			      Don&rsquo;t miss out </strong>and get yourself TWO midweeks at the price of one!</td>
		    </tr>
          			<tr>
              <td align="center" class="full-width-image"><img src="http://www.qvc.co.za/mailers/pensioners/2017/Spring/dialNow.jpg" width="396" alt="Mnarani header" border="0" align="center" style="width: 100%; max-width: 396px; height: auto;"></td>
            </tr>
          			
           			<tr align="center">
						<td height="10" style="font-size: 10px; line-height: 10px;"><h3><img src="http://www.qvc.co.za/mailers/pensioners/2017/Spring/image1.jpg" width="308" height="213" alt="triathlon" style=" align-content: center;"><a href="mailto: reservations@mnarani.net?subject=Hook me up with Accomodation for the KGT" target="_blank"><img src="http://www.qvc.co.za/mailers/pensioners/2017/Spring/image2.jpg" width="308" height="213" alt="beach"  style=" align-content: center;"/></a></h3></td>
			  </tr>
           			   <tr>
              <td class="full-width-image"><img src="http://www.qvc.co.za/mailers/pensioners/2017/Spring/HotTip.jpg" width="680" alt="Mnarani header" border="0" align="center" style="width: 100%; max-width: 680px; height: auto;"></td>
            </tr>
          			  
          			   <tr>
           			    <td height="15">&nbsp;</td>
		    </tr>
          			  
           			  <tr align="center" style="font-size: 16px; color: #505050; padding: 11px 13px 15px 13px; line-height: 30px">
           			    <td height="15"><strong ><a href="http://www.qvc.co.za/specials.php" target="_blank" style="color: #7C056D">VIEW OTHER CLUB OFFERS</a></strong> | <strong ><a href="http://www.qvc.co.za/resort_portfolio.php" target="_blank" style="color: #7D046D">VIEW RESORT PORTFOLIO</a></strong></td>
		    </tr>
           			 
           			  <tr>
            <td height="15">&nbsp;</td></tr>
<!-- Thumbnail Right, Text Left : END --> 
       
        <tr bgcolor="#105c6c">
					<td class="one-column" style="padding: 0;">
						<table width="100%" style="border-spacing: 0;font-family: sans-serif; color: #333333;">
							<tr bgcolor="#105c6c">
					<td class="one-column" style="padding: 0;">
						<table width="100%" style="border-spacing: 0;font-family: sans-serif; color: #333333;">
							<tr>
							  <td class="inner contents" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';font-size: 13px;color: #fff; padding: 10px;width: 100%;text-align: left;">
								<p style="font-size: 12px;text-align: center;margin: 0;margin-bottom: 10px;margin-top: 10px;"><strong>Tel: 012 492 1230 | <a href="mailto:%20correspondence@oaks.co.za" style="color: #FFFFFF;text-decoration:none;">correspondence@oaks.co.za</a> | <a href="http://www.qvc.co.za/" target="_blank" style="color: #FFFFFF;text-decoration:none;">www.qvc.co.za</a></strong><br>

Quality Vacation Club, Mooikloof Office Park East, Corner of Atterbury and Jollify Main Road, <br>
Mooikloof, 0059</p></td>
							</tr>
						</table>
					</td>
			</tr>
						</table>
					</td>
			</tr>
          
            <tr>
           <td align="left" style="font-size: 12px; color: #505050; line-height: 18px; padding-left: 10px;"><br>
             <strong>TERMS AND CONDITIONS</strong><br>
             Reservations must be made telephonically through the Reservations Call  Centre on 012&nbsp;492 1230 <br>
               Promotion valid for occupation during 2017; holidays,  peak periods and long weekends do not apply<br>
               Bookings are subject to availability<br>
               Promotion limited to five bookings per club member<br>
               No on-renting of the accommodation<br>
               Only five bookings allowed per member portfolio<br>
               No private owner weeks<br>
               Club and RCI stock<br>
             Members' accounts must be in good standing at the time  of booking and occupation</td></tr>
             
                                 
          </table>
          <!-- Email Body : END --> 
            
            <!-- Email Footer : BEGIN -->
            <table align="center" width="680" class="email-container">
            <tr>
                <td style="padding: 20px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">&nbsp;</td>
              </tr>
          </table>
            <!-- Email Footer : END -->
            
          </center></td>
      </tr>
    </table>
</body>
</html>
