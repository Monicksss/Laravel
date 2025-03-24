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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon.png')); ?>">
    <title>Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('extra-libs/c3/c3.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/chartist/dist/chartist.min.css')); ?>" rel="stylesheet">
    <!-- This page plugin CSS -->
    <link href="<?php echo e(asset('extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('dist/css/style.min.css')); ?>" rel="stylesheet">
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
            <?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Change Password</h4>
                        <?php if(session('success')): ?>
                            <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show"
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Info - </strong> <?php echo e(session('success')); ?>

                            </div>
                        <?php elseif(session('error')): ?>
                            <div class="alert alert-secondary alert-dismissible bg-danger text-white border-0 fade show"
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Info - </strong> <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <form method="POST" action="<?php echo e(route('change-password')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Current Password</h4>
                                    <div class="form-group">
                                        <input type="password" name="oldpassword" id="oldpassword" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">New Password</h4>
                                    <div class="form-group">
                                        <input type="password" name="newpassword" id="newpassword" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Confirm Password</h4>
                                    <div class="form-group">
                                        <input type="password" name="newpassword_confirmation" id="cpassword" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class="card-subtitle"><code>Last Updated On: </code> <?php echo e($user->updation_date); ?> </h6>
                    </div>

                    <div class="form-actions">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Make Changes</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('libs/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/popper.js/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- apps -->
    <script src="<?php echo e(asset('dist/js/app-style-switcher.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/sidebarmenu.js')); ?>"></script>
    <!-- Custom JavaScript -->
    <script src="<?php echo e(asset('dist/js/custom.min.js')); ?>"></script>
    <!-- This page JavaScript -->
    <script src="<?php echo e(asset('extra-libs/c3/d3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('extra-libs/c3/c3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/chartist/dist/chartist.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/pages/dashboards/dashboard1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('extra-libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/pages/datatable/datatable-basic.init.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\MANO\Desktop\task\hostelms\resources\views/settings.blade.php ENDPATH**/ ?>