<!doctype html>
<html>
<head>


<meta charset="utf-8">
<title>Father's Day Offer</title>
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
      <td><img src="http://www.qvc.co.za/mailers/fathersdayoffer/QVC_Fathers_Day_Offer_01.jpg" width="800" height="368" alt=""/></td>
    </tr>
    <tr>
      <td bgcolor="#449d9a">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#449d9a" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 36px; color:#ffffff; text-align: center"><em>Book a weekend and get a</em> <strong>midweek FOR FREE!</strong></td>
    </tr>
    <tr>
      <td bgcolor="#449d9a">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 30px; color:#636363; text-align: center"><strong>Dial 012 492 1230 before 30 June 2017 </strong> <br>
      to book at any of these Resorts:</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td><img src="http://www.qvc.co.za/mailers/fathersdayoffer/QVC_Fathers_Day_Offer_03.jpg" width="267" height="132" alt=""/></td>
            <td><img src="http://www.qvc.co.za/mailers/fathersdayoffer/QVC_Fathers_Day_Offer_04.jpg" width="266" height="132" alt=""/></td>
            <td><img src="http://www.qvc.co.za/mailers/fathersdayoffer/QVC_Fathers_Day_Offer_05.jpg" width="267" height="132" alt=""/></td>
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
            <td width="30">&nbsp;</td>
            <td width="226" valign="top" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 14px; color:#636363">Enjoy the majestic Mankelekele Mountains, visit the Sudwala Caves or take a 50 min drive from the Resort to go on the Long Tom Toboggan (the first of its kind in Africa!); all this fun from one comfortable base - at Sudwala Lodge in Nelspruit.</td>
            <td width="30" valign="top">&nbsp;</td>
            <td width="228" valign="top" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 14px; color:#636363">Breath-taking scenery, top-notch braai areas, cosy fireplaces, birdlife and wildlife… These are only some of the things that make Crystal Springs Mountain Lodge in Pilgrim’s Rest, a firm winter-favourite.</td>
            <td width="30" valign="top">&nbsp;</td>
            <td width="226" valign="top" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 14px; color:#636363">Enjoy an urban escape and visit Monateng Safari Lodge, on the outskirts of Pretoria. Game drives, camping, boma braais and yummy pizza takeaways are some of the Monateng must-do’s this Father’s Day.</td>
            <td width="30">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/fathersdayoffer/QVC_Fathers_Day_Offer_07.jpg" width="800" height="307" alt=""/></td>
    </tr>
    <tr>
      <td bgcolor="#b8a57c">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#b8a57c" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 20px; color:#ffffff; text-align: center"><p>Availability is on a first come, first served basis, <br>
        for occupation during June, July and August 2017.<br>
      <strong style="font-size: 37px">Don’t miss out, Dial 012 492 1230 NOW!</strong></p></td>
    </tr>
    <tr>
      <td bgcolor="#b8a57c">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="30">&nbsp;</td>
            <td width="740" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 17px; color:#636363"><em>Warm winter wishes,</em><br>
              QVC<br></td>
            <td width="30">&nbsp;</td>
          </tr>
          
        </tbody>
      </table></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 17px; color:#636363; text-align: center"><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="205">&nbsp;</td>
            <td width="180" align="center" bgcolor="#2b3d78">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="180" align="center" bgcolor="#2b3d78">&nbsp;</td>
            <td width="205">&nbsp;</td>
          </tr>
          <tr>
            <td width="205">&nbsp;</td>
            <td width="180" align="center" bgcolor="#2b3d78" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 16px; color:#ffffff; text-align: center"><a href="http://www.qvc.co.za/specials.php" target="_blank" style="color: #FFF;">VIEW OTHER OFFERS</a></td>
            <td width="30">&nbsp;</td>
            <td width="180" align="center" bgcolor="#2b3d78" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 16px; color:#ffffff; text-align: center"><a href="http://www.qvc.co.za/documents/Arrive%20Like%20a%20VIP.pdf" target="_blank" style="color: #FFF">VIEW ALL ADD-ONS</a></td>
            <td width="205">&nbsp;</td>
          </tr>
          <tr>
            <td width="205">&nbsp;</td>
            <td width="180" align="center" bgcolor="#2b3d78">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="180" align="center" bgcolor="#2b3d78">&nbsp;</td>
            <td width="205">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#449d9a" align="center" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 13px; color:#ffffff;"><br>
        Contact us: 012 492 1230 | <a href="mailto:Correspondence@oaks.co.za" style="text-decoration: none; color: #ffffff">Correspondence@oaks.co.za</a> | <a href="http://www.qvc.co.za/" target="_blank" style="text-decoration: none; color: #ffffff">www.qvc.co.za</a><br>
        Quality Vacation Club, Mooikloof Office Park East, Corner of Atterbury and Jollify Main Road, Mooikloof, 0059
        <br>
        <strong><br>
      </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="30">&nbsp;</td>
            <td width="740" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 14px; color:#636363"><p><strong>TERMS AND CONDITIONS</strong><br>
              </p>
              <ul>
                <li>Reservations must be made telephonically through the Reservations Call Centre on 012 492 1230 </li>
                <li> Promotion only valid for booking confirmed before 30 June 2017</li>
                <li> Free midweeks only applies to weekend bookings, made on this offer, at Monateng Safari Lodge, Crystal Springs Mountain Lodge and Sudwala Lodge</li>
                <li> Promotion valid for occupation during June, August and September 2017; school holidays, peak periods and long weekends do not apply</li>
                <li> Bookings are subject to availability</li>
                <li> Promotion limited to five bookings per club member</li>
                <li> No on-renting of the accommodation</li>
                <li> No private owner weeks </li>
              </ul></td>
            <td width="30">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
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
	</script></body>
</html>
