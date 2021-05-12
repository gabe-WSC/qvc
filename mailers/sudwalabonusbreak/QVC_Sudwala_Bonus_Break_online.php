<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QVC Sudwala Escape</title>
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

</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td align="center"><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="242"><img src="http://www.qvc.co.za/mailers/fathersday/qvc_logo.jpg" width="242" height="71" alt=""/></td>
            <td width="558" style="text-align: right; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-size: 12px; color: #363636">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="266" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:16px; color:#ffffff"><a href="http://www.qvc.co.za/mailers/bonusbreaks/withacause/Bonus_Breaks_with-a-cause-online.html" target="_blank" style="color: #064974"><strong>Bonus Breaks</strong></a></td>
            <td width="268" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:16px; color:#ffffff"><a href="http://www.qvc.co.za/resort_portfolio.php" target="_blank" style="color: #064974"><strong>Browse Resorts</strong></a></td>
            <td width="266" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:16px; color:#ffffff"><a href="http://online.qvc.co.za/login/auth" target="_blank" style="color: #064974"><strong>Member Login</strong></a></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_01.jpg" width="800" height="409" alt="Sudwala Lodge Bonus Break
"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
<tr>
      <td align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:22px; color:#636363">An Escape to the Mysterious Mankelekele Mountains to explore all <br>
      the wonders of Mpumalanga from one comfortable base. </td>
    </tr>    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_03.jpg" width="800" height="54" alt="Sudwala Lodge is just the place"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#8dc63f"><table bgcolor="#8dc63f" width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="260" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:22px; color:#636363"><strong style="color: #8dc63f; font-size: 36px">R899</strong><br>
              for a midweek</td>
            <td width="10"><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_06.jpg" width="10" height="85" alt=""/></td>
			  <td width="260" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:22px; color:#636363"><strong style="color: #8dc63f; font-size: 36px">R1349</strong> <br>
              for a weekend</td>
            <td width="10"><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_06.jpg" width="10" height="85" alt=""/></td>
			  <td width="260" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:22px; color:#636363"><strong style="color: #8dc63f; font-size: 36px">R2149</strong> <br>
              for a full week</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_09.jpg" width="400" height="263" alt="Mountain Hike
"/></td>
            <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_10.jpg" width="400" height="263" alt="Houtbosloop River"/></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="400" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:17px; color:#636363"><strong style="color: #8dc63f">Imagine hiking in the lush mountains,</strong><br>
              enjoying the sounds of nature and the cool<br>
mountain breeze.</td>
            <td width="400" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:17px; color:#636363"><strong style="color: #8dc63f">Spending the day relaxing</strong><br>
              and enjoying some time with your family<br>
next to the Houtbosloop River. </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_12.jpg" width="400" height="263" alt="Main Pool
"/></td>
            <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_13.jpg" width="400" height="263" alt="Dinosaur Park
"/></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="400" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:17px; color:#636363"><strong style="color: #8dc63f">The kids enjoying a midday swim</strong><br>
              in the cool pool, while the meat is sizzling<br>
on the braai.</td>
            <td width="400" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:17px; color:#636363"><strong style="color: #8dc63f">Adventure for the whole family</strong><br>
              with a fascinating trip to the splendid<br>
Sudwala Caves and Dinosaur Park.</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_15.jpg" width="800" height="437" alt="Sudwala is perfectly located
"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:17px; color:#636363">Sudwala Lodge is <strong style="color: #064974; text-transform: uppercase">perfect for a memorable trip</strong> with family and friends <span style="color: #064974;">in the<br>
		  Mpumalanga Mountains.</span> With amazing activities to enjoy at the Resort and its ideal location<br>
close to attractions, <strong style="color: #064974;">you will surely have a great time!</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#8dc63f">
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#8dc63f">
      <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_17.jpg" width="800" height="49" alt="Sounds Amazing"/></td>
    </tr>
    <tr bgcolor="#8dc63f">
      <td><img src="http://www.qvc.co.za/mailers/sudwalabonusbreak/QVC_Sudwala_BB_18.jpg" width="800" height="28" alt=""/></td>
    </tr>
    <tr bgcolor="#8dc63f">
      <td align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:24px; color:#ffffff">Contact the TradeUnipoint team to <strong style="color: #064974">book your Mountain Escape:</strong><br>
      <strong>+27 (012) 996 5120  |    <a href="mailto:info@tradeunipoint.com" style="color: #ffffff; text-decoration: none">info@tradeunipoint.com</a></strong><br></td>
    </tr>
    <tr bgcolor="#8dc63f">
      <td>&nbsp;</td>
    </tr>
    
    <tr>
    <td align="center" valign="middle" bgcolor="#ebebeb">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#ebebeb" style="font-family:Tahoma, Geneva, sans-serif; color:#666; font-size:12px">Contact us: 012 492 1230 | <a style="text-decoration:none; color:#666" href="mailto:correspondence@oaks.co.za">correspondence@oaks.co.za</a><br />
      Quality Vacation Club, Mooikloof Office Park East, Corner of Atterbury and Jollify Main Road, Mooikloof, 0059</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#ebebeb">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="font-family:Tahoma, Geneva, sans-serif; color:#666; font-size:12px"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="30">&nbsp;</td>
        <td width="740" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; color:#58595b"><strong>TERMS AND CONDITIONS<br />
          <br />
        </strong></td>
        <td width="30">&nbsp;</td>
      </tr>
      <tr>
        <td width="30">&nbsp;</td>
		  <td width="740" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; color:#636363"><ul><li>Reservations must be made telephonically through TradeUnipoint on (0)12 996 5120 to qualify for the Sudwala Lodge Bonus Breaks offer</li><li> Promotion only valid for bookings confirmed before 31 August 2017 </li>
		    <li>
          Bookings are subject to availability</li><li>
          Promotion limited to five bookings per club member</li><li>
          This is a cash offer only</li><li>
          School holidays, peak periods and long weekends do not apply</li><li>
          No on-renting of the accommodation</li><li>
          No Private Owner weeks may be booked on this special</li><li>
          Sudwala Lodge stock only</li><li>
          TradeUnipoint Cancellation Policy will apply at all times</li><li><strong style="color: #064974">
			  R99 will be donated towards African Blessings, this is non-refundable</strong></li></ul></td>
        <td width="30">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Tahoma, Geneva, sans-serif; color:#666; font-size:12px" align="center" valign="middle"></td>
  </tr>
  </tbody>
</table>
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script><script>
    $(document).ready(function () {
      if(Cookies.get('ga') === undefined){
      setTimeout(function () {
        $('.cookieinfo').modal('show');
      }, 2000);
      }
    });
  </script>  </body>
</html>
