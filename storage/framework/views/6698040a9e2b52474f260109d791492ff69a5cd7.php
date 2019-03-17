<?php $__env->startSection('title', 'Add GPA System'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-8" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">Add GPA System</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" action="<?php echo e(url('create-gpa')); ?>" method="post">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group<?php echo e($errors->has('grade_system_name') ? ' has-error' : ''); ?>">
                          <label for="grade_system_name" class="col-md-4 control-label">Grade System Name</label>

                          <div class="col-md-6">
                              <input id="grade_system_name" type="text" class="form-control" name="grade_system_name" value="<?php echo e(old('grade_system_name')); ?>" placeholder="Grade System Name" required>

                              <?php if($errors->has('grade_system_name')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('grade_system_name')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group<?php echo e($errors->has('grade') ? ' has-error' : ''); ?>">
                          <label for="grade" class="col-md-4 control-label">Grade</label>

                          <div class="col-md-6">
                              <input id="grade" type="text" class="form-control" name="grade" value="<?php echo e(old('grade')); ?>" placeholder="A+, A, A-, B+, ..." required>

                              <?php if($errors->has('grade')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('grade')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group<?php echo e($errors->has('point') ? ' has-error' : ''); ?>">
                          <label for="point" class="col-md-4 control-label">Grade Point</label>

                          <div class="col-md-6">
                              <input id="point" type="text" class="form-control" name="point" value="<?php echo e(old('point')); ?>" placeholder="5.00, 4.50, ..." required>

                              <?php if($errors->has('point')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('point')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group<?php echo e($errors->has('from_mark') ? ' has-error' : ''); ?>">
                          <label for="from_mark" class="col-md-4 control-label">From Mark</label>

                          <div class="col-md-6">
                              <input id="from_mark" type="text" class="form-control" name="from_mark" value="<?php echo e(old('from_mark')); ?>" placeholder="Example: 80" required>

                              <?php if($errors->has('from_mark')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('from_mark')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group<?php echo e($errors->has('to_mark') ? ' has-error' : ''); ?>">
                          <label for="to_mark" class="col-md-4 control-label">To Mark</label>

                          <div class="col-md-6">
                              <input id="to_mark" type="text" class="form-control" name="to_mark" value="<?php echo e(old('to_mark')); ?>" placeholder="Example: 90" required>

                              <?php if($errors->has('to_mark')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('to_mark')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" class="btn btn-danger">Save</button>
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