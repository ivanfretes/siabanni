<?php $__env->startSection('title', 'Add New Expense'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-8" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">Add New Expense</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form class="form-horizontal" action="<?php echo e(url('accounts/create-expense')); ?>" method="post">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                          <label for="name" class="col-md-4 control-label">Sector Name</label>

                          <div class="col-md-6">
                              <select  class="form-control" name="name">
                                <?php $__currentLoopData = $sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option><?php echo e($sector->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>

                              <?php if($errors->has('name')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('name')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group<?php echo e($errors->has('amount') ? ' has-error' : ''); ?>">
                          <label for="amount" class="col-md-4 control-label">Amount</label>

                          <div class="col-md-6">
                              <input id="amount" type="number" class="form-control" name="amount" value="<?php echo e(old('amount')); ?>" placeholder="Amount" required>

                              <?php if($errors->has('amount')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('amount')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                          <label for="description" class="col-md-4 control-label">Description</label>

                          <div class="col-md-6">
                              <textarea rows="3" id="description" class="form-control" name="description" placeholder="Description" required><?php echo e(old('description')); ?></textarea>

                              <?php if($errors->has('description')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('description')); ?></strong>
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