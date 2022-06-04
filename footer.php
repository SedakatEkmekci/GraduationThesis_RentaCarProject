<div class="footer container-fluid ">
    <div class="card">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="footer-text pull-left">
                    <div class="logo d-flex">
                    	<img src="assets\images\Scarlogo.png">
                    </div>
                </div>
                
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
               
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Services</h5>
                <ul>
                    <li>Operational Leasing</li>
                    <li>Corparate Rental</li>
                    <li>Induvidual Rental</li>
                    <li>Support</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Company</h5>
                <ul class="card-text">
                    <li>About Us</li>
                    <li>Blog</li>
                    <li>Contact</li>
                    <li>Join Us</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Policys</h5>
                <ul class="card-text">
                   <li>Terms of Use</li>
                    <li>Privacy Policy</li>
                    <li>Cookie Policy</li>
                </ul>
                </div>
        </div>
            
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets\js\jquery\jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets\js\bootstrap\bootstrap.bundle.min.js.map"></script>
<script type="text/javascript" src="assets\js\bootstrap\bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    });
    



/* Script For Dropdown */

    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script> 

</body>
</html>
