<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">

<!-- JS -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
<form class="form-horizontal" action="<?php echo e(url('library/issue-books')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="form-group<?php echo e($errors->has('student_code') ? ' has-error' : ''); ?>">
        <label for="student_code" class="col-md-4 control-label">Student Code</label>

        <div class="col-md-6">
            <input id="student_code" type="text" class="form-control" name="student_code" value="<?php echo e(old('student_code')); ?>"
                placeholder="Student Code" required>

            <?php if($errors->has('student_code')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('student_code')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group<?php echo e($errors->has('book_code') ? ' has-error' : ''); ?>">
        <label for="book_code" class="col-md-4 control-label">Book Title &amp; Code (<small>Type & Search by Name/Code.
                You can Select Multiple Books (<i>Maximum 10 books</i>)</small>)</label>

        <div class="col-md-6">
            <select id="book_code" class="form-control" multiple name="book_code[]">
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($book->book_code); ?>"><?php echo e($book->title); ?> - <?php echo e($book->book_code); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group<?php echo e($errors->has('issue_date') ? ' has-error' : ''); ?>">
        <label for="issue_date" class="col-md-4 control-label">Issue Date</label>

        <div class="col-md-6">
            <input id="issue_date" class="form-control datepicker" name="issue_date" value="<?php echo e(old('issue_date')); ?>"
                placeholder="Issue Date" required>

            <?php if($errors->has('issue_date')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('issue_date')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group<?php echo e($errors->has('return_date') ? ' has-error' : ''); ?>">
        <label for="return_date" class="col-md-4 control-label">Return Date</label>

        <div class="col-md-6">
            <input id="return_date" class="form-control datepicker" name="return_date" value="<?php echo e(old('return_date')); ?>"
                placeholder="Return Date" required>

            <?php if($errors->has('return_date')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('return_date')); ?></strong>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function () {
        $('#book_code').chosen({
            max_selected_options: 10,
            display_selected_options: true,
        });
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    })
</script>