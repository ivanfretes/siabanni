<?php $__env->startSection('title', 'Add Syllabus'); ?>
<!-- Main Quill library -->


<!-- Theme included stylesheets -->


<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            <?php echo $__env->make('layouts.leftside-menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php $__env->startComponent('components.file-uploader',['upload_type'=>'syllabus']); ?>
                    <?php echo $__env->renderComponent(); ?>
                    <?php $__env->startComponent('components.uploaded-files-list',['files'=>$files,'upload_type'=>'syllabus']); ?>
                    <?php echo $__env->renderComponent(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>