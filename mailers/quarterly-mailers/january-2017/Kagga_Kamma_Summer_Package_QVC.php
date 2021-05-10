<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exclusive Member Offer</title>
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
    <tr>
      <td><img src="http://kaggakamma.co.za/mailers/summer2016/QVC-headerlogo_01.jpg" width="800" height="102" alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:15px; color:#939598; text-align:center">Due to our mutual affiliation with VRS, it is Kagga Kamma Nature Reserve’s pleasure to offer <br />
        QVC members an <strong style="color:#96c26b">exclusive 30% discount.</strong>

Contact Kagga Kamma reservations directly on <br />
021 872 4343 or email info@kaggakamma.co.za to book your stay in a Cave or Hut Suite.

<br />
<br />
Note: This offer is in respect of the Kagga Kamma Lodge/Hotel accommodation, <br />
not the timeshare accommodation and cannot be redeemed with club points.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  <tr>
    <td><img src="http://kaggakamma.co.za/mailers/summer2016/Kagga_Kamma_Summer_07_new.jpg" alt="Adore &amp; Appreciate the small things in life - Header Image" width="800" height="422" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:30px; color:#414042; text-align:center">Every moment of every day, <br />
    we encounter countless &quot;little things&quot;.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:17px; color:#939598; text-align:center">Everything is made up of lots and lots of &quot;little things&quot; that connect to each other <br />
    to add up to the big, beautiful picture.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_10.jpg" alt="Spotted Eagle Owl" width="266" height="93" /></td>
  </tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:25px; color:#414042; text-align:center">SUMMER PACKAGES</td>
  </tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:17px; color:#939598; text-align:center">1 November 2016 – 30 April 2017</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr valign="top">
        <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_13.jpg" alt="B&amp;B package - Header" width="263" height="70" /></td>
        <td rowspan="2"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_14.jpg" width="4" height="262" /></td>
        <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_15.jpg" alt="Full Board Package - Header" width="265" height="70" /></td>
        <td rowspan="2"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_16.jpg" width="4" height="262" /></td>
        <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_17.jpg" alt="Pensioner's Special - Header" width="264" height="70" /></td>
      </tr>
      <tr>
        <td align="center" valign="top" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:17px; color:#414042; text-align:center"><span style="font-size:60px; color:#96c26b">R1490</span>
          <br />
          p.p.p.n.s.<br />
          <br />
          Includes: <br />
          Accommodation and Breakfast.</td>
        <td align="center" valign="top" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:17px; color:#414042; text-align:center"><span style="font-size:60px; color:#96c26b">R2450</span><br />
          p.p.p.n.s.<br />
          <br />
          Includes: <br />
          Accommodation, Three Meals <br />
          and Two Excursions.</td>
        <td align="center" valign="top" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:17px; color:#414042; text-align:center"><span style="font-size:60px; color:#96c26b">45% off</span><br />
          <span style="font-size:15px; color:#96c26b">(Discount applies to rack rates only)</span><br />
          ON MIDWEEKS ALL YEAR<br />
          <br />
          Bed and Breakfast and <br />
          Full Board Packages. </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_21_new_21.jpg" alt="Book Now - Call 021 872 4343 " width="800" height="197" /></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_24.jpg" alt="Divider" width="266" height="20" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:30px; color:#414042; text-align:center">The &quot;little things&quot; to enjoy at Kagga Kamma...</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:17px; color:#939598; text-align:center">Look closely and 
    see if you can find Kagga Kamma's Little Five.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_27.jpg" alt="Elephant Shrew" width="160" height="141" /></td>
        <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_28.jpg" alt="Scrub Hare" width="160" height="141" /></td>
        <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_29.jpg" alt="Angulate Tortoise" width="160" height="141" /></td>
        <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_30.jpg" alt="Southern Rock Agama" width="177" height="141" /></td>
        <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_31.jpg" alt="Rock Hyrax" width="143" height="141" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_34.jpg" alt="Divider" width="266" height="19" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:17px; color:#939598; text-align:center">Relax, take a break and<strong style="color:#96c26b"> indulge in the spectacular scenery.</strong><br />
