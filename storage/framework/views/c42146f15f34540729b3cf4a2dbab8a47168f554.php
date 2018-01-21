<?php $__env->startSection('content'); ?>

    <h1> Posts</h1>
    <?php if(count($posts)>0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 100%" src="/storage/cover_images/<?php echo e($item->cover_image); ?>"/>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/<?php echo e($item->id); ?>"><?php echo e($item->title); ?></a></h3>
                        <small>Written on <?php echo e($item->created_at); ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>No Posts Found</p>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>