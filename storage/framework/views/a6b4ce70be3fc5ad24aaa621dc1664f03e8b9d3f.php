<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div style="width:50%; padding-top:20px; background:white; margin:auto">
    <div class="row">
        <div class="span8">
        <h3 class="text-center">Add post</h3>

        <div id="errormessage">
            <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <form action="" method="post" role="form" class="contactForm"enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
            <div class="row">
            <div class="span8" style="width:90%" style="">
            <div style="padding-left:70px">
                <input type="text" name="subject" value="<?php echo e($post->subject); ?>" style=" width:43%" id="subject" placeholder="Subject"/>
                <select value="<?php echo e($post->tag->name); ?>" name="tag_id" style="background:white; width:48%; height:40px; border:1px solid #33333370;">
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <textarea name="content" rows="5" data-rule="required"placeholder="Write post">
                    <?php echo e($post->content); ?>

                </textarea>
            </div>
            </div>
</div>
            <div class="span8 form-group">

                <div class="text-center">
                <?php if($post->photo): ?>
                <img src="<?php echo e(asset('storage/posts/'. $post->photo)); ?>" style="height:200px"  id="Image">
                <input type="file" id="file" name="photo">
                <textarea style="display:none" readonly="" id="imagesrc" name="Oldphoto" ><?php echo e($tag->photo); ?></textarea>
                <script src="<?php echo e(asset('js/image.js')); ?>"></script>
                <?php endif; ?>
                <button class="btn btn-theme btn-medium margintop10" type="submit">Post</button>
                </div>
            </div>
            </div>
        </form>
        </div>
</div>


<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/admin/updatePost.blade.php ENDPATH**/ ?>