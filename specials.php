<?php 
  $current_page = "specials.php";

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $pageID = '?id=' . $id;
}
// $id = '';
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

<?php include('includes/nav.php');?>
    <?php include('includes/second_nav.php');?>
  

    <!-- jumbotron/header -->
    <div class="jumbotron-fluid myx-0" id="jumbotron" style="background-image: url(images/background/back17.jpg);"><br>
      <div class="jumbotron-block container">
        <p class="landingHeading">CREATING <br> MOMENTS OF <br> SHEER DELIGHT <br> AND A LIFETIME <br> OF MEMORIES</p>
      </div>
    </div>

    <!-- page content  -->
  <div class="container">
    <div class="row">
        <span style="font-size:40px; padding:10px; color:#5c0150; text-align: center; text-transform: uppercase"><strong>Seasonal Members Offers</strong></span>
        <div style="margin: 15px;">

            <h2><span style="line-height: 1em;">Exciting promotions, add-ons and offers to enhance your holiday experience. </span></h2>
            </div>
    </div>

    <div class="row d-flex justify-content-between justify-content-sm-center justify-content-md-center  justify-content-lg-between px-4">
    <?php
        switch($id) {
            case 'external-exchanges':
                include 'specials/external-exchanges.php';
                break;
            case 'finite-units':
                include 'specials/finite-units.php';
                break;
		    case 'bonusbreaks':
                include 'specials/bonusbreaks.php';
                break;
			 case 'mnarani2021':
                include 'specials/mnarani.php';
                break;
			case 'may-sale':
                include 'specials/may-sale.php';
                break;
            default:
                include 'specials/main.php';
        }
        ?>
       
    </div>
   
    
  </div>

  <!-- Holiday Catagories -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12 holiday-catagories-section section text-center">
        <h3>Resort Portfolio</h3>
        <a href="family.php"><button class="btn btn-default">Family Holidays</button></a>
        <a href="spa.php"><button class="btn btn-default">Pamper / Spa Breaks</button></a>
        <a href="wildlife.php"><button class="btn btn-default">Bush / Wildlife</button></a>
        <a href="adventure.php"><button class="btn btn-default">Adventure &amp; Sports</button></a>
        <a href="beach.php"><button class="btn btn-default">Beach &amp; Seaside</button></a>
        <a href="cultural.php"><button class="btn btn-default">Cultural Getaways</button></a>
        <a href="nature.php"><button class="btn btn-default">Nature Escapes</button></a>
        <a href="into_africa.php"><button class="btn btn-default">Into Africa</button></a>
        <a href="sub_urban.php"><button class="btn btn-default">Sub - Urban Breaks</button></a>
        <a href="romantic.php"><button class="btn btn-default">Romantic Retreats</button></a>
        <a href="lone_traveller.php"><button class="btn btn-default">Lone Traveller</button></a>
        <a href="digital_detox.php"><button class="btn btn-default">Digital Detox</button></a>
      </div>
    </div>
  </div>


  <div class="container pt-4 pb-4 holiday-catagories-div">
    <div class="row d-flex justify-content-between">
      <div class="outerWrapperBenefits outerWrapper">Family Holidays <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Pamper / Spa Breaks <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Bush / Wildlife<br><br> <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Adventure &amp; Sports <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Beach &amp; Seaside <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Cultural Getaways <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
    </div>
    <div class="row d-flex justify-content-between">
      <div class="outerWrapperBenefits outerWrapper">Nature Escapes <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Into Africa <br><br><a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Sub - Urban Breaks <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Romantic Retreats <a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Lone Traveller <br><br><a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
      <div class="outerWrapperBenefits outerWrapper">Digital Detox <br><br><a href="holiday_categories/family.php"
          class="innerWrapper">holiday options &gt;</a></div>
    </div>
    <div class="row d-flex justify-content-between">
      <div style="height:4px; width:100%; background-color:#7c046d;"></div>
    </div>
  </div>


  
  <!-- explore navigation -->
  <div class="container explore mb-4">
    <div class="row pb-2">
      <div class="col-2 pr-0">
        <h3 class="greyFooter pl-0 explore-heading" style="font-size: 15px;">EXPLORE QVC</h3>
      </div>
      <div class="col-9 pl-5">
        <h3 class="greyFooter pl-0 explore-heading" style="font-size: 15px;">QVC CLUB DESTINATIONS</h3>
      </div>
    </div>
    
    <div class="row d-flex">
        <div class="explore-column" style="background-color:#dfdfdf;">
          <!-- <h3 class="greyFooter">EXPLORE QVC</h3> -->
          <p class="footerText">
            <a href="resort_portfolio.php" class="footerLinks">Resort Portfolio</a><br>
              <a href="our_club.php" class="footerLinks">Our Club</a><br>
              <a href="feedback.php" class="footerLinks">Member Feedback</a><br>
              <a href="faq.php" class="footerLinks">FAQ</a><br>
              <a href="contact_us.php" class="footerLinks">Contact Us</a><br>
              <a href="specials.php" class="footerLinks">Member Specials</a><br>
             <a href="http://online.qvc.co.za/login/auth" class="footerLinks">Member Login</a> 
            <!--   <a href="portal-notice.php" class="footerLinks">Member Login</a>-->
              <br>
                <a href="http://online.qvc.co.za/login/auth" class="footerLinks">Book Online</a>
             <!-- <a href="portal-notice.php" class="footerLinks">Book Online</a>-->
          </p>
        </div>
        <div class="explore-column" style="background-color:#c4c4c4;">
          <!-- <h3 class="greyFooter">QVC CLUB DESTINATIONS</h3> -->
          <p class="footerText">
            <a href="resorts/baywater_village.php" class="footerLinks">Baywater Village</a><br>
            <a href="resorts/caribbean_estates.php" class="footerLinks">Caribbean Estates</a><br>
            <a href="resorts/crystal_springs.php" class="footerLinks">Crystal Springs</a><br>
    <a href="resorts/doornkop.php" class="footerLinks">Doornkop Fish &amp; Wildlife<br> Reserve</a><br>
            <a href="resorts/durban_spa.php" class="footerLinks">Durban Spa</a><br>
            <!--<a href="resorts/garden_route_chalets.php" class="footerLinks">Garden Route Chalets</a><br/>-->
            <a href="resorts/kagga_kamma.php" class="footerLinks">Kagga Kamma</a><br>
            <a href="resorts/kridzil.php" class="footerLinks">Kridzil</a><br>
            <a href="resorts/kruger_park_lodge.php" class="footerLinks">Kruger Park Lodge</a>
        </p>
        </div>
        <div class="explore-column" style="background-color:#c4c4c4;">
          <p class="footerText">
            <a href="resorts/little_eden.php" class="footerLinks">Little Eden</a><br>
            <a href="resorts/mabalingwe_nature_reserve.php" class="footerLinks">Mabalingwe Nature Reserve</a><br>
            <a href="resorts/magaliespark.php" class="footerLinks">Magalies Park</a><br>
            <a href="resorts/manzi_monate.php" class="footerLinks">Manzi Monate</a><br>
            <a href="resorts/mnarani.php" class="footerLinks">Mnarani</a><br>
            <a href="resorts/modumela_lodge.php" class="footerLinks">Modumela Lodge</a><br>
            <a href="resorts/monateng_safari_lodge.php" class="footerLinks">Monateng Safari Lodge</a><br>
            <a href="resorts/mount_amanzi.php" class="footerLinks">Mount Amanzi</a>
        </p>
        </div>
        <div class="explore-column" style="background-color:#c4c4c4;">
          <p class="footerText">
            <a href="resorts/ngwenya_lodge.php" class="footerLinks">Ngwenya Lodge</a><br>
            <a href="resorts/sandy_place.php" class="footerLinks">Sandy Place</a><br>
            <a href="resorts/st_michaels_sands.php" class="footerLinks">St Michaels Sands</a><br>
            <a href="resorts/sudwala_lodge.php" class="footerLinks">Sudwala Lodge</a><br>
            <a href="resorts/tortuga.php" class="footerLinks">Tortuga</a><br>
            <a href="resorts/uvongo.php" class="footerLinks">Uvongo</a>
        </p>
        </div>
        <div class="explore-column" style="background-color:#dfdfdf;">
            <p class="footerText" style="color:white;">
                <a href="contact_us.php" class="footerContactLinks">Contact us</a><br>
                <a href="privacy_policy.php" class="footerContactLinks">Privacy Policy</a><br>
                <a href="terms_of_use.php" class="footerContactLinks">Terms &amp; Conditions</a></p>
                <p class="footerText">QVC Managing Agent</p>
                <a href="vrs.php"><img src="images/VRS_logo.png" width="150" height="54" border="0"></a><br>
        &nbsp;&nbsp;&nbsp;&nbsp; 
        </div>
    </div>
  </div>


  <footer>
    <div class="col-sm-12 text-center pb-4">
      <a href="http://africanblessings.co.za/" target="_blank"><img src="images/african_blessings_logo.png"></a>
      <a href="http://voasa.co.za/#home" target="_blank"><img src="images/VOASA.png" width="150" height="35" border="0"></a>
    </div>
    <div class="col-sm-12" style="background-color:#7c046d;">
      <p class="copywrite text-center" style="font-size:11px; color:white; text-align:center;">
        <a href="privacy_policy.php">
          Privacy Policy
        </a><br>
        <a href="terms.php">
          Website Terms of Use
        </a><br>
        Copyright © 2021 Quality Vacation Club All Rights Reserved
      </p>
    </div>
  </footer>

  <div class="member" style="display: block;">
    <a href="https://www.qvc.co.za/notices.php" style="text-decoration:none; color:white;">
        <div class="notice">MEMBER<br>NOTICES</div><div class="readmore">read here</div>
    </a>
</div>
<div class="cookieinfo" style="position: fixed; left: 0px; right: 0px; height: auto; min-height: 21px; z-index: 2147483647; background: rgb(238, 238, 238); color: rgb(51, 51, 51); line-height: 21px; padding: 8px 18px; font-family: Montserrat, sans-serif; font-size: 14px; text-align: center; bottom: 0px; opacity: 1;"><div class="cookieinfo-close" style="float: right; display: block; padding: 5px 8px; min-width: 100px; margin-left: 5px; border-radius: 5px; cursor: pointer; color: rgb(0, 0, 0); background: rgb(241, 214, 0); text-align: center;">✖</div><span style="display:block;padding:5px 0 5px 0;">We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. <a href="privacy_policy.php" style="text-decoration: none; color: rgb(49, 168, 240);">More info</a><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="display: none;"> <a href="https://cookieinfoscript.com" style="text-decoration: none; display: none; color: rgb(49, 168, 240);">cookie script</a></span></div>
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