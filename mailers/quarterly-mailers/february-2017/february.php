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
<title>QVC February Newsletter</title>
<style type="text/css">
<!--
.style1 {
	color: #662d91;
	font-weight: bold;
}
.style2 {color: #662d91}
-->
</style>
</head>

<body>
<table width="799" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><a href="http://www.qvc.co.za/our_club.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_01.jpg" alt="Quality Vacation Club" width="800" height="109" /></a></td>
  </tr>
  <tr>
    <td colspan="3"><a href="http://www.qvc.co.za/our_club.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_02.jpg" alt="Family Header" width="800" height="453" /></a></td>
  </tr>
  <tr>
    <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="http://www.qvc.co.za/specials.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_01.jpg" alt="Member Offer" width="166" height="34" /></a></td>
        <td><a href="#smart"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_02.jpg" alt="Featured Destination" width="126" height="34" /></td>
        <td><a href="#highlights"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_03.jpg" alt="Tips for travelling on a budget" width="135" height="34" /></a></td>
        <td><a href="#featured-detination"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_04.jpg" alt="Notices" width="168" height="34" /></a></td>
        <td><a href="#notices"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_05_01.jpg" alt="Contact" width="74" height="34" /></a></td>
        <td><a href="#contact"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_05_02.jpg" alt="Contact us" width="131" height="34" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="http://www.qvc.co.za/mailers/quarterly-mailers/december-2016/QVC-Newsletter_December_04_01.jpg" alt="spacer" /></td>
        <td><a href="http://www.qvc.co.za/documents/QVC_Userguide.pdf" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/december-2016/QVC-Newsletter_December_04_02.jpg" alt="Members lounge" width="168" height="33" /></a></td>
        <td><a href="http://online.qvc.co.za/login/auth" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/december-2016/QVC-Newsletter_December_04_03.jpg" alt="Members login" width="160" height="33" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="512" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="2"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_05_01.jpg" alt="Time flies when youre having fun" width="511" height="47" /></td>
          </tr>
          <tr>
            <td width="32">&nbsp;</td>
            <td width="480"  style="font-family:Century Gothic; font-size:15px; color:#666; text-align:left">Wishing you precious moments, beautiful memories and all the blessings a heart can know.<br /></td>
          </tr>
          <tr>
            <td colspan="2"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_05_04.jpg" alt="signature" width="511" height="76" /></td>
          </tr>
        </table></td>
        <td><a href="http://www.qvc.co.za/specials.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_05_02.jpg" alt="Amazing Specials" width="289" height="197" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_01.jpg" alt="New years resolution" width="799" height="52" /></td>
  </tr>
  <tr>
    <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="69"><br/><br/></td>
        <td width="750"><table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="58" style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_01.jpg" alt="man on holiday" width="69" height="68" /></td>
            <td width="742" style="font-family:century gothic; font-size:15px; color:#666"><br/>Send you on bigger and better holidays, more often<br/><br/></td>
          </tr>
          <tr>
            <td style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_02.jpg" alt="piggy" width="69" height="41" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">Provide you with value for money getaways and enhance <br />
              your holiday experiences<br/><br/></td>
          </tr>
          <tr>
            <td style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_03.jpg" alt="Holiday memories" width="69" height="47" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">Give you the opportunity to make precious holiday memories<br/><br/></td>
          </tr>
          <tr>
            <td style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_04.jpg" alt="hand shake" width="69" height="42" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">Lend a helping hand and really help you achieve or maintain your <br />
              accounts in good order<br/><br/></td>
          </tr>
          <tr>
            <td style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_05.jpg" alt="wifi" width="69" height="39" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">To optimise our online platforms and make things easier for you, all-round<br/><br/></td>
          </tr>
          <tr>
            <td style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_06.jpg" width="69" height="41" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">Help you get to know the endless possibilities and opportunities of your portfolio<br/><br/></td>
          </tr>
          <tr>
            <td style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_07.jpg" alt="circle" width="69" height="31" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">Help you become ‘Rental’, ‘Banking’ and ‘Exchange’ savvy<br/><br/></td>
          </tr>
          <tr>
            <td style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_08.jpg" alt="treasure" width="69" height="40" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">To lead you off the beaten track, where many treasures await<br/><br/></td>
          </tr>
          <tr>
            <td style="font-family:century gothic; font-size:15px; color:#666"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_09.jpg" alt="tv" width="69" height="34" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">To give one of you a 55” inch flat screen TV – because you deserve it<br/><br/></td>
          </tr>
          <tr>
            <td><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_06_03_10.jpg" width="69" height="51" /></td>
            <td style="font-family:century gothic; font-size:15px; color:#666">To stay in touch more often! Give us a call, we have loads to chat about</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><a id="smart" name="smart"></a><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_07.jpg" alt="Smart travveller" width="800" height="164" /></td>
  </tr>
  <tr>
    <td colspan="3" style="font-family:Century Gothic; font-size:15px; color:#666; text-align:left"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="37" style="font-family:Century Gothic; font-size:15px; color:#666; text-align:left">&nbsp;</td>
        <td width="358" style="font-family:Century Gothic; font-size:15px; color:#666; text-align:left">Will you qualify for the lucky draw? <br/><br/>

Could you be the lucky winner?<br/><br/>

Have you thought of where you’d put your 55” flat screen TV if you won?<br/><br/>

All you have to do, is make sure your accounts are in good standing as at 31 March 2017 and for at least four consecutive months prior, and you’ll be automatically entered for the lucky draw!<br/><br/><br/></td>
        <td width="26">&nbsp;</td>
        <td width="341" style=" font-family:Century Gothic; font-size:15px; color:#666; text-align:left"><p>And remember… If you WIN, we’d need to get hold of you. Be sure to update your contact information by contacting Member Services on 012 492 1230 or send an email to correspondence@oaks.co.za.</p>
          <p>We’re here to help you get your accounts in good order, so dial the lucky number today!</p>
          <p>012 492 1230!</p>
          <p><strong style="font-size:12px">COMPETITION CLOSES ON 31 MARCH 2017. TERMS AND CONDITIONS APPLY. <a href="http://mail.ourcommunications.co.za/mailimg/qvc/images/QVC%20-%20The%20Smart%20Traveller%20Terms%20and%20Conditions.pdf" target="_blank">Click here to view the T&amp;C’s</a></strong></p></td>
        <td width="28">&nbsp;</td>
      </tr>
    </table>      <strong><br/><br/>
</strong></td>
  </tr>
  <tr>
    <td colspan="3"><a id="featured-detination" name="featured-detination"></a><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_09.jpg" alt="Featured destination" width="800" height="528" /></td>
  </tr>
  <tr>
    <td colspan="3" style="font-family:century gothic; font-size:15px; color:#666"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="30">&nbsp;</td>
        <td width="747"  style="font-family:century gothic; font-size:15px; color:#666"><p>In this issue, we’re heading off to the South Coast in KwaZulu Natal. Everyone loves the Golden Mile in Durban, Umhlanga beach, Ballito beach, and the usual tourist hotspots, but not everyone has explored the 120 km stretch of beautiful beaches, just a bit further south.</p>
          <p>Tourists come to the South Coast to enjoy the pristine beaches, the warm waters of the Indian Ocean, sub-tropical forests and vegetation, estuaries and lagoons, rocky coves, year-round sunny and ideal weather, and adventure sports.</p></td>
        <td width="23">&nbsp;</td>
      </tr>
    </table>
   </td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_11.jpg" alt="And thats not all" width="800" height="53" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_12.jpg" alt="South coast" width="800" height="366" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_13.jpg" alt="pack your cotumes" width="800" height="57" /></td>
  </tr>
  <tr>
    <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="http://www.qvc.co.za/specials.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_14.jpg" width="800" height="147" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><a id="highlights" name="highlights"></a><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_15.jpg" alt="what you need to know" width="800" height="80" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_16.jpg" alt="what you need to know fot 2017" width="800" height="572" /></td>
  </tr>
  <tr>
    <td colspan="3"><a href="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/holiday-calender.pdf " download><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_17.jpg" alt="2017 Holiday Calender" width="800" height="69" /></a></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_18.jpg" alt="Calender" width="800" height="577" /></td>
  </tr>
  <tr>
    <td colspan="3"><a href="http://www.qvc.co.za/specials.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_19.jpg" alt="member specials" width="800" height="138" /></a></td>
  </tr>
  <tr>
    <td colspan="3"><a id="foundations" name="foundations"></a><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_20.jpg" alt="Foundations for farming" width="800" height="421" /></td>
  </tr>
  <tr>
    <td colspan="3"  style="font-family:Century Gothic; font-size:15px; color:#666"><table width="800" border="0">
      <tr>
        <td width="42">&nbsp;</td>
        <td width="748" style="font-family:Century Gothic; font-size:15px; color:#666"><p>Skilled African Blessings Team members go out into the nearby communities to teach individuals how to farm according to the Foundations for Farming Principles. </p>
          <p>The Foundations for Farming initiative is an on-going activity in the communities. The training sessions occur twice a year over two days where community members are encouraged to attend. Skills training includes how to farm sustainably and productively in order to yield nutritious crops.</p>
          <p>The African Blessings Team contributes on-going support, training and encouragement in order to help create, maintain and sustain personal food gardens. With the skills and knowledge they have available we foresee great changes and upliftment in South Africa, one community at a time.</p>
          <p>“Give a man a fish and you feed him for a day; teach a man to fish and you feed him <br />
            for a lifetime” – Proverb </p>
          <p><strong style="color: #690"><a href="http://africanblessings.co.za/Projects/Food-Gardens" target="_blank" style="text-decoration:none;color: #690">{Click here}</a> to find out more about this wonderful project.</strong></p></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    </td>
  </tr>
  <tr>
    <td colspan="3"><span style="font-family:Century Gothic; font-size:15px; color:#666; text-align: center"><br/><br/></span><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_23.jpg" alt="rental and exchange options" width="800" height="53" /></td>
  </tr>
  <tr>
    <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="https://www.tradeunipoint.com/blog/19/we-love-rental-holidays?utm_source=clubnewsletterfeb2017&amp;utm_campaign=weloverentalholidays&amp;utm_medium=clubnewsbanner&amp;utm_content=weloverentalholidays" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_24_01.jpg" alt="tradeunipoint" width="398" height="274" /></a></td>
        <td><a href="http://pages.daelive.com/view.php?id=2878" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_24_02.jpg" alt="DAE" width="402" height="274" /></a></td>
      </tr>
    </table></td>
  </tr>
   <tr>
    <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td><a href="http://www.qvc.co.za/specials.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_01.jpg" alt="QVC Buzz" width="166" height="34" /></a></td>
        <td><a href="#smart"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_02.jpg" alt="Featured Destination" width="126" height="34" /></td>
        <td><a href="#highlights"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_03.jpg" alt="Tips for travelling on a budget" width="135" height="34" /></a></td>
        <td><a href="#featured-detination"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_04.jpg" alt="Notices" width="168" height="34" /></a></td>
        <td><a href="#notices"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_05_01.jpg" alt="Contact" width="74" height="34" /></a></td>
        <td><a href="#contact"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_05_02.jpg" alt="Contact us" width="131" height="34" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><a id="notices" name="notices"></a><img src="http://www.qvc.co.za/mailers/quarterly-mailers/december-2016/QVC-Newsletter_December_23.jpg" alt="Club Notices" width="800" height="51" /></td>
  </tr>
  <tr>
    <td colspan="3"  style="font-family:Century Gothic; font-size:14px; color:#666; text-align:left"><br/> Please Remember that your accounts needs to be in good standing before 
you can make a reservation.<br/><br/>

<span class="style1">Closure Notice </span><br/>
Please note that our offices will be closed on the following days:<br/>
<span class="style1">•	Tuesday, 21 March 2017 :</span> we will open for business as usual on <span class="style1">Wednesday, 22 March 2017</span><br/>
<strong><span class="style2">•	From 14 to 17 April 2017 </span>:</strong> we will open for business as usual on<span class="style2"><strong> Tuesday, 18 April 2017</strong></span><br/>
<span class="style2"><strong>•	Thursday, 27 April 2017 : </strong></span>we will open for business as usual on <span class="style2"><strong>Friday, 28 April 2017</strong></span><br/>
<span class="style2"><strong>•	Monday, 01 May 2017 </strong>:</span> we will open for business as usual on <span class="style2"><strong>Tuesday, 02 May 2017</strong></span><br/>
<br/>

<span class="style2"><strong>Guest Certificates</strong></span><br/>
Did you know that you can let someone else use your portfolio? Give your loved ones the gift of a holiday experience, by booking your chosen recipient’s preferred accommodation and securing a guest certificate through Reservations. You can contact the Reservations Call Centre on 
012 492 1230 or send an email to <a href="mailto:correspondence@oaks.co.za">correspondence@oaks.co.za</a>.
<br/>
<br/>
<span class="style2"><strong>Cancellation Fee Increase</strong></span><br/>
Please note that for 2017, the Cancellation Fee will increase from R 550.00 to R 590.00.
<br/><br/>
<span class="style2"><strong>Stock Release</strong></span><br/>
Stock is available until December 2017. Please contact Reservations on 012 492 1230 as soon as possible to secure your holiday in advance or book online by clicking <a href="http://online.qvc.co.za/login/auth" target="_blank">here</a>. 
<br/>
<strong><br/>
<span class="style2">Important Forfeiture Notice</span></strong><br/>
Be points-wise and don't miss out!
Depending on your portfolio, you may be due to forfeit unused Club Units at the end of 2017. 
You have some fantastic options to use your Club Units before they expire. Be sure to contact us before December to find out if you're due to forfeit Club Units at the end of the year, or to discuss your options. <br/>
<strong>Call us on now on 012 492 1230.</strong><br/><br/>

<strong><a href="http://www.qvc.co.za/notices.php" target="_blank">{Click here}</a> </strong>to view more notices...<br/>
<br/></td>
    </tr>
  <tr>
    <td colspan="3"><table width="800" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td><a href="http://www.qvc.co.za/specials.php" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_01.jpg" alt="QVC Buzz" width="166" height="34" /></a></td>
        <td><a href="#smart"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_02.jpg" alt="Featured Destination" width="126" height="34" /></td>
        <td><a href="#highlights"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_03.jpg" alt="Tips for travelling on a budget" width="135" height="34" /></a></td>
        <td><a href="#featured-detination"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_04.jpg" alt="Notices" width="168" height="34" /></a></td>
        <td><a href="#notices"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_05_01.jpg" alt="Contact" width="74" height="34" /></a></td>
        <td><a href="#contact"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_03_05_02.jpg" alt="Contact us" width="131" height="34" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/january-2017/QVC-Newsletter_29.jpg" alt="Closing" width="800" height="94" /></td>
  </tr>
  <tr>
    <td colspan="3"><a id="contact" name="contact"></a><img src="http://www.qvc.co.za/mailers/quarterly-mailers/december-2016/QVC-Newsletter_December_31_01.jpg" alt="twitter" width="800" height="61" /></td>
  </tr>
  <tr>
    <td colspan="3" style="font-family:Century Gothic; font-size:14px; color:#FFF; text-align: center; background-color:#3dc0f8"><span style="font-size:13px; font-family:Century Gothic, Geneva, sans-serif; color:white;"><a href="https://twitter.com/kaggakamma" target="_blank" style="text-decoration:none; color:white"><br/>Kagga Kamma</a>  |  <a href="https://twitter.com/ngwenyalodge" target="_blank" style="text-decoration:none; color:white">Ngwenya Lodge</a></span> <br/><br/></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/december-2016/QVC-Newsletter_December_32_01.jpg" alt="Facebook" width="800" height="53" /></td>
  </tr>
  <tr>
    <td colspan="3" style="font-family:Century Gothic; font-size:14px; color:#fff; text-align: center; background-color:#4e71a7"><br/>
      <span style="font-size:13px; font-family:Century Gothic, Geneva, sans-serif; color:white"><a href="https://www.facebook.com/CrystalSpringsMountainLodge?fref=ts" target="_blank" style="text-decoration:none; color:white">Crystal Springs</a> | <a href="https://www.facebook.com/pages/Ekuthuleni-Hoedspruit/317263885106873?fref=ts" target="_blank" style="text-decoration:none; color:white">Ekuthuleni</a> | <a href="https://www.facebook.com/KaggaKamma?fref=ts" target="_blank" style="text-decoration:none; color:white">Kagga Kamma</a> | <a href="https://www.facebook.com/MabalingweVRS?fref=ts" target="_blank" style="text-decoration:none; color:white">Mabalingwe</a> |<a href="https://www.facebook.com/Manzi-Monaté-190987287630729/?fref=ts" target="_blank"style="text-decoration:none; color:white"> Manzi Monate </a>| <a href="https://www.facebook.com/mnarani.hotel.kenya?fref=ts" target="_blank" style="text-decoration:none; color:white">Mnarani</a> | <a href="https://www.facebook.com/MountAmanzi?fref=ts" target="_blank" style="text-decoration:none; color:white">Mount Amanzi</a> | <a href="https://www.facebook.com/MonatengSafariLodge?fref=ts" target="_blank" style="text-decoration:none; color:white">Monateng</a><br />
    <a href="https://www.facebook.com/NgwenyaLodge?fref=ts" target="_blank" style="text-decoration:none; color:white">Ngwenya Lodge</a> | <a href="https://www.facebook.com/SudwalaLodge/?fref=ts" target="_blank" style="text-decoration:none; color:white">Sudwala Lodge | </a><a href="https://www.facebook.com/MorrumbeneBeachResort/?fref=ts" target="_blank" style="text-decoration:none; color:white">Morrumbene</a> |<a href="https://www.facebook.com/Uvongo-River-Resort-505669162940165/?fref=ts" target="_blank"style="text-decoration:none; color:white"> Uvongo River Resort</a></span><br/><br/></td>
  </tr>
  <tr>
    <td colspan="3"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/december-2016/QVC-Newsletter_December_33_01.jpg" alt="youtube" width="800" height="57" /></td>
  </tr>
  <tr>
    <td colspan="3" style="font-family:Century Gothic; font-size:14px; color:#fff; text-align: center; background-color:#cb3737"><br/>
      <span style="font-size:13px; font-family:Century Gothic, Geneva, sans-serif; color:white;"><a href="https://www.youtube.com/user/KaggaKammaSA" target="_blank" style="text-decoration:none; color:white">Kagga Kamma</a>  |  <a href="http://www.youtube.com/user/NgwenyaLodgeSA" target="_blank" style="text-decoration:none; color:white">Ngwenya Lodge</a>  |  <a href="http://www.youtube.com/user/CrystalSpringsSA" target="_blank" style="text-decoration:none; color:white">Crystal Springs</a>  |  <a href="https://www.youtube.com/channel/UCGGICudK19BAx3dsEvC730w" target="_blank" style="text-decoration:none; color:white">Mnarani</a></span><br/><br/></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="381" style="font-family:Century Gothic; font-size:14px; color:#666; text-align: justify"><p>Mooikloof Office Park East,<br />
      c/o Atterbury and Jollify Main Road, Mooikloof, 0059<br />
      P.O. Box 35580, Menlo Park, 0102</p>
      <p>Tel: 012 492 1230  |  Fax: 012 996 0556<br />
      <a href="mailto:correspondence@oaks.co.za">correspondence@oaks.co.za</a></p></td>
    <td width="419"><a href="http://vrsonline.co.za/" target="_blank"><img src="http://www.qvc.co.za/mailers/quarterly-mailers/december-2016/QVC-Newsletter_December_34_02.jpg" alt="VRS" width="419" height="121" /></a></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" style="font-family:Century Gothic; font-size:11px; color:#666; text-align: center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
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
