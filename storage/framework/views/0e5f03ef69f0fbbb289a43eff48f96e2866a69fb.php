<!DOCTYPE html>
<html dir="ltr">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <?php echo SEO::generate(); ?>


        
        <link rel="icon" type="image/png" href=""/>

        
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">

        
        <?php echo \Livewire\Livewire::styles(); ?>


        
        <link href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('public/css/style.css')); ?>" rel="stylesheet">

        
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css">

        
        <?php echo $__env->yieldPushContent('styles'); ?>

        <style>
            :root {
                --color-primary-h: <?php echo e(hex2hsl( '#4f46e5' )[0]); ?>;
                --color-primary-s: <?php echo e(hex2hsl( '#4f46e5' )[1]); ?>%;
                --color-primary-l: <?php echo e(hex2hsl( '#4f46e5' )[2]); ?>%;
            }
            html {
                font-family: 'Heebo', sans-serif !important;
            }
        </style>

    </head>

    <body class="antialiased bg-[#fafafa] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden overflow-y-hidden">

        
        <main class="flex-grow">
            <div class="container !max-w-full py-12 px-10 lg:px-24 pt-16 pb-24 space-y-8 min-h-screen">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>

        
        <?php echo \Livewire\Livewire::scripts(); ?>


        
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'pharaonic-select2::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pharaonic-select2::scripts'); ?>
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

        
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

        
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        
        <script src="<?php echo e(url('public/js/utils.js')); ?>"></script>
        <script src="<?php echo e(url('public/js/components.js')); ?>"></script>


        
        <script>

            // Check when page loaded
            document.addEventListener('alpine:initialized', () => {
                $('#screen-loader').addClass('hidden')
                $('body').removeClass('overflow-y-hidden')
            });

            // Toastr notification
            window.addEventListener('alert', ({detail:{type = 'success',message}}) => {
                window.toast(message, type);
            });

            // Refresh
            window.addEventListener('refresh',() => {
                location.reload();
            });

            // Scroll to specific div
            window.addEventListener('scrollTo', (event) => {

                // Get id to scroll
                const id = event.detail;

                // Scroll
                $('html, body').animate({
                    scrollTop: $("#" + id).offset().top
                }, 500);

            });

            // Scroll to up page
            window.addEventListener('scrollUp', () => {

                // Scroll
                $('html, body').animate({
                    scrollTop: $("body").offset().top
                }, 500);

            });

            // Scroll up on page change
            $(document).on('click', '.page-link-scroll-to-top', function (e) {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });

            // Handle error
            // window.livewire.onError(statusCode => {
            //     alert(statusCode);
            //     return false;
            // });

        </script>

        
        <?php echo $__env->yieldPushContent('scripts'); ?>

    </body>

</html><?php /**PATH D:\rizwan\riverr-13nulled\riverr-13nulled\codecanyon-39634853-riverr-freelance-services-marketplace\resources\views/livewire/installation/layout.blade.php ENDPATH**/ ?>