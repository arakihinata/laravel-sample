<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="alert alert-danger"><?php echo e($err); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(url('/postStore')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label>Contents<span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" name="contents" autocomplete="contents" autofocus
                        required><?php echo e(old('contents')); ?></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                    <a href="<?php echo e(url('home')); ?>" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/arakihinata/Downloads/laravel-sample-master 2/resources/views/post/create.blade.php ENDPATH**/ ?>