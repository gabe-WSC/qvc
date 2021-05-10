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
<title>Mandela Day Special</title>

<style type="text/css">



</style>

</head>

<body>

<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Trebuchet MS', Verdana, 'sans-serif';  color:#333333">
  <tbody>

    <tr>
      <td><a href="http://www.qvc.co.za" target="_blank"><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/logo_on.jpg" style="display: block" width="800" height="72" alt="Quality Vacation club"/></a></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          
        </tbody>
      </table></td>
    </tr>

    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/HeadIMG.jpg" width="800" height="442" alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><strong style="font-size: 38px; color: #7A056D">Which means 67% MORE...</strong></td>
    </tr>
    <tr valign="middle">
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td valign="middle"><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="200">&nbsp;</td>
            <td width="319" valign="middle"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td width="61"><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/arrow.jpg" width="61" height="50" alt=""/></td>
                  <td style="font-size: 22px">&nbsp;Spending money at the Resort!</td>
                </tr>
              </tbody>
            </table></td>
            <td width="200">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr align="center">
      <td valign="middle"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
              <tbody>
                <tr align="center">
                  <td width="130" align="right"><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/arrow2.jpg" width="61" height="42" alt=""/></td>
                  <td width="270" align="left" style="font-size: 22px">&nbsp;Precious memories!</td>
                </tr>
          </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#4BA99B">
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr bgcolor="#4BA99B" >
            <td  width="267"><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/calendar.jpg" width="215" height="167" alt=""/></td>
            <td width="433" style="font-size:28px; color: #FFFFFF"><strong style="font-size: 40px">Dial 012 492 1230 </strong><br>
              between <strong>08:00 am</strong> and <strong>16:00 pm </strong><br>
              on <strong>18 July and SAVE 67%!</strong></td>
            <td width="100">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td style="font-size: 22px; line-height: 35px;">The lines are going to be busy.<br>
		  <span style="color: #79046C">Are you ready for it?<br></span>
        We’ve prepared a few time-saving tips to help you on the <strong style="color: #00746B">BIG DAY</strong><br>
      </td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#ebebeb">
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="55">&nbsp;</td>
            <td width="135"><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/clock.jpg" width="135" height="152" alt=""/></td>
            <td ><strong>Set your alarm </strong><br>
              and start dialing <br>
              at 08:00 am sharp</td>
            <td width="120"><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/phone.jpg" width="120" height="152" alt=""/></td>
            <td >When dialing, immediately <strong>select Reservations</strong> to <br>
              avoid wasting time</td>
            <td >&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="135"><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/map.jpg" width="135" height="156" alt=""/></td>
            <td><strong>Pre-plan</strong> at least 3 reservation options <br>
              – try for different resorts and different dates<br></td>
            <td width="120"><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/dial.jpg" width="120" height="156" alt=""/></td>
            <td>Save 012 492 1230 to your <strong>SPEED DIAL</strong></td>
            <td width="55px">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr align="center">
      <td style="font-size: 22px">&nbsp;</td>
    </tr>
    <tr align="center">
      <td style="font-size: 22px">And remember, availability is on a first come, first served basis.</td>
    </tr>
    <tr align="center">
      <td style="font-size: 22px">&nbsp;</td>
    </tr>
    <tr align="center"  bgcolor="#4BA99B">
      <td style="font-size: 50px; color: #FFFFFF"><strong>012 492 1230!</strong></td>
    </tr>
    <tr align="center">
      <td style="font-size: 20px">18 July 2017</td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Mandela-Day-Special/images/SeeYou.jpg" width="800" height="62" alt=""/></td>
    </tr>
    <tr>
      <td align="center"><strong style="font-size: 23px; color: #76066A">Quality Vacation Club</strong></td>
    </tr>
    <tr>
      <td bgcolor="#4BA99B">&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="30">&nbsp;</td>
            <td width="565" style="font-size: 16px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';"><br>
              <strong style="font-size:14px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';">TERMS AND CONDITIONS</strong><br>
             <span style="font-size: 12px">Promotion is open for new bookings on 18 July 2017 only<br>
             Promotion is valid for occupation during 2017 only<br>
             Bookings must be made through the Reservations Call Centre to qualify, please dial Reservations on 012 492 1230<br>
             School holidays, peak periods and long weekends do not apply<br>
             Only ONE booking allowed per member portfolio<br>
             No re-sale of intervals<br>
             Bookings are subject to availability<br>
             Club Stock only<br>
				 <br>
             </span></td>
            <td width="30">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
      <tr>
        <td align="center" valign="middle" bgcolor="#ebebeb" style="font-family:Tahoma, Geneva, sans-serif; color:#666; font-size:12px">&nbsp;</td>
      </tr>
      <tr>
    <td align="center" valign="middle" bgcolor="#ebebeb" style="font-family:Tahoma, Geneva, sans-serif; color:#666; font-size:12px">Contact us: 012 492 1230 | <a style="text-decoration:none; color:#666" href="mailto:correspondence@oaks.co.za">correspondence@oaks.co.za</a><br />
      Quality Vacation Club, Mooikloof Office Park East, Corner of Atterbury and Jollify Main Road, Mooikloof, 0059</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#ebebeb">&nbsp;</td>
  </tr>
  </tbody>
</table>
<span class="preheader">Prehead text</span>
</body>
</html>
