<html class="home-bg" lang = "en">
<body>
  <div id="whitepage">
    <div id="WorkPackageOne">
      <img id="SideImage" src="https://laserclean.ie/Seamus.webp">
      <h2 id="author">SÉAMUS CUMMINS</h2>
      <h1 id="worktitle">WORK PACKAGE 1</h1>
      <p id="workblurb">Séamus is responsible for building the chasis which will be used to transport and maneuver the laser system. aswell as ensuring optimal collection of laser light which will be used for spectroscopy.</p>
      <button id="workbutton" onclick="document.location='Work-Package-1'">READ SÉAMUS' STORY</button>
    </div>

    <div class="afghan-component">
      <div class="paragraph paragraph--type--separator paragraph--view-mode--default">
        <hr class="separator--plain-rule">
      </div>
    </div>

    <div id="WorkPackageTwo">
      <img id="SideImage" src="https://laserclean.ie/James2.webp">
      <h2 id="author">JAMES CAMPBELL</h2>
      <h1 id="worktitle">WORK PACKAGE 2</h1>
      <p id="workblurb">James is responsible for collecting the spectra of multiple known materials such as carbon fibre and building a database which can be used to identify the elements found on wind turbine blades.</p>
      <button id="workbutton" onclick="document.location='Work-Package-2'">READ JAMES' STORY</button>
    </div>

    <div class="afghan-component">
      <div class="paragraph paragraph--type--separator paragraph--view-mode--default">
        <hr class="separator--plain-rule">
      </div>
    </div>

    <div id="WorkPackageOne">
      <img id="SideImage" src="https://laserclean.ie/Ross.webp">
      <h2 id="author">ROSS MURRY</h2>
      <h1 id="worktitle2">WORK PACKAGE 3</h1>
      <p id="workblurb">Ross is responsible for designing and building a sample holder which can be used in-lab to house wind turbine samples and test the affect that laser power has on the surface of turbine blades.</p>
      <button id="workbutton" onclick="document.location='Work-Package-3'">READ ROSS' STORY</button>
    </div>



<footer>
</footer>

</div>
<div id="navigator">
  <div id="textdiv">
    <a href="/Laserclean" aria-label="Logo">
    <img src="/laserfavicon.png" id="Logo">
    <h1> Laser Clean. </h1>
  </a>
  </div>
</div>

<header class="mainheader">

<button class="mobile-nav-toggle" aria-controls="mainheader" aria-expanded="false"><span class="sr-only">Menu</span></button>

  <nav>
    <ul id="mainheader" data-visible="false" class="flex">
      <li class="Home">
        <a href="/Laserclean" id="home" aria-label="Home button">HOME</a>
      </li>
      <li class="About">
        <a href="/Laserclean/About" id="about" aria-label="About Button">ABOUT</a>
      </li>
      <li class="Projects">
        <a href="Projects" id="projects" aria-label="Projects Button">PROJECTS</a>
      </li>
      <li class="Contact">
        <a href="/Laserclean#ContactUs" id="contact" aria-label="Contact Button">CONTACT</a>
      </li>
      <li class="SEAI">
        <a href="https://www.seai.ie/" target="_blank" id ="SEAI" aria-label="SEAI Button">SEAI</a>
      </li>
    </ul>
  </nav>
</header>
<div class="mySlides fade">
<div id="pagetext">
  <h1> Séamus Cummins </h1>
  <h2> Work Package 1</h2>
  <p> This work package consists of building a custom designed chassis which will house the spectroscopy system that can be deployed on wind turbine farms. The chassis needs to be capable of housing a laser which can perform the ablation and a telescope / spectrometer setup which can identify the material being ablated ont he surface of the turbine blade.
  <button onclick="document.location='Work-Package-1'"> Find out more </button>
</div>
<div class="Séamus-Background">
  <img id="videoBG gradient" src="/imgs/shutterstock_651111889.jpg" style="visibility: hidden;" />
</div>
</div>

<div class="mySlides fade">
<div id="pagetext">
  <h1> Ross Murray </h1>
  <h2> Work Package 3</h2>
  <p> This work package consists of designing and printing a custom sample holder which can be used to collect lab data on the wind turbine samples. This work package also looks into the affect that laser power has on the surface of the blade and intends to find the ideal conditions for laser ablation in relation to cleaning the blade while preventing damage.
  <button onclick="document.location='Work-Package-3'"> Find out more </button>
</div>
<div class="Ross-Background">
  <img id="videoBG gradient" src="https://cdn.plasticmakers.org/images/dyloixlh/production/411fc3287e23387629569eec5bcd3a2365a07d4f-2048x1124.png?w=1240&h=681&fit=crop&fm=webp" rel="preload" style="visibility: hidden;" />
</div>
</div>

<div class="mySlides fade">
<div id="pagetext">
  <h1> James Campbell </h1>
  <h2> Work Package 2</h2>
  <p> This work package consists of building a database of known spectral lines in order to accurately identify the material being ablated off the surface of the wind turbine using spectroscopy. This spectroscopic technique will also be used to signal the laser to stop firing once the surface has been cleaned and also to shut off the laser to prevent any damage on the surface of the turbine blade.
  <button onclick="document.location='Work-Package-2'"> Find out more </button>
</div>
<div class="James-Background">
  <img id="videoBG gradient" src="https://kyounglab.umbc.edu/wp-content/uploads/sites/254/2018/11/1.jpg" rel="preload" style="visibility: hidden;" />
</div>
</div>

<a class="left-carousel-control" onclick="plusSlides(1)" role="button" data-slide="prev">
  <span class="icon-prev" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right-carousel-control" onclick="plusSlides(-1)" role="button" data-slide="next">
  <span class="icon-next" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

<a onclick="plusSlides(-1)" id="right-arrow"><i class="arrow right"></i></a>
<a onclick="plusSlides(1)" id="left-arrow"><i class="arrow left"></i></a>

<script>
  var host = "laserclean.ie"
if (window.location.host == host && window.location.protocol != "https:") {
  window.location.protocol = "https:"
}
</script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  document.getElementById('videoBG').play();
</script>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<script src="https://laserclean.ie/nav.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
  var text = ["Laser Clean."];
  var counter = 0;
  var elem = $("#str");
  setInterval(change, 4000);
  function change() {
    if (counter == 0){
      elem.fadeOut(function(){
          elem.html(text[0]);
          counter++;
          elem.fadeIn();
      });}
  }
  </script>
</body>
</html>
