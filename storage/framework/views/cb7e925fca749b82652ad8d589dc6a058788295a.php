<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1><?php echo e($category_name); ?> Services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li><?php echo e($category_name); ?> Services</li>
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
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            All Service
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-info pull-right">Add New</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <?php if(Session::has('message')): ?>
                                        <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                                    <?php endif; ?>
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Category</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($service->id); ?></td>
                                            <td><img src="<?php echo e(asset('images/services/thumbnails')); ?>/<?php echo e($service->thumbnail); ?>" height="60"></td>
                                            <td><?php echo e($service->name); ?></td>
                                            <td><?php echo e($service->price); ?></td>
                                            <td>
                                                <?php if($service->status): ?>
                                                    Active
                                                <?php else: ?>
                                                    Inactive
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($service->category->name); ?></td>
                                            <td><?php echo e($service->created_at); ?></td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                <a href="#" style="margin-left:10px;" class="fa fa-times fa-2x text-danger"></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($services->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>     
</div>
<?php /**PATH F:\New folder\HomeServices\resources\views/livewire/admin/admin-services-by-category-component.blade.php ENDPATH**/ ?>