<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="search-panel">
                <div class="search-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn">Close <i class="fa fa-close"></i></div>
                    <form id="searchForm" action="#">
                        <div class="form-group">
                            <input type="search" name="search" placeholder="What are you searching for...">
                            <button type="submit" class="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <!-- Navbar Header--><a href="index.html" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong
                                class="text-primary">Dark</strong><strong>Admin</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
                    </a>
                    <!-- Sidebar Toggle Btn-->
                    <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
                </div>
                <div class="right-menu list-inline no-margin-bottom">
                    <div class="list-inline-item"><a href="#" class="search-open nav-link"><i
                                class="icon-magnifying-glass-browser"></i></a></div>
                    <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="nav-link messages-toggle"><i class="icon-email"></i><span
                                class="badge dashbg-1">5</span></a>
                        <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#"
                                class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="admin/img/avatar-3.jpg" alt="..." class="img-fluid">
                                    <div class="status online"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Nadia Halsey</strong><span
                                        class="d-block">lorem ipsum dolor sit amit</span><small
                                        class="date d-block">9:30am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="admin/img/avatar-2.jpg" alt="..." class="img-fluid">
                                    <div class="status away"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Peter Ramsy</strong><span
                                        class="d-block">lorem ipsum dolor sit amit</span><small
                                        class="date d-block">7:40am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="admin/img/avatar-1.jpg" alt="..." class="img-fluid">
                                    <div class="status busy"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Sam Kaheil</strong><span
                                        class="d-block">lorem ipsum dolor sit amit</span><small
                                        class="date d-block">6:55am</small></div>
                            </a><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="admin/img/avatar-5.jpg" alt="..."
                                        class="img-fluid">
                                    <div class="status offline"></div>
                                </div>
                                <div class="content"> <strong class="d-block">Sara Wood</strong><span
                                        class="d-block">lorem ipsum dolor sit amit</span><small
                                        class="date d-block">10:30pm</small></div>
                            </a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages
                                    <i class="fa fa-angle-right"></i></strong></a></div>
                    </div>
                    <!-- Log out -->
                    <div class="list-inline-item logout">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <input type="submit" value="Logout" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..."
                        class="img-fluid rounded-circle">
                </div>
                <div class="title">
                    <h1 class="h5">Mark Stephen</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="tables.html"> <i class="icon-grid"></i>Tables </a></li>
                <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                            class="icon-windows"></i>Foods</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="{{ route('admin.addfood') }}">Add Food</a></li>
                        <li><a href="{{ route('admin.viewfood') }}">View Food</a></li>
                    </ul>
                </li>
            </ul><span class="heading">Extras</span>
            <ul class="list-unstyled">
                <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
            </ul>
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Dashboard</h2>
                </div>
            </div>
            @yield('admindashboard')
            @yield('addfood')
            @yield('viewfood')
            @yield('editfood')
            <footer class="footer">
                <div class="footer__block block no-margin-bottom">
                    <div class="container-fluid text-center">
                        <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        <p class="no-margin-bottom">2025 &copy; Burger Bae. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
</body>

</html>
