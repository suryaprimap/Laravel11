<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="max-w-screen-md py-8 border-b border-gray-300">
            <a href="/posts/<?php echo e($post['slug']); ?>" class="hover:underline">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900"><?php echo e($post ['title']); ?></h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#"><?php echo e($post['author']); ?></a> | 17 September 2024
                <p class="my-4 font-light">
                    <?php echo e(Str::limit($post['body'], 300)); ?>

                </p>
                <a href="/posts/<?php echo e($post['slug']); ?>" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\laravel11\resources\views/posts.blade.php ENDPATH**/ ?>