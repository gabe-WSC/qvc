<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Oh Oh Arrears</title>
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
      <td><img style="display: block" src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_01.jpg" width="800" height="367" alt="OhOh"/></td>
    </tr>
    <tr>
      <td bgcolor="#700462">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#700462" style="font-family:Tahoma, Geneva, sans-serif; color:#fff; font-size:28px; text-align: center; text-transform: uppercase">Have you found yourself <strong>in arrears?</strong></td>
    </tr>
    <tr>
      <td bgcolor="#700462">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="30">&nbsp;</td>
            <td width="740" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:16px; text-align:justify">We know that times can be tough and to take off a bit of the pressure <strong style="color: #700462">we feel you deserve a holiday.</strong><br>
              <br>
But your account is in arrears? Not to worry, <strong style="color: #700462">we have something exciting in store for you,</strong> to help you get back on track. </td>
            <td width="30">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><img style="display:block" src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_03.jpg" width="800" height="274" alt="Comic strip 1"/></td>
    </tr>
    <tr>
      <td><img style="display: block" src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_04.jpg" width="800" height="283" alt="Comic strip 2"/></td>
    </tr>
    <tr>
      <td><img style="display: block" src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_05.jpg" width="800" height="240" alt="Comic strip 3
"/></td>
    </tr>
    <tr>
      <td bgcolor="#700462">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#700462" style="font-family:Tahoma, Geneva, sans-serif; color:#fff; font-size:28px; text-align: center;">Because we’ll let you book now and pay later, <br>
      <strong>a world of opportunities has opened up for you!</strong></td>
    </tr>
    <tr>
      <td bgcolor="#700462">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="116">&nbsp;</td>
            <td width="71"><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_08.jpg" width="71" height="59" alt="One"/></td>
            <td width="188" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:16px; text-align:justify"><strong style="color: #700462">Step 1:</strong> Make a booking</td>
            <td width="32">&nbsp;</td>
            <td width="66"><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_10.jpg" width="66" height="59" alt="Two"/></td>
            <td width="267" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:16px; text-align:justify"><strong style="color: #700462">Step 2:</strong> Make it work! This is how…</td>
            <td width="60">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_14.jpg" width="800" height="31" alt="Rent out your week
"/></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="40">&nbsp;</td>
            <td width="730">&nbsp;</td>
            <td width="30">&nbsp;</td>
          </tr>
          <tr>
            <td width="40">&nbsp;</td>
			  <td width="730" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:15px; text-align:justify">Book a week and rent the week out through TradeUnipoint.com. <strong style="color: #700462">Your week’s rental income will be paid towards your QVC account.</strong> Just bear in mind:</td>
            <td width="30">&nbsp;</td>
          </tr>
          <tr>
            <td width="40">&nbsp;</td>
            <td width="730"><table width="730" border="0" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td width="30"><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_17.jpg" width="29" height="24" alt="Star
"/></td>
                  <td width="700" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:15px; text-align:justify">A 20% commission fee and VAT will be charged, which means you will get close to 80% of the rental amount!</td>
                </tr>
                <tr>
                  <td width="30"><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_17.jpg" width="29" height="24" alt="Star"/></td>
                  <td width="700" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:15px; text-align:justify">They can’t guarantee that they will rent your week out, so be wise and check up on your week!</td>
                </tr>
                <tr>
                  <td width="30"><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_17.jpg" width="29" height="24" alt="Star"/></td>
                  <td width="700" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:15px; text-align:justify"><a style="color:#700462; font-weight: bold" href="http://tradeunipoint.com/" target="_blank">Click here to visit the TradeUnipoint.com website</a> for their terms and conditions.</td>
                </tr>
              </tbody>
            </table></td>
            <td width="30">&nbsp;</td>
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
            <td><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_20.jpg" width="400" height="53" alt="recruit holiday buddies
