@include('includes/header_start')

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Morris Charts</h3>
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
            
                                            <h4 class="mt-0 header-title">Line Chart</h4>
            
                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">25610</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">56210</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">12485</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>
            
                                            <div id="morris-line-example" class="morris-chart-height"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Bar Chart</h4>
            
                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">6,95,412</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">1,63,542</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                            </ul>
            
                                            <div id="morris-bar-example" class="morris-chart-height"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Area Chart</h4>
            
                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">86541</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">2541</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">102030</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>
            
                                            <div id="morris-area-example" class="morris-chart-height"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Donut Chart</h4>
            
                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">3201</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">85120</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">65214</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>
            
                                            <div id="morris-donut-example" class="morris-chart-height"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Area Chart</h4>
            
                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">86541</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">2541</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">102030</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>
            
                                            <div id="morris-bar-stacked" class="morris-chart-height"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                            </div> <!-- end row -->
            
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/morris.init.js"></script> 

@include('includes/footer_end')