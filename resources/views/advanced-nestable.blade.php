@include('includes/header_start')

        <!-- Nestable css -->
        <link href="assets/plugins/nestable/jquery.nestable.css" rel="stylesheet" />

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Nestable</h3>
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
            
                                            <h4 class="mt-0 header-title">List 1</h4>
                                            <p class="text-muted m-b-30 font-14">Drag & drop hierarchical list with
                                                mouse and touch compatibility (jQuery plugin).</p>
            
                                            <div class="custom-dd dd" id="nestable_list_1">
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="1">
                                                        <div class="dd-handle">
                                                            Item 1
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="2">
                                                        <div class="dd-handle">
                                                            Item 2
                                                        </div>
                                                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="3">
                                                                <div class="dd-handle">
                                                                    Item 3
                                                                </div>
                                                            </li>
                                                            <li class="dd-item" data-id="4">
                                                                <div class="dd-handle">
                                                                    Item 4
                                                                </div>
                                                            </li>
                                                            <li class="dd-item" data-id="5">
                                                                <div class="dd-handle">
                                                                    Item 5
                                                                </div>
                                                                <ol class="dd-list">
                                                                    <li class="dd-item" data-id="6">
                                                                        <div class="dd-handle">
                                                                            Item 6
                                                                        </div>
                                                                    </li>
                                                                    <li class="dd-item" data-id="7">
                                                                        <div class="dd-handle">
                                                                            Item 7
                                                                        </div>
                                                                    </li>
                                                                    <li class="dd-item" data-id="8">
                                                                        <div class="dd-handle">
                                                                            Item 8
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li class="dd-item" data-id="9">
                                                                <div class="dd-handle">
                                                                    Item 9
                                                                </div>
                                                            </li>
                                                            <li class="dd-item" data-id="10">
                                                                <div class="dd-handle">
                                                                    Item 10
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
            
                                                </ol>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">List 2</h4>
                                            <p class="text-muted m-b-30 font-14">Drag & drop hierarchical list with
                                                mouse and touch compatibility (jQuery plugin).</p>
            
                                            <div class="custom-dd dd" id="nestable_list_2">
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="11">
                                                        <div class="dd-handle">
                                                            Item 11
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="12">
                                                        <div class="dd-handle">
                                                            Item 12
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="13">
                                                        <div class="dd-handle">
                                                            Item 13
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="14">
                                                        <div class="dd-handle">
                                                            Item 14
                                                        </div>
                                                    </li>
                                                    <li class="dd-item" data-id="15">
                                                        <div class="dd-handle">
                                                            Item 15
                                                        </div>
                                                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="16">
                                                                <div class="dd-handle">
                                                                    Item 16
                                                                </div>
                                                            </li>
                                                            <li class="dd-item" data-id="17">
                                                                <div class="dd-handle">
                                                                    Item 17
                                                                </div>
                                                            </li>
                                                            <li class="dd-item" data-id="18">
                                                                <div class="dd-handle">
                                                                    Item 18
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!--script for this page only-->
        <script src="assets/plugins/nestable/jquery.nestable.js"></script>
        <script src="assets/pages/nestable-init.js"></script>

@include('includes/footer_end')