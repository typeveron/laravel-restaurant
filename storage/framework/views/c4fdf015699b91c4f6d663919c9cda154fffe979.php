<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(Session::has('message')): ?>
            <div class= "alert alert-success">
            <?php echo e(Session::get('message')); ?>

            </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">All Food
                    <span class="float-right">
                        <a href="<?php echo e(route('food.create')); ?>">
                            <button class="btn btn-outline-secondary">Add Food</button>
                        </a>
                    </span>
                </div>
                 
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php if(count($foods)>0): ?>
                            <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td><img src="<?php echo e(asset('images')); ?>/<?php echo e($food->image); ?>" width="100"></td>
                            <td><?php echo e($food->name); ?></td>
                            <td><?php echo e($food->description); ?></td>
                            <td>$<?php echo e($food->price); ?></td>
                            <td><?php echo e($food->category->name); ?></td>
                            <td><a href="<?php echo e(route('food.edit', [$food->id])); ?>">
                               <button class="btn btn-outline-success">Edit</button> 
                            </a>
                        </td>
                            <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo e($food->id); ?>">
                                        Delete
                                      </button> 
                                </form>
                            
                             <!-- Modal -->
                             <div class="modal" id="exampleModal<?php echo e($food->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <form action="<?php echo e(route('food.destroy',[$food->id])); ?>" method="post"><?php echo csrf_field(); ?>
                                                  <?php echo e(method_field('DELETE')); ?>

                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Delete Box</h5>
                                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                     Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                  </div>
                              </form>
                                </div>
                              </div>
              
                                        </td>
                                      </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
                                      <?php else: ?>
                                      <td>No food to display</td>
                                      <?php endif; ?>
                                      
                                    </tbody>
                                  </table>
                                  <?php echo e($foods->links()); ?>

              
                                  
              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <?php $__env->stopSection(); ?>
              
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/restaurant-app/resources/views/food/index.blade.php ENDPATH**/ ?>