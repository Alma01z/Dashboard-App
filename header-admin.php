<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Dashboard Admin Panel</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/logo/logo_icon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/content/table-style.css" />
    <link rel="stylesheet" href="css/content/alert-save.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
</head>

<body>
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png"
                                    alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user">
                        <div class="icon_setting"></div>
                        <div class="user_profle">
                            <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg"
                                    alt="#" /></div>
                            <div class="user_info">
                                <h6>Stephen Bradley</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_2 margin_top_30">
                    <ul class="list-unstyled components">
                        <li class="active"><a href="index.php"><i class="fa fa-map-marker  white_color "></i>
                                <span>Map</span></a></li>
                        <li><a href="daily.php"><i class="fa fa-tasks white_color"></i> <span>Daily
                                    Tasks</span></a>
                        </li>
                        <li><a href="customers.php"><i class="fa fa-users white_color"></i>
                                <span>Customers</span></a>
                        </li>
                        <li><a href="employee.php"><i class="fa fa-user white_color"></i>
                                <span>Employee</span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul class="user_profile_right">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><span
                                                    class="name_user">Stephen Bradley</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="login.php"><span>Log Out</span> <i
                                                        class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->