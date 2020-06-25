
<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i> +62 21 89460044</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">gigismile@gmail.com</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                        <p>Monday - Sunday <span>04:00 PM - 09:00 PM</span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="address">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Address</h4>
                            <p>
                               Jl. Albahar No.6, Harapan Jaya,<br>
                               Kec. Bekasi Utara, Kota Bekasi,<br>
                               Jawa Barat<br>
                            </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 border-top">
                <div class="col-md-4 col-sm-6">
                    <div class="copyright-text"> 
                        <p>Copyright &copy; 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


    <!-- SCRIPTS -->
    <script src="{{ URL::asset('/template/js/jquery.js')}}"></script>
    <script src="{{ URL::asset('/template/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('/template/js/jquery.sticky.js')}}"></script>
    <script src="{{ URL::asset('/template/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ URL::asset('/template/js/wow.min.js')}}"></script>
    <script src="{{ URL::asset('/template/js/smoothscroll.js')}}"></script>
    <script src="{{ URL::asset('/template/js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('/template/js/custom.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
    {{--  <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav');
        menuToggle.addEventListener('click', () => {
            if (nav.className != 'active') {nav.className = 'active';}
            else {nav.className = '';}
        });
    </script>  --}}
</body>
</html>
