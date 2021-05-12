<!doctype html>
<html>
<head>
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


<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          
        </tbody>
      </table></td>
    </tr>
    
    
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Durban_Spa/Header.jpg" width="800" height="481" alt="" style="display: block;"/></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Durban_Spa/so-much-to-Sea.jpg" width="800" height="102" alt="" style="display: block;"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="36">&nbsp;</td>
            <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 17px; color:#636363; line-height: 30px;"><strong style="font-size: 23px; color: #632a8f">Relive history.</strong><br>
      Visit the Durban Natural Science Museum where research becomes entertainment.<br></td>
            <td width="36">&nbsp;</td>
          </tr>
          
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Durban_Spa/History.jpg" width="800" height="177" alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="36">&nbsp;</td>
            <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 17px; color:#636363; line-height: 30px;"><strong style="font-size: 23px; color: #632a8f">Awaken to astonishing views of the Golden Mile.</strong><br>
      And then go outside and ‘play’<br></td>
            <td width="36">&nbsp;</td>
          </tr>
          
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Durban_Spa/Views.jpg" width="800" height="177" alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="36">&nbsp;</td>
            <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 17px; color:#636363; line-height: 30px;"><strong style="font-size: 23px; color: #632a8f">Do you know what lies behind-the-scenes of Africa's largest 
Marine Theme Park?</strong><br>
      At uShaka Marine World you can experience close encounters with dangerous animals, take on the highest water slide in Africa, go on a behind the scenes tour, or enjoy fantastic entertainment. <br></td>
            <td width="36">&nbsp;</td>
          </tr>
          
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Durban_Spa/uShaka.jpg" width="800" height="177" alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="36">&nbsp;</td>
            <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 17px; color:#636363; line-height: 30px;"><strong style="font-size: 23px; color: #632a8f">Explore breath-taking natural wonders.</strong><br>
      The Durban Botanical Gardens is a natural wonderland and boasts an impressive array of cycads, herbs, orchids, and more!<br></td>
            <td width="36">&nbsp;</td>
          </tr>
          
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Durban_Spa/gardens.jpg" width="800" height="177" alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="36">&nbsp;</td>
            <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 17px; color:#636363; line-height: 30px;"><strong style="font-size: 23px; color: #632a8f">Experience the culture and get into the beach vibe.</strong><br>
      Take advantage of every day that you wake up by the sea. <br></td>
            <td width="36">&nbsp;</td>
          </tr>
          
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Durban_Spa/Culture.jpg" width="800" height="181" alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="36">&nbsp;</td>
            <td align="center"  style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 21px; color:#636363;"><strong>We have the perfect spot from which you can explore all this and more!</strong></td>
            <td width="36">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td align="center"><img src="http://www.qvc.co.za/mailers/Durban_Spa/filmStrip.jpg" width="726" height="206" alt=""/></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="36">&nbsp;</td>
            <td><a href="http://www.qvc.co.za/resorts/durban_spa.php" target="_blank"><img src="http://www.qvc.co.za/mailers/Durban_Spa/Durban-Spa-top.jpg" width="726" height="203" alt="" style="display: block;"/></a></td>
            <td width="36">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><img src="http://www.qvc.co.za/mailers/Durban_Spa/DurbanSpa-imgs.jpg" width="800" height="162" alt=""/></td>
    </tr>
    <tr>
      <td><table width="800" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td width="36">&nbsp;</td>
            <td><table width="728" border="0" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td width="82" valign="top" bgcolor="#E7E7E7"><img src="http://www.qvc.co.za/mailers/Durban_Spa/durbanSpaTree.jpg" width="83" height="265" alt=""/></td>
                  <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 16px; color:#636363;" bgcolor="#E7E7E7">All units come with a <strong>dishwasher, microwave</strong> and <strong>air conditioning</strong><br>
<br>
                Onsite activities include an <strong>indoor  heated swimming pool, Jacuzzi </strong>and <strong>sauna</strong><br><br>
                Onsite <strong>hair salon</strong> and <strong>wellness centre</strong><br><br>
                There’s a <strong>Spur Steak Ranch</strong> right inside Durban Spa!<br><br> 
                Nearby destinations include <strong>Suncoast Casino, Ushaka Marine World,</strong> <strong><br>
                Valley of a Thousand Hills</strong> and more<br>
             </td>
                </tr>
              </tbody>
            </table></td>
            <td width="36">&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td align="center"><a href="http://www.qvc.co.za/resorts/durban_spa.php" target="_blank"><img src="http://www.qvc.co.za/mailers/Durban_Spa/DontmissOut-Banner.jpg" width="728" height="258" alt=""/></a></td>
    </tr>
    <tr>
      <td align="center"><a href="mailto:info@tradeunipoint.com?subject=I'm%20interested%20in%20the%20Durban%20Spa%20cash%20offer"><img src="http://www.qvc.co.za/mailers/Durban_Spa/Contact-TradeUnipoint.jpg" width="728" height="86" alt=""/></a></td>
    </tr>
    <tr>
      <td bgcolor="#959595" align="center"  style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 36px; color:#ffffff;"><strong >Interested in other great cash offers?</strong><br>
		  <strong style="font-size: 25px;">Please <a href="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/bonus-breaks.html" target="_blank" style="color: #632a8f; text-decoration: none;">click here</a> to view our <span style="color: #632a8f; text-decoration: none;">Bonus Breaks </span>club offers</strong><br>
      </td>
    </tr>
    <tr>
      <td bgcolor="#632a8f" align="center" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'; font-size: 13px; color:#ffffff;"><br>
        Contact us: 012 492 1230 | <a href="mailto:Correspondence@oaks.co.za" style="text-decoration: none; color: #ffffff">Correspondence@oaks.co.za</a> <a href="http://www.qvc.co.za/" target="_blank" style="text-decoration: none; color: #ffffff">| www.qvc.co.za</a><br>
        Quality Vacation Club, Mooikloof Office Park East, Corner of Atterbury and Jollify Main Road, Mooikloof, 0059
        <br>
      <a href="http://www.qvc.co.za/mailers/Durban_Spa/QVC Durban Spa Bonus Break Terms & Conditions.pdf" target="_blank" style=" font-size: 13px; color:#ffffff; text-decoration: none;"><strong><br>
      Click here for Terms and Conditions</strong></a><strong><br>
      <br>
      </strong></td>
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

	</script><script>
    $(document).ready(function () {

      if(!Cookies.get('__utma')){
        $('.cookieinfo').show();
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
