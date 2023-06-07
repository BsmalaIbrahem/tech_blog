<?php if(@$admin): ?>
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<div style="width:50%; margin:20px auto 0">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article style="width:100%">
        <div class="row">
        <div class="span8">
            <div class="post-link">
            <div class="post-heading">
                <h3 style="color:#e96b56; display:inline">
                    <?php echo e($post->subject); ?>

                </h3>
                    <?php if(@auth()->guard('admin')->user()->id == $post->admin_id): ?>
                    <ul style="display:inline-block"class="nav topnav" >
                        <li class="dropdown">
                            <a href="">
                                <i style="color:#e96b56;" class="icon-ellipsis-horizontal"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo e(route('admin.editPost', ['id' => $post->id])); ?>">Update</a></li>
                                    <li>
                                        <form action="<?php echo e(route('admin.deletePost', ['id'=>$post->id])); ?>"method="post">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit">Delete</button>
                                        </form>
                                    </li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                    <?php elseif(! @$admin): ?>
                        <form  action="<?php echo e(route('storeFav',['post_id' => $post->id])); ?>"
                                 method="post" style="display:inline-block; float:right">
                            <?php echo csrf_field(); ?>
                            <?php if($post->favourite->isEmpty() || ! auth()->check()): ?>
                            <button type="submit" style="border:0; background:white; font-size:15px">
                                <i class="icon-heart-empty"></i>
                            <?php else: ?>
                            <button type="submit" style="border:0; background:white; font-size:15px">
                                <i class="icon-heart"></i>
                            </button>
                            <?php endif; ?>
                            </button>
                        </form>
                    <?php endif; ?>

            </div>
            </div>
            <div class="meta-post">
            <ul>
                <li><i class="icon-link"></i></li>
                <li>By <a href="#" class="author"><?php echo e($post->admin->name); ?></a></li>
                <li>On <a href="#" class="date"><?php echo e($post->updated_at); ?></a></li>
                <li>Tag: <a href="#"><?php echo e($post->tag->name); ?></a></li>
            </ul>
            </div>
            <div class="post-entry">
            <p><?php echo e($post->content); ?></p>
            <?php if($post->photo): ?>
                <img style="width:300px; display:block; margin:auto" src="<?php echo e(asset('/storage/posts/'. $post->photo)); ?>">
            <?php endif; ?>
            </div>
        </div>
        </div>
    </article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/showPostDetails.blade.php ENDPATH**/ ?>