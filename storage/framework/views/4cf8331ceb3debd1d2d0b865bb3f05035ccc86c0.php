<?php $__env->startSection('title', 'Change Password'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?php if(Auth::user()->role !== 'master'): ?>
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php else: ?>
        <div class="col-md-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('create-school')); ?>"><i class="material-icons">gamepad</i> Manage School</a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">
                    Change Password
                </div>
                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session('error-status')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error-status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" action="<?php echo e(url('user/config/change_password')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('old_password') ? ' has-error' : ''); ?>">
                            <label for="old_password" class="col-md-4 control-label">Old Password</label>

                            <div class="col-md-6">
                                <input id="old_password" type="text" class="form-control" name="old_password" value="<?php echo e(old('old_password')); ?>" required>

                                <?php if($errors->has('old_password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('old_password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('new_password') ? ' has-error' : ''); ?>">
                            <label for="new_password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new_password" type="text" class="form-control" name="new_password" value="<?php echo e(old('new_password')); ?>" required>

                                <?php if($errors->has('new_password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('new_password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>