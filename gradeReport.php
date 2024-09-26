<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Report</title>


    <link rel="shortcut icon" href="assets/img/amu_logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="assets/img/amu_logo.png" alt="Amu Logo">&nbsp;&nbsp;SIS
                </a>
                <a href="index.php" class="logo logo-small">
                    <img src="assets/img/amu_logo.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn" title="javascript">
                <i class="fas fa-align-left"></i>
            </a>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit" title="Search"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="far fa-bell"></i> <span class="badge badge-pill">'</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>


                    </div>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                        </div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-adjust fa-user-graduate"></i> <span>DASHBOARD</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="studBasicProfile.php">Basic profile</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> EVALUATION</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teacherEvaluation.php"> Evaluate Your Teacher</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span>PLACEMENT</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="recordPreference.php">Record Preference</a></li>
                                <li><a href="ResultForPlacement.php">Result For Placement</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span>TRANSFERS</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="departmentTransfer.php">Department Transfer</a></li>
                                <li><a href="requestTransfer.php">Request Transfer</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span>REGISTRATION</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="courseRegistration.php">Course Registration</a></li>
                                <li><a href="courseAdd.php">Course Add</a></li>
                                <li><a href="allRegistration.php">View All Registration</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> GRADE</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="gradeReport.php" class="active">Grade Report</a></li>
                                <li><a href="requestFx.php">Request Fx Resit Exam</a></li>

                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>

                        <li>
                            <a href="exam.php"><i class="fas fa-calendar-day"></i> <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="regEvents.php"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                        </li>
                        <li>
                            <a href="regTimeTable.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Register course</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Registration</a></li>
                                <li class="breadcrumb-item active">Course Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
                            Year
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Fist</a>
                            <a class="dropdown-item" href="#">Second</a>
                            <a class="dropdown-item" href="#">Third</a>

                            <a class="dropdown-item" href="#">Forth</a>
                            <a class="dropdown-item" href="#">Fifth</a>
                        </div>
                    </div>
                    <div class="col">
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
                            Semister
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">I</a>
                            <a class="dropdown-item" href="#">II</a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center mb-0 ">
                                        <thead>
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Course Title</th>


                                                <th>Credit Hours</th>
                                                <th>Point</th>
                                                <th>Grade</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>