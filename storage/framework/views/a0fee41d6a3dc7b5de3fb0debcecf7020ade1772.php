<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Service Categories</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Service Categories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="container">
                <div class="row" style="margin-top: -30px;">
                    <div class="titles">
                        <h2>Service <span>Categories</span></h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div class="content_info" style="margin-top: -70px;">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="services-lines full-services">
                            <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="item-service-line">
                                        <i class="fa"><a href="<?php echo e(route('home.services_by_category',['category_slug'=>$scategory->slug])); ?>"><img class="icon-img"
                                                    src="<?php echo e(asset('images/categories')); ?>/<?php echo e($scategory->image); ?>" alt="<?php echo e($scategory->name); ?>"></a></i>
                                        <h5><?php echo e($scategory->name); ?></h5>
                                    </div>
                                <li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content_info content_resalt">
                <div class="container">
                    <div class="row">
                        <div class="titles">
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
<?php /**PATH F:\New folder\HomeServices\resources\views/livewire/service-categories-component.blade.php ENDPATH**/ ?>