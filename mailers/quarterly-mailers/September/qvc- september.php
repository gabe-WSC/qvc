<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

	<title>Untitled Document</title>
</head>
<body>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="800">
	<tbody>
		<tr>
			<td width="799">
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td style="font-family:Century Gothic; font-size:12px; color:#666">&nbsp;</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.qvc.co.za/our_club.php"><img alt="Qvc - header" height="536" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_01.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td><a href="#qvc"><img alt="qvc buzz" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_01.jpg" width="142" /></a></td>
						<td><a href="#featured-detination"><img alt="featured destination" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_02.jpg" width="209" /></a></td>
						<td><a href="#movie"><img alt="movie picks" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_03.jpg" width="135" /></a></td>
						<td><a href="#specials"><img alt="Specials" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_04.jpg" width="105" /></a></td>
						<td><a href="#notices"><img alt="Notices" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_05.jpg" width="105" /></a></td>
						<td><a href="#contact"><img alt="Contact" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_06.jpg" width="104" /></a></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><img alt="intro " height="560" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_03.jpg" width="800" /></td>
		</tr>
		<tr>
			<td><a id="qvc" name="qvc"></a><img alt="qvc buzz" height="74" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_04.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td style="font-family:Century Gothic; font-size:14px; color:#666">There are exciting things happening out there! Be sure to keep an eye out for these recent Resort upgrades, refurbishments and improvements.<br />
			 </td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td width="97"><img alt="paint" height="76" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_06_01.jpg" width="97" /></td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666" width="270">Kagga Kamma chalets have all been repainted inside and out and each unit is equipped with new outside chairs to soak in the lovely views.</td>
						<td width="99"><img alt="flower" height="76" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_06_02_02.jpg" width="94" /></td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666" width="334">At Mount Amanzi guests can now book spa treatments that take place at the riverfront.</td>
					</tr>
					<tr>
						<td><img alt="couch" height="77" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_06_04.jpg" width="97" /></td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666"width="270">Mabalingwe is progressively<br />
						replacing all pillows and couches<br />
						in the units.</td>
						<td><img alt="tennis" height="77" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_06_05_02.jpg" width="92" /></td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666"width="334">Ngwenya is bringing back childhood memories with a new tennis practice wall.</td>
					</tr>
					<tr>
						<td><img alt="golf ball" height="82" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_06_07.jpg" width="97" /></td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666"width="270">Monateng has upgraded their mini golf course!</td>
						<td><img alt="river" height="82" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_06_08_02.jpg" width="96" /></td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666"width="334">Sudwala Lodge is making a difference by cleaning the Houtbosloop River all-year round and establishing bird feeding areas around the Resort.</td>
					</tr>
					<tr>
						<td><img alt="food" height="99" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_06_10.jpg" width="97" /></td>
						<td colspan="3" style="font-family:Century Gothic; font-size:14px; color:#666">Monateng Le Fera Restaurant has turned into a sitdown and takeaway establishment. Please note that the business hours for the Restaurant have changed.<br />
						Visit www.monateng.co.za to find out more.</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td><a href="#qvc"><img alt="qvc buzz" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_01.jpg" width="142" /></a></td>
						<td><a href="#featured-detination"><img alt="featured destination" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_02.jpg" width="209" /></a></td>
						<td><a href="#movie"><img alt="movie picks" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_03.jpg" width="135" /></a></td>
						<td><a href="#specials"><img alt="Specials" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_04.jpg" width="105" /></a></td>
						<td><a href="#notices"><img alt="Notices" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_05.jpg" width="105" /></a></td>
						<td><a href="#contact"><img alt="Contact" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_06.jpg" width="104" /></a></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><a id="featured-detination" name="featured-detination"></a><a href="http://www.qvc.co.za/resort_portfolio.php"><img alt="the place where the sun rises" height="377" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_08.jpg" width="800" /></a></a></td>
		</tr>
		<tr>
			<td><img alt="content" height="454" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_09.jpg" width="800" /></td>
		</tr>
		<tr>
			<td><img alt="images" height="228" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_10.jpg" width="800" /></td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800
    ">
				<tbody>
					<tr>
						<td style="font-family:Century Gothic; font-size:14px; color:#666; text-align:center" width="261">Crystal Springs is situated in a picturesque nook of Mpumalanga’s countryside. The four star self-catering<br />
						accommodation is known for its amazing views, serene<br />
						landscapes and exciting<br />
						on-site activities.</td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666; text-align:center" width="10"> </td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666;text-align:center" width="256">A family-friendly lodge that provides all that is necessary to relax and unwind. Others have described this Lowveld treasure as ‘rustic’, ‘charming’, ‘comfy’, ‘serene’ and ‘tranquil’.<br />
						<br />
						 </td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666;text-align:center" width="9"> </td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666;text-align:center" width="266">The ultimate wildlife lover’s paradise, at Ngwenya you have every opportunity to see all the same species (Big Five included) that occur in the game-rich south-eastern<br />
						section of the Kruger Park,<br />
						without even having to leave the Resort.</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td style="font-family:Century Gothic; font-size:14px; color:#FFF; background-color:#00a89c; text-align:center"><br />
			A little birdie told us that there’s currently <strong>availability at these top hotspots,</strong> so don’t miss out…<br />
			 </td>
		</tr>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td><img alt="online booking" height="66" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_14_02.jpg" width="799" /></td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td><a href="http://online.qvc.co.za/login/auth"><img alt="members lounge" height="70" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_14_04.jpg" width="400" /></a></td>
						<td><a href="http://online.qvc.co.za/login/auth"><img alt="member login" height="70" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_14_05.jpg" width="399" /></a></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.qvc.co.za/documents/QVC_Userguide.pdf"><img alt="download online booking" height="75" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_15.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td><a id="movie" name="movie"></a><img alt="Spring into holiday" height="762" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_16.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td><img alt="upcoming movie picks" height="368" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_17.jpg" width="800" /></td>
		</tr>
		<tr>
			<td><img alt="2016 holiday calender" height="67" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_19.jpg" width="800" /></td>
		</tr>
		<tr>
			<td><img alt="24 September" height="179" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_20.jpg" width="800" /></td>
		</tr>
		<tr>
			<td><a id="specials" name="specials"></a><img alt="Sizzling Specials" height="64" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_21.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td><a href="http://www.qvc.co.za/mailers/quarterly-mailers/September/promo1/promo1.html"><img alt="Mnarani" height="306" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_22.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td><a href="http://mnarani.co.za/slider/specials/act_web_download.jpg"><img alt="free midweek" height="246" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_23_01.jpg" width="398" /></a></td>
						<td><a href="http://www.qvc.co.za/mailers/quarterly-mailers/September/promo2/promo2.html"><img alt="Hold up 2016" height="246" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_23_02.jpg" width="402" /></a></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td><a href="http://www.daelive.com/articles/bannerarticle.aspx?BannerID=4390"><img alt="DAE" height="248" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_24_01.jpg" width="400" /></a></td>
						<td><a href="https://www.tradeunipoint.com/blog/11/rental-holidays-all-year-round"><img alt="TUP" height="248" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_24_02.jpg" width="400" /></a></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><img alt="ccc" height="480" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_25.jpg" width="800" /></td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td><img alt="ccc" height="360" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_26_01.jpg" width="429" /></td>
						<td style="font-family:Century Gothic; font-size:14px; color:#666">
						<p><strong style="color:#a0b400">The dedicated outreach team goes out into the community once a month</strong> to dip, sterilise, vaccinate, de-worm and feed the animals that are in need.</p>

						<p>The outreach team has formed relationships with the <strong>pet owners, who have now become reliant on the small bag of pet food that that they receive monthly,</strong> especially during the cold winter months when their pets have to scrounge even more to find food.</p>

						<p><strong style="color:#00a89c">We would love it if you could help us restock our pantry so that we will be able to continue feeding as many pets as possible</strong> and to hopefully extend our reach, not only this winter but in the future as well.</p>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><a href="http://africanblessings.co.za/Blog/ArticleID/17/Community-Critter-Care-outreach-My-experience"><img alt="ccc" height="325" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_27.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td><a href="#qvc"><img alt="qvc buzz" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_01.jpg" width="142" /></a></td>
						<td><a href="#featured-detination"><img alt="featured destination" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_02.jpg" width="209" /></a></td>
						<td><a href="#movie"><img alt="movie picks" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_03.jpg" width="135" /></a></td>
						<td><a href="#specials"><img alt="Specials" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_04.jpg" width="105" /></a></td>
						<td><a href="#notices"><img alt="Notices" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_05.jpg" width="105" /></a></td>
						<td><a href="#contact"><img alt="Contact" height="47" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_02_06.jpg" width="104" /></a></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><a id="notices" name="notices"></a><img alt="club Notices" height="60" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_29.jpg" width="800" /></td>
		</tr>
		<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td style="font-family:Century Gothic; font-size:14px; color:#666" width="435"><strong>Don’t miss out</strong><br />
						on great offers and important updates! Please ensure that your contact information is current. You may update your details from the QVC login page, give us a call or send your updated<br />
						information to <a href="mailto:correspondence@oaks.co.za">correspondence@oaks.co.za</a> .</td>
						<td rowspan="2" style="font-family:Century Gothic; font-size:14px; color:#666" width="16"> </td>
						<td rowspan="2" style="font-family:Century Gothic; font-size:14px; color:#666" width="349">
						<p><strong>Guest Certificates</strong><br />
						A Guest Certificate is issued when a Club Member wishes to allow another person (a non-member) to use their club portfolio.</p>

						<p>Please be advised that in order to obtain a Guest Certificate you need to contact the Member<br />
						Services Call Centre on 012 492 1230 or send an email to correspondence@oaks.co.za.<br/><br/></p>
						</td>
					</tr>
					<tr>
						<td style="font-family:Century Gothic; font-size:14px; color:#666"><strong>Please Remember</strong><br />
						that annual Management Fees must be up to date before you can make a reservation.</td>
					</tr>
					<tr>
						<td style="font-family:Century Gothic; font-size:14px; color:#666"><strong>Please Note</strong><br />
						that for 2016 the Cancellation Fee has increased with 10%, from R 500.00 to R 550.00.</td>
						<td> </td>
						<td><span style="font-family:Century Gothic; font-size:14px; color:#666"><strong>Forfeiting Club Units?</strong><br />
						Have any leftover or unused Club Units?<br />
						Don’t miss out on making precious holiday<br />
						members. Contact us on 012 492 1230 today to discuss your options.</span></td>
					</tr>
					<tr>
						<td colspan="3" style="font-family:Century Gothic; font-size:14px; color:#662d90; text-align:center"><br />
						Please note that our office will be closed from <strong>Monday, 19 December 2016 to Tuesday,</strong><br />
						<strong>03 January 2017</strong>. We will return for business as usual on Wednesday, 04 January 2017.</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td><img alt="until next time" height="101" src="http://www.qvc.co.za/mailers/quarterly-mailers/September/QVC-Newsletter_September_31_01.jpg" width="800" /></td>
		</tr>
		<tr>
			<td colspan="3" height="44">
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
						<td align="center" bgcolor="#00a89c" colspan="3" height="40" width="800"><a id="contact" name="contact"></a><img height="33" src="http://mail.ourcommunications.co.za/mailimg/qvc/newsletter2016/images/twitter.jpg" width="102" /> </td>
					</tr>
					<tr>
						<td align="center" bgcolor="#00a89c" colspan="3"><span style="font-size:13px; font-family:Century Gothic, Geneva, sans-serif; color:white;"><a href="https://twitter.com/kaggakamma" style="text-decoration:none; color:white">Kagga Kamma</a>  |  <a href="https://twitter.com/ngwenyalodge" style="text-decoration:none; color:white">Ngwenya Lodge</a></span> <br />
						 </td>
					</tr>
					<tr>
						<td align="center" bgcolor="#9d005d" colspan="3" height="40" width="800"><img height="30" src="http://mail.ourcommunications.co.za/mailimg/qvc/newsletter2016/images/facebook.jpg" width="138" /> </td>
					</tr>
					<tr>
						<td align="center" bgcolor="#9d005d" bordercolor="0" colspan="3" width="800"><br />
						<span style="font-size:13px; font-family:Century Gothic, Geneva, sans-serif; color:white"><a href="https://www.facebook.com/CrystalSpringsMountainLodge?fref=ts" style="text-decoration:none; color:white">Crystal Springs</a> | <a href="https://www.facebook.com/pages/Ekuthuleni-Hoedspruit/317263885106873?fref=ts" style="text-decoration:none; color:white">Ekuthuleni</a> | <a href="https://www.facebook.com/KaggaKamma?fref=ts" style="text-decoration:none; color:white">Kagga Kamma</a> | <a href="https://www.facebook.com/MabalingweVRS?fref=ts" style="text-decoration:none; color:white">Mabalingwe</a> |<a href="https://www.facebook.com/Manzi-Monat%C3%A9-190987287630729/?fref=ts"style="text-decoration:none; color:white"> Manzi Monate </a>| <a href="https://www.facebook.com/mnarani.hotel.kenya?fref=ts" style="text-decoration:none; color:white">Mnarani</a> | <a href="https://www.facebook.com/MountAmanzi?fref=ts" style="text-decoration:none; color:white">Mount Amanzi</a> | <a href="https://www.facebook.com/MonatengSafariLodge?fref=ts" style="text-decoration:none; color:white">Monateng</a><br />
						<a href="https://www.facebook.com/NgwenyaLodge?fref=ts" style="text-decoration:none; color:white">Ngwenya Lodge</a> | <a href="https://www.facebook.com/SudwalaLodge/?fref=ts" style="text-decoration:none; color:white">Sudwala Lodge | </a><a href="https://www.facebook.com/MorrumbeneBeachResort/?fref=ts" style="text-decoration:none; color:white">Morrumbene</a> |<a href="https://www.facebook.com/Uvongo-River-Resort-505669162940165/?fref=ts"style="text-decoration:none; color:white"> Uvongo River Resort</a><br /></span>
						 </td>
					</tr>
					<tr>
						<td align="center" bgcolor="#662d90" height="40" width="800"><img height="27" src="http://mail.ourcommunications.co.za/mailimg/qvc/newsletter2016/images/youtube.jpg" width="121" /></td>
					</tr>
					<tr>
						<td align="center" bgcolor="#662d90" width="800"><br />
						<span style="font-size:13px; font-family:Century Gothic, Geneva, sans-serif; color:white;"><a href="http://www.youtube.com/user/KaggaKammaTV" style="text-decoration:none; color:white">Kagga Kamma</a>  |  <a href="http://www.youtube.com/user/NgwenyaLodgeSA" style="text-decoration:none; color:white">Ngwenya Lodge</a>  |  <a href="http://www.youtube.com/user/CrystalSpringsSA" style="text-decoration:none; color:white">Crystal Springs</a>  |  <a href="https://www.youtube.com/channel/UCGGICudK19BAx3dsEvC730w" style="text-decoration:none; color:white">Mnarani</a></span><br />
						 </td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td colspan="3">
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tbody>
					<tr>
					</tr>
					<tr>
						<td align="center" bgcolor="#FFFFFF" width="800"><br />
						<span style="font-size:14px; font-family:'Century Gothic'"><a href="http://www.qvc.co.za/" style="text-decoration:none; color:#000 ">www.qvc.co.za</a><br />
						<br />
						Mooikloof Office Park East, Cnr Atterbury and Jollify Main Road, Mooikloof, 0059<br />
						P.O. Box 35580, Menlo Park, 0102<br />
						<br />
						Tel: 012 492 1230 | Fax: 012 996 0556<br />
						<a href="mailto:correspondence@oaks.co.za" style="text-decoration:none; color:black">correspondence@oaks.co.za</a></span><br />
						 </td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="73"><a href="http://www.vrsonline.co.za/"><img border="0" height="73" src="http://mail.ourcommunications.co.za/mailimg/aci/newsletter2015/dec/aci_newsletter_dec_61.jpg" width="800" /></a></td>
		</tr>
		<tr>
			<td style="font-family:Century Gothic; font-size:14px; color:#666 ; text-align:center"><unsubscribe><br/><br/>
			</unsubscribe></td>
		</tr>
		<tr>
			<td height="2"> </td>
		</tr>
	</tbody>
</table>
</body>
</html>
