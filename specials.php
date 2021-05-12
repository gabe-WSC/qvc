<?php 
  $current_page = "specials.php";
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $pageID = '?id=' . $id;
}else{
  $id = '';
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include('includes/header.php');?>
  <title>QVC - Member Specials</title>
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
    <!-- <div class="row pt-3">
      <span
        style="font-size:40px; padding:10px; color:#5c0150; text-align: center; text-transform: uppercase"><strong>Seasonal
          Members Offers</strong></span>
      <div style="margin: 15px;">

        <h1><span style="line-height: 1em;
    display: block;
    /* font-size: 2em; */
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    font-size: 26px;">Exciting promotions, add-ons and offers to enhance your holiday experience. </span></h1>
      </div>
    </div> -->

    <?php
        switch($id) {
            case 'external-exchanges':
                echo '<h1 class="grey py-4 text-center text-sm-left" style="margin-bottom: 10px;"><span
                style="font-size:30px; padding:10px 0; color:#5c0150; text-align: center; text-transform: uppercase;"><strong>EXTERNAL
                    EXCHANGES</strong></span></h1>
        <h1><span class="pb-3" style="line-height: 1em;
            display: block;
            /* font-size: 2em; */
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            font-size: 18px;">This innovative exchange platform has been designed with YOU in mind. Giving you access to more
                resorts, more intervals and more options, so that you can create more everlasting holiday memories with your
                loved ones.</span></h1>';
                break;
            case 'finite-units':
                include 'specials/finite-units.php';
                break;
		    case 'bonusbreaks':
                echo '<h1 class="grey py-4" style="margin-bottom: 10px;"><span
                style="font-size:30px; padding:10px 0; color:#5c0150; text-align: center; text-transform: uppercase;"><strong>AMAZING BONUS BREAKS AWAIT YOU...</strong></span></h1>';
                break;
			 case 'mnarani2021':
                include 'specials/mnarani.php';
                break;
			case 'may-sale':
                include 'specials/may-sale.php';
                break;
            default:
                echo '<h1 class="grey py-4 text-center text-sm-left" style="margin-bottom: 10px;"><span
                style="font-size:30px; padding:10px 0; color:#5c0150; text-align: center; text-transform: uppercase;"><strong>Seasonal
                Members Offers</strong></span></h1>
        <h1><span class="pb-3" style="line-height: 1em;
            display: block;
            /* font-size: 2em; */
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            font-size: 18px;">Exciting promotions, add-ons and offers to enhance your holiday experience.</span></h1>';
        }
        ?>

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



  <?php include('includes/notice_block.php'); ?>
  <?php include('specials/includes/bottom_nav.php'); ?>
  <?php include('includes/footer.php'); ?>
  <?php include('includes/cookie_banner.php'); ?>
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
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script><script>
    $(document).ready(function () {
      if(Cookies.get('ga') === undefined){
      setTimeout(function () {
        $('.cookieinfo').modal('show');
      }, 2000);
      }
    });
  </script>  </body>

</html>