<br />

  Enjoy a <strong style="color:#96c26b">beautiful sunset</strong> or sunrise. <br />
        Nothing is more inspirational than tuning into nature's majesty.<br />
<br />

   <strong style="color:#96c26b">Be mesmerised by the fire,</strong> while enjoying your favourite drink.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_37.jpg" width="800" height="402" /></td>
  </tr>
  <tr>
    <td bgcolor="#a0ada5"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td align="left" valign="middle" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:14px; color:#fff; text-align:left"><strong>Reservations:</strong> +27 (0) 21 872 4343<br />
          <strong>Lodge:</strong> +27 (0) 23 004 0077<br />
          <strong>Email:</strong><a href="mailto:info@kaggakamma.co.za" style="color:#fff">info@kaggakamma.co.za</a><br />
          <br />
          <a href="http://www.kaggakamma.co.za/" target="_blank" style="color:#fff">www.kaggakamma.co.za</a></td>
        <td width="193"><table width="193" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="4"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_39.jpg" alt="Logo - Footer" width="193" height="55" /></td>
            </tr>
          <tr>
            <td><a href="https://www.youtube.com/user/KaggaKammaSA" target="_blank"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_40.jpg" alt="Link to Youtube" width="48" height="35" border="0" /></a></td>
            <td><a href="https://www.facebook.com/KaggaKamma" target="_blank"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_41.jpg" alt="Link to Facebook" width="39" height="35" border="0" /></a></td>
            <td><a href="https://twitter.com/kaggakamma" target="_blank"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_42.jpg" alt="Link to Twitter" width="43" height="35" border="0" /></a></td>
            <td><a href="https://www.tripadvisor.co.za/Hotel_Review-g528729-d1011863-Reviews-Kagga_Kamma_Nature_Reserve-Kagga_Kamma_Private_Game_Reserve_Western_Cape.html" target="_blank"><img src="http://kaggakamma.co.za/mailers/summer2016/KK_Summer_package_43.jpg" alt="Link to Tripadvisor" width="63" height="35" border="0" /></a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#a0ada5">&nbsp;</td>
  </tr>
  
        <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" style="font-family:Tahoma, Geneva, sans-serif; color:#666; font-size:12px"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="40">&nbsp;</td>
        <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; color:#58595b"><strong>TERMS AND CONDITIONS<br />
          <br />
        </strong></td>
        <td width="40">&nbsp;</td>
      </tr>
      <tr>
        <td width="40">&nbsp;</td>
        <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; color:#58595b"><ul>
            <li>For a booking call 021 872 4343 or email info@kaggakamma.co.za</li>
            <li>Offer valid for South African residents only</li>
            <li>Valid for reservations with an occupation date between: 1 November 2016 - 30 April 2017</li>
            <li>Reservations need to be secured with a 50% deposit</li>
            <li>This discount cannot be used in conjunction with any other promotion or special and cannot be redeemed for cash</li>
            <li>Activities, excursions and meals not specified in the package are for guests' own account</li>
            <li>Bed and Breakfast:  Air-conditioned room with en-suite bathroom and breakfast daily</li>
            <li>Full Board: Air-conditioned room with en-suite bathroom, breakfast, lunch, dinner and two excursions per person per day</li>
            <li>Seniors qualify for a 45% discount off Rack Rate, subject to availability and only valid from Sunday to Thursday, all  year round. Only guests over the age of 60 are permitted to book this discounted rate</li>
            <li>All rates are per person per night in ZAR (South African Rand)</li>
            <li>Children age 3–12 years sharing a room with adult/s pay 50% of adult rate</li>
            <li>No pets allowed</li>
            <li>1% TOMSA levy and 14% VAT included</li>
            <li>No date amendments outside the specified dates will be accepted</li>
            <li>Rates are non-commissionable</li>
          </ul></td>
        <td width="40">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
			<td style="font-family:Century Gothic; font-size:14px; text-align:center; color:#FFF; background-color:#662d91"><br />			  
			<a href="www.qvc.co.za" style="text-decoration:none; color:#FFF">www.qvc.co.za</a><br />
			 </td>
		</tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:12px; color:#939598; text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:12px; color:#939598; text-align:center">&nbsp;</td>
  </tr>
</table>
</body>
</html>
