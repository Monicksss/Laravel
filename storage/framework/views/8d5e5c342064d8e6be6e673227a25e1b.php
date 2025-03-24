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
    <link href="<?php echo e(asset('dist/css/style.min.css')); ?>" rel="stylesheet">
</head>

<body>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add Rooms</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('rooms.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Room Number</h4>
                                    <div class="form-group">
                                        <input type="text" name="room_no" placeholder="Enter Room Number" id="room_no" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Seater</h4>
                                    <div class="form-group mb-4">
                                        <select class="custom-select mr-sm-2" id="seater" name="seater" required>
                                            <option value="">Select Seater...</option>
                                            <option value="1">Single Seater</option>
                                            <option value="2">Two Seater</option>
                                            <option value="3">Three Seater</option>
                                            <option value="4">Four Seater</option>
                                            <option value="5">Five Seater</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Total Fees</h4>
                                    <div class="form-group">
                                        <input type="number" name="fees" id="fees" placeholder="Enter Total Fees" required class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Insert</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
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
</body>
</html>
<?php /**PATH C:\Users\MANO\Desktop\task\hostelms\resources\views/create-room.blade.php ENDPATH**/ ?>