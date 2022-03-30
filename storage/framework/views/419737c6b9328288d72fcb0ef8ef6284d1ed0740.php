

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card mt-3">
                <div class="card-header">
                    <?php echo e($post->user->name); ?>

                </div>
                <div class="card-body">
                <h5 class="card-title"><?php echo e($post->title); ?></h5>
                <p class="card-text"><?php echo $post->body; ?></p>
             <?php if(auth()->user() == $post->user): ?>
             <p>
                <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-info btn-sm btn-block text-white">Edit</a>
                    <span>
                        <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm btn-block"
                            onclick="return confirm('You can not recover deleted posts. Are you sure you want to delete this post?');">Delete</button>
                            </form>
                    </span>
                </p>
                <?php endif; ?>
                </div>
                </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\forum-app\resources\views/posts/show.blade.php ENDPATH**/ ?>