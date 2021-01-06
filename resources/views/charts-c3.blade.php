@include('includes/header_start')

        <!-- C3 charts css -->
        <link href="assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">C3 Charts</h3>
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
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Bar Chart</h4>
            
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
            
                                            <div id="chart"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Stacked Area Chart</h4>
            
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
            
                                            <div id="chart-stacked"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Roated Chart</h4>
            
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
            
                                            <div id="roated-chart"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Combine Chart</h4>
            
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
            
                                            <div id="combine-chart"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Donut Chart</h4>
            
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
            
                                            <div id="donut-chart"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Pie Chart</h4>
            
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
            
                                            <div id="pie-chart"></div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!--C3 Chart-->
        <script type="text/javascript" src="assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="assets/plugins/c3/c3.min.js"></script>
        <script src="assets/pages/c3-chart-init.js"></script>

@include('includes/footer_end')