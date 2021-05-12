<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>50% off</title>
<style type="text/css">
body table tr td {
	font-family: Tahoma, Geneva, sans-serif; color:#5e5e5e
}
</style>
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_01.jpg" width="800" height="485" alt="dear member" /></td>
  </tr>
  <tr>
    <td><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_02.jpg" alt="miss you" width="800" height="178" /></td>
  </tr>
  <tr>
    <td><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="25" height="145" style="font-size:26px"><br /></td>
        <td width="440" style="font-size:26px"><strong>Don’t let life hold you back…</strong><br />
Your accounts are in good standing.</td>
        <td width="335" rowspan="2"><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_04.jpg" alt="waiting for you" width="335" height="256" /></td>
      </tr>
      <tr>
        <td colspan="2"><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_05.jpg" alt="waiting for you" width="465" height="111" /></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_06.jpg" alt="resorts" width="800" height="182" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-size:33px; color:#9cc967; text-align:right">Start lining those holidays up!</td>
  </tr>
  <tr>
    <td><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="391" rowspan="2"><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_08.jpg" alt="reaching out" width="391" height="292" /></td>
        <td width="257" height="166" style="font-size:23px">One after the other <br />
          At a massive <br />
          discount, just for you!</td>
        <td width="152" style="font-size:36px; color:#6C3"><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC-2.jpg" width="152" height="108" /></td>
      </tr>
      <tr>
        <td colspan="2" style="font-size:23px">We’ve been reaching out to you for a while now, and haven’t heard from you.<br />
          <strong><em>Please do give us a call.</em></strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_11.jpg" alt="hook you up" width="800" height="83" /></td>
  </tr>
  <tr>
    <td><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_12.jpg" alt="something special" width="800" height="272" /></td>
  </tr>
  <tr bgcolor="#9cc967">
    <td><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr style="color:#FFF">
        <td width="107"><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_13.jpg" width="94" height="68" /></td>
        <td width="241" style="color:#FFF; font-size:24px">012 492 1230</td>
        <td width="81"><img src="http://www.qvc.co.za/mailers/non_transacting/2/Non-Transacting-Members-QVC_15.jpg" width="64" height="68" /></td>
        <td width="371" style="color:#FFF; font-size:24px"><a style="text-decoration:none; color:#FFF" href="mailto:correspondence@oaks.co.za">correspondence@oaks.co.za</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:24px; color:#7a056e">PS - Just want to chat and find out where you stand?<br />
    <span style="font-size:29px; color:#9cc967">Call us on 012 492 1230</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#666666" style="color:#FFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#666666" style="color:#FFF"><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="41">&nbsp;</td>
          <td width="759" style="color:#FFF">TERMS AND CONDITIONS</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#666666" style="color:#FFF">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-size:14px"><blockquote>
      <p>Offer valid for bookings confirmed before 31 August 2017<br />
        Offer valid for occupation during 2017; School holidays, peak periods and long weekends do not apply<br />
        Bookings are subject to availability<br />
        Bookings must be made through our Reservations Call Centre on 012 492 1230 to qualify<br />
        The Member’s accounts must be in good standing at the time of booking, and continue to be so until occupation<br />
        Only three bookings allowed on this offer per portfolio<br />
        Club stock only</p>
    </blockquote></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td align="center" valign="middle" bgcolor="#ebebeb">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#ebebeb" style="font-family:Tahoma, Geneva, sans-serif; color:#666; font-size:14px">Contact us: 012 492 1230 | <a style="text-decoration:none; color:#666" href="mailto:correspondence@oaks.co.za">correspondence@oaks.co.za</a> | <a style="text-decoration:none; color:#666" href="http://www.qvc.co.za/">www.qvc.co.za</a><br />
      Quality Vacation Club, Mooikloof Office Park East, Corner of Atterbury and Jollify Main Road, Mooikloof, 0059</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#ebebeb">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:14px">&nbsp;</td>
  </tr>
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
