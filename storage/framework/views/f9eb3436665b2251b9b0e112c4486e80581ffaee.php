<div>
    <section class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="<?php echo e(asset('images/slider')); ?>/<?php echo e($slide->image); ?>" alt="<?php echo e($slide->title); ?>" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="filter-title">
                <div class="title-header">
                    <h2 style="color:#fff;">BOOK A SERVICE</h2>
                    <p class="lead">Book a service at very affordable price, </p>
                </div>
                <div class="filter-header">
                    <form id="sform" action="<?php echo e(route('searchService')); ?>" method="post">  
                        <?php echo csrf_field(); ?>                     
                        <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                            class="input-large typeahead" autocomplete="off">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
            </div>
        </section>
        <section class="content-central">
            <div class="content_info content_resalt">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="sponsors" class="tooltip-hover">
                                <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li data-toggle="tooltip" title="" data-original-title="<?php echo e($scategory->name); ?>"> 
                                        <a href="<?php echo e(route('home.services_by_category',['category_slug'=>$scategory->slug])); ?>">
                                            <img src="<?php echo e(asset('images/categories')); ?>/<?php echo e($scategory->image); ?>" alt="<?php echo e($scategory->name); ?>">
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="semiboxshadow text-center">
                <img src="<?php echo e(asset('assets/img/img-theme/shp.png')); ?>" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>SurfsideMedia <span>Choice</span> of Services</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                            <?php $__currentLoopData = $fservices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_info">
                <div class="bg-dark color-white border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="services-lines-info">
                                    <h2>WELCOME TO DIVERSIFIED</h2>
                                    <p class="lead">
                                        Book best services at one place.
                                        <span class="line"></span>
                                    </p>

                                    <p>Find a wide variety of home services.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="services-lines">
                                    <?php $__currentLoopData = $fscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fscategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('home.services_by_category',['category_slug'=>$fscategory->slug])); ?>">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="<?php echo e(asset('images/categories')); ?>/<?php echo e($fscategory->image); ?>"></i>
                                                <h5><?php echo e($fscategory->name); ?></h5>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2><span>Appliance</span>Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
                <div id="boxes-carousel">
                    <?php $__currentLoopData = $aservices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aservice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <a class="g-list" href="<?php echo e(route('home.service_details',['service_slug'=>$aservice->slug])); ?>">
                            <div class="img-hover">
                                <img src="<?php echo e(asset('images/services/thumbnails')); ?>/<?php echo e($aservice->thumbnail); ?>" alt="<?php echo e($aservice->name); ?>" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3><?php echo e($aservice->name); ?></h3>
                                <hr class="separator">
                                <p><?php echo e($aservice->tagline); ?></p>
                                <div class="content-btn"><a href="<?php echo e(route('home.service_details',['service_slug'=>$aservice->slug])); ?>"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>$<?php echo e($aservice->price); ?></div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
</div>


<?php $__env->startPush('scripts'); ?>

<script type="text/javascript">
    var path = "<?php echo e(route('autocomplete')); ?>";
    $('input.typeahead').typeahead({
        source: function(query,process){
            return $.get(path,{query:query},function(data){
                return process(data);
            });
        }
    });
</script>

<?php $__env->stopPush(); ?>
<?php /**PATH F:\New folder\HomeServices\resources\views/livewire/home-component.blade.php ENDPATH**/ ?>