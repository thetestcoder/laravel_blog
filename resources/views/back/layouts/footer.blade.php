<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="{{asset('back/')}}/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{asset('back/')}}/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{asset('back/')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{asset('back/')}}/vendor/slick/slick.min.js">
</script>
<script src="{{asset('back/')}}/vendor/wow/wow.min.js"></script>
<script src="{{asset('back/')}}/vendor/animsition/animsition.min.js"></script>
<script src="{{asset('back/')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{asset('back/')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{asset('back/')}}/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{asset('back/')}}/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('back/')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{asset('back/')}}/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{asset('back/')}}/vendor/select2/select2.min.js"></script>

<!-- Main JS-->
<script src="{{asset('back/')}}/js/main.js"></script>

@yield('js')
@toastr_js
@toastr_render
</body>
</html>
<!-- end document-->
