<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System</title>
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
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown">

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
                        <a class="dropdown-item" href="logout.php">Logout</a>
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
                            <a href="#"><i class="fas fa-user-graduate"></i> <span>DASHBOARD</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="Head.php" class="active">Head Dashboard</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span>DEPARTMENT</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="addDepartment.php">Add Departments</a></li>
                                <li><a href="editDepartment.php">Edit Departments</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span>COURSE</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="addNewCourse.php">Add New Courses</a></li>
                                <li><a href="editCourse.php">Edit Courses</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard-list"></i> <span>EXAM</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="addExamSchedule.php">Add Exam Schedule</a></li>
                                <li><a href="editExamSchedule.php">Edit Exam Schedule</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span>TEACHER</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="addTeachers.php">Add Teachers</a></li>
                                <li><a href="editTeacher.php">Edit Teachers</a></li>
                                <li><a href="viewTeachersDetail.php">View Teachers Detail</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-calendar-day"></i> <span>EVENT</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="depEvents.php">Events</a></li>
                                <li><a href="addNewEvent.php">Add New Event </a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="depTimeTable.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Head Dashboard</h3>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-nine w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="db-info">
                                        <h6>All Courses</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-six w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="db-info">
                                        <h6>All Students</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-ten w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="db-info">
                                        <h6>All Teachers</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-eleven w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-clipboard-check"></i>
                                    </div>
                                    <div class="db-info">
                                        <h6>Total Student Passed</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-9">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Semister Schedule</h5>
                                    </div>
                                    <div class="col-6">
                                        <span class="float-right view-link"><a href="#">Semister </a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-circle">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-xl-6 dash-widget3">

                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-6 dash-widget4">
                                        <div class="card-body dash-widget1 dash-widget2">

                                            <div class="dash-details">
                                                <h4></h4>
                                                <ul>
                                                    <li><i class=""></i></li>
                                                    <li><i class=""></i></li>
                                                    <li><i class=""></i></li>
                                                    <li><i class=""></i></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-8 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="card-title">Learning and Teacher Activity</h5>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-inline-group text-right mb-0 pl-0">
                                                    <li class="list-inline-item">
                                                        <div class="form-group mb-0 amount-spent-select">
                                                            <select class="form-control form-control-sm">
                                                                <option>Weekly</option>
                                                                <option>Monthly</option>
                                                                <option>Yearly</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="apexcharts-area"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <h5 class="card-title">Learning History</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="card-title">Calendar</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title">Star Students</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Marks</th>
                                                <th class="text-center">Percentage</th>
                                                <th class="text-right">Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div></div>
                                                </td>
                                                <td class="text-nowrap"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right">
                                                    <div></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div></div>
                                                </td>
                                                <td class="text-nowrap"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right">
                                                    <div></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div></div>
                                                </td>
                                                <td class="text-nowrap"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right">
                                                    <div></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div></div>
                                                </td>
                                                <td class="text-nowrap"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right">
                                                    <div></div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer>
                <p>Copyright © 2022 AMU.</p>
            </footer>

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