<form class="form-horizontal" action="<?php echo e(url('exams/create')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="form-group<?php echo e($errors->has('term') ? ' has-error' : ''); ?>">
        <label for="term" class="col-md-4 control-label">Terms</label>

        <div class="col-md-6">
            <select id="term" class="form-control" name="term">
               <option value="1">1st Term</option>
               <option value="2">2nd Term</option>
               <option value="3">3rd Term</option>
            </select>

            <?php if($errors->has('term')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('term')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group<?php echo e($errors->has('exam_name') ? ' has-error' : ''); ?>">
        <label for="exam_name" class="col-md-4 control-label">Examination Name</label>

        <div class="col-md-6">
            <input id="exam_name" type="text" class="form-control" name="exam_name" value="<?php echo e(old('exam_name')); ?>" placeholder="Semester 1 Exam 2018, Final Exam 2019, ..." required>

            <?php if($errors->has('exam_name')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('exam_name')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group<?php echo e($errors->has('exam_start_date') ? ' has-error' : ''); ?>">
        <label for="exam_start_date" class="col-md-4 control-label">Start Date</label>

        <div class="col-md-6">
            <input id="exam_start_date" type="text" class="form-control" name="exam_start_date" value="<?php echo e(old('exam_start_date')); ?>" placeholder="5th April..." required>

            <?php if($errors->has('exam_start_date')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('exam_start_date')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group<?php echo e($errors->has('exam_end_date') ? ' has-error' : ''); ?>">
        <label for="exam_end_date" class="col-md-4 control-label">End Date</label>

        <div class="col-md-6">
            <input id="exam_end_date" type="text" class="form-control" name="exam_end_date" value="<?php echo e(old('exam_end_date')); ?>" placeholder="20th April..." required>

            <?php if($errors->has('exam_end_date')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('exam_end_date')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group<?php echo e($errors->has('classes') ? ' has-error' : ''); ?>">
        <label for="classes" class="col-md-4 control-label">For Class</label>

        <div class="col-md-6">
            <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="classes[]" value="<?php echo e($class->id); ?>"> <?php echo e($class->class_number); ?>

                    </label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($errors->has('classes')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('classes')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <a href="javascript:history.back()" class="btn btn-danger" style="margin-right: 2%;" role="button">Cancel</a>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
</form>