"/></td>
            <td><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_21.jpg" width="400" height="53" alt="Give your week away"/></td>
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
            <td width="40">&nbsp;</td>
			  <td width="340" valign="top" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:15px; text-align:justify"><strong style="color: #700462">How much is your booked week worth?</strong> Get friends or family to join you on your holiday and ask them to club in! Use the extra cash and pay your account.</td>
            <td width="40">&nbsp;</td>
			  <td width="340" valign="top" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:15px; text-align:justify">Give your reservation to a friend or family member and in return <strong style="color: #700462">get them to cover your outstanding balance on your account.</strong></td>
            <td width="40">&nbsp;</td>
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
            <td><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_27.jpg" width="400" height="56" alt="Keep your eyes on Promo Offers
"/></td>
            <td><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_28.jpg" width="400" height="56" alt="Plan your payments
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
            <td width="40">&nbsp;</td>
			  <td width="340" valign="top" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:15px; text-align:justify">The more you can book using your portfolio, the more you’ll be able to make use of these tips and <strong style="color: #700462">the easier it will be to get back up to speed and settle your accounts.</strong> So keep an eye out for promotions and save BIG.</td>
            <td width="40">&nbsp;</td>
			  <td width="340" valign="top" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:15px; text-align:justify">Contact Member Services to find out exactly how much your account is in arrears. <strong style="color: #700462">Work out how much time you have and plan your monthly contribution</strong> to be sure your account is in good standing 14 days before your holiday.</td>
            <td width="40">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
        <tr>
      <td>&nbsp;</td>
    </tr>
        <tr>
      <td><img src="http://qvc.co.za/mailers/OhOh/QVC-oh-oh-Arrears_26.jpg" width="800" height="296" alt="What are you waiting for?"/></td>
    </tr>
        <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="30">&nbsp;</td>
			  <td width="740" style="font-family:Tahoma, Geneva, sans-serif; color:#000; font-size:16px; text-align:justify"><strong style="color: #700462">Make a booking.</strong> Use one of these clever ways to get your accounts in good standing.<br>
<br>
And that’s it, happy holidaying!<br>
<br>
<em>Warm regards,<br>
                QVC<br></em>
              </td>
            <td width="30">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#700462">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#700462"><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="300" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:16px; color:#ffffff"><a href="http://www.qvc.co.za/specials.php" target="_blank" style="color: #FFF"><strong>View Other Offers</strong></a></td>
            <td width="200" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:16px; color:#ffffff"><a href="http://www.qvc.co.za/resort_portfolio.php" target="_blank" style="color: #FFF"><strong>Browse Resorts</strong></a></td>
            <td width="300" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:16px; color:#ffffff"><a href="http://online.qvc.co.za/login/auth" target="_blank" style="color: #FFF"><strong>Member Login</strong></a></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#700462">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="font-family:Tahoma, Geneva, sans-serif; color:#666; font-size:14px; text-align: center"><strong style="color: #ed1c24">Please note that we will be  closed for business on Wednesday, 9 August 2017. </strong><br>
      We will open for business as  usual on Thursday, 10 August 2017.</td>
    </tr>
    <tr>
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
		  <td width="740" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; color:#636363"><ul><li>Bookings can be made while the member account is in arrears, provided that all arrears payments are settled at least 14 days before occupation.</li>
		    <li> Should accounts still be in arrears 14 days prior to occupation the booking will be cancelled and the used club units will be forfeited.</li>
		    <li>All club reservation rules, terms and conditions apply.</li>
		    <li>Subject to availability.</li>
		    <li>Only five bookings per portfolio will be allowed when booking promotional offers. </li>
		    <li>Club stock only. <br>
		      </li>
		  </ul></td>
        <td width="30">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
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
      if(Cookies.get('__utmb') === undefined){
      setTimeout(function () {
        $('.cookieinfo').hide();
      }, 2000);
      }
    });
  </script>  </body>
</html>
