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
                                    <h3 class="page-title">Popover & Tooltips</h3>
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
            
                                            <h4 class="mt-0 header-title">Popovers</h4>
                                            <p class="text-muted m-b-30 font-14">Add small overlay content, like those found in iOS, to any element for housing secondary information.</p>
            
                                            <button type="button" class="btn btn-secondary waves-effect" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on top
                                            </button>
            
                                            <button type="button" class="btn btn-secondary waves-effect" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on right
                                            </button>
            
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                    data-container="body" data-toggle="popover" data-placement="bottom"
                                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on bottom
                                            </button>
            
                                            <button type="button" class="btn btn-secondary waves-effect" data-container="body" data-toggle="popover" data-placement="left" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on left
                                            </button>
            
                                            <button type="button" class="btn btn-primary waves-effect waves-light" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</button>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Tooltips</h4>
                                            <p class="text-muted m-b-30 font-14">Hover over the links below to see tooltips:</p>
            
                                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                Tooltip on top
                                            </button>
            
                                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                                Tooltip on right
                                            </button>
            
                                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                                Tooltip on bottom
                                            </button>
            
                                            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                                                Tooltip on left
                                            </button>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

@include('includes/footer_end')