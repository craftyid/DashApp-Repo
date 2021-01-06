@include('includes/header_start')

        <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Sweet Alerts</h3>
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
            
                                            <h4 class="mt-0 header-title">Examples</h4>
                                            <p class="text-muted m-b-30 font-14">A beautiful, responsive, customizable
                                                and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                                dependencies.</p>
            
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">A basic message</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">A title with a text under</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">A success message!</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">A warning message, with a function attached to the "Confirm"-button...</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
                                                </div>
            
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">By passing a parameter, you can execute something else for "Cancel".</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">A message with custom Image Header</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">A message with auto close timer</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Custom HTML description and buttons</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">A message with custom width, padding and background</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Ajax request example</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Chaining modals (queue) example</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Dynamic queue example</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button>
                                                </div>
            
                                            </div> <!-- end row -->
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!-- Sweet-Alert  -->
        <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/pages/sweet-alert.init.js"></script>

@include('includes/footer_end')