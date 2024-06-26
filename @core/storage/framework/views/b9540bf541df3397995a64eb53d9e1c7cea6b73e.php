<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('About Us Area')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend/partials/error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('About Us Area')); ?></h4>
                        <form action="<?php echo e(route('admin.home.four.about.us.area')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div>
                                <div class="form-group">
                                    <label><?php echo e(__('Title')); ?></label>
                                    <input type="text" name="home_page_04_about_us_area_title" class="form-control"
                                           value="<?php echo e(get_static_option('home_page_04_about_us_area_title')); ?>">
                                </div>
                                <div class="form-group">
                                    <label><?php echo e(__('Subtitle')); ?></label>
                                    <input type="text" name="home_page_04_about_us_area_subtitle" class="form-control"
                                           value="<?php echo e(get_static_option('home_page_04_about_us_area_subtitle')); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(__('Description')); ?></label>

                                    <textarea id="data" class="form-control" name="home_page_04_about_us_area_description">
                                        <?php echo get_static_option('home_page_04_about_us_area_description'); ?>

                                    </textarea>

                                </div>

                                <div class="form-group">
                                    <label><?php echo e(__(' Button Text')); ?></label>
                                    <input type="text" name="home_page_04_about_us_area_button_text" class="form-control"
                                           value="<?php echo e(get_static_option('home_page_04_about_us_area_button_text')); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(__(' Button URL')); ?></label>
                                    <input type="text" name="home_page_04_about_us_area_button_url" class="form-control"
                                           value="<?php echo e(get_static_option('home_page_04_about_us_area_button_url')); ?>">
                                </div>



                                <button id="update" type="submit"
                                        class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('script'); ?>
            <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/backend/js/summernote-bs4.js')); ?>"></script>
            <?php echo $__env->make('backend.partials.media-upload.media-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <script>
                (function ($) {
                    "use strict";
                    $(document).ready(function () {
                        $('textarea#data').html($('textarea#data').html().trim());
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.update','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.update'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    });
                })(jQuery);
            </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\localhost\@core\resources\views/backend/pages/home/home-04/aboutus-area.blade.php ENDPATH**/ ?>