<?php $__env->startSection('title', 'All GPA Systems'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-8" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">All GPA Systems</div>

                <div class="panel-body">
                  <?php if(session('status')): ?>
                    <div class="alert alert-success">
                      <?php echo e(session('status')); ?>

                    </div>
                  <?php endif; ?>
                  <?php
                    $gpaName = "";
                  ?>
                  <?php $__currentLoopData = $gpas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                      if($g->grade_system_name != $gpaName){
                        $gpaName = $g->grade_system_name;
                      } else {
                        continue;
                      }
                    ?>
                    <h4><?php echo e($g->grade_system_name); ?></h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Point</th>
                            <th scope="col">From Mark</th>
                            <th scope="col">To Mark</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $gpas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gpa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($gpa->grade_system_name != $gpaName): ?>
                            <?php continue; ?>
                          <?php endif; ?>
                          <tr>
                            <td><?php echo e(($loop->index + 1)); ?></td>
                            <td><?php echo e($gpa->grade); ?></td>
                            <td><?php echo e($gpa->point); ?></td>
                            <td><?php echo e($gpa->from_mark); ?></td>
                            <td><?php echo e($gpa->to_mark); ?></td>
                            
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>