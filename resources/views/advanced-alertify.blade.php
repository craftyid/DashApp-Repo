@include('includes/header_start')

        <!-- Alertify css -->
        <link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Alertify</h3>
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
                                            <p class="text-muted m-b-30 font-14">Alertify.js is a small library which
                                                provides light-weight, high performance browser dialogs.</p>
            
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Alert Dialog</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-alert">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Confirm Dialog</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Prompt Dialog</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-prompt">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Custom Labels</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-labels">Click me</button>
                                                </div>
            
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Ajax - Multiple Dialog</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-ajax">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Standard Log</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-notification">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Standard Log With HTML</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-notification-html">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Standard Log with callback</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-notification-callback">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Success Log</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-success">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Success Log with callback</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-success-callback">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Error Log</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-error">Click me</button>
                                                </div>
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Error Log with callback</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-error-callback">Click me</button>
                                                </div>
            
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Closing Log On Click</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-click-to-close">Click me</button>
                                                </div>
            
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Disable Log On Click</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-disable-click-to-close">Click me</button>
                                                </div>
            
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Hide in 10 seconds</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-delay">Click me</button>
                                                </div>
            
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Persistent Log</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-forever">Click me</button>
                                                </div>
            
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Maximum Number of Log Messages</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-max-log-items">Click me</button>
                                                </div>
            
                                                <div class="col-xs-6 col-sm-3 m-b-30">
                                                    <p class="text-muted">Resetting Default Values</p>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-reset">Click me</button>
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

        <!-- Alertify js -->
        <script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>

@include('includes/footer_end')