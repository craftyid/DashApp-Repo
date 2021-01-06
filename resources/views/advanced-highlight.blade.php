@include('includes/header_start')

        <!-- prism css -->
        <link href="assets/plugins/prism/prism.css" rel="stylesheet" type="text/css">

@include('includes/header_end')

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Highlight</h3>
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

                                            <h4 class="mt-0 header-title">HTML Highlight</h4>
                                            <p class="text-muted m-b-30 font-14">Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind.</p>

                                            <pre class=" language-markup"><code class=" language-markup">
&lt;html&gt;
  &lt;!-- this is a comment --&gt;
  &lt;head&gt;
    &lt;title&gt;HTML Example&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    The indentation tries to be &lt;em&gt;somewhat &amp;quot;do what
    I mean&amp;quot;&lt;/em&gt;... but might not match your style.
  &lt;/body&gt;
&lt;/html&gt;
                                            </code></pre>
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Css Highlight</h4>
                                            <p class="text-muted m-b-30 font-14">Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind.</p>

<pre class="line-numbers">
    <code class="language-css">
.example {
    font-family: Georgia, Times, serif;
    color: #555;
    text-align: center;
}
    </code>
</pre>
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                            </div> <!-- end row -->


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

@include('includes/footer_start')

        <!-- Prism js -->
        <script src="assets/plugins/prism/prism.js"></script>

@include('includes/footer_end')