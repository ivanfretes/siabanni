<?php $__env->startSection('title', 'Teachers'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
              <?php if(count($users) > 0): ?>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="page-panel-title">List of all <?php echo e(ucfirst($user->role)); ?>s</div>
                 <?php if($loop->first) break; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php $__env->startComponent('components.users-list',['users'=>$users,'current_page'=>$current_page,'per_page'=>$per_page]); ?>
                    <?php echo $__env->renderComponent(); ?>
                </div>
              <?php else: ?>
                <div class="panel-body">
                    No Related Data Found.
                </div>
              <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>