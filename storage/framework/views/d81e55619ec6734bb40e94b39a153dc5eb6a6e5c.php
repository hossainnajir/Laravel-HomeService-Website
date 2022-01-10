<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Edit Profile</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Edit Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Edit Profile
                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php if(Session::has('message')): ?>
                                                <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                                            <?php endif; ?>
                                             <form class="form-horizontal" wire:submit.prevent="updateProfile">
                                                 <div class="form-group">
                                                     <label for="newimage" class="control-label col-md-3">Profile Image: </label>
                                                     <div class="col-md-9">
                                                         <input type="file" class="form-control-file" name="newimage" wire:model="newimage">
                                                         <?php if($newimage): ?>
                                                             <img src="<?php echo e($newimage->temporaryUrl()); ?>" width="220">
                                                         <?php elseif($image): ?>
                                                             <img src="<?php echo e(asset('images/sproviders')); ?>/<?php echo e($image); ?>" width="220">
                                                         <?php else: ?>
                                                             <img src="<?php echo e(asset('images/sproviders/default.jpg')); ?>" width="220">    
                                                         <?php endif; ?>
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="about" class="control-label col-md-3">About: </label>
                                                     <div class="col-md-9">
                                                         <textarea class="form-control" name="about" wire:model="about"></textarea>
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="city" class="control-label col-md-3">City: </label>
                                                     <div class="col-md-9">
                                                         <input type="text" class="form-control" name="city" wire:model="city">
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="service_category_id" class="control-label col-md-3">Service Category: </label>
                                                     <div class="col-md-9">
                                                         <select class="form-control" name="service_category_id" wire:model="service_category_id">
                                                             <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                 <option value="<?php echo e($scategory->id); ?>"><?php echo e($scategory->name); ?></option>
                                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                         </select>
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="service_locations" class="control-label col-md-3">Service Location Zipcode/Pincode: </label>
                                                     <div class="col-md-9">
                                                         <input type="text" class="form-control" name="service_locations" wire:model="service_locations">
                                                     </div>
                                                 </div>
                                                 <button type="submit" class="btn btn-success pull-right">Update Profile</button>
                                             </form>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>     
</div>
<?php /**PATH F:\New folder\HomeServices\resources\views/livewire/sprovider/edit-sprovider-profile-component.blade.php ENDPATH**/ ?>