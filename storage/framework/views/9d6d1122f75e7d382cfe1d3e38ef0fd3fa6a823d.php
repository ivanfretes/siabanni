<div class="table-responsive">
  <table class="table table-bordered table-data-div table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Fee Name</th>
        <th scope="col">Select</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(($loop->index + 1)); ?></td>
        <td><?php echo e($fee->fee_name); ?></td>
        <td>
          <div class="form-check">
            <input class="form-check-input position-static" type="checkbox" value="<?php echo e($fee->fee_name); ?>" name="isSelected" aria-label="Select">
          </div>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
