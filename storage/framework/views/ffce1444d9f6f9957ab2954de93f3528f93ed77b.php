<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="jumbotron">
        <h1>Forum App</h1>
        <p class="lead">
            This is a simple web application developed with Laravel PHP Framework. <br>
            It is made for educational purpose at <a href="https://daredevops.com">Dare DevOps</a>
        </p>
    <a class="btn btn-lg btn-primary" href="<?php echo e(route('posts.index')); ?>" role="button">Browse Posts &raquo;</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\forum-app\resources\views/index.blade.php ENDPATH**/ ?>