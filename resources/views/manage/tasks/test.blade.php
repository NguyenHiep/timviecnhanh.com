<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <!-- App Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- App title -->
  <title>Uplon - Responsive Admin Dashboard Template</title>

  <!--calendar css-->
  <link href="assets/plugins/fullcalendar/dist/fullcalendar.css" rel="stylesheet" />

  <!-- Switchery css -->
  <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- App CSS -->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <!-- Modernizr js -->
  <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

  <!-- Top Bar Start -->
  <div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
      <a href="index.html" class="logo">
        <i class="zmdi zmdi-group-work icon-c-logo"></i>
        <span>Uplon</span></a>
    </div>

    <nav class="navbar-custom">

      <ul class="list-inline float-right mb-0">
        <li class="list-inline-item dropdown notification-list">
          <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
             aria-haspopup="false" aria-expanded="false">
            <i class="zmdi zmdi-notifications-none noti-icon"></i>
            <span class="noti-icon-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
            <!-- item-->
            <div class="dropdown-item noti-title">
              <h5><small><span class="label label-danger pull-xs-right">7</span>Notification</small></h5>
            </div>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
              <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-info"><i class="icon-user"></i></div>
              <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
              <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
            </a>

            <!-- All-->
            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
              View All
            </a>

          </div>
        </li>

        <li class="list-inline-item dropdown notification-list">
          <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
             aria-haspopup="false" aria-expanded="false">
            <i class="zmdi zmdi-email noti-icon"></i>
            <span class="noti-icon-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
            <!-- item-->
            <div class="dropdown-item noti-title bg-success">
              <h5><small><span class="label label-danger pull-xs-right">7</span>Messages</small></h5>
            </div>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-faded">
                <img src="assets/images/users/avatar-2.jpg" alt="img" class="img-circle img-fluid">
              </div>
              <p class="notify-details">
                <b>Robert Taylor</b>
                <span>New tasks needs to be done</span>
                <small class="text-muted">1min ago</small>
              </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-faded">
                <img src="assets/images/users/avatar-3.jpg" alt="img" class="img-circle img-fluid">
              </div>
              <p class="notify-details">
                <b>Carlos Crouch</b>
                <span>New tasks needs to be done</span>
                <small class="text-muted">1min ago</small>
              </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-faded">
                <img src="assets/images/users/avatar-4.jpg" alt="img" class="img-circle img-fluid">
              </div>
              <p class="notify-details">
                <b>Robert Taylor</b>
                <span>New tasks needs to be done</span>
                <small class="text-muted">1min ago</small>
              </p>
            </a>

            <!-- All-->
            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
              View All
            </a>

          </div>
        </li>

        <li class="list-inline-item dropdown notification-list">
          <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
            <i class="zmdi zmdi-format-subject noti-icon"></i>
          </a>
        </li>

        <li class="list-inline-item dropdown notification-list">
          <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
             aria-haspopup="false" aria-expanded="false">
            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
            <!-- item-->
            <div class="dropdown-item noti-title">
              <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
            </div>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="zmdi zmdi-settings"></i> <span>Settings</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="zmdi zmdi-power"></i> <span>Logout</span>
            </a>

          </div>
        </li>

      </ul>

      <ul class="list-inline menu-left mb-0">
        <li class="float-left">
          <button class="button-menu-mobile open-left waves-light waves-effect">
            <i class="zmdi zmdi-menu"></i>
          </button>
        </li>
        <li class="hidden-mobile app-search">
          <form role="search" class="">
            <input type="text" placeholder="Search..." class="form-control">
            <a href=""><i class="fa fa-search"></i></a>
          </form>
        </li>
      </ul>

    </nav>

  </div>
  <!-- Top Bar End -->


  <!-- ========== Left Sidebar Start ========== -->
  <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <ul>
          <li class="text-muted menu-title">Navigation</li>

          <li class="has_sub">
            <a href="index.html" class="waves-effect"><span class="label label-pill label-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="ui-buttons.html">Buttons</a></li>
              <li><a href="ui-cards.html">Cards</a></li>
              <li><a href="ui-dropdowns.html">Dropdowns</a></li>
              <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
              <li><a href="ui-navs.html">Navs</a></li>
              <li><a href="ui-progress.html">Progress</a></li>
              <li><a href="ui-modals.html">Modals</a></li>
              <li><a href="ui-notification.html">Notification</a></li>
              <li><a href="ui-alerts.html">Alerts</a></li>
              <li><a href="ui-carousel.html">Carousel</a></li>
              <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
              <li><a href="ui-typography.html">Typography</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Components </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="components-grid.html">Grid</a></li>
              <li><a href="components-range-sliders.html">Range sliders</a></li>
              <li><a href="components-sweet-alert.html">Sweet Alerts</a></li>
              <li><a href="components-ratings.html">Ratings</a></li>
              <li><a href="components-treeview.html">Treeview</a></li>
              <li><a href="components-tour.html">Tour</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="calendar.html" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Calendar </span> </a>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Widgets </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="widgets-tiles.html">Tile Box</a></li>
              <li><a href="widgets-charts.html">Chart Widgets</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-fire"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="icons-materialdesign.html">Material Design</a></li>
              <li><a href="icons-ionicons.html">Ion Icons</a></li>
              <li><a href="icons-fontawesome.html">Font awesome</a></li>
              <li><a href="icons-themify.html">Themify Icons</a></li>
              <li><a href="icons-simple-line.html">Simple line Icons</a></li>
              <li><a href="icons-weather.html">Weather Icons</a></li>
              <li><a href="icons-pe7.html">PE7 Icons</a></li>
              <li><a href="icons-typicons.html">Typicons</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><span class="label label-pill label-warning float-right">8</span><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
            <ul class="list-unstyled">
              <li><a href="form-elements.html">General Elements</a></li>
              <li><a href="form-advanced.html">Advanced Form</a></li>
              <li><a href="form-validation.html">Form Validation</a></li>
              <li><a href="form-pickers.html">Form Pickers</a></li>
              <li><a href="form-wizard.html">Form Wizard</a></li>
              <li><a href="form-mask.html">Form Masks</a></li>
              <li><a href="form-uploads.html">Multiple File Upload</a></li>
              <li><a href="form-xeditable.html">X-editable</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="tables-basic.html">Basic Tables</a></li>
              <li><a href="tables-datatable.html">Data Table</a></li>
              <li><a href="tables-responsive.html">Responsive Table</a></li>
              <li><a href="tables-tablesaw.html">Tablesaw</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Charts </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="chart-flot.html">Flot Chart</a></li>
              <li><a href="chart-morris.html">Morris Chart</a></li>
              <li><a href="chart-chartjs.html">Chartjs</a></li>
              <li><a href="chart-peity.html">Peity Charts</a></li>
              <li><a href="chart-chartist.html">Chartist Charts</a></li>
              <li><a href="chart-c3.html">C3 Charts</a></li>
              <li><a href="chart-sparkline.html">Sparkline charts</a></li>
              <li><a href="chart-knob.html">Jquery Knob</a></li>
            </ul>
          </li>

          <li class="text-muted menu-title">More</li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><span class="label label-success label-pill float-right">13</span><i class="zmdi zmdi-collection-item"></i><span> Pages </span></a>
            <ul class="list-unstyled">
              <li><a href="pages-starter.html">Starter Page</a></li>
              <li><a href="pages-login.html">Login</a></li>
              <li><a href="pages-register.html">Register</a></li>
              <li><a href="pages-recoverpw.html">Recover Password</a></li>
              <li><a href="pages-lock-screen.html">Lock Screen</a></li>
              <li><a href="pages-404.html">Error 404</a></li>
              <li><a href="pages-500.html">Error 500</a></li>
              <li><a href="pages-timeline.html">Timeline</a></li>
              <li><a href="pages-invoice.html">Invoice</a></li>
              <li><a href="pages-pricing.html">Pricing</a></li>
              <li><a href="pages-gallery.html">Gallery</a></li>
              <li><a href="pages-maintenance.html">Maintenance</a></li>
              <li><a href="pages-comingsoon.html">Coming Soon</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-blur-linear"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
            <ul>
              <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span>    </a>
                <ul style="">
                  <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                  <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                  <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
              </li>
            </ul>
          </li>

        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- Sidebar -->
      <div class="clearfix"></div>

    </div>

  </div>
  <!-- Left Sidebar End -->



  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="content-page">
    <!-- Start content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-12">
            <div class="page-title-box">
              <h4 class="page-title float-left">Calendar</h4>

              <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                <li class="breadcrumb-item active">Calendar</li>
              </ol>

              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row">
          <div class="col-12">

            <div class="card-box">
              <div class="row">
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-success btn-block waves-effect m-t-20 waves-light">
                        <i class="fa fa-plus"></i> Create New
                      </a>
                      <div id="external-events" class="m-t-20">
                        <br>
                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                        <div class="external-event bg-primary" data-class="bg-primary">
                          <i class="fa fa-move"></i>New Theme Release
                        </div>
                        <div class="external-event bg-pink" data-class="bg-pink">
                          <i class="fa fa-move"></i>My Event
                        </div>
                        <div class="external-event bg-warning" data-class="bg-warning">
                          <i class="fa fa-move"></i>Meet manager
                        </div>
                        <div class="external-event bg-purple" data-class="bg-purple">
                          <i class="fa fa-move"></i>Create New theme
                        </div>
                      </div>

                      <!-- checkbox -->
                      <div class="checkbox checkbox-custom m-t-40">
                        <input id="drop-remove" type="checkbox">
                        <label for="drop-remove">
                          Remove after drop
                        </label>
                      </div>

                    </div>
                  </div>
                </div> <!-- end col-->
                <div class="col-md-9">
                  <div id="calendar"></div>
                </div> <!-- end col -->
              </div>  <!-- end row -->
            </div>

            <!-- BEGIN MODAL -->
            <div class="modal fade none-border" id="event-modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add New Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body p-20"></div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-category">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add a category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body p-20">
                    <form role="form">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">Category Name</label>
                          <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label">Choose Category Color</label>
                          <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                            <option value="success">Success</option>
                            <option value="danger">Danger</option>
                            <option value="info">Info</option>
                            <option value="pink">Pink</option>
                            <option value="primary">Primary</option>
                            <option value="warning">Warning</option>
                            <option value="inverse">Inverse</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- END MODAL -->
          </div>
          <!-- end col-12 -->
        </div> <!-- end row -->

      </div> <!-- container -->

    </div> <!-- content -->



  </div>
  <!-- End content-page -->


  <!-- ============================================================== -->
  <!-- End Right content here -->
  <!-- ============================================================== -->


  <!-- Right Sidebar -->
  <div class="side-bar right-bar">
    <div class="nicescroll">
      <ul class="nav nav-pills nav-justified text-xs-center">
        <li class="nav-item">
          <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
            Activity
          </a>
        </li>
        <li class="nav-item">
          <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
            Settings
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade active show" id="home-2">
          <div class="timeline-2">
            <div class="time-item">
              <div class="item-info">
                <small class="text-muted">5 minutes ago</small>
                <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
              </div>
            </div>

            <div class="time-item">
              <div class="item-info">
                <small class="text-muted">30 minutes ago</small>
                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
              </div>
            </div>

            <div class="time-item">
              <div class="item-info">
                <small class="text-muted">59 minutes ago</small>
                <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
              </div>
            </div>

            <div class="time-item">
              <div class="item-info">
                <small class="text-muted">1 hour ago</small>
                <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
              </div>
            </div>

            <div class="time-item">
              <div class="item-info">
                <small class="text-muted">3 hours ago</small>
                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
              </div>
            </div>

            <div class="time-item">
              <div class="item-info">
                <small class="text-muted">5 hours ago</small>
                <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="messages-2">

          <div class="row m-t-10">
            <div class="col-8">
              <h5 class="m-0">Notifications</h5>
              <p class="text-muted m-b-0"><small>Do you need them?</small></p>
            </div>
            <div class="col-4 text-right">
              <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
            </div>
          </div>

          <div class="row m-t-10">
            <div class="col-8">
              <h5 class="m-0">API Access</h5>
              <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
            </div>
            <div class="col-4 text-right">
              <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
            </div>
          </div>

          <div class="row m-t-10">
            <div class="col-8">
              <h5 class="m-0">Auto Updates</h5>
              <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
            </div>
            <div class="col-4 text-right">
              <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
            </div>
          </div>

          <div class="row m-t-10">
            <div class="col-8">
              <h5 class="m-0">Online Status</h5>
              <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
            </div>
            <div class="col-4 text-right">
              <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
            </div>
          </div>

        </div>
      </div>
    </div> <!-- end nicescroll -->
  </div>
  <!-- /Right-bar -->

  <footer class="footer text-right">
    2016 - 2017 © Uplon.
  </footer>


</div>
<!-- END wrapper -->


<script>
  var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>

<!-- Jquery-Ui -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- BEGIN PAGE SCRIPTS -->
<script src="assets/plugins/moment/moment.js"></script>
<script src='assets/plugins/fullcalendar/dist/fullcalendar.min.js'></script>
<script src="assets/pages/jquery.fullcalendar.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>