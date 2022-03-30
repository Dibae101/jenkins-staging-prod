

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h4 class="text-center">Create A Post</h4>
          <hr>
      <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" required class="form-control" id="exampleFormControlInput1" placeholder="Title of you post here..">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Post Content</label>
                <textarea class="form-control" required id="exampleFormControlTextarea1" rows="8" name="body"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Submit The Post">
            </div>
            </form>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\forum-app\resources\views/posts/create.blade.php ENDPATH**/ ?>