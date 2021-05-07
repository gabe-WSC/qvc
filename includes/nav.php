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
          <li class="d-flex align-self-end"><a href="resort_portfolio.php" <?php echo $current_page == 'resort_portfolio.php' ? 'class="active"': '' ?>>Resort Portfolio<span
                class="pull-right"></span></a></li>
          <li class="d-flex align-self-end"><a href="our_club.php" <?php echo $current_page == 'our_club.php' ? 'class="active"': '' ?> >Our Club<span class="pull-right"></span></a></li>
          <li class="d-flex align-self-end"><a href="feedback.php" <?php echo $current_page == 'feedback.php' ? 'class="active"': '' ?>>Member Feedback<span class="pull-right"></span></a></li>
          <li class="d-flex align-self-end"><a href="faq.php" <?php echo $current_page === 'faq.php' ? 'class="active"': '' ?>>FAQs<span class="pull-right"></span></a></li>
          <li class="d-flex align-self-end"><a href="contact_us.php" <?php echo $current_page == 'contact_us.php' ? 'class="active"': '' ?>>Contact Us<span class="pull-right"></span></a></li>
          <li class="d-flex align-self-end"><a href="specials.php" <?php echo $current_page == 'specials.php' ? 'class="active"': '' ?>>Member Specials<span class="pull-right"></span></a></li>
            <li class="d-flex align-self-end"><a href="https://www.qvc.co.za/blog" >Blog<span class="pull-right"></span></a></li>
          <div id="hidden-links" class="d-flex flex-column">
            
      <li class="d-flex align-self-end"><a href="notices.php">Important Notices<span class="pull-right"></span></a></li>
      
      <li class="d-flex align-self-end"><a href="http://online.qvc.co.za/login/auth">Member Login<span class="pull-right"><i
              class="fa fa-angle-end" aria-hidden="true"></i></span></a></li>
      <li class="d-flex align-self-end"><a href="http://online.qvc.co.za/login/auth">Book Online<span class="pull-right"><i
              class="fa fa-angle-end
              " aria-hidden="true"></i></span></a></li>
          </div>
        </ul>
      </div>
    </div>
  </nav>