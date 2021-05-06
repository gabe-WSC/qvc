<?php

include "../_data/functions.php"; 
resortData('caribbean estates tortuga');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla%7CMontserrat">
	<!-- <link rel="stylesheet" href="../css/screen.css"> -->
	<link rel="stylesheet" href="../css/lightbox.css">

  <?php include('includes/header.php');?>
  <title>QVC</title>
</head>

<body>

<?php include('includes/nav.php');?>
<?php include('includes/second_nav.php');?>


  <!-- jumbotron/header -->
  <div class="jumbotron-fluid myx-0" id="jumbotron" style="background-image: url(../images/background/back8.jpg);"><br>
    <div class="jumbotron-block container">
      <p class="landingHeading">CREATING <br> MOMENTS OF <br> SHEER DELIGHT <br> AND A LIFETIME <br> OF MEMORIES</p>
    </div>
  </div>

  <!-- page content  -->
  <div class="container">
    <h1 class="grey pt-4">TORTUGA (CARIBBEAN ESTATES)</h1>
        <h2 class="grey">SOUTH COAST - KWAZULU NATAL</h2>
    <div class="row d-flex pt-4">
      <div class="left-div layout-margin-right">
        <div class="example-image d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-center">
          <img src="../images/resorts/tortuga/tortuga_cover.jpg" alt="" width="325"
            height="300">
            <a href="../images/resorts/tortuga/tortuga_cover_large.jpg" class="photoGallery example-image-link" data-lightbox="tortuga" data-title="Tortuga (Caribbean Estates)">view photo gallery &gt;</a>
            <a class="example-image-link" href="../images/resorts/tortuga/tortuga_large1.jpg" data-lightbox="tortuga" data-title="Tortuga (Caribbean Estates)"></a>
                                            	<a class="example-image-link" href="../images/resorts/tortuga/tortuga_large2.jpg" data-lightbox="tortuga" data-title="Tortuga (Caribbean Estates)"></a>
                                            	<a class="example-image-link" href="../images/resorts/tortuga/tortuga_large3.jpg" data-lightbox="tortuga" data-title="Tortuga (Caribbean Estates)"></a>
                                                <a class="example-image-link" href="../images/resorts/tortuga/tortuga_large4.jpg" data-lightbox="tortuga" data-title="Tortuga (Caribbean Estates)"></a>
                                                <a class="example-image-link" href="../images/resorts/tortuga/tortuga_large5.jpg" data-lightbox="tortuga" data-title="Tortuga (Caribbean Estates)"></a>
                                                <a class="example-image-link" href="../images/resorts/tortuga/tortuga_large6.jpg" data-lightbox="tortuga" data-title="Tortuga (Caribbean Estates)"></a>
        </div>
        <div class="image-grid d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-center py-4">
          <a href="../images/resorts/tortuga/tortuga_large.jpg" data-lightbox="tortuga"
            data-title="Tortuga (Caribbean Estates)"><img src="../images/resorts/tortuga/tortuga_small1.jpg"
              border="0" style="padding-right: 15px"></a>
          <a href="../images/resorts/tortuga/tortuga_large2.jpg" data-lightbox="tortuga"
            data-title="Tortuga (Caribbean Estates)"><img src="../images/resorts/tortuga/tortuga_small2.jpg"
              border="0"></a>
        </div>


        <div class="image-grid d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-center pb-4">
          <a href="../images/resorts/tortuga/tortuga_large3.jpg" data-lightbox="tortuga"
            data-title="Tortuga (Caribbean Estates)"><img src="../images/resorts/tortuga/tortuga_small3.jpg"
              border="0" style="padding-right: 15px" width="170" height="150"></a>

          <a href="../images/resorts/tortuga/tortuga_large4.jpg" data-lightbox="tortuga"
            data-title="Tortuga (Caribbean Estates)"><img src="../images/resorts/tortuga/tortuga_small4.jpg"
              border="0"></a>
        </div>




        <div style="background-color:#e5e5e5; padding:25px;">
          <h6 class="grey" style="font-size: 14px;">RELEVANT NOTICES</h6>
          <p>
          <?= $notice ?> 
        </p>
        </div>

        <h3 class="grey">MAP &amp; DIRECTIONS</h3>

        <!-- map plugin -->
        <div><iframe width="100%" height="250" id="gmap_canvas"
            src="https://maps.google.com/maps?q=caribbean%20estates&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>


        <p>
          <strong>Address</strong><br>
          <?
          // $address 
          ?>
         

          <strong>GPS coordinates</strong><br>
          <?= $gps ?>
          

          <strong>Directions</strong><br>
          <?= $directions ?> 
        </p>

        <?php include('../includes/resort_finder.php');?>

      </div>
      <div class="right-div">
      <p><?= $intro ?></p>
      <div class="outerWrapperBenefits mt-4 mb-0" style="padding:20px; background-color:#7c046d;">
          <h2 class="white">CHALETS</h2>
          <h3 class="whiteItal" style="padding-top:10px;">CHALET TYPES</h3>
          <p class="blockTextWhite">
            <?= $chaletTypes ?>
          </p>

          <p></p>
        </div>

        <div class="outerWrapperBenefits m-0" style="padding:20px; background-color:#5c0150;">
          <h3 class="whiteItal">CHALET FACILITIES</h3>
          <ul class="indiResorts list-split">
            <?= $chaletFacilities ?>
          </ul>
        </div>

        <div class="outerWrapperBenefits m-0" style="padding:20px; background-color:#b8b8b8;">
          <h3 class="whiteItal">ONSITE FACILITIES</h3>
          <ul class="indiResorts list-split">
          <?= $onsiteFacilities ?>
          </ul>
        </div>


        <div class="outerWrapperBenefits m-0" style="padding:20px; background-color:#7c7c7c;">
          <h3 class="whiteItal">NEARBY ATTRACTIONS &amp; ACTIVITIES</h3>
          <ul class="indiResorts  list-split">
          <?= $nearbyFacilities ?>
          </ul>
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

  <!-- Optional JavaScript -->
  <script src="../js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
	<script src="../js/lightbox.js"></script>
</body>

</html>