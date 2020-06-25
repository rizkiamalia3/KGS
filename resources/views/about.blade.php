@include('layouts.app_dash')

<!-- GOOGLE MAP -->
<div class="col-md-4 col-sm-4"> 
  <div class="footer-thumb">
    <div class="location">
      <h4 class="wow fadeInUp" data-wow-delay="0.4s">Location</h4>
    </div>
  </div>
</div>

<section id="google-map">
<!-- How to change your own map point
    1. Go to Google Maps
    2. Click on your location point
    3. Click "Share" and choose "Embed map" tab
    4. Copy only URL and paste it within the src="" field below
-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.47285288935!2d106.98476401431003!3d-6.2011801624737055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bed8fca8b8d%3A0x461fd5110078c610!2sKlinik%20Gigi%20Smile%20Drg.lulu%201!5e0!3m2!1sen!2sus!4v1589281569412!5m2!1sen!2sus" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>  
@include('layouts.footer')