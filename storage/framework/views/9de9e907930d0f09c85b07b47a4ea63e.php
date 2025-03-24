<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hostel Management System</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon.png')); ?>">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('extra-libs/c3/c3.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/chartist/dist/chartist.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/style.min.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- Main wrapper -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- Topbar header -->
        <header class="topbar" data-navbarbg="skin6">
            <?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        <!-- Left Sidebar -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </aside>
        <!-- Page wrapper -->



        <?php $__env->startSection('content'); ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Full Details</h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zctb" class="table table-striped table-bordered no-wrap">
                                <tbody>
                                    <tr>
                                        <td colspan="3"><b>Date & Time of Registration: <?php echo e($registration->created_at); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Registration Number :</b></td>
                                        <td><?php echo e($registration->reg_no); ?></td>
                                        <td><b>Full Name :</b></td>
                                        <td><?php echo e($registration->first_name); ?> <?php echo e($registration->middle_name); ?> <?php echo e($registration->last_name); ?></td>
                                        <td><b>Email Address:</b></td>
                                        <td><?php echo e($registration->email_id); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Contact Number :</b></td>
                                        <td><?php echo e($registration->contact_no); ?></td>
                                        <td><b>Gender :</b></td>
                                        <td><?php echo e($registration->gender); ?></td>
                                        <td><b>Selected Course :</b></td>
                                        <td><?php echo e($registration->course); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Emergency Contact No. :</b></td>
                                        <td><?php echo e($registration->emergency_contact_no); ?></td>
                                        <td><b>Guardian Name :</b></td>
                                        <td><?php echo e($registration->guardian_name); ?></td>
                                        <td><b>Guardian Relation :</b></td>
                                        <td><?php echo e($registration->guardian_relation); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Guardian Contact No. :</b></td>
                                        <td colspan="6"><?php echo e($registration->guardian_contact_no); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Current Address:</b></td>
                                        <td colspan="2">
                                            <?php echo e($registration->correspondence_address); ?><br />
                                            <?php echo e($registration->correspondence_city); ?>, <?php echo e($registration->correspondence_pincode); ?><br />
                                            <?php echo e($registration->correspondence_state); ?>

                                        </td>
                                        <td><b>Permanent Address:</b></td>
                                        <td colspan="2">
                                            <?php echo e($registration->permanent_address); ?><br />
                                            <?php echo e($registration->permanent_city); ?>, <?php echo e($registration->permanent_pincode); ?><br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Room no :</b></td>
                                        <td><?php echo e($registration->room_no); ?></td>
                                        <td><b>Starting Date :</b></td>
                                        <td><?php echo e($registration->stay_from); ?></td>
                                        <td><b>Seater :</b></td>
                                        <td><?php echo e($registration->seater); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Duration:</b></td>
                                        <td><?php echo e($registration->duration); ?> Months</td>
                                        <td><b>Food Status:</b></td>
                                        <td><?php echo e(isset($registration->food_status) && $registration->food_status == 0 ? 'Not Required' : 'Required'); ?></td>
                                        <td><b>Fees Per Month :</b></td>
                                        <td>$<?php echo e($registration->fees_per_month); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><b>Total Fees (<?php echo e($registration->duration); ?> months) :
                                                <?php echo e(isset($registration->food_status) && $registration->food_status == 1 ? '$'.(($registration->fees_per_month + 211) * $registration->duration) : '$'.($registration->fees_per_month * $registration->duration)); ?></b></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- End Page wrapper  -->



    </div>
    <!-- All Jquery -->
    <script src="<?php echo e(asset('libs/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/popper.js/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/app-style-switcher.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/sidebarmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('extra-libs/c3/d3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('extra-libs/c3/c3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/chartist/dist/chartist.min.js')); ?>"></script>
    <script src="<?php echo e(asset('libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/pages/dashboards/dashboard1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('extra-libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/pages/datatable/datatable-basic.init.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\MANO\Desktop\task\hostelms\resources\views/students-profile.blade.php ENDPATH**/ ?>