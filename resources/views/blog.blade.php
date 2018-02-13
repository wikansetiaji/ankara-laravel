<!DOCTYPE html>
<html>
<title>ANKARA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>

body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 80px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 80px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <!-- <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%"> -->
  <a href="#top" style="margin-top:60px" class="w3-bar-item w3-button  w3-hover-black w3-center">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button  w3-hover-black w3-center">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photoss" class="w3-bar-item w3-button  w3-hover-black w3-center">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>GALLERY</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button  w3-hover-black w3-center">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
  <a href="https://open.spotify.com/album/4dT2Ld0jCVo4StRsILbuUu?si=U9BrWbJZQQe5si2QRnWhuA" class="w3-bar-item w3-button  w3-hover-black w3-center">
    <i class="fa fa-spotify w3-xxxlarge"></i>
    <p>SPOTIFY</p>
  </a>

</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center">
    <a href="#top" class="w3-bar-item w3-button" style="width:20% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photoss" class="w3-bar-item w3-button" style="width:25% !important">GALLERY</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:30% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <div class="w3-container w3-margin-top w3-padding-64 w3-center w3-black" id="top">
    <img src="https://image.ibb.co/mpzAwS/ankara2.png" alt="boy" class="w3-image">
    <!--<h1 class="w3-jumbo">ANKARA</h1>-->
    <br><p>A Jakarta based Band.</p>
    <br>
    <a href="https://www.instagram.com/ankarajkt/"><i style="font-size:30px" class="fa fa-instagram w3-hover-opacity"></i></a>
    <!--<i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>-->
    <a href="https://open.spotify.com/album/4dT2Ld0jCVo4StRsILbuUu?si=U9BrWbJZQQe5si2QRnWhuA"><i style="font-size:30px" class="fa fa-spotify w3-hover-opacity"></i></a>
    <!--<i class="fa fa-linkedin w3-hover-opacity"></i>-->
  </div>

  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="songs">
    <h3 class="w3-text-light-grey">Check Our Songs!</h3>
    <hr style="width:200px" class="w3-opacity">
  </div>


  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h3 class="w3-text-light-grey">ANKARA</h3>
    <hr style="width:200px" class="w3-opacity">
    <p>Ankara adalah band blablabla yayayaya. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Ankara adalah band blablabla yayayaya. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p></br>



    <h3 class="w3-text-light-grey">We Are (Click Me!)</h3>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-row ">
    <div class="w3-third  w3-hover-opacity w3-padding">
      <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%" onclick="onClick(this)" alt="Dipo Rasyid">
    </div>

    <div class="w3-third  w3-hover-opacity w3-padding">
     <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%" onclick="onClick(this)" alt="Evan Miraz">
    </div>

    <div class="w3-third  w3-hover-opacity w3-padding">
     <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%" onclick="onClick(this)" alt="Wikan Setiaji">
    </div>
</div>
    <div class="w3-row ">
    <div class="w3-third  w3-hover-opacity w3-padding">
      <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%" onclick="onClick(this)" alt="Elvin Sasa">
    </div>

    <div class="w3-third  w3-hover-opacity w3-padding">
     <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%" onclick="onClick(this)" alt="Koduts">
   </div>







</div>

  </div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photoss">
    <h3 class="w3-text-light-grey">Gallery</h3>

    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%">
        <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%">
        <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%">
        <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%">
        <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%">
        <img src="https://image.ibb.co/jFjqVn/S_4867157246075.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h3 class="w3-text-light-grey">Contact Us</h3>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Jakarta, Indonesia</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 081229078453</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: ankara@ankara.com</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input style="width:60%" class="w3-input w3-animate-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input style="width:60%" class="w3-input w3-animate-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input style="width:60%" class="w3-input w3-animate-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input style="width:60%" class="w3-input w3-animate-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large w3-round-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>

    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <!--<i class="fa fa-facebook-official w3-hover-opacity"></i>-->
    <a href="https://www.instagram.com/ankarajkt/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <!--<i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>-->
    <a href="https://open.spotify.com/album/4dT2Ld0jCVo4StRsILbuUu?si=U9BrWbJZQQe5si2QRnWhuA"><i class="fa fa-spotify w3-hover-opacity"></i></a>
    <!--<i class="fa fa-linkedin w3-hover-opacity"></i>-->
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>
<script>
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);

        });
      }
    }
  });

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>
</html>
