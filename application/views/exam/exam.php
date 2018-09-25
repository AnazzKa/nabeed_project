<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Dashboard v.4</title>

    <link href="<?php $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	    <link href="<?php $base_url; ?>assets/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">Inspinia</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a aria-expanded="false" role="button" href=""> Back to main Layout page</a>
                    </li>
                    <li class="">
                        <a aria-expanded="false" role="button" href="settings"> Settings <span class="caret"></span></a>
                    </li>
					<li class="">
                        <a aria-expanded="false" role="button" href="settings"> Apply Exam<span class="caret"></span></a>
                    </li>
					<li class="">
                        <a aria-expanded="false" role="button" href="settings"> Notification<span class="caret"></span></a>
                    </li>
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Questions <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">View Demo Question Papper</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Exam <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Write Exam</a></li>
                            <li><a href="">View Result</a></li>
                        </ul>
                    </li>
                    

                </ul>
                <ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php $base_url; ?>assets/img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        
                        
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <div id="page-wrapper" class="white-bg">
        <div class="row border-bottom">
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">


            <div class="row m-b-lg m-t-lg">
                <div class="col-md-10">
                    <div class="profile-info">
                        
                            <div>
							<h4>Founder of Groupeq</h4>
                                <small>
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form Ipsum available.
                                </small>
                            </div>
                        
                    </div>
                </div>
                
                <div class="col-md-2">
                    <a href="#" class="btn btn-sm btn-primary"> Save and Next</a>
                </div>


            </div>
            <div class="row">
<div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content no-padding">

                        <div class="summernote" style="display: none;">
                            <h3>Lorem Ipsum is simply</h3>
                            dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            <br>
                            <br>
                            <ul>
                                <li>Remaining essentially unchanged</li>
                                <li>Make a type specimen book</li>
                                <li>Unknown printer</li>
                            </ul>
                        </div>
						
                    </div>
                </div>
            </div>

            </div>

        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="<?php $base_url; ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php $base_url; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php $base_url; ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php $base_url; ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php $base_url; ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php $base_url; ?>assets/js/inspinia.js"></script>
    <script src="<?php $base_url; ?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Flot -->
    <script src="<?php $base_url; ?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php $base_url; ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php $base_url; ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>

    <!-- ChartJS-->
    <script src="<?php $base_url; ?>assets/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Peity -->
    <script src="<?php $base_url; ?>assets/js/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity demo -->
    <script src="<?php $base_url; ?>assets/js/demo/peity-demo.js"></script>

 <!-- SUMMERNOTE -->
    <script src="<?php $base_url; ?>assets/js/plugins/summernote/summernote.min.js"></script>

    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

       });
    </script>

    

</body>

</html>
