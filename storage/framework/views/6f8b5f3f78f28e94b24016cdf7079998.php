<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon.png')); ?>">
    <title>Hostel Management System</title>
    <link href="<?php echo e(asset('extra-libs/c3/c3.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/chartist/dist/chartist.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/style.min.css')); ?>" rel="stylesheet">
</head>

<body>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Student's Account</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle">Displaying all the registered student's account.</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-hover table-bordered no-wrap">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Reg. No.</th>
                                                <th>Student's Name</th>
                                                <th>Gender</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($index + 1); ?></td>
                                                <td><?php echo e($user->regNo); ?></td>
                                                <td><?php echo e($user->firstName); ?> <?php echo e($user->middleName); ?> <?php echo e($user->lastName); ?></td>
                                                <td><?php echo e($user->gender); ?></td>
                                                <td><?php echo e($user->contactNo); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td>
                                                    <form action="<?php echo e(route('student.accounts.delete', $user->id)); ?>" method="POST" onsubmit="return confirm('Do you want to delete?');">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" style="border:none; background:none; color:red;">
                                                            <i class="icon-close" title="Delete Record"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
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

</html><?php /**PATH C:\Users\MANO\Desktop\task\hostelms\resources\views/view-students.blade.php ENDPATH**/ ?>