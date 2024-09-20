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

    <article class="max-w-screen-md py-8 border-b border-gray-300">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">Judul Artikel 1</h2>
        <div class="text-base text-gray-500">
            <a href="#">Goro Majima</a> | 17 September 2024
            <p class="my-4 font-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptas sit alias, ex blanditiis sapiente ipsam nesciunt illo soluta aut
                quibusdam aliquid quis in quasi facere a explicabo doloremque magnam. Earum!
            </p>
            <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </div>
    </article>

    <article class="max-w-screen-md py-8 border-b border-gray-300">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">Judul Artikel 2</h2>
        <div class="text-base text-gray-500">
            <a href="#">Goro Majima</a> | 17 September 2024
            <p class="my-4 font-light">
                Voluptas sit alias, ex blanditiis sapiente ipsam nesciunt illo soluta aut
                quibusdam aliquid quis in quasi facere a explicabo doloremque magnam. Earum!
            </p>
            <a href="" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </div>
    </article>

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
<?php /**PATH C:\laragon\www\laravel11\resources\views/blog.blade.php ENDPATH**/ ?>