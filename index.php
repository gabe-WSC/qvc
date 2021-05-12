<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include('includes/header.php');?>
  <title>QVC</title>
</head>

<style>
  
html{
	min-height: 100%;
	background-size: cover;
	background-image: url(images/background/back35.jpg);
	background-repeat: no-repeat;
	background-position: right bottom;
}

body {
  overflow: hidden; /* Hide scrollbars */
}

</style>
<body>

<!-- top navigation -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white; min-height: 100px;">
    <!-- <div class="container"> -->
      <a class="navbar-brand" href="our_club.php"><img class="img-responsive" src="images/logo.jpg"
          alt="Quality Vacation Club Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav menu" style="margin-left: 77%">
          <li class="d-flex align-self-end"><a href="contact_us.php">Contact Us</a></li>
          <li class="d-flex align-self-end"><a href="resort_portfolio.php">Resort Portfolio</a></li>
          <li class="d-flex align-self-end"><a href="our_club.php">Our Club</a></li>
        </ul>
      </div>
    <!-- </div> -->
  </nav>

  
  <!-- <div class="jumbotron-fluid myx-0" style="background-image: url(images/background/back35.jpg); height: 100vh; background-size: cover; "><br><br><br> -->

    <!-- jumbotron/header -->
    <div class="myx-0" style="background-image: url(images/background/back35.jpg); height: 100vh; background-size: cover; background-repeat: no-repeat; background-position: right bottom;"><br><br><br>
    
    <p class="landingHeadingIndex">CREATING <br> MOMENTS OF <br> SHEER DELIGHT <br> AND A LIFETIME <br> OF MEMORIES</p>
    <br><br>
    <a class="ghostWhite" href="our_club.php">ENTER SITE</a>
    <a class="ghostOrange" href="http://online.qvc.co.za/login/auth">MEMBER LOGIN</a>
      <!-- <div class="jumbotron-block container">
        <p class="landingHeading">CREATING <br> MOMENTS OF <br> SHEER DELIGHT <br> AND A LIFETIME <br> OF MEMORIES</p>
      </div> -->
    </div>

    <!-- page content  -->
  <div class="container">
    <div class="row">
    
    </div>
    
  </div>

  
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
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);


	</script><script>
    $(document).ready(function () {

      if(!Cookies.get('__utma')){
        $('.cookieinfo').show();
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