<?php 
  $current_page = "specials.php";

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $pageID = '?id=' . $id;
}
$id = 'external-exchanges';
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
    <div class="row pt-3">
      <!-- <span
        style="font-size:40px; padding:10px; color:#5c0150; text-align: center; text-transform: uppercase"><strong>Seasonal
          Members Offers</strong></span> -->
      <!-- <div style="margin: 15px;">

        <h1><span style="line-height: 1em;
    display: block;
    /* font-size: 2em; */
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    font-size: 26px;">Exciting promotions, add-ons and offers to enhance your holiday experience. </span></h1>
      </div> -->
    </div>

    <div
      class="row d-flex justify-content-between justify-content-sm-center justify-content-md-center  justify-content-lg-between px-4">
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



  <footer>
    <div class="col-sm-12 text-center pb-4">
      <a href="http://africanblessings.co.za/" target="_blank"><img src="images/AfricanBlessings-logo2021.png"></a>
      <a href="http://voasa.co.za/#home" target="_blank"><img src="images/VOASA.png" width="150" height="35"
          border="0"></a>
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
      <div class="notice">MEMBER<br>NOTICES</div>
      <div class="readmore">read here</div>
    </a>
  </div>
  <div class="cookieinfo"
    style="position: fixed; left: 0px; right: 0px; height: auto; min-height: 21px; z-index: 2147483647; background: rgb(238, 238, 238); color: rgb(51, 51, 51); line-height: 21px; padding: 8px 18px; font-family: Montserrat, sans-serif; font-size: 14px; text-align: center; bottom: 0px; opacity: 1;">
    <div class="cookieinfo-close"
      style="float: right; display: block; padding: 5px 8px; min-width: 100px; margin-left: 5px; border-radius: 5px; cursor: pointer; color: rgb(0, 0, 0); background: rgb(241, 214, 0); text-align: center;">
      ✖</div><span style="display:block;padding:5px 0 5px 0;">We use cookies to enhance your experience. By continuing
      to visit this site you agree to our use of cookies. <a href="privacy_policy.php"
        style="text-decoration: none; color: rgb(49, 168, 240);">More info</a><img
        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="display: none;"> <a
        href="https://cookieinfoscript.com"
        style="text-decoration: none; display: none; color: rgb(49, 168, 240);">cookie script</a></span>
  </div>
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