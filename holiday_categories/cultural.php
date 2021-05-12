<?php
include "../_data/functions.php"; 
resortData('baywater village');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('includes/header.php');?>
</head>

<body>

    <?php include('includes/nav.php');?>
    <?php include('includes/second_nav.php');?>


    <!-- jumbotron/header -->
    <div class="jumbotron-fluid myx-0" id="jumbotron" style="background-image: url(../images/background/back7.jpg);">
        <br>
        <div class="jumbotron-block container">
            <p class="landingHeading">CREATING <br> MOMENTS OF <br> SHEER DELIGHT <br> AND A LIFETIME <br> OF MEMORIES
            </p>
        </div>
    </div>

    <!-- page content  -->
    <div class="container">
        <div class="row">
            <h1 class="grey" style="padding:20px 20px 0px 20px; margin:0;">FAMILY HOLIDAYS</h1><br><br>
            <p style="padding:20px 40px 20px 20px;">Your QVC portfolio grants you exclusive access to weekend breaks,
                Travelling, road tripping and sharing the beauty of the world with your family is the greatest gift you
                can give them. Go on a family holiday, make memories that they will carry with them for the rest of
                their lives. Experience the open road and cherish those precious moments, step out into the world and
                create memories that will last you and your loved ones a lifetime. We know that home is not a place;
                it's a feeling - that is why we are here. We want to make that family holiday dream a reality, so pick a
                destination and get ready, with QVC every night is family night.</p>
        </div>

        <div class="container pt-4 pb-4 resort-portfolio-div">
            <div class="row d-flex justify-content-between flex-row  flex-wrap">              
                <div class="d-flex outerWrapperBenefits outerWrapperResort cultural"><img
                        src="../images/resorts/crystal_springs/crystal_springs_block.jpg" width="70" height="70"
                        alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                        <div>
                        CRYSTAL SPRINGS MOUNTAIN LODGE
                        </div>
                        <div class="mt-auto"><a href="../resorts/crystal_springs.php" class="innerWrapperResort">explore &gt;</a></div>
                    </div>
                </div>

                <div class="d-flex outerWrapperBenefits outerWrapperResort cultural"><img
                        src="../images/resorts/kagga_kamma/kagga_kamma_block.jpg" width="70" height="70"
                        alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                    <div>
                    KAGGA KAMMA NATURE RESERVE
                    </div>
                         <div class="mt-auto"><a href="../resorts/kagga_kamma.php" class="innerWrapperResort">explore &gt;</a></div>
                    </div>
                </div>


                <div class="d-flex outerWrapperBenefits outerWrapperResort cultural"><img
                        src="../images/resorts/mnarani/mnarani_block.jpg" width="70" height="70"
                        alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                    <div>
                    MNARANI
                    </div>                        
 
                    <div class="mt-auto"><a href="../resorts/mnarani.php" class="innerWrapperResort">explore &gt;</a></div>
                    </div>
                </div>
				<div class="d-flex outerWrapperBenefits outerWrapperResort cultural"><img
                        src="../images/resorts/modumela_lodge/modumela_lodge_block.jpg" width="70" height="70"
                        alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                    <div>
                    MODUMELA LODGE          
                    </div>    
                        <div class="mt-auto"><a href="../resorts/modumela_lodge.php" class="innerWrapperResort">explore &gt;</a></div>
                    </div>
                </div>
                

                <div class="d-flex outerWrapperBenefits outerWrapperResort cultural"><img
                        src="../images/resorts/sudwala_lodge/sudwala_lodge_block.jpg" width="70" height="70" alt="Family Holidays">
                    <div class="innerResortDetails d-flex flex-column">
                    <div>
                    SUDWALA LODGE 
                    </div>
                        <div class="mt-auto"><a href="../resorts/sudwala_lodge.php" class="innerWrapperResort">explore &gt;</a></div>
                    </div>
                </div>
                
                <div class="d-flex outerWrapperBenefits outerWrapperResort" style="background: #fff;">
                </div>
				

            </div>

            <div class="row py-4 justify-content-end">
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
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
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
      if(Cookies.get('__utmb') === undefined){
      setTimeout(function () {
        $('.cookieinfo').hide();
      }, 2000);
      }
    });
  </script>  </body>

</html>