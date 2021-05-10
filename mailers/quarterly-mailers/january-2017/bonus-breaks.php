<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus Breaks with a Cause</title>
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

    <!--[if (gte mso 9)|(IE)]>
    <style type="text/css">
        table {border-collapse: collapse !important;}
    </style>
    <![endif]-->
</head>
<body style="margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;margin-left:0 !important;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;background-color:#ffffff;font-family:Century Gothic;" >
    <center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;" >
        <div class="webkit" style="max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;" >
        	<!--[if (gte mso 9)|(IE)]>
			<table width="600" align="center" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
			<tr>
			<td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
			<![endif]-->
			<table class="outer" align="center" style="border-spacing:0;font-family:sans-serif;color:#333333;Margin:0 auto;width:100%;max-width:600px;" >
				<tr>
					<td align="center" class="full-width-image" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
						 <img src="http://qvc.co.za/mailers/bonusbreaks/withacause/QVC_BBWAC_Header-Image.jpg" width="600" alt="" style="border-width:0;width:100%;max-width:600px;height:auto;" />
					</td>
				</tr>
				<tr>
					<td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
						<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
							<tr>
								<td class="inner contents" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;text-align:left;" >
									<p class="h1 purple text-center" style="color:#DE4740;Margin:0;font-weight:bold;text-align:center;font-size:30px;Margin-bottom:25px;Margin-top:18px;" >In need of some rest and recuperation?</p>
									<p class="text-center" style="font-size:20px;Margin:0;color:#666;text-align:center;Margin-bottom:10px;" >Enjoy <span style="color:#DE4740;text-transform:uppercase;" ><strong>amazing breakaways</strong></span>, at amazing prices, and <span style="color:#DE4740;" ><strong>make an amazing difference</strong></span>.</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				
				<tr style="background-color:#662E91;" >
					<td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;" >
						<!--[if (gte mso 9)|(IE)]>
						<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
						<tr>
						<td width="50%" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
						<![endif]-->
						<div class="column" style="width:100%;max-width:300px;display:inline-block;vertical-align:top;" >
							<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
								<tr>
									<td class="inner" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;" >
										<table class="contents" style="border-spacing:0;font-family:sans-serif;color:#333333;width:100%;font-size:14px;text-align:left;" >
											<!--<tr>
												<td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
													<img src="images/two-column-01.jpg" width="280" alt="" style="border-width:0;width:100%;max-width:280px;height:auto;" />
												</td>
											</tr>-->
											<tr>
												<td class="text" style="padding-bottom:0;padding-right:0;padding-left:0;padding-top:10px;" >
													<div style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;background-color:#662E91;" >
														<p style="color:#ffffff;text-align:center;font-size:16px;Margin:0;" >Full Week @ <strong>only R 2149</strong><br />
														Weekend @ <strong>only R 1349</strong><br />
														Midweek @ <strong>only R 899</strong><br/><br/>
														
														<strong><span style="font-size:20px;" >Dial 012 492 1230</span></strong><br/> today to secure your break today. </p>
													</div>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (gte mso 9)|(IE)]>
						</td><td width="50%" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
						<![endif]-->
						<div class="column" style="width:100%;max-width:300px;display:inline-block;vertical-align:top;" >
							<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
								<tr>
									<td class="inner" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;" >
										<table class="contents" style="border-spacing:0;font-family:sans-serif;color:#333333;width:100%;font-size:14px;text-align:left;" >
