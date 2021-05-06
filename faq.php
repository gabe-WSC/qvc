<?php 
  $current_page = "faq.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('includes/header.php');?>
    <link rel="stylesheet" href="css/accordion.css">
    <title>QVC - FAQs</title>

  	<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->

</head>

<body>


<?php include('./includes/nav.php');?>
    <?php include('includes/second_nav.php');?>
    <div>

        <div class="jumbotron-fluid myx-0" id="jumbotron" style="background-image: url(images/background/back13.jpg);"><br>
            <div class="jumbotron-block container">
                <p class="landingHeading">CREATING <br> MOMENTS OF <br> SHEER DELIGHT <br> AND A LIFETIME <br> OF
                    MEMORIES</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 pt-4">
            <div id="nav">
                <div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">
                    <h3 style="background-color:#7a056e; color:white; font-size:24px; line-height:100%;"
                        class="ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons"
                        role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="true" aria-expanded="true"
                        tabindex="0"><span
                            class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>RESERVATIONS
                        <div
                            style="position:absolute; width:240px; height:1px; background-color:white; margin-top:8px;">
                        </div>
                    </h3>
                    <div style="background-color: rgb(122, 5, 110); display: block; height: 180.6px;"
                        class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active"
                        id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                        <a href="faq/booking.php" class="faqLinks">1. Making a Booking</a><br>
                        <a href="faq/bonus_booking.php" class="faqLinks">2. Bonus Bookings</a><br>
                        <a href="faq/certificates_vouchers_awards.php" class="faqLinks">3. Certificates, Vouchers &amp;
                            <br>Awards</a><br>
                        <a href="faq/availability.php" class="faqLinks">4. Availability</a><br>
                        <a href="faq/occupancy.php" class="faqLinks">5. Occupancy</a><br>
                        <a href="faq/pets.php" class="faqLinks">6. Pets</a><br>
                        <a href="faq/booking_confirmation.php" class="faqLinks">7. Booking Confirmation</a><br>
                        <a href="faq/booking_cancellation.php" class="faqLinks">8. Booking Cancellation</a>
                    </div>
                    <h3 style="background-color:#5c0150; color:white; font-size:24px; line-height:100%;"
                        class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab"
                        id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
                        <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>MEMBERSHIP
                        <div
                            style="position:absolute; width:240px; height:1px; background-color:white; margin-top:8px;">
                        </div>
                    </h3>
                    <div style="background-color: rgb(92, 1, 80); display: none; height: 180.6px;"
                        class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4"
                        aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true">
                        <a href="faq/finite_units.php" class="faqLinks">1. Finite Units</a><br>
                        <a href="faq/club_units.php" class="faqLinks">2. Club Units</a><br>
                        <a href="faq/debit_orders.php" class="faqLinks">3. Debit Orders</a><br>
                        <a href="faq/agreement.php" class="faqLinks">4. Agreement</a><br>
                        <a href="faq/management_fees.php" class="faqLinks">5. Management Fees</a><br>
                        <a href="faq/vestfin.php" class="faqLinks">6. Who is Vestfin?</a><br>
                        <a href="faq/collection_fee.php" class="faqLinks">7. Collection Fees</a><br>
                        <a href="faq/finances.php" class="faqLinks">8. Finances</a>
                    </div>
                    <h3 style="background-color:#b8b8b8; color:white; font-size:24px; line-height:100%;"
                        class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab"
                        id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
                        <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>GENERAL
                        <div
                            style="position:absolute; width:240px; height:1px; background-color:white; margin-top:8px;">
                        </div>
                    </h3>
                    <div style="background-color: rgb(184, 184, 184); display: none; height: 180.6px;"
                        class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6"
                        aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true">
                        <a href="faq/website_login.php" class="faqLinksDark">1. Website Login</a><br>
                        <a href="faq/numbers.php" class="faqLinksDark">2. Different Numbers</a><br>
                        <a href="faq/rci.php" class="faqLinksDark">3. Why RCI Affiliated?</a><br>
                        <a href="faq/vrs.php" class="faqLinksDark">4. Who is VRS?</a>
                    </div>
                    <h3 style="background-color:#7c7c7c; color:white; font-size:24px; line-height:100%;"
                        class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab"
                        id="ui-id-7" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="-1">
                        <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>INTERNATIONAL
                        <div
                            style="position:absolute; width:240px; height:1px; background-color:white; margin-top:8px;">
                        </div>
                    </h3>
                    <div style="background-color: rgb(124, 124, 124); display: none; height: 180.6px;"
                        class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-8"
                        aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true">
                        <a href="faq/international_booking.php" class="faqLinks">1. How to Book</a><br>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-8 pl-sm-0">
                <h1 class="mt-4 grey pl-4">FAQs</h1>
                <!-- <h2>QVC About Us</h2> -->
                <div id="content">
                    <div style="background-color:#7a056e; color:white; padding:20px; font-size:22px;">
                        RESERVATIONS &amp; ACCOMMODATION</div>
                    <div style="background-color:#7c7c7c; color:white; padding:20px; font-size:22px;">
                        1. MAKING A BOOKING</div>
                    <div style="background-color:#b8b8b8; color:white; padding:20px; font-size:22px;">
                        How do I go about making a booking?</div>
                    <p class="pt-4">You may make use of our Online Booking System, which is
                        convenient, hassle-free and available 24/7. Alternatively, please contact our call centre on 012
                        492 1230 or send us an email to <a href="mailto:correspondence@vrs.co.za"
                            class="purpleLinks">correspondence@vrs.co.za</a> and kindly provide your member number
                        together with your ID number (if you are not the main member, you would need to provide a
                        completed Power of Attorney form together with the main members' ID number), your preferred
                        resort or a province/area e.g. Garden Route and your preferred date that you would like to go on
                        holiday. Please include the number of adults and children under 12 to be accommodated.</p>
                    <p class="pt-4"><strong>Please take note of the following:</strong></p>
                    <ul class="indiFAQ">
                        <li style="padding:0px 20px 0px 0px; font-family:arial; font-size:14px; line-height:150%;">A
                            weekend is from a Friday to a Monday (3 nights); a midweek is from a Monday to a Friday (4
                            nights) and a full week is from a Friday to a Friday (7 nights). We only book in these three
                            accommodation intervals.</li>
                        <li style="padding:0px 20px 0px 0px; font-family:arial; font-size:14px; line-height:150%;">
                            During Peak season we only book full weeks (no weekend or midweek bookings permitted). Peak
                            seasons usually fall in the school holidays.</li>
                        <li style="padding:0px 20px 0px 0px; font-family:arial; font-size:14px; line-height:150%;">
                            Always submit your booking request as far in advance as possible (12 months is recommended).
                        </li>
                        <li style="padding:0px 20px 0px 0px; font-family:arial; font-size:14px; line-height:150%;">
                            Provide more than one option with regards to the resort and preferred occupation dates.</li>
                    </ul>

                    <div
                        style="background-color:#b8b8b8; color:white; padding:20px; font-size:22px; line-height:150%;">
                        What must I do when wanting to make a booking for next year?</div>
                    <p class="pt-4">Should a member wish to make a reservation in the current
                        year, for occupation dates which fall into the following year, then the current year as well as
                        the following years' annual fees must be paid in advance, before the booking can be made.
                        Reservations for the following year opens yearly during September, although December
                        availability opens on the first working day of December, for the following year. Club Stock
                        only.</p>

                    <div
                        style="background-color:#b8b8b8; color:white; padding:20px; font-size:22px; line-height:150%;">
                        What accommodation periods am I able to book?</div>
                    <p class="pt-4">You are able to book any of the following intervals:<br><br>
                        <strong>Midweeks:</strong> Monday to Friday<br>
                        <strong>Weekends:</strong> Friday to Monday (some resorts work on a Saturday to Monday
                        basis)<br>
                        <strong>Full weeks:</strong> During non-peak season, most of the resorts work on a Friday to
                        Friday or Saturday to Saturday basis. Only full weeks can be booked during Peak season.</p>

                    <div
                        style="background-color:#b8b8b8; color:white; padding:20px; font-size:22px; line-height:150%;">
                        Can I book at RCI Resorts?</div>
                    <p class="pt-4">Most QVC members are automatically affiliated with RCI, if you
                        are an RCI member this means that you are permitted to make bookings at all RCI-affiliated
                        resorts using your Club portfolio. You are able to view the resort information on the RCI
                        website, but will need to contact QVC directly to request availability at your desired RCI
                        Resort. You may use your RCI membership number for correspondence, it is an alpha-numeric number
                        for example QVCL- 1234. You may book South African and African RCI Resort Stock from the QVC
                        website, but for all International booking queries please contact RCI (International Exchange)
                        on Tel: +27 (0) 11 258 1100 or visit <a href="http://www.rci.co.za" target="_blank"
                            class="purpleLinks">www.rci.co.za</a>.</p>
                </div>
            </div>


        </div>
    </div>

<?php include('includes/holiday_category.php');?>

<?php include('includes/bottom_nav.php'); ?>

<?php include('includes/notice_block.php'); ?>

<?php include('includes/cookie_banner.php'); ?>

<?php include('includes/footer.php'); ?>

    </div>

   
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function () {
            $('#nav a').on('click', function (e) {
                e.preventDefault();
                var page = $(this).attr('href');
                console.log(page);
                $('#content').load(page);
            });
        });
    </script>
    <script>
        $("#accordion").accordion();
    </script>
</body>

</html>