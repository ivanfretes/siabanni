<div class="table-responsive">
  <table class="table table-bordered table-data-div table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">File Name</th>
        <th scope="col">Is Active</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(($loop->index + 1)); ?></td>
        <td><a href="<?php echo e(url($file->file_path)); ?>" target="_blank"><?php echo e($file->title); ?></a></td>
        <td><?php echo e(($file->active === 1)?'Yes':'No'); ?></td>
        <td>
          <a href="<?php echo e(url('academic/remove/'.$upload_type.'/'.$file->id)); ?>" class="btn btn-danger btn-sm" role="button"><i class="material-icons">delete</i> Remove</a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
