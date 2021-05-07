//Get the button:
mybutton = document.getElementById("scroll_btn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  //document.body.scrollTop = 0; // For Safari
  //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  var elmnt = document.getElementById("nav");
elmnt.scrollIntoView();
//   $('html, body').animate({
//     scrollTop: $("#content").offset().top
// }, 1000);
}


// jQuery(document).ready(function() {
  
//     var btn = $('#button');
  
//     $(window).scroll(function() {
//       if ($(window).scrollTop() > 300) {
//         btn.addClass('show');
//       } else {
//         btn.removeClass('show');
//       }
//     });
  
//     btn.on('click', function(e) {
//       e.preventDefault();
//       $('html, body').animate({scrollTop:0}, '300');
//     });
  
//   });