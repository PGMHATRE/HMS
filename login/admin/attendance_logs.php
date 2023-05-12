<?php
session_start();
include('../includes/dbconn.php');
include('../includes/check-login.php');
include('../includes/pdoconfig.php');
check_login();

if (isset($_GET['del'])) {
    $id = intval($_GET['del']);
    $adn = "DELETE from userregistration where id=?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
    echo "<script>alert('Record has been deleted');</script>";
}

if (isset($_POST['mark'])) {
    $mark_val = $_POST['mark'];
    $reg = $_POST['regno'];
    $adn = "UPDATE attendance SET attendance_status='$mark_val' WHERE regNo=?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $reg);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Attendance Marked');</script>";
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Girls's Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- This page plugin CSS -->
    <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <script language="javascript" type="text/javascript">
        var popUpWin = 0;

        function popUpWindow(URLStr, left, top, width, height) {
            if (popUpWin) {
                if (!popUpWin.closed) popUpWin.close();
            }
            popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 510 + ',height=' + 430 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
        }
    </script>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include 'includes/navigation.php' ?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include 'includes/sidebar.php' ?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar t
            oggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Attendance Logs</h4>
                        <div class="d-flex align-items-center">
                            <!-- <nav aria-label="breadcrumb">
                                
                            </nav> -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <style>
                #zoomedImage {
                    position: absolute;
                    z-index: 9999;
                    display: none;
                    top: 0;
                    left: 0;
                    max-width: 100%;
                    max-height: 100%;
                    border: 1px solid black;
                }
            </style>

            <script>
                function zoomIn(event) {
                    var imgSrc = event.target.src;
                    var zoomedImage = document.createElement('img');
                    zoomedImage.id = 'zoomedImage';
                    zoomedImage.src = imgSrc;
                    zoomedImage.style.display = 'block';
                    document.body.appendChild(zoomedImage);
                    zoomedImage.style.top = (window.innerHeight - zoomedImage.height) / 2 + 'px';
                    zoomedImage.style.left = (window.innerWidth - zoomedImage.width) / 2 + 'px';

                    zoomedImage.addEventListener('click', zoomOut);
                }

                function zoomOut() {
                    var zoomedImage = document.getElementById('zoomedImage');
                    zoomedImage.style.display = 'none';
                    document.body.removeChild(zoomedImage);
                }
            </script>
            <div class="container-fluid">

                <!-- Table Starts -->
                <div class="row">
                    <div class="col-12">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Start Date</h4>
                                            <div class="form-group">
                                                <input type="date" name="stayf" id="stayf" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">End Date</h4>
                                            <div class="form-group">
                                                <input type="date" name="stasyf" id="staysf" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>

                        <div class="card-body">
                            <h6 class="card-subtitle">Displaying all the attandance logs</h6>
                            <div class="table-responsive">


                                <?php


                                $t = time();


                                if (isset($_GET['submit']) && !empty($_GET['stayf']) && !empty($_GET['stasyf'])) {
                                    $sdat = $_GET['stayf'];
                                    $edat = $_GET['stasyf'];

                                    $selsub = $_GET['submit'];

                                    $sdate = strtotime($sdat);

                                    $edate = strtotime($edat);



                                    if (($sdate < $t) && ($edate <= $t) && ($edate >= $sdate)) {

                                        echo "<table id='zero_config' class='table table-striped table-hover table-bordered no-wrap'>";
                                        echo "<thead class='thead-dark'>";
                                        echo "<tr>";
                                        echo "<th>Roll</th>";
                                        echo "<th>Student's Name</th>";
                                        for ($k = $sdate; $k <= $edate; $k = $k + 86400) {
                                            $thisDate = date('d-m-Y', $k);
                                            $weekday = date("l", $k);
                                            $normalized_weekday = strtolower($weekday);
                                            // if (($normalized_weekday != "saturday") && ($normalized_weekday != "sunday")) if it is sunday saturday
                                            echo "<th>" . $thisDate . "</th>";
                                        }
                                        echo "<th>Present/Total</th>";
                                        echo "<th>Precentage</th>";
                                        echo "</tr>";

                                        echo "<tbody>";

                                        $ret = "SELECT * from userregistration";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute();
                                        $res = $stmt->get_result();
                                        $cnt = 1;
                                        $num = 0;

                                        while ($row = $res->fetch_object()) {
                                            echo "<tr>";

                                            echo "<td>" . $row->regNo . "</td>";
                                            $num = $row->regNo;
                                            echo "<td>" . $row->firstName . "</td>";

                                            $total = 0;
                                            $present = 0;

                                            for ($j = $sdate; $j <= $edate; $j = $j + 86400) {
                                                //$thisDate = date( 'Y-m-d', $j );
                                                //echo "$j"."=".$thisDate."<br>";

                                                $weekday = date("l", $j);
                                                $currentDate = date('Y-m-d', $j);

                                                $stmt = $DB_con->prepare("SELECT * FROM attendance WHERE regNo = :tp and date = :date ");

                                                // $stmt = $conn->prepare("SELECT * FROM myTable WHERE date_column = :date");
                                                $stmt->bindParam(':tp', $row->regNo);
                                                $stmt->bindParam(':date', $currentDate);
                                                $stmt->execute();

                                                // // Fetch the result as an associative array
                                                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                                                // // Output the result
                                                if ($result) {
                                                    $attendance_status = $result['attendance_status'];
                                                    if ($attendance_status == 1) {
                                                        echo "<td>Present</td>";
                                                        $present++;
                                                    }
                                                } else {
                                                    echo "<td>Absent</td>";
                                                }
                                                $total++;

                                                // Close the database connection
                                                // $DB_con = null;
                                            }
                                            $percentage = round(($present / $total) * 100, 2);
                                            echo "<td>". $present . "</td>";
                                            echo "<td>" . $percentage . "%</td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                        echo "</table>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Ends -->

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include '../includes/footer.php' ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>

</body>

</html>