<!--											<tr>
												<td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
													<img src="images/two-column-01.jpg" width="280" alt="" style="border-width:0;width:100%;max-width:280px;height:auto;" />
												</td>
											</tr>-->
											<tr>
												<td class="text" style="padding-bottom:0;padding-right:0;padding-left:0;padding-top:10px;" >
													<img src="http://qvc.co.za/mailers/bonusbreaks/withacause/2column_vect.jpg" alt="" style="border-width:0;width:100%;max-width:280px;height:auto;" />
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (gte mso 9)|(IE)]>
						</td>
						</tr>
						</table>
						<![endif]-->
					</td>
				</tr>
				
				<tr>
					<td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
						<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
							<tr>
								<td class="inner contents" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;text-align:left;" >
									<p class="h1" style="text-align:center;color:#DE4E43;Margin:0;font-weight:bold;font-size:30px;Margin-bottom:25px;Margin-top:18px;" >Bonus Breaks with a Cause</p>
									<p style="Margin:0;color:#666;font-size:16px;Margin-bottom:10px; text-align: center" >For every Bonus Break booked Quality Vacation Club will donate R 99 to the African Blessings cause.<br/> <br/>Moneys raised will go towards the Early Learning Centre, the food gardens which support neighboring communities, a 34-seater bus that is needed to transport the kiddies, the Community Critter Care initiative, and the well-being of donkeys and horses in these areas.</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
		<td class="two-column" style="padding: 0;text-align: center;font-size: 0;">
			<!--[if (gte mso 9)|(IE)]>
			<table width="100%">
			<tr>
			<td width="50%" valign="top">
			<![endif]-->
			<div class="column" style="width: 100%;max-width: 300px;display: inline-block;vertical-align: top;">
				<table width="100%" style="border-spacing: 0;font-family: sans-serif;color: #333333;">
					<tr>
						<td class="inner" style="padding: 10px;">
							<table class="contents" style="border-spacing: 0;font-family: sans-serif;color: #333333;width: 100%;font-size: 14px;text-align: left;">
								<tr>
									<td class="text" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';color: #FFF;font-weight: bold;font-size: 18px;text-align: center;padding: 10px;" bgcolor="#DE4E43"><p style="margin: 0;"><a href="http://www.qvc.co.za/mailers/bonusbreaks/withacause/African_Blessings/African_Blessing_BB.html" target="_blank" style="color:#FFF">Learn More</a></p>
                                      </td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<!--[if (gte mso 9)|(IE)]>
			</td><td width="50%" valign="top">
			<![endif]-->
			<div class="column" style="width: 100%;max-width: 300px;display: inline-block;vertical-align: top;">
				<table width="100%" style="border-spacing: 0;font-family: sans-serif;color: #333333;">
					<tr>
						<td class="inner" style="padding: 10px;">
							<table class="contents" style="border-spacing: 0;font-family: sans-serif;color: #333333;width: 100%;font-size: 14px;text-align: left;">
								<tr>
									<td class="text" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';color: #FFF;font-weight: bold;font-size: 18px;text-align: center;padding: 10px;" bgcolor="#DE4E43"><a href="http://www.qvc.co.za/specials.php" target="_blank" style="color:#FFF">View Other Offers</a></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<!--[if (gte mso 9)|(IE)]>
			</td>
			</tr>
			</table>
			<![endif]-->
		</td>
	</tr>
				
				
				<tr>
					<td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
						<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
							<tr>
								<td class="inner contents" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;text-align:left;" >
								
									<p class="purple" style="font-size:20px;text-align:center;Margin:0;color:#652E94;Margin-bottom:10px;" >And remember, <span style="font-size:25px;" ><strong>Dial 012 492 1230 to book!</strong></span></p><br/>
									Until next time,<br />
									QVC</p></td>
							</tr>
						</table>
					</td>
				</tr>
				
				<tr style="background-color:#662E91;" >
					<td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;" >
						<!--[if (gte mso 9)|(IE)]>
						<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
						<tr>
						<td width="50%" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
						<![endif]-->
						<div class="column" style="width:100%;display:inline-block;vertical-align:top;" >
							<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
								<tr>
									<td class="inner" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;" >
										<table class="contents" style="border-spacing:0;font-family:sans-serif;color:#333333;width:100%;font-size:14px;text-align:left;" >
											<tr>
												<td class="text" style="padding-bottom:0;padding-right:0;padding-left:0;padding-top:10px;" >
													<div style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;background-color:#662E91;" >
														<p style="color:#ffffff;text-align:center;font-size:16px;Margin:0;" >
															Be points savvy and secure this offer to avoid forfeiting points at the end of 2017!<br />
															Not sure if you're due to forfeit points? Give us a call!
														</p>
													</div>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<!--[if (gte mso 9)|(IE)]>
						</td>
						<![endif]-->
					</td>
				</tr>
				<tr>
					<td>
						<br />
					</td>
				</tr>
				<tr bgcolor="#959595">
					<td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
						<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
							<tr>
								<td class="inner contents" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;text-align:left;" >
								
									<p style="font-size:20px;text-align:center;Margin:0;color:#FFF;Margin-bottom:10px;" ><a  href="www.qvc.co.za" style="color:#fff;" >www.qvc.co.za</a> | <a  href="mailto:correspondence@oaks.co.za" style="color:#fff;" >correspondence@oaks.co.za</a></p></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >

						<table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333;" >
							<tr>
								<td class="inner contents footer" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;text-align:left;" >
									<p style="Margin:0;Margin-bottom:10px;font-size:12px;color:#666;" >TERMS AND CONDITIONS<br/><br />
									The price is subject to change<br>
									This is a cash offer only<br>
									R 99 will be donated towards African Blessings, this is non-refundable<br>
									Offer valid for bookings confirmed before 15 December 2017<br>
									Offer valid for occupation during 2017<br>
									Bookings must be made through our Reservations Call Centre on 012 492 1230 to qualify<br>
									Bonus Breaks may not be rented out, they must be occupied by the Member<br>
									Members' accounts must be in good standing and continue to be so after the Bonus Break has been taken<br>
									Peak seasons, school holidays and long weekends do not apply<br>
									Bookings are subject to availability<br>
									A maximum of 5 reservations per member per promotion<br>
									Club stock only</p>
									
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!--[if (gte mso 9)|(IE)]>
			</td>
			</tr>
			</table>
			<![endif]-->
        </div>
    </center>
</body>
</html>