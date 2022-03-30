<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4">
        <h2><?php echo e($post->title); ?></h2> <br>
        <h5>Posted by <strong><?php echo e($post->user->name); ?></strong></h5>

            <p class="card-text"><?php echo Str::limit($post->body, 150); ?></p>

          <p>
            <a class="btn btn-primary" href="<?php echo e(route('posts.show', $post)); ?>" role="button">View details &raquo;</a>
          </p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        No Posts Yet click &nbsp; <a href="<?php echo e(route('posts.create')); ?>">here</a> &nbsp; to create one
        <?php endif; ?>

      </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\forum-app\resources\views/posts/index.blade.php ENDPATH**/ ?>