<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SalesPro</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="/css/floatexamples.css" rel="stylesheet" type="text/css" />
  <script src="/js/jquery.min.js"></script>
  <script src="/js/nprogress.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/home') }}" class="site_title"><i class="fa fa-paw"></i> <span>SalesPro</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
             @if ( session('profile_image') != null)
              <img src="/profile_images/{{ session('profile_image') }}" alt="..." class="img-circle profile_img">
             @else
                 <img src="/images/user.png" alt="..." class="img-circle profile_img">
             @endif
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{ Auth::user()->name }}</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/profile">Profile</a>
                    </li>
                     <li><a href="/changePassword">Change Password</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-shopping-cart"></i>Point of Sales <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/orders">Create Order</a>
                    </li>
                     <li><a href="/Orders/Payment">Make Payment</a>
                    </li>
                     <li><a href="/Orders/Payment">Update Payment</a>
                    </li>
                     <li><a href="/Orders/Payment">Redeem PR Card</a>
                    </li>
                     <li><a href="/Orders/Payment">Serve Order</a>
                    </li>
                     <li><a href="/Orders/Payment">Approve Order</a>
                    </li>
                    <li><a href="/Orders/Payment">Bar Book</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-folder"></i>Inventory<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/orders">Add Product</a>
                    </li>
                     <li><a href="/Orders/Payment">Edit Product</a>
                    </li>
                     <li><a href="/Orders/Payment">Set Product Unit</a>
                    </li>
                     <li><a href="/Orders/Payment">Stock Product</a>
                    </li>
                    <li><a href="/Orders/Payment">Dispatch To Bar</a>
                    </li>
                    <li><a href="/suppliers/">Manage Supplier</a>
                    </li>
                     <li><a href="/productType/">Manage Product Type</a>
                    </li>
                     <li><a href="/productUnit/">Manage Product Unit</a>
                    </li>
                  </ul>
                </li>
               <li><a><i class="fa fa-money"></i>Accounts<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/orders">Create Budget</a>
                    </li>
                     <li><a href="/Orders/Payment">View Budget</a>
                    </li>
                     <li><a href="/Orders/Payment">Payroll</a>
                    </li>
                     <li><a href="/Orders/Payment">View Staff Schedule</a>
                    </li>
                    <li><a href="/Orders/Payment">Set Price</a>
                    </li>
                     <li><a href="/Orders/Payment">Edit Price</a>
                    </li>
                     <li><a href="/Orders/Payment">Update Purchase</a>
                    </li>
                  </ul>
                </li>
                 <li><a><i class="fa fa-user"></i>Manager<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/orders">Settings</a>
                    </li>
                     <li><a href="/Orders/Payment">Approve Budget</a>
                    </li>
                     <li><a href="/users">Manage Users</a>
                    </li>
                     <li><a href="/roles">Manage Roles</a>
                    </li>
                     <li><a href="/customers">Manage Customers</a>
                    </li>
                    <li><a href="/Orders/Payment">Add Discount</a>
                    </li>
                     <li><a href="/Orders/Payment">Generate PR Cards</a>
                    </li>
                     <li><a href="/Orders/Payment">Manage Staff Schedule</a>
                    </li>
                  </ul>
                </li>
                 <li><a><i class="fa fa-line-chart"></i>Reports<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="/orders">Balance Sheet</a>
                    </li>
                     <li><a href="/Orders/Payment">Cash Flow</a>
                    </li>
                     <li><a href="/Orders/Payment">Cash Flow Chart</a>
                    </li>
                     <li><a href="/Orders/Payment">Profit & Loss</a>
                    </li>
                    <li><a href="/Orders/Payment">Profit & Loss Chart</a>
                    </li>
                     <li><a href="/Orders/Payment">Stock Graph</a>
                    </li>
                     <li><a href="/Orders/Payment">Stock Report</a>
                    </li>
                     <li><a href="/Orders/Payment">Daily Sales Report</a>
                    </li>
                     <li><a href="/Orders/Payment">Sales Report</a>
                    </li>
                     <li><a href="/Orders/Payment">Debtors Report</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>

          </div>
          <!-- /sidebar menu -->

         
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        
        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                @if ( session('profile_image') != null)
                  <img src="/profile_images/{{ session('profile_image') }}" alt="">
                @else
                 <img src="/images/user.png" alt="">
                @endif
                  {{ Auth::user()->name }}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                 
                  <li>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();" class="fa fa-sign-out pull-right">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>Jideofor Ujah</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Google AI Challenge
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>Ifesincahi Eze</span>
                      <span class="time">4 mins ago</span>
                      </span>
                      <span class="message">
                                       NYSC Punishment
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>Julius Ngwu</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                       The Url address
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>Lawrence Eze</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                       Nekede Upload
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
         @yield('content')




        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">With love from <a href="http://twitter.com/drwille" target="_blank">LLOYDANT</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/custom.js"></script>

  
  <!-- /footer content -->
</body>
</html>