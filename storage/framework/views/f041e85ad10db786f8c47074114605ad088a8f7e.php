<?php if(isset($user)): ?>
  <?php $__env->startSection('title', $user->name); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
              <?php if(isset($user)): ?>
                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php $__env->startComponent('components.user-profile',['user'=>$user]); ?>
                    <?php echo $__env->renderComponent(); ?>
                </div>
              <?php else: ?>
                <div class="panel-body">
                    No Related Data Found.
                </div>
              <?php endif; ?>
            </div>
            <br/>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>