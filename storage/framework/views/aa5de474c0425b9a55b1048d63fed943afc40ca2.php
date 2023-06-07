<div class="container " style="width:80%">
<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="span3">
        <div class="service-box aligncenter flyLeft">
            <div class="icon">
            <?php if(@$admin): ?>
            <a href="<?php echo e(route('admin.postsByTag', ['tag_id' => $tag->id])); ?>">
                <img class="circled" style="width:100%; height:200px" src="<?php echo e(asset('storage/tags/'.$tag->photo)); ?>">
            </a>
            <?php else: ?>
            <a href="<?php echo e(route('postsByTag', ['tag_id' => $tag->id])); ?>">
                <img class="circled" style="width:100%; height:200px" src="<?php echo e(asset('storage/tags/'.$tag->photo)); ?>">
            </a>
            <?php endif; ?>
            </div>
            <h5><span class="colored"><?php echo e($tag->name); ?></span></h5>
            <?php if(@$admin): ?>
                <a  href="<?php echo e(route('admin.editTag', ['id' => $tag->id])); ?>">update</a>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/showTags.blade.php ENDPATH**/ ?>