<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <h5 class="card-header d-flex justify-content-between align-items-center">
                    <?php echo e(__('Dashboard')); ?>

                    <a class="btn btn-sm btn-primary" href="<?php echo e(url('add')); ?>"><?php echo e(__('Add')); ?></a>
                    <!-- Wrap with <div>...buttons...</div> if you have multiple buttons -->
                </h5>
                <div class="card-body p-0 table-responsive">
                    <table class="table table-bordered table-striped table-hover m-0">
                        <thead>
                            <th>#</th>
                            <th>User id</th>
                            <th>Name</th>
                            <th>Contents</th>
                        </thead>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post->id); ?></td>
                            <td><?php echo e($post->user_id); ?></td>
                            <td><?php echo e($post->name); ?></td>
                            <td><?php echo e($post->contents); ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="<?php echo e(url('post/'.$post->id)); ?>"><?php echo e(__('Details')); ?></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/arakihinata/Downloads/laravel-sample-master 2/resources/views/home.blade.php ENDPATH**/ ?>