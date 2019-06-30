<html>
 <head>
  <link rel="stylesheet" type="text/css" href="stylesBody.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
 </head>

<body>


<div class="bodypart">

  <div class="higherpart">
            <span class="welcomepart">
          <h3>Message From Head Master</h3>
          <img src="images/VCimage.jpg" alt="Image of HM">

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ips sed ornare turpis.</span></p>

      <button onclick="myFunction()" id="myBtn">Read more</button>

      <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

    </span>

  <span class="slidepart">

    <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="schoolImages/17807470_1258519954265763_7495735602867408548_o.jpg" width="600px" height="350px">
    <div class="text">Morning Assembly</div>
  </div>

  <div class="mySlides fade">
    <img src="schoolImages/17966884_1267393956711696_7438311270966572386_o.jpg" width="600px" height="350px">
    <div class="text">Gang of Students</div>
  </div>

  <div class="mySlides fade">
    <img src="schoolImages/18556736_305917363177721_1425594363171057237_o.jpg" width="600px" height="350px">
    <div class="text">Central Field at Morning</div>
  </div>

  <div class="mySlides fade">
    <img src="schoolImages/18556819_305917359844388_506308422113293096_o.jpg" width="600px" height="350px">
    <div class="text">Central Field</div>
  </div>

  <div class="mySlides fade">
    <img src="schoolImages/20915175_1384582188326205_4627023574186020157_n.jpg" width="600px" height="350px">
    <div class="text">Annual Sports</div>
  </div>

  <div class="mySlides fade">
    <img src="schoolImages/20952961_1383695861748171_6838269750083133760_n.jpg" width="600px" height="350px">
    <div class="text">Annual Sports</div>
  </div>

   <div class="mySlides fade">
    <img src="schoolImages/50618262_1996219497162468_7786925739445583872_n.jpg" width="600px" height="350px">
    <div class="text">Annual Sports</div>
  </div>

   <div class="mySlides fade">
    <img src="schoolImages/20953559_1384584978325926_755034692406863954_n.jpg" width="600px" height="350px">
    <div class="text">Prize Giving Ceromony</div>
  </div>

  <div class="mySlides fade">
    <img src="schoolImages/concertRockNRoll.PNG" width="600px" height="350px">
    <div class="text">Concert - Rock & Roll</div>
  </div>

  <div class="mySlides fade">
    <img src="schoolImages/27750119_1541533509297738_5340339300775129972_n.jpg" width="600px" height="350px">
    <div class="text">Tour - Mohastanghar, Bogra</div>
  </div>


</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span> 
</div>
          <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</span>

      <span class="newspart">
    <h2>News & Events</h2>

    <div class="news">
      <marquee direction="up" height="100%">
        <h4>The Name of News or Events!</h4><br>
        <p>Contact Where to Know About Details!</p><hr>

        <h4>The Name of News or Events!</h4><br>
        <p>Contact Where to Know About Details!</p><hr>

        <h4>The Name of News or Events!</h4><br>
        <p>Contact Where to Know About Details!</p><hr>
      </marquee>
    </div>

  </span>
  </div>

  		 <div class="middlepart">

 	<div class="groupspart">
 		<h2>Classes & Groups Information</h2>

<button class="accordion">Classes 3-10</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Science Group</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Humanities Group</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Commerce Group</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

 	</div>
      		
  </div>


  <div class="lowerpart">
    <h2>Sardah Government Pilot High School, Rajshahi At A Glance</h2>

<div class="flex-container">
  <div>
    <h5>Groups</h5>
    <h5>3</h5>
  </div>
  <div>
    <h5>Centers</h5>
    <h5>3</h5>
  </div>
  <div>
    <h5>Clubs</h5>
    <h5>10</h5>
  </div>
  <div>
    <h5>Teachers</h5>
    <h5>30</h5>
  </div>
  <div>
    <h5>Staffs</h5>
    <h5>50</h5>
  </div>
  <div>
    <h5>Students</h5>
    <h5>300</h5>
  </div>
  </div>
	

</div>

</div>

</body>
</html>