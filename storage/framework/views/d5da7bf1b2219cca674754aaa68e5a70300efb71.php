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
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            All Service Categories
                                        </div>
                                        <div class="col-md-6">
                                            <a href="<?php echo e(route('admin.add_service_category')); ?>" class="btn btn-info pull-right">Add New</a>
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
                                        <th>Slug</th>
                                        <th>Featured</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $scategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($scategory->id); ?></td>
                                            <td><img src="<?php echo e(asset('images/categories')); ?>/<?php echo e($scategory->image); ?>"></td>
                                            <td><?php echo e($scategory->name); ?></td>
                                            <td><?php echo e($scategory->slug); ?></td>
                                            <td>
                                                <?php if($scategory->featured): ?>
                                                    Yes
                                                <?php else: ?>
                                                    No
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.services_by_category',['category_slug'=>$scategory->slug])); ?>" style="margin-right: 10px;"><i class="fa fa-list fa-2x text-info"></i></a>
                                                <a href="<?php echo e(route('admin.edit_service_category',['category_id'=>$scategory->id])); ?>"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, you want to delete this service category!') || event.stopImmediatePropagation()" wire:click.prevent="deleteServiceCategory(<?php echo e($scategory->id); ?>)" style="margin-left:10px;" class="fa fa-times fa-2x text-danger"></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($scategories->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>     
</div>
<?php /**PATH F:\New folder\HomeServices\resources\views/livewire/admin/admin-service-category-component.blade.php ENDPATH**/ ?>