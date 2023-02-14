<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<?php if(Session::has('success')): ?>
			<p class="text-success"><?php echo e(session('success')); ?></p>
			<?php endif; ?>
			<div class="card">
				<h5 class="card-header">
					ユーザー名：<?php echo e($detail->name); ?>

				</h5>
				<div class="card-body">
					<?php echo e($detail->contents); ?>

				</div>
			</div>

			<!-- Fetch Comments -->
			<div class="card my-4">
				<h5 class="card-header"><span><?php echo e(count($detail->comments)); ?></span> コメント</h5>
				<div class="card-body">
					<?php if($detail->comments): ?>
					<?php $__currentLoopData = $detail->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<blockquote class="blockquote">
						<p class="mb-0"><?php echo e($comment->comment); ?></p>
					</blockquote>
					<hr />
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/arakihinata/Downloads/laravel-sample-master 2/resources/views/detail.blade.php ENDPATH**/ ?>