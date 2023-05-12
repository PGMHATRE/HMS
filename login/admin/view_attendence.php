<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();


    if(isset($_POST['mark'])){
        $mark_val=$_POST['mark'];
        $reg = $_POST['regno'];
        $adn="UPDATE attendance SET attendance_status='$mark_val' WHERE regNo=?";
            $stmt= $mysqli->prepare($adn);
            $stmt->bind_param('s',$reg);
            $stmt->execute();
            $stmt->close();	   

        if($mark_val == '1'){
            echo "<script>alert('Student is present');</script>" ;
        }
        else{
            echo "<script>alert('Student is Absent');</script>" ;
        }
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
    var popUpWin=0;
    function popUpWindow(URLStr, left, top, width, height){
        if(popUpWin) {
         if(!popUpWin.closed) popUpWin.close();
            }
            popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include 'includes/navigation.php'?>
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
                <?php include 'includes/sidebar.php'?>
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
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Student's Account</h4>
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
                        <div class="card">
                            <div class="card-body">
                            <a href="attendance_logs.php"><button type="button" class="btn btn-block btn-md btn-success">Show Attendance Logs</button></a>
                            <hr>
                                <h6 class="card-subtitle">Displaying all the registered student's account.</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-hover table-bordered no-wrap">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Sr no</th>
                                                <th>En.No.</th>
                                                <th>Student's Email</th>
                                                <th>Student GPS image</th>
                                                <th>Present</th>
                                                <th>Absent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php	
                                        $aid=$_SESSION['id'];
                                        $currentDate = date('Y-m-d');
                                        //$dateOnly = substr($row->date, 0, 10);
                                        //WHERE date='$dateOnly'
                                        $ret="SELECT * from attendance ";
                                        $stmt= $mysqli->prepare($ret) ;
                                        $stmt->execute();
                                        $res=$stmt->get_result();
                                        $cnt=1;
                                        
                                        while($row=$res->fetch_object())
                                        {
                                            $currentDate = date('Y-m-d');
                                            $dateOnly = substr($row->date, 0, 10);
                                            $buttonDisabled = ($row->attendance_status != NULL && $dateOnly == $currentDate) ? 'disabled' : ''; 
                                                ?>
                                               
                                        <tr><td><?php echo $cnt;;?></td>
                                        <td><?php echo $row->regNo;?></td>
                                        <td><?php echo $row->email;?> <?php // echo $row->middleName;?> <?php // echo $row->lastName;?></td>
                                        <td>
                                            <img src="./attendance/<?php echo $row->image; ?>" alt="" style="max-width: 180px"  onclick="zoomIn(event)">
                                       </td>
                                        <td> 
                                            <form action="" method="post">
                                                <input type="hidden" name="regno"  value="<?php echo $row->regNo;?>" >
                                                <button type="submit" value="1" name="mark" class="btn btn-info btn-lg" <?php echo $buttonDisabled; ?>>
                                                    <span class="glyphicon glyphicon-remove-circle"></span> Present
                                                </button>
                                            </form>
                                        </td>

                                        <td> 
                                            <form action="" method="post">
                                                <input type="hidden" name="regno"  value="<?php echo $row->regNo;?>" >
                                                <button type="submit" value="2" name="mark" class="btn btn-danger btn-lg" <?php echo $buttonDisabled; ?>>
                                                    <span class="glyphicon glyphicon-remove-circle"></span> Absent
                                                </button>
                                            </form>
                                        </td>
                                        </tr>
                                            <?php
                                                $cnt=$cnt+1;
                                            } ?>
									</tbody>
                                    </table>
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