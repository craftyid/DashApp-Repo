@include('includes/header_start')

        <!-- Bootstrap rating css -->
        <link href="assets/plugins/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css">

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Ratings</h3>
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
            
                                            <div class="row">
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Default rating</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Half rating</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-primary" data-fractions="2"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Disabled rating</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" disabled="disabled"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Readonly rating with a value</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted" data-readonly value="3"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Customized heart rating</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-heart font-32 text-danger" data-empty="mdi mdi-heart-outline font-32 text-danger"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Only fill selected</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star-outline font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-primary" data-filled-selected="mdi mdi-star font-32 text-primary"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Handle events</h5>
                                                        <input type="hidden" class="rating check" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Customize tooltips</h5>
                                                        <input type="hidden" class="rating-tooltip" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Default rating</h5>
                                                        <input type="hidden" class="rating-tooltip" data-stop="10" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Set start rate to 5 [6..10]</h5>
                                                        <input type="hidden" class="rating-tooltip" data-start="5" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Set start and stop rate [2..10]</h5>
                                                        <input type="hidden" class="rating-tooltip" data-start="1" data-stop="10" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Set start and stop rate [2..10] with step 2</h5>
                                                        <input type="hidden" class="rating-tooltip" data-stop="10" data-step="2" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Custom icons</h5>
                                                        <input type="hidden" class="rating" data-filled="mdi mdi-checkbox-marked font-32 text-primary" data-empty="mdi mdi-checkbox-blank-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Fractional rating</h5>
                                                        <input type="hidden" class="rating-tooltip-manual" data-fractions="3" data-filled="mdi mdi-star font-32 text-primary" data-empty="mdi mdi-star-outline font-32 text-muted"/>
                                                    </div>
                                                </div>
            
                                                <div class="col-sm-4 col-lg-3">
                                                    <div class="p-4 text-center">
                                                        <h5 class="font-16 m-b-15">Custom CSS icons</h5>
                                                        <input type="hidden" class="rating" data-filled="symbol symbol-filled" data-empty="symbol symbol-empty" data-fractions="2"/>
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

        <!-- Bootstrap rating js -->
        <script src="assets/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
        <script src="assets/pages/rating-init.js"></script>
        
@include('includes/footer_end')