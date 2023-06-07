<div  style="width:50%;margin:20px auto; background:white;padding:5px; padding-top:30px;" >
    <div class="row">
        <div class="span8">
            <h4 class="text-center">Add Tag</h4>
            <div ><?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
            <form action="<?php echo e(route('admin.storeTag')); ?>" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <div class="">
                        <input type="text"  name="name"  placeholder="Tag Name" style="width:60%;display:block; margin:10px auto"/>

                    </div>
                <div class="span8 form-group">
                    <div class="text-center" >
                        <input type="file" name="photo">
                        <button class="btn btn-theme btn-medium margintop10" type="submit">Add tag</button>
                    </div>
                </div>
        </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/admin/addTag.blade.php ENDPATH**/ ?>