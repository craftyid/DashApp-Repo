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
                                    <h3 class="page-title">Session Timeout</h3>
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
            
                                            <h4 class="mt-0 header-title">Bootstrap-session-timeout</h4>
                                            <p class="text-muted m-b-30 font-14">Session timeout and keep-alive control
                                                with a nice Bootstrap warning dialog.</p>
            
                                            <div class="text-muted">
                                                <p>After a set amount of idle time, a Bootstrap warning dialog is shown
                                                    to the user with the option to either log out, or stay connected. If
                                                    "Logout" button is selected, the page is redirected to a logout URL.
                                                    If "Stay Connected" is selected the dialog closes and the session is
                                                    kept alive. If no option is selected after another set amount of
                                                    idle time, the page is automatically redirected to a set timeout
                                                    URL.</p>
            
                                                <p>
                                                    Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.
                                                </p>
            
                                                <p>
                                                    As long as the user is active, the (optional) keep-alive URL keeps
                                                    getting pinged and the session stays alive. If you have no need to
                                                    keep the server-side session alive via the keep-alive URL, you can
                                                    also use this plugin as a simple lock mechanism that redirects to
                                                    your lock-session or log-out URL after a set amount of idle time.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!-- Session timeout js -->
        <script src="assets/plugins/bootstrap-session-timeout/bootstrap-session-timeout.min.js"></script>

        <script>
            $.sessionTimeout({
                keepAliveUrl: 'pages-blank',
                logoutButton:'Logout',
                logoutUrl: 'pages-login',
                redirUrl: 'pages-lock-screen',
                warnAfter: 3000,
                redirAfter: 30000,
                countdownMessage: 'Redirecting in {timer} seconds.'
            });
        </script>

@include('includes/footer_end')