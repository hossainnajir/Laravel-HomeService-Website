<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Profile</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Profile</li>
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
                                            Profile
                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <?php if($sprovider->image): ?>
                                                <img src="<?php echo e(asset('images/sproviders')); ?>/<?php echo e($sprovider->image); ?>" width="100%">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('images/sproviders/default.jpg')); ?>" width="100%">
                                            <?php endif; ?>    
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Name: <?php echo e(Auth::user()->name); ?></h3>
                                            <p><?php echo e($sprovider->about); ?></p>
                                            <p><b>Email: </b><?php echo e(Auth::user()->email); ?></p>
                                            <p><b>Phone: </b><?php echo e(Auth::user()->phone); ?></p>
                                            <p><b>City : </b><?php echo e($sprovider->city); ?></p>
                                            <p><b>Service Category : </b>
                                            <?php if($sprovider->service_category_id): ?>
                                                <?php echo e($sprovider->category->name); ?>

                                            <?php endif; ?>    
                                            </p>
                                            <p><b>Service Locations : </b><?php echo e($sprovider->service_locations); ?></p>
                                            <a href="<?php echo e(route('sprovider.edit_profile')); ?>" class="btn btn-info pull-right">Edit Profile</a>
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
<?php /**PATH F:\New folder\HomeServices\resources\views/livewire/sprovider/sprovider-profile-component.blade.php ENDPATH**/ ?>