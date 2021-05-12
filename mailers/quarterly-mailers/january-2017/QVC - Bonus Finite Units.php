<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bonus Finite Units</title>

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
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><p style="font-family:'Century Gothic'; font-size:12px; color:black;"><br>
        <br>
      </p></td>
    </tr>
    <tr>
      <td><a href="http://www.qvc.co.za/"><img src="http://mail.ourcommunications.co.za/mailimg/qvc/Club_Specials/Bonus_Finite_Units/Bonus-Finite-Units_01.jpg" width="800" height="486" alt=""/></a></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="59" height="124">&nbsp;</td>
            <td width="682" height="124" align="center"><span style="font-family:'Century Gothic'; font-size:22px; color:#636363;">Wish you could go on longer holidays or book better intervals?</span><br>
              <span style="font-family:'Century Gothic'; font-size:17px; color:#636363;">Wish you had just those extra few Club Units to have enough for your desired destination?</span></td>
            <td width="59" height="124">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://mail.ourcommunications.co.za/mailimg/qvc/Club_Specials/Bonus_Finite_Units/Bonus-Finite-Units_05.jpg" width="800" height="113" alt=""/></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="59" height="124">&nbsp;</td>
            <td width="682" height="124" align="center"><span style="font-family:'Century Gothic'; font-size:20px; color:#632a8f;">THE CAPITAL PORTION TO THE VALUE OF R 13 500 is absolutely FREE!</span><br>
              <span style="font-family:'Century Gothic'; font-size:17px; color:#636363;">All you have to take care of is the Management Fee of those 10 additional Club Units.</span></td>
            <td width="59" height="124">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td bgcolor="#632B90"><img src="http://mail.ourcommunications.co.za/mailimg/qvc/Club_Specials/Bonus_Finite_Units/Bonus-Finite-Units_09.jpg" width="400" height="222" alt=""/></td>
            <td width="370" height="222" align="right" bgcolor="#632B90"><span style="font-family:'Century Gothic'; font-size:17px; color:#ffffff;">Depending on your portfolio, you have<br>
              the opportunity to save UP TO 66% on the additional Management Fee portion!</span><br /><br />
              <span style="font-family:'Century Gothic'; font-size:27px; color:#ffffff;"><strong>Dial 012 492 1230</strong> today to </span><span style="font-family:'Century Gothic'; font-size:21px; color:#ffffff;">secure your Club Units today!</span></td>
            <td width="30" height="222" align="center" bgcolor="#632B90">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://mail.ourcommunications.co.za/mailimg/qvc/Club_Specials/Bonus_Finite_Units/Bonus-Finite-Units_11.jpg" width="800" height="111" alt=""/></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="26" height="212">&nbsp;</td>
            <td width="328" height="212" valign="top"><span style="font-family:'Century Gothic'; font-size:17px; color:#35aab2;"><strong>What makes this offer extra awesome?</strong></span>
              <ul style="font-family:'Century Gothic'; font-size:16px; color:#636363;">
              <li>We'll give you 10  Units to the value of R 13 500 that you get to use for 3 years</li>
              <li>SAVE Up TO 66% on the additional Management Fee – it’s a bargain</li>
               <li>Bigger, better and more awesome holiday options</li>
               </ul></td>
            <td width="66" height="212">&nbsp;</td>
            <td width="354" height="212" valign="top"><span style="font-family:'Century Gothic'; font-size:40px; color:#636363;">Dial 012 492 1230</span><br>
              <span style="font-family:'Century Gothic'; font-size:17px; color:#636363;">to claim your bonus Club Units!<br>
              <br /><br />
              Chat soon,<br>
              <em>Quality Vacation Club</em></span></td>
            <td width="26" height="212">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
      
     <tr>
		<td align="center" bgcolor="#35AAB3">
			<br />
		</td>
	</tr>
       
       
	<tr>
		<td align="center" bgcolor="#35AAB3">
			<span style="font-family:'Century Gothic'; font-size:17px; color:#ffffff;">
				Be points savvy and secure this offer to avoid forfeiting points at the end of 2017!<br />
				Not sure if you're due to forfeit points? Give us a call!
			</span>
		</td>
	</tr>
   <tr>
		<td align="center" bgcolor="#35AAB3">
			<br />
		</td>
	</tr>
   
   
   <tr>
		<td>
			<br />
		</td>
	</tr>
    
    <tr>
      <td height="60" align="center" bgcolor="#632B90"><span style="font-family:'Century Gothic'; font-size:17px; color:#ffffff;">Tel: 012 492 1230 | Fax: 012 996 0556 | <a href="mailto:correspondence@oaks.co.za" style="color:#ffffff;">correspondence@oaks.co.za</a></span></td>
    </tr>
    
    <tr>
		<td>
			<br />
		</td>
	</tr>
   
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="26" height="34" bgcolor="#636363">&nbsp;</td>
            <td width="748" height="34" bgcolor="#636363"><span style="font-family:'Century Gothic'; font-size:15px; color:#ffffff;"><strong>TERMS AND CONDITIONS</strong></span></td>
            <td width="26" height="34" bgcolor="#636363">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="26" height="218">&nbsp;</td>
            <td width="748" height="218">
            <ul style="font-family:'Century Gothic'; font-size:15px; color:#636363;">
              This offer is valid for a limited time only (please note our company closure dates)<br>
                Arrangements must be made through the Reservations Call Centre on 012 492 1230<br>
                Only the capital portion of the Finite Club Units are complimentary <br>
                Claiming the Finite Club Units does result in an increase in your Management Fee<br>
                Finite Club Units are valid strictly for 3 years only<br>
                You may cancel the additional Finite Club Units within the 3 years of usage rights, provided that you cancel before 01 September to take effect for the following year<br>
                Savings on the Management Fee portion of the additional Finite Club Units are up to 66% and may differ based on your portfolio and current amount of Club Units owned<br>
                Terms and Conditions are subject to change</li>
              </ul></td>
            <td width="26" height="218">&nbsp;</td>
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
