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
<title>Missed out?</title>

</head>

<body>

<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Trebuchet MS', Verdana, 'sans-serif';  color:#333333">
  <tbody>
    <tr>
      <td><a href="http://www.qvc.co.za/index.php" target="_blank"><img src="images/Hbanner.jpg" width="800" height="75" alt="Quality Vacation Club" style="display: block"/></a></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          
        </tbody>
      </table></td>
    </tr>

    <tr>
      <td><img src="images/OhDear.jpg" width="800" height="448" alt="Oh Dear"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"  style="font-size: 20px;font-family: 'Trebuchet MS', Verdana, 'sans-serif';">After saving the lucky number on speed dial…  After waking up early, filled <br>
        with optimism to be our first caller…  After dreaming of a holiday that is <br>
      <strong style="color: #79046C">oh-so affordable… </strong></td>
    </tr>
    <tr>
      <td align="center"><img src="images/Oh-Sorry.jpg" width="800" height="219" alt=""/></td>
    </tr>
    <tr valign="middle">
      <td></td>
    </tr>
    
    <tr align="center">
      <td valign="middle"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
        </tbody>
      </table></td>
    </tr>

    <tr>
      <td><img src="images/upsidedown.jpg" width="800" height="126" alt=""/></td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td style="font-size: 22px;font-family: 'Trebuchet MS', Verdana, 'sans-serif';"><p>We’ll give you the other <strong style="color: #78056D">33% as discount!</strong><br>
      Because it’s always holiday time, even on the flipside!<br>We hope you’re grinning from ear-to-ear, because this one is especially
      <br>
      for you!

      <br>
      <br>
      <strong>We really are sorry that you missed out </strong><br>
      </p></td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
    </tr>
 
    <tr align="center">
      <td bgcolor="#00746B" style="font-size: 22px;font-family: 'Trebuchet MS', Verdana, 'sans-serif';">&nbsp;</td>
    </tr>
    <tr align="center">
      <td bgcolor="#00746B" style="font-size: 30px;font-family: 'Trebuchet MS', Verdana, 'sans-serif'; color: #FFFFFF">Book any available QVC Stock before <br>
      04 August and <strong style="color: #79046C">get 33% off! </strong></td>
    </tr>
    <tr align="center">
      <td bgcolor="#00746B" style="font-size: 22px;font-family: 'Trebuchet MS', Verdana, 'sans-serif';">&nbsp;</td>
    </tr>
    <tr align="center">
      <td style="font-size: 10px;font-family: 'Trebuchet MS', Verdana, 'sans-serif';">&nbsp;</td>
    </tr>
    <tr align="center">
      <td style="font-size: 35px;font-family: 'Trebuchet MS', Verdana, 'sans-serif'; color: #79046C">Dial <strong style="color: #00746B">012 492 1230</strong> NOW <br>
		  <span style="font-size:23px; color: #2D2D2D">to avoid disappointment</span> <br>
   </td>
    </tr>
    <tr>
      <td >&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#79046C">&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="30">&nbsp;</td>
            <td width="565" style="font-size: 16px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';"><strong style="font-size:14px; font-family: 'Trebuchet MS', Verdana, 'sans-serif';">TERMS AND CONDITIONS</strong><br>
             <span style="font-size: 12px">Promotion is open for new bookings before 04 August 2017 only<br>
             Promotion is valid for occupation during 2017 only<br>
             Bookings must be made through the Reservations Call Centre to qualify, please dial Reservations on 012 492 1230<br>
             School holidays, peak periods and long weekends do not apply<br>
             Only five bookings allowed per member portfolio<br>
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

    <tr bgcolor="#666666">
      <td style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; text-align: center; font-size: 13px; color:#FFF;">        <br>
        Contact us: 012 492 1230 | <a href="mailto: correspondence@oaks.co.za" style="text-decoration: none; color: #FFFFFF;">correspondence@oaks.co.za</a><br>
        Quality Vacation Club, Mooikloof Office Park East, Corner of Atterbury and Jollify Main Road, Mooikloof, 0059<br>
      <br></td>
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
      if(Cookies.get('ga') === undefined){
      setTimeout(function () {
        $('.cookieinfo').modal('show');
      }, 2000);
      }
    });
  </script>  </body>
</html>
