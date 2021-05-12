<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QVC Smart Traveller</title>

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
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td style=" font-family:century gothic; color:#666; text-align:center; font-size:12px"><webversion></webversion></td>
		</tr>
		<tr>
			<td style="font-family:Century Gothic; font-size:12px; color:#666; text-align:center"><br />
			 </td>
	  </tr>
		<tr>
			<td><a href="http://www.qvc.co.za/"><img alt="QVC header" height="112" src="http://mail.ourcommunications.co.za/mailimg/qvc/images/QVC-Smart-Traveller_01.jpg" width="900" /></a></td>
		</tr>
		<tr>
			<td><a href="http://www.qvc.co.za/"><img alt="Smart header" height="506" src="http://mail.ourcommunications.co.za/mailimg/qvc/images/QVC-Smart-Traveller_02.jpg" width="900" /></a></td>
		</tr>
		<tr>
			<td style="background-color:#662d91; font-family:century gothic; color:#fff; text-align:center; font-size:24px"><br />
			The Smart Traveller knows that<br />
			<strong>paying their fees offers many benefits.</strong><br />
			 </td>
		</tr>
		<tr>
			<td style=" font-family:century gothic; color:#666; text-align:center; font-size:16px"><br />
			Not only can you book earlier, which may provide better availability, but you</td>
		</tr>
		<tr>
			<td style="font-family:century gothic; color:#666; text-align:center; font-size:16px"><br />
			<strong style="color:#e94d3e; font-size:24px">STAND A CHANCE TO WIN A 55'' FLAT SCREEN.</strong><br />
			 </td>
		</tr>
		<tr>
			<td><img alt="lucky draw" height="232" src="http://mail.ourcommunications.co.za/mailimg/qvc/images/QVC-Smart-Traveller_05.jpg" width="900" /></td>
		</tr>
		<tr>
			<td style=" font-family:century gothic; color:#666;  font-size:16px"><strong style="color:#color:#e94d3e;">Yes, you heard right. We’re giving away a 55" flat screen TV!</strong><br />
			<br />
			<strong>Do you have what it takes to be a Smart Traveller? We hope to spot your name in the draw,<br />
			so start planning ahead today!</strong><br />
			 </td>
		</tr>
		<tr>
			<td style=" font-family:century gothic; color:#666;  font-size:16px">If you WIN, we need to get hold of you, so be sure to update your contact information by<br />
			sending an email to <a href="mailto:correspondence@oaks.co.za" style="text-decoration:none; color:#666">correspondence@oaks.co.za</a> or by dialing 012 492 1230.<br />
			 </td>
		</tr>
		<tr>
			<td><img alt="find out more" height="328" src="http://mail.ourcommunications.co.za/mailimg/qvc/images/QVC-Smart-Traveller_07.jpg" width="900" /></td>
		</tr>
		<tr>
			<td style=" background-color:#666; font-family:Century Gothic; font-size:14px; color:#FFF; text-align:center"><br />
			The competition opens on 01 December 2016 and closes on 31 March 2017. Terms and Conditions Apply.<br />
			Please click <a href="http://mail.ourcommunications.co.za/mailimg/qvc/images/QVC%20-%20The%20Smart%20Traveller%20Terms%20and%20Conditions.pdf" style="text-decoration:none; color:#FFF" target="_blank">HERE</a> to view the terms and conditions<br />
			<br />
			Dial 012 492 1230 | <a href="http://www.qvc.co.za/our_club.php" style=" text-decoration:none; color:#FFF">www.qvc.co.za</a> | <a href="mailto:correspondence@oaks.co.za" style="text-decoration:none; color:#FFF">correspondence@oaks.co.za</a><br />
			 </td>
		</tr>
		<tr>
			<td><img alt="good luck" height="186" src="http://mail.ourcommunications.co.za/mailimg/qvc/images/QVC-Smart-Traveller_08.jpg" width="900" /></td>
		</tr>
		<tr>
			<td style=" font-family:century gothic; color:#666; text-align:center; font-size:12px"><unsubscribe></unsubscribe></td>
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
