<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
    
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

<table align="center" border="0" cellpadding="0" cellspacing="0" width="800">
	<tbody>
		<tr>
			<td style="font-family:Century Gothic; font-size:14px; text-align:center "><br />
			 </td>
	  </tr>
		<tr>
			<td><a href="http://www.mnarani.co.za/"><img alt="Mnarani header" height="456" src="http://www.mnarani.co.za/mailers/easter-promo/Easter-promo_01.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td><img alt="Bargain easter breaks" height="216" src="http://www.mnarani.co.za/mailers/easter-promo/Easter-promo_02.jpg" width="800" /></td>
		</tr>
		<tr>
			<td style="text-align:center; font-family:Century Gothic; font-size:20px; background-color:#54c5d0; color:#FFF"><br />
			<strong>Package includes your accommodation, flights,<br />
			airport transfers, breakfast and non-motorised water sports!</strong><br />
			 </td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td width="388"><img alt="Mnarani" height="261" src="http://www.mnarani.co.za/mailers/easter-promo/Easter-promo_04_01.jpg" width="369" /></td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666; line-height:20pt" width="412"><strong>PACKAGE INCLUDES:</strong><br />
						Nine night’s accommodation in a Garden Room<br />
						Return flights on RwandAir<br />
						Current Airport Taxes<br />
						Return Hotel Transfers<br />
						Breakfast daily<br />
						Non-motorised water sports such as windsurfing, sailing, paddle boarding and canoeing<br />
						An escape from the Easter hustle and bustle</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><img alt="why visit mnarani" height="410" src="http://www.mnarani.co.za/mailers/easter-promo/Easter-promo_05.jpg" width="800" /></td>
		</tr>
		<tr>
			<td style="text-align:center; font-family:Century Gothic; font-size:15px; background-color:#54c5d0; color:#FFF"><br />
			<strong>Contact ACT Travel to book your tropical holiday today!<br />
			+27 012 941 8522| <a href="mailto:info@actravel.co.za" style="color:#FFF">info@actravel.co.za</a></strong><br />
			 </td>
		</tr>
		<tr>
			<td><img alt="kindly take note" height="424" src="http://www.mnarani.co.za/mailers/easter-promo/Easter-promo_06_02.jpg" width="800" /></td>
		</tr>
		<tr>
			<td style="font-family:Century Gothic; font-size:15px; color:#666"><strong>TERMS & CONDITIONS</strong></td>
		</tr>
		<tr>
			<td style="font-family:Century Gothic; font-size:11px; color:#666; text-align:justify">Offer valid for travel and accommodation until 31 May 2017 | Accommodation is subject to availability at the time of reservation | The above is a quotation only | No prior reservations have been made and rates are subject to ‘N’ class availability on RwandAir | The airline reserves the right the amend the fare at any time | Children rates on request | Guests can upgrade to a Pool Room at an additional R 50 per person per night and a Creek Room at an additional R 80 per person per night | Honeymoon Suite and gifts available on request | Package is quoted on bed and breakfast basis, guest can upgrade to Half-board to include Dinner at an additional R200 per day or upgrade to Full Board at an additional R350 to include lunch| Prices are subject to change without notice | Accommodation is subject to availability at the time of reservation | Single room supplements will apply during peak season |Standard ACT Terms & Conditions apply.</td>
		</tr>
		<tr>
			<td style="text-align: center; font-family:Century Gothic; font-size:14px; color:#666"><unsubscribe><br/>
			</unsubscribe></td>
		</tr>
	</tbody>
</table>

<p> </p>
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
