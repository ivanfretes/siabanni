<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default" style="border-top: 0px;">
                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="row">
                      <div class="page-panel-title">Dashboard</div>
                      <div class="col-sm-2">
                        <div class="card text-white bg-primary mb-3">
                          <div class="card-header">Total Students - <b><?php echo e($totalStudents); ?></b></div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="card text-white bg-success mb-3">
                          <div class="card-header">Total Teachers - <b><?php echo e($totalTeachers); ?></b></div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card text-white bg-dark mb-3">
                          <div class="card-header">Total Types of Books In Library - <b><?php echo e($totalBooks); ?></b></div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="card text-white bg-danger mb-3">
                          <div class="card-header">Total Classes - <b><?php echo e($totalClasses); ?></b></div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="card text-white bg-info mb-3">
                          <div class="card-header">Total Sections - <b><?php echo e($totalSections); ?></b></div>
                        </div>
                      </div>
                    </div>
                    <p></p>
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="panel panel-default" style="background-color: rgba(242,245,245,0.8);">
                          <div class="panel-body">
                            <h3>Welcome to <?php echo e(Auth::user()->school->name); ?></h3>
                            Your presence and cooperation will help us to improve the education system of our organization.
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="page-panel-title">Active Exams</div>
                          <div class="panel-body">
                            <?php if(count($exams) > 0): ?>
                            <table class="table">
                              <tr>
                                <th>Exam Name</th>
                                <th>Notice Published</th>
                                <th>Result Published</th>
                              </tr>
                              <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($exam->exam_name); ?></td>
                                <td><?php echo e(($exam->notice_published === 1)?'Yes':'No'); ?></td>
                                <td><?php echo e(($exam->result_published === 1)?'Yes':'No'); ?></td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                            <?php else: ?>
                              No Active Examination
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="panel panel-default">
                          <div class="page-panel-title">Notices</div>
                          <div class="panel-body pre-scrollable">
                            <?php if(count($notices) > 0): ?>
                              <div class="list-group">
                              <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url($notice->file_path)); ?>" class="list-group-item" target="_blank"><?php echo e($notice->title); ?></a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                            <?php else: ?>
                              No New Notice
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="panel panel-default">
                          <div class="page-panel-title">Events</div>
                          <div class="panel-body pre-scrollable">
                            <?php if(count($events) > 0): ?>
                              <div class="list-group">
                              <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url($event->file_path)); ?>" class="list-group-item" target="_blank"><?php echo e($event->title); ?></a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                            <?php else: ?>
                              No New Event
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="panel panel-default">
                          <div class="page-panel-title">Routines</div>
                          <div class="panel-body pre-scrollable">
                            <?php if(count($routines) > 0): ?>
                              <div class="list-group">
                              <?php $__currentLoopData = $routines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $routine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url($routine->file_path)); ?>" class="list-group-item" target="_blank"><?php echo e($routine->title); ?></a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                            <?php else: ?>
                              No New Routine
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="panel panel-default">
                          <div class="page-panel-title">Syllabus</div>
                          <div class="panel-body pre-scrollable">
                            <?php if(count($syllabuses) > 0): ?>
                              <div class="list-group">
                                <?php $__currentLoopData = $syllabuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syllabus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url($syllabus->file_path)); ?>" class="list-group-item" target="_blank"><?php echo e($syllabus->title); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                            <?php else: ?>
                              No New Syllabus
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>