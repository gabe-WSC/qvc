<?php
include "_data/functions.php"; 
resortData('baywater village');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('includes/header.php');?>
    <title>QVC</title>
</head>

<body>

    <!-- top navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <div class="container">
            <a class="navbar-brand" href="our_club.php"><img class="img-responsive" src="images/logo.jpg"
                    alt="Quality Vacation Club Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav menu" style="margin-left: 30%">
                    <li class="d-flex align-self-end"><a href="resort_portfolio.php"
                            class="d-flex justify-content-center">Resort Portfolio<span class="pull-right"><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                    <li class="d-flex align-self-end"><a href="our_club.php" class="active">Our Club<span
                                class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                    <li class="d-flex align-self-end"><a href="feedback.php">Member Feedback<span class="pull-right"><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                    <li class="d-flex align-self-end"><a href="faq.php">FAQs<span class="pull-right"><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                    <li class="d-flex align-self-end"><a href="contact_us.php">Contact Us<span class="pull-right"><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                    <li class="d-flex align-self-end"><a href="specials.php">Member Specials<span class="pull-right"><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                    <li class="d-flex align-self-end"><a href="https://www.qvc.co.za/blog">Blog<span
                                class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                    <div id="hidden-links">

                        <li class="d-flex align-self-end"><a href="notices.php">Important Notices<span
                                    class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                        </li>

                        <li class="d-flex align-self-end"><a href="http://online.qvc.co.za/login/auth">Member Login<span
                                    class="pull-right"><i class="fa fa-angle-end" aria-hidden="true"></i></span></a>
                        </li>
                        <li class="d-flex align-self-end"><a href="http://online.qvc.co.za/login/auth">Book Online<span
                                    class="pull-right"><i class="fa fa-angle-end
              " aria-hidden="true"></i></span></a></li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div second nav -->
        <div class="second-nav d-flex justify-content-end" style="list-style-type:none;" id="second-nav">
            <div class="container d-flex justify-content-end" style="height: 100%">
              <li class="d-flex pr-4" ><a href="specials.php" class="d-flex align-items-center">MEMBER LOUNGE HOW-TO-GUIDE<span class=""><i class="fa fa-angle-right"
                aria-hidden="true"></i></span></a></li>
                <li class="d-flex pr-4"><a href="http://online.qvc.co.za/login/auth" class="d-flex align-items-center">Member Login<span class=""><i class="fa fa-angle-right"
                  aria-hidden="true"></i></span></a></li>
                <li class="d-flex pr-4"><a href="notices.php" class="d-flex align-items-center">Register<span class=""><i class="fa fa-angle-right"
                aria-hidden="true"></i></span></a></li>
                <li class="d-flex" style="padding: 0px 10px 0px 10px; background-color:#7c046d; color:white;"><a href="http://online.qvc.co.za/login/auth" class="d-flex align-items-center">Book Online<span class=""><i class="fa fa-angle-right"
                aria-hidden="true"></i></span></a></li>
            </div>
          </div>
        <!--end of second nav -->


    <!-- jumbotron/header -->
    <div class="jumbotron-fluid myx-0" id="jumbotron" style="background-image: url(images/background/back6.jpg);"><br>
        <div class="jumbotron-block container">
            <p class="landingHeading">CREATING <br> MOMENTS OF <br> SHEER DELIGHT <br> AND A LIFETIME <br> OF MEMORIES
            </p>
        </div>
    </div>

    <!-- page content  -->
    <div class="container">
        <div class="row">
            <h1 class="grey" style="padding:20px 20px 0px 20px; margin:0;">RESORT PORTFOLIO</h1><br><br>
            <p style="padding:20px 40px 20px 20px;">Your QVC portfolio grants you exclusive access to weekend breaks,
                midweek getaways or full week holidays with a range of destinations, resort-types and unit
                configurations available to suit your needs and your preferences. With the new and improved online
                booking system, booking your ideal holiday has never been easier. Simply follow this handy category
                guide, decide what your next holiday is going to be and access our convenient, hassle-free and 24/7
                online booking portal to secure your next adventure today!</p>
        </div>

        <div class="container pt-4 pb-4 resort-portfolio-div">
            <div class="row d-flex justify-content-between flex-row">
                <div class="d-flex outerWrapperBenefits outerWrapperResort"><img
                        src="images/holiday_categories/family.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        FAMILY HOLIDAYS
                        <a href="holiday_categories/family.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
                <div class="d-flex outerWrapperBenefits outerWrapperResort pamper"><img src="images/holiday_categories/spa.jpg"
                        width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        PAMPER / SPA BREAKS&nbsp;&nbsp;&nbsp;<br>
                        <a href="holiday_categories/spa.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
                <div class="d-flex outerWrapperBenefits outerWrapperResort bush"><img
                        src="images/holiday_categories/wildlife.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        BUSH &amp; WILDLIFE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                        <a href="holiday_categories/wildlife.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
                <!-- <div class="outerWrapperBenefits outerWrapperResort"><img src="images/holiday_categories/spa.jpg"
                        width="70" height="70" alt="Family Holidays"></div>
                <div class="outerWrapperBenefits outerWrapperResort"><img src="images/holiday_categories/wildlife.jpg"
                        width="70" height="70" alt="Wildlife"></div> -->
            </div>

            <div class="row d-flex justify-content-between">
                <div class="d-flex outerWrapperBenefits outerWrapperResort adventure"><img
                        src="images/holiday_categories/adventure.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        ADVENTURE &amp; SPORT&nbsp;&nbsp;&nbsp;<br>
                        <br> <a href="holiday_categories/adventure.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
                <div class="d-flex outerWrapperBenefits outerWrapperResort beach"><img
                        src="images/holiday_categories/beach.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        BEACH &amp; SEASIDE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                        <a href="holiday_categories/beach.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
                <div class="d-flex outerWrapperBenefits outerWrapperResort cultural"><img
                        src="images/holiday_categories/cultural.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        CULTURAL GETAWAYS &nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <a href="holiday_categories/cultural.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">

                <div class="d-flex outerWrapperBenefits outerWrapperResort nature"><img
                        src="images/holiday_categories/nature.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        NATURE ESCAPES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <a href="holiday_categories/nature.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
                <div class="d-flex outerWrapperBenefits outerWrapperResort international"><img
                        src="images/holiday_categories/africa.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        INTO AFRICA
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                        <a href="holiday_categories/international.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
                <div class="d-flex outerWrapperBenefits outerWrapperResort sub_urban"><img
                        src="images/holiday_categories/sub_urban.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        SUB - URBAN BREAKS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <a href="holiday_categories/sub_urban.php" class="innerWrapperResort">explore &gt;</a>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-between">

                <div class="d-flex outerWrapperBenefits outerWrapperResort romantic"><img
                    src="images/holiday_categories/romantic.jpg" width="70" height="70" alt="Family Holidays">
                <div class="innerResortDetails d-flex flex-column">
                    ROMANTIC RETREATS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <a href="holiday_categories/nature.php" class="innerWrapperResort">explore &gt;</a>
                </div>
            </div>
            <div class="d-flex outerWrapperBenefits outerWrapperResort lone_traveller"><img
                    src="images/holiday_categories/lone_traveller.jpg" width="70" height="70" alt="Family Holidays">
                <div class="innerResortDetails d-flex flex-column">
                    LONE TRAVELLER   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <a href="holiday_categories/international.php" class="innerWrapperResort">explore &gt;</a>
                </div>
            </div>
            <div class="d-flex outerWrapperBenefits outerWrapperResort digital_detox"><img
                    src="images/holiday_categories/digital_detox.jpg" width="70" height="70" alt="Family Holidays">
                <div class="innerResortDetails d-flex flex-column">
                    DIGITAL DETOX   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <a href="holiday_categories/sub_urban.php" class="innerWrapperResort">explore &gt;</a>
                </div>
            </div>

              
            </div>

            <div class="row py-4">
                <div class="map-image mr-4">
                    <img src="images/FINAL.jpg" width="270" usemap="provinces">
                </div>
                <?php include('includes/resort_finder.php');?>
                
            </div>


            <div class="row d-flex justify-content-between">
                <div style="height:4px; width:100%; background-color:#7c046d;"></div>
            </div>
        </div>


    </div>

   
    <?php include('includes/holiday_category.php');?>

<?php include('includes/bottom_nav.php'); ?>

<?php include('includes/notice_block.php'); ?>

<?php include('includes/cookie_banner.php'); ?>

<?php include('includes/footer.php'); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>