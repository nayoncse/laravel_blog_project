<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.theme2._heder')
</head>

<body>

<!-- Preloader -->
<div class="preloader">
    <div class="preload-img">
        <div class="spinnerBounce">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- End of Preloader -->

<!-- Nav Search Box -->

<!-- End of Nav Search Box -->

<!-- Header -->
@include('layout.theme2._head')
<!-- End of Header -->

@yield('content')

<!-- Trending Posts-->

<!-- end of post with sidebar -->


<!-- Newsletter -->
@include('layout.theme2._footer')
<!-- End of Footer -->

<!-- Back to Top Button -->
<div class="back-to-top d-flex align-items-center justify-content-center">
    <span><i class="fa fa-long-arrow-up"></i></span>
</div>
<!-- End of Back to Top Button -->

<!-- JS Files -->

<!-- ==== JQuery 1.12.1 js file ==== -->

<script src="{{asset('theme2/assets/js/jquery-1.12.1.min.js')}}"></script>

<!-- ==== Bootstrap js file ==== -->
<script src="{{asset('theme2/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- ==== Owl Carousel ==== -->
<script src="{{asset('theme2/assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>

<!-- ==== Magnific Popup ==== -->
<script src="{{asset('theme2/assets/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- ==== Script js file ==== -->
<script src="{{asset('theme2/assets/js/scripts.js')}}"></script>

<!-- ==== Custom js file ==== -->
<script src="{{asset('theme2/assets/js/custom.js')}}"></script>
</body>
</html>