<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div  style="width:50%;margin:20px auto; background:white;padding:5px; padding-top:30px;" >
    <div class="row">
        <div class="span8">
        <h4 class="text-center">Update Tag</h4>
        <div ><?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        <form action="<?php echo e(route('admin.updateTag', ['id' => $tag->id])); ?>" method="post" role="form" class="contactForm" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="">
                <input type="text"  name="name" value="<?php echo e($tag->name); ?>"  placeholder="Tag Name" style="width:60%;display:block; margin:10px auto"/>

            </div>
            <div class="span8 form-group">
                <div class="text-center" >
                <img src="<?php echo e(asset('storage/tags/'. $tag->photo)); ?>" style="height:200px"  id="Image">
                <input type="file" id="file" name="photo">
                <textarea style="display:none" readonly="" id="imagesrc" name="Oldphoto" ><?php echo e($tag->photo); ?></textarea>
                <button class="btn btn-theme btn-medium margintop10" type="submit">update tag</button>
                </div>
            </div>
        </form>
        </div>

</div>
</div>
<script src="<?php echo e(asset('js/image.js')); ?>"></script>
<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/admin/updateTag.blade.php ENDPATH**/ ?>