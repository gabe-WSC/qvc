<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Time is running out</title>
<!---- GOOGLE TRACKING CODE --->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34075496-1', 'auto');
  ga('send', 'pageview');
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
      <td ><img src="http://www.qvc.co.za/mailers/non_transacting/Header_img.jpg" width="800" height="485" alt="Time is running out" style="display: block;"/></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/non_transacting/We-havent-heard-from-you.jpg" width="800" height="123" alt="We havent heard from you in a while..."/></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="334"><img src="http://www.qvc.co.za/mailers/non_transacting/Come-Say-Hi.jpg" width="334" height="205" alt="Hello there"/></td>
            <td align="right" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; font-size: 23px; color:#636363; line-height: 30px;"><p>We don’t want you to miss out again, <br>
              please POP in to visit us </p>
              <p><strong style="font-size: 45px; color: #7C0470">really soon!</strong></p></td>
            <td width="44px">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/non_transacting/Visit-one-of-our-resorts.jpg" width="800" height="329" alt="Come visit us at one of our resorts" style="display: block;"/></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr bgcolor="#E8E8E8">
            <td width="62"><img src="http://www.qvc.co.za/mailers/non_transacting/Bracket-Left.jpg" width="62" height="102" alt=""/></td>
            <td align="center" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; font-size: 18px; color:#636363; line-height: 30px;"><strong style="color: #49A99B">Please take note:</strong> Availability is on a first come, first served basis and there is currently intervals available at Ngwenya Lodge, Manzi Monate, Mount Amanzi, Monateng Safari Lodge, Sudwala Lodge, Crystal Springs</td>
            <td width="69"><img src="http://www.qvc.co.za/mailers/non_transacting/bracketRight.jpg" width="69" height="102" alt=""/></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td><table width="349" border="0" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td><img src="http://www.qvc.co.za/mailers/non_transacting/or.jpg" width="349" height="63" alt="or" style="display: block;"/></td>
                </tr>
                <tr>
                  <td align="center" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; font-size: 23px; color:#636363; line-height:28px;">Why not visit the misty
                    <br>
                    forests at Crystal Springs?</td>
                </tr>
                <tr>
                  <td valign="bottom"><img src="http://www.qvc.co.za/mailers/non_transacting/trees.jpg" width="349" height="78" alt="Trees"/></td>
                </tr>
              </tbody>
            </table></td>
            <td width="451" align="right" valign="top"><img src="http://www.qvc.co.za/mailers/non_transacting/Additional-20.jpg" width="451" height="198" alt="crystal springs" style="display: block;"/></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="40"><img src="http://www.qvc.co.za/mailers/non_transacting/Space90.jpg" width="35" height="90" alt=""/></td>
            <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; font-size: 23px; color:#636363; line-height: 30px;">Even if you don’t have quite enough points for your desired 
destination, we’ll make a plan! </td>
            <td width="40">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="40">&nbsp;</td>
            <td align="left" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; font-size: 23px; color:#636363; line-height:37px;">Don’t get left behind 
              <br>
              <strong style="font-size: 33px; color: #4DA99E">Stock is moving fast!</strong><br>Give us a <strong>call</strong>, pop us a <strong>mail</strong>, 
get in touch! </td>
            <td width="401" align="right"><img src="http://www.qvc.co.za/mailers/non_transacting/Dog-with-a-laptop.jpg" width="401" height="206" alt=""/></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr bgcolor="#4BA99B">
      <td><a href="mailto:Correspondence@oaks.co.za"><img src="http://www.qvc.co.za/mailers/non_transacting/contact-details.jpg" width="800" height="69" alt="Contact us" style="display: block;"/></a></td>
    </tr>
    <tr>
      <td height="34" align="center" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; font-size: 23px; color:#4DA99E; line-height:37px; font-weight: bold;"><table width="800" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="40"><img src="http://www.qvc.co.za/mailers/non_transacting/space70.jpg" width="40" height="70" alt=""/></td>
      <td align="center">We are waiting for your call, so dial the lucky number NOW.</td>
      <td width="40">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td height="32px" bgcolor="#636460"><table width="800" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="40">&nbsp;</td>
      <td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; font-size: 12px; color:#ffffff; font-weight: bold;">TERMS AND CONDITIONS</td>
      <td width="40">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="40">&nbsp;</td>
            <td  style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; font-size: 12px; color:#636363; line-height:20px;">Offer valid for bookings confirmed before 31 May 2017<br>
Bookings must be made through our Reservations Call Centre on 012 492 1230 to qualify<br>
Bookings are strictly subject to availability and the mentioned destinations are moving<br> quickly; availability is on a first come, first served basis<br>
Only one booking per member allowed on this offer<br>
School holidays, peak periods and long weekends do not apply<br>
Club stock only</td>
            <td width="40">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#4BA99B" align="center" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 13px; color:#ffffff;">
        <p>Contact us: 012 492 1230 | <a href="mailto:Correspondence@oaks.co.za" style="text-decoration: none; color: #ffffff">Correspondence@oaks.co.za</a> <a href="http://www.qvc.co.za/" style="text-decoration: none; color: #ffffff">| www.qvc.co.za</a><br>
          Quality Vacation Club, Mooikloof Office Park East, Corner of Atterbury and Jollify Main Road, Mooikloof, 0059<br><br><strong>
      </strong></p></td>
    </tr>

  </tbody>
</table>
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	</script><script>
    $(document).ready(function () {

      if(Cookies.get('__utma')){
        $('.cookieinfo').hide();
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
