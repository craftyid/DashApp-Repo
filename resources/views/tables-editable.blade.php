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
                                    <h3 class="page-title">Editable Tables</h3>
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
                                            <p class="text-muted m-b-30 font-14">just start typing to edit, or move around with arrow keys or mouse clicks!</p>
            
                                            <table id="mainTable" class="table table-striped m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Cost</th>
                                                    <th>Profit</th>
                                                    <th>Fun</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Car</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Bike</td>
                                                    <td>330</td>
                                                    <td>240</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Plane</td>
                                                    <td>430</td>
                                                    <td>540</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Yacht</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Segway</td>
                                                    <td>330</td>
                                                    <td>240</td>
                                                    <td>1</td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th><strong>TOTAL</strong></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </tfoot>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!-- Table editable -->
        <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>

        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>

@include('includes/footer_end')