<?php echo e($books->links()); ?>

<div class="table-responsive">
  <table class="table table-bordered table-data-div table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Book Title</th>
        <th scope="col">Book Code</th>
        <th scope="col">Author</th>
        <th scope="col">Type</th>
        <th scope="col">Quantity</th>
        <th scope="col">About Book</th>
        <th scope="col">For Class</th>
        <th scope="col">Price</th>
        <th scope="col">Rack No.</th>
        <th scope="col">Row No.</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(($loop->index + 1)); ?></td>
        <td><?php echo e($book->title); ?></td>
        <td><?php echo e($book->book_code); ?></td>
        <td><?php echo e($book->author); ?></td>
        <td><?php echo e($book->type); ?></td>
        <td><?php echo e($book->quantity); ?></td>
        <td><?php echo e($book->about); ?></td>
        <td><?php echo e($book->class->class_number); ?></td>
        <td><?php echo e($book->price); ?></td>
        <td><?php echo e($book->rackNo); ?></td>
        <td><?php echo e($book->rowNo); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php echo e($books->links()); ?>

