<div>
    <div class="col-md-6">
        <ul class="visible-md visible-lg text-right">
            <li><i class="fa fa-comment"></i> Live Chat</li>
            <?php if(Session::has('city')): ?>
                <li><a href="<?php echo e(route('home.change_location')); ?>"><i class="fa fa-map-marker"></i> <?php echo e(Session::get('city')); ?>, <?php echo e(Session::get('state')); ?></a></li>
            <?php else: ?>
                <li><a href="<?php echo e(route('home.change_location')); ?>"><i class="fa fa-map-marker"></i> Faridabad, Haryana</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH F:\New folder\HomeServices\resources\views/livewire/location-component.blade.php ENDPATH**/ ?>