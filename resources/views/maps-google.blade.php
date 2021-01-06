@include('includes/header_start')

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Google Maps</h3>
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
            
                                            <h4 class="mt-0 header-title">Markers</h4>
                                            <p class="text-muted m-b-30 font-14">Example of google maps.</p>
            
                                            <div id="gmaps-markers" class="gmaps"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Overlays</h4>
                                            <p class="text-muted m-b-30 font-14">Example of google maps.</p>
            
                                            <div id="gmaps-overlay" class="gmaps"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Street View Panoramas</h4>
                                            <p class="text-muted m-b-30 font-14">Example of google maps.</p>
            
                                            <div id="panorama" class="gmaps-panaroma"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Map Types</h4>
                                            <p class="text-muted m-b-30 font-14">Example of google maps.</p>
            
                                            <div id="gmaps-types" class="gmaps"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        <!-- Gmaps file -->
        <script src="assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="assets/pages/gmaps.js"></script>

@include('includes/footer_end')