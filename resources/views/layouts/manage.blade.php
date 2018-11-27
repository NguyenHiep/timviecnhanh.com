<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <!-- App Favicon -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- App title -->
  <title>@yield('title', config('app.name'))</title>
  @stack('styles')
  <!-- Styles -->
  <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/manage.css') }}" rel="stylesheet">

  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <!-- Modernizr js -->
  <script src="{{ asset('js/modernizr.min.js') }}"></script>

</head>
<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">

  <!-- Top Bar Start -->
  <div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
      <a href="{{ route('home') }}" class="logo">
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
                <img src="{{ asset('images/users/avatar-2.jpg') }}" alt="img" class="img-circle img-fluid">
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
                <img src="{{ asset('images/users/avatar-3.jpg') }}" alt="img" class="img-circle img-fluid">
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
                <img src="{{ asset('images/users/avatar-4.jpg') }}" alt="img" class="img-circle img-fluid">
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
            <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
            <!-- item-->
            <div class="dropdown-item noti-title">
              <h5 class="text-overflow"><small>Welcome ! {{ Auth::user()->name }}</small> </h5>
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
            <a href="{{ route('logout') }}" class="dropdown-item notify-item"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="zmdi zmdi-power"></i> <span>Logout</span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
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
          <li class="has_sub">
            <a href="{{ route('home') }}" class="waves-effect"><span class="label label-pill label-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> {{ __('common.task.title') }}</span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="{{ route('task.index') }}"><i class="zmdi zmdi-format-list-bulleted"></i><span>{{ __('common.task.task') }}</span></a></li>
              <li><a href="{{ route('status.index') }}"><i class="zmdi zmdi-eye-off"></i><span>{{ __('common.task.status') }}</span></a></li>
              <li><a href="{{ route('tags.index') }}"><i class="zmdi zmdi-tag"></i><span>{{ __('common.task.tag') }}</span></a></li>
              <li><a href="{{ route('calendar.index') }}"><i class="zmdi zmdi-calendar"></i><span>{{ __('common.task.calendar') }}</span></a></li>
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
        @yield('content')
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
    2018 - <?php echo date('Y'); ?> © Esdesignweb.com
  </footer>
</div>
<!-- END wrapper -->
<script>
  var resizefunc = [];
</script>

<!-- Scripts -->
<script src="{{ asset('js/manage.js') }}"></script>
<script src="{{ asset('js/globalScript.js') }}"></script>
@stack('plugins')
<script src="{{ asset('js/jsCore.js') }}"></script>
@stack('scripts')
</body>
</html>