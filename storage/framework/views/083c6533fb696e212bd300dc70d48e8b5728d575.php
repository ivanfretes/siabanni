<?php $__env->startSection('title', 'Add Form Field'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">Add Form Field
              </div>
                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form class="form-horizontal" action="<?php echo e(url('fees/create')); ?>" method="post">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group<?php echo e($errors->has('fee_name') ? ' has-error' : ''); ?>">
                          <label for="fee_name" class="col-md-4 control-label">Form Field Name</label>

                          <div class="col-md-6">
                              <input id="fee_name" type="text" class="form-control" name="fee_name" value="<?php echo e(old('fee_name')); ?>" placeholder="Form Field Name" required>

                              <?php if($errors->has('fee_name')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('fee_name')); ?></strong>
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