@include('includes/header_start')

        <!-- ION Slider -->
        <link href="assets/plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css" rel="stylesheet" type="text/css"/>

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Range Slider</h3>
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
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">ION Range slider</h4>
                                            <p class="text-muted m-b-30 font-14">Cool, comfortable, responsive and easily customizable range slider</p>
            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Default</h5>
                                                        <input type="text" id="range_01">
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Min-Max</h5>
                                                        <input type="text" id="range_02">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Prefix</h5>
                                                        <input type="text" id="range_03">
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Range</h5>
                                                        <input type="text" id="range_04">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Step</h5>
                                                        <input type="text" id="range_05">
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Custom Values</h5>
                                                        <input type="text" id="range_06">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Prettify Numbers</h5>
                                                        <input type="text" id="range_07">
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Disabled</h5>
                                                        <input type="text" id="range_08">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Extra Example</h5>
                                                        <input type="text" id="range_09">
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Use decorate_both option</h5>
                                                        <input type="text" id="range_10">
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Postfixes</h5>
                                                        <input type="text" id="range_11">
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="p-3">
                                                        <h5 class="font-16 m-b-20 mt-0">Hide</h5>
                                                        <input type="text" id="range_12">
                                                    </div>
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

        <!-- Range slider js -->
        <script src="assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <script src="assets/pages/rangeslider-init.js"></script>

@include('includes/footer_end')