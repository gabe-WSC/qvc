<?php 
  $current_page = "our_club.php";
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include('includes/header.php');?>
  <title>QVC - VRS</title>
</head>

<body>

  <?php include('includes/nav.php');?>
  <?php include('includes/second_nav.php');?>


  <div>
    <div class="jumbotron-fluid myx-0" id="jumbotron" style="background-image: url(images/background/back2.jpg);"><br>
      <div class="jumbotron-block container">
        <p class="landingHeading">CREATING <br> MOMENTS OF <br> SHEER DELIGHT <br> AND A LIFETIME <br> OF MEMORIES</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row pt-4 d-flex">
      <div class="right-div layout-margin-right">
      <img src="images/VRS_logo.png" width="245" height="88" alt="VRS">
      <h1 class="grey pt-4 text-center text-md-left text-lg-left">Vacation Recreational Service</h1>
      
      <p>VRS is the Club's appointed Managing Agent. Established in 2001 VRS has, through its commitment to excellence and the delivery of outstanding services, gone from strength to strength and is now a market leader in a challenging and extremely competitive industry.</p>
      <p>In addition to QVC, VRS's ever-expanding portfolio includes the management of 6 vacation ownership clubs and 22 holiday resorts in South Africa, Kenya and Botswana. This role involves the full on and off-site management of these resorts and the vital task of ensuring that they achieve the highest possible standards and reflect maximum occupancy, with the resultant benefits to the stakeholders and communities in which these resorts are located. </p>
      <div style="background-color:#7a056e; color:white; padding:15px; height:330;">
                            	<p class="white">VRS specialises in Management and Administrative functions within the Leisure / Hospitality Industry and all aspects of vacation ownership club management and administration.</p>
                            </div>
        <p class="pt-3">VRS is extremely proud to be the Managing Agent for QVC and play a vital role in providing our QVC families with <span style="color:#7c046d;">"MOMENTS OF SHEER DELIGHT AND A LIFETIME OF MEMORIES".</span></p>
    </div>
      <div class="left-div">
      <img src="images/tree.jpg" width="325" height="620" alt="tree" class="w-100">
      </div>
    </div>

  </div>


  <?php include('includes/holiday_category.php');?>

  <?php include('includes/bottom_nav.php'); ?>

  <?php include('includes/notice_block.php'); ?>

  <?php 
  // include('includes/cookie_banner.php'); 
  ?>

  <?php include('includes/footer.php'); ?>

  <?php include('includes/cookie_modal.php'); ?>


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
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

  <script>
    // $(document).ready(function () {
    //   if(Cookies.get('_gid') === undefined){
    //   setTimeout(function () {
    //     $('#cookie_modal').modal('show');
    //   }, 2000);
    //   }
    // });
  </script>

</body>

</html>