<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <h2 style="color: blue;"><?php echo e($category->name); ?></h2>
            <div class="jumbotron">
                 <div class="row">
                <?php $__currentLoopData = App\Models\Food::where('category_id',$category->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                   
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($food->image); ?>" width="200" height="155">
                    <h5 class="text-center" style="margin-right: 100px;">
                    	<?php echo e($food->name); ?>

                        <span>$<?php echo e($food->price); ?></span>
                    	


                    </h5>
                       <p class="text-center">
                        <a href="<?php echo e(route('food.view',[$food->id])); ?>">
                        <button class="btn btn-outline-danger" style="margin-right: 100px;">
                          View
                        </button>

                       </a>
                     </p>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </div>

        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/restaurant-app/resources/views/food/list.blade.php ENDPATH**/ ?>