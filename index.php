
<html>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <body>
       
    
<div class="parent">
    <div class="div1 center">
         <img src="img/back22.jpg">
    </div>
    <div class="div2 center">
        <img src="img/dumb.png">
    </div>
    <div class="div3 ">
        <p>
            JOIN<br>
            
            NOW ! 
        </p>
        <div class="join_div center">
            <div class="social ">
                <table>
                    <tr>
                        
                     <th class="s_box"><i class="fab fa-instagram"></i></th>
                    <th class="s_box"><i class="fab fa-facebook"></i></th>
                    <th class="s_box"><i class="fab fa-twitter"></i></th>
                    <th class="s_box"><i class="fab fa-youtube"></i></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- <div class="div4 center">
        
        <p ><i>Beast</i><br>Mode...</p>
    </div> -->
    <div class="div4">
  <div class="wrapper">
    <p ><i>Beast</i><br>Mode...</p>
    <!-- <img src="img/tiger + strength + bodybuilder  simple logo.jpg" class="cover-image"> -->
  </div>
  <div  class="popup-img"> <p ><i>Beast</i><br>Mode...</p></div>
</div>

    <div class="div5 center">

    <h1>gym</h1>
    </div>
    <div class="div6 ">
            <div class="card">
        <!-- optional content inside card -->
            </div>
    </div>
    <div class="div7 center">
    <iframe class="bg-map"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.8025668540763!2d81.86828795!3d25.4448634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399ab5561151f00f%3A0xacce1d1d8420f49a!2sAlopibagh%2C%20Muthiganj%2C%20Prayagraj%2C%20Uttar%20Pradesh%20211006!5e0!3m2!1sen!2sin!4v1760366040597!5m2!1sen!2sin"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>

  <div class="overlay">
    <h2 class="location">Location</h2>
  </div>
    </div>
    <div class="div8 center">
         <img src="img/Untitled (2).png">
    </div>
</div>
    
    </body>
    
<script>
const div = document.querySelector('.div5');
let targetX = 0, targetY = 0;
let currentX = 0, currentY = 0;
let animating = false;

div.addEventListener('mousemove', e => {
  const rect = div.getBoundingClientRect();
  const x = e.clientX - rect.left;
  const y = e.clientY - rect.top;
  const centerX = rect.width / 2;
  const centerY = rect.height / 2;

  // Target tilt based on mouse position
  targetX = ((y - centerY) / centerY) * 10;
  targetY = ((centerX - x) / centerX) * 10;

  if (!animating) animateTilt();
});

div.addEventListener('mouseleave', () => {
  targetX = 0;
  targetY = 0;
});

function animateTilt() {
  animating = true;
  const smoothness = 0.1; // smaller = smoother

  function update() {
    currentX += (targetX - currentX) * smoothness;
    currentY += (targetY - currentY) * smoothness;

    div.style.transform = `rotateX(${currentX}deg) rotateY(${currentY}deg)`;

    if (Math.abs(currentX - targetX) > 0.01 || Math.abs(currentY - targetY) > 0.01) {
      requestAnimationFrame(update);
    } else {
      animating = false;
    }
  }
  update();
}



function showContent(choice) {
  document.getElementById('map').classList.remove('active');
  document.getElementById('contact').classList.remove('active');
  document.getElementById(choice).classList.add('active');
}
</script>
</html>
