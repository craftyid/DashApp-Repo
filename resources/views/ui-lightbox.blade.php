@include('includes/header_start')

        <!-- Magnific popup -->
        <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Lightbox</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Single image lightbox</h4>
                                            <p class="text-muted m-b-30 font-14">Three simple popups with different scaling settings.</p>
            
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="mt-0 font-14 m-b-15 text-muted">Fits (Horz/Vert)</h5>
                                                    <a class="image-popup-vertical-fit" href="assets/images/small/img-2.jpg" title="Caption. Can be aligned it to any side and contain any HTML.">
                                                        <img class="img-responsive" src="assets/images/small/img-2.jpg"  width="145">
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mt-0 font-14 m-b-15 text-muted">Effects</h5>
                                                    <a class="image-popup-no-margins" href="assets/images/small/img-3.jpg">
                                                        <img class="img-responsive" src="assets/images/small/img-3.jpg" width="75">
                                                    </a>
                                                    <p class="mt-2 mb-0 font-14 text-muted">No gaps, zoom animation, close icon in top-right corner.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Lightbox gallery</h4>
                                            <p class="text-muted m-b-30 font-14">In this example lazy-loading of images is enabled for the next image based on move direction. </p>
            
                                            <div class="popup-gallery">
                                                <a class="pull-left" href="assets/images/small/img-1.jpg" title="Project 1">
                                                    <div class="img-responsive">
                                                        <img src="assets/images/small/img-1.jpg" width="120">
                                                    </div>
                                                </a>
                                                <a class="pull-left" href="assets/images/small/img-2.jpg" title="Project 2">
                                                    <div class="img-responsive">
                                                        <img src="assets/images/small/img-2.jpg" width="120">
                                                    </div>
                                                </a>
                                                <a class="pull-left" href="assets/images/small/img-3.jpg" title="Project 3">
                                                    <div class="img-responsive">
                                                        <img src="assets/images/small/img-3.jpg" width="120">
                                                    </div>
                                                </a>
                                                <a class="pull-left" href="assets/images/small/img-4.jpg" title="Project 4">
                                                    <div class="img-responsive">
                                                        <img src="assets/images/small/img-4.jpg" width="120">
                                                    </div>
                                                </a>
                                                <a class="pull-left" href="assets/images/small/img-5.jpg" title="Project 5">
                                                    <div class="img-responsive">
                                                        <img src="assets/images/small/img-5.jpg" width="120">
                                                    </div>
                                                </a>
                                                <a class="pull-left" href="assets/images/small/img-6.jpg" title="Project 6">
                                                    <div class="img-responsive">
                                                        <img src="assets/images/small/img-6.jpg" width="120">
                                                    </div>
                                                </a>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Zoom Gallery</h4>
                                            <p class="text-muted m-b-30 font-14">Zoom effect works only with images.</p>
            
                                            <div class="zoom-gallery">
                                                <a class="pull-left" href="assets/images/small/img-3.jpg" title="Project 1"><img src="assets/images/small/img-3.jpg" width="275"></a>
                                                <a class="pull-left" href="assets/images/small/img-7.jpg" title="Project 2"><img src="assets/images/small/img-7.jpg" width="275"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Popup with video or map</h4>
                                            <p class="text-muted m-b-30 font-14">In this example lazy-loading of images is enabled for the next image based on move direction. </p>
            
                                            <div class="row">
                                                <div class="col-12">
                                                    <a class="popup-youtube btn btn-secondary" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube Video</a>
                                                    <a class="popup-vimeo btn btn-secondary" href="https://vimeo.com/45830194">Open Vimeo Video</a>
                                                    <a class="popup-gmaps btn btn-secondary" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!-- Magnific popup -->
        <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/pages/lightbox.js"></script>

@include('includes/footer_end')