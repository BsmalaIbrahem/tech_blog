
 <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="width:50%; margin:20px auto 0">

<?php $__currentLoopData = $favPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article style="width:100%">
        <div class="row">
        <div class="span8">
            <div class="post-link">
            <div class="post-heading">
                <h3 style="color:#e96b56; display:inline">
                    <?php echo e($favpost->post->subject); ?>

                </h3>
                <form  action="<?php echo e(route('storeFav',['post_id' => $favpost->post->id])); ?>"
                            method="post" style="display:inline-block; float:right">
                    <?php echo csrf_field(); ?>
                    <button type="submit" style="border:0; background:white; font-size:15px">
                        <i class="icon-heart"></i>
                    </button>
                </form>

            </div>
            </div>
            <div class="meta-post">
            <ul>
                <li><i class="icon-link"></i></li>
                <li>By <a href="#" class="author"><?php echo e($favpost->post->admin->name); ?></a></li>
                <li>On <a href="#" class="date"><?php echo e($favpost->post->updated_at); ?></a></li>
                <li>Tag: <a href="#"><?php echo e($favpost->post->tag->name); ?></a></li>
            </ul>
            </div>
            <div class="post-entry">
            <?php ($content = ""); ?>
            <?php for($i =0; $i<strlen($favpost->post->content); $i++): ?>

                <?php if($i == 300): ?>
                    <?php break; ?>
                <?php endif; ?>
                <?php ($content .=$favpost->post->content[$i]); ?>
            <?php endfor; ?>
            <p><?php echo e($content); ?> ........</p>
            <a href="<?php echo e(route('showPost', ['id'=> $favpost->post->id])); ?>" class="readmore">
                Read more <i class="icon-angle-right"></i>
            </div>
        </div>
        </div>
    </article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/showFav.blade.php ENDPATH**/ ?>