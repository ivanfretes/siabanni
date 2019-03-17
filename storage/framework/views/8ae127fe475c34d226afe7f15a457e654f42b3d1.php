<?php $__env->startSection('title', 'Admins'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('create-school')); ?>"><i class="material-icons">gamepad</i> Manage School</a>
                </li>
            </ul>
        </div>
        <div class="col-md-8" id="main-container">
            <h2>Admins</h2>
            <div class="panel panel-default">
              <?php if(count($admins) > 0): ?>
                <div class="panel-body">
                    <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                    </tr>   
                    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr> 
                        <td>
                            <?php echo e($admin->name); ?>

                        </td>
                        <td><?php echo e($admin->student_code); ?></td>
                        <td><?php echo e($admin->email); ?></td>
                        <td><?php echo e($admin->phone_number); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
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