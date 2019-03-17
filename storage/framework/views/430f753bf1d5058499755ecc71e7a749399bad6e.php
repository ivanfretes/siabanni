<?php echo e($books->links()); ?>

<div class="table-responsive">
  <table class="table table-bordered table-data-div table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Book Title</th>
        <th scope="col">Book Code</th>
        <th scope="col">Type</th>
        <th scope="col">Borrower Name</th>
        <th scope="col">Borrower Code</th>
        <th scope="col">Issue Date</th>
        <th scope="col">Return Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(($loop->index + 1)); ?></td>
        <td><?php echo e($book->title); ?></td>
        <td><?php echo e($book->book_code); ?></td>
        <td><?php echo e($book->type); ?></td>
        <td><?php echo e($book->name); ?></td>
        <td><?php echo e($book->student_code); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($book->issue_date)->format('d/m/Y')); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($book->return_date)->format('d/m/Y')); ?></td>
        <td>
          <form action="<?php echo e(url('library/save_as_returned')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="issue_id" value="<?php echo e($book->id); ?>">
            <input type="hidden" name="book_code" value="<?php echo e($book->book_code); ?>">
            <button class="btn btn-xs btn-success">Save as Returned</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php echo e($books->links()); ?>

