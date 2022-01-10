<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1><?php echo e($scategory->name); ?> Services</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li><?php echo e($scategory->name); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="container">
                <div class="row" style="margin-top: -30px;">
                    <div class="titles">
                        <h2><?php echo e($scategory->name); ?> <span>Services</span></h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div class="content_info" style="margin-top: -70px;">
                <div>
                    <div class="container">
                        <div class="portfolioContainer">
                            <?php if($scategory->services->count() > 0): ?>
                            <?php $__currentLoopData = $scategory->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="<?php echo e(route('home.service_details',['service_slug'=>$service->slug])); ?>">
                                    <div class="img-hover">
                                        <img src="<?php echo e(asset('images/services/thumbnails')); ?>/<?php echo e($service->thumbnail); ?>" alt="<?php echo e($service->name); ?>"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3><?php echo e($service->name); ?></h3>
                                        <hr class="separator">
                                        <p><?php echo e($service->tagline); ?></p>
                                        <div class="content-btn"><a href="<?php echo e(route('home.service_details',['service_slug'=>$service->slug])); ?>"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>$<?php echo e($service->price); ?></div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <div class="col-md-12"><p class="text-center">There is no any services.</p></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
</div>
<?php /**PATH F:\New folder\HomeServices\resources\views/livewire/services-by-category-component.blade.php ENDPATH**/ ?>