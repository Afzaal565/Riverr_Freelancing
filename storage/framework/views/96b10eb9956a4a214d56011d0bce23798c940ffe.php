<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(config()->get('direction')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dark' => Cookie::get('dark_mode') === 'enabled']) ?>">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <?php echo SEO::generate(); ?>

        <?php echo JsonLd::generate(); ?>


        
        <link rel="icon" type="image/png" href="<?php echo e(src( settings('general')->favicon )); ?>"/>

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="<?php echo e(url('node_modules/@mdi/font/css/materialdesignicons.min.css')); ?>">

        
        <?php echo \Livewire\Livewire::styles(); ?>


        
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

        
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        
        <link href="<?php echo e(url('node_modules/select2/dist/css/select2.min.css')); ?>" rel="stylesheet" />

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

        
		<?php echo settings('appearance')->font_link; ?>


		
		<?php if(auth()->guard()->guest()): ?>
			<?php if(request()->is('/')): ?>
				<link href="https://fonts.cdnfonts.com/css/beach-party" rel="stylesheet">
			<?php endif; ?>
		<?php endif; ?>

		
        <style>
            :root {
                --color-primary-h: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[0]); ?>;
                --color-primary-s: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[1]); ?>%;
                --color-primary-l: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[2]); ?>%;
            }
            html {
                font-family: <?php echo settings('appearance')->font_family ?>, sans-serif !important;
            }
        </style>

		
		<?php if(request()->is('/')): ?>
			<link rel="stylesheet" href="<?php echo e(url('node_modules/vegas/dist/vegas.min.css')); ?>">
		<?php endif; ?>

        
        <?php echo $__env->yieldPushContent('styles'); ?>

        
        <script>
            __var_rtl = <?php echo \Illuminate\Support\Js::from(config()->get('direction') === 'ltr' ? false : true)->toHtml() ?>
        </script>

        
        <?php if(advertisements('header_code')): ?>
            <?php echo advertisements('header_code'); ?>

        <?php endif; ?>

    </head>

    <body class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden overflow-y-hidden <?php echo e(app()->getLocale() === 'ar' ? 'application-ar' : ''); ?>">

        
        <div class="bg-gray-100 dark:bg-zinc-600 fixed h-full w-full z-[999] flex items-center justify-center" id="screen-loader">
            <div class="text-center">
                <div role="status">
                    <svg class="inline w-16 h-16 text-gray-200 dark:text-zinc-400 dark:fill-primary-600 animate-spin fill-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
            </div>         
        </div>

        
        <div 
            x-data="window.WgRqLnTxHBZBRzq" 
            x-show="open" 
            aria-live="assertive" 
            class="hidden fixed inset-0 items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start z-[999]" id="gig-added-to-cart"
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
                <div class="max-w-sm w-full bg-white dark:bg-zinc-800 shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 pt-0.5">
                                <button type="button" class="text-gray-600 bg-gray-100 dark:bg-zinc-700 dark:hover:bg-zinc-600 hover:bg-gray-200 focus:outline-none focus:ring-0 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/></svg>
                                </button>
                            </div>
                            <div class="ltr:ml-3 rtl:mr-3 w-0 flex-1">
                                <p class="text-sm font-medium text-gray-900 dark:text-white"><?php echo e(__('messages.t_product_added_to_cart')); ?></p>
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400" x-text="title"></p>
                                <div class="mt-4 flex">

                                    
                                    <a href="<?php echo e(url('cart')); ?>" class="inline-flex items-center px-3 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600"><?php echo e(__('messages.t_view_cart')); ?></a>

                                    
                                    <button x-on:click="close" type="button" class="ltr:ml-3 rtl:mr-3 inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600"><?php echo e(__('messages.t_continue_shopping')); ?></button>

                                </div>
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0 flex">
                                <button x-on:click="close()" class="bg-white dark:bg-zinc-700 dark:text-zinc-500 dark:hover:text-zinc-400 rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

		
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.includes.header')->html();
} elseif ($_instance->childHasBeenRendered('JwUPKPi')) {
    $componentId = $_instance->getRenderedChildComponentId('JwUPKPi');
    $componentTag = $_instance->getRenderedChildComponentTagName('JwUPKPi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JwUPKPi');
} else {
    $response = \Livewire\Livewire::mount('main.includes.header');
    $html = $response->html();
    $_instance->logRenderedChild('JwUPKPi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        
		<?php if(auth()->guard()->guest()): ?>
			<?php if(request()->is('/')): ?>

                
				<div class="home-sliders bg-slate-400 dark:bg-zinc-800">
					<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-40">
						<div class="w-full md:max-w-lg">
							
							
							<h1 class="text-center sm:ltr:text-left sm:rtl:text-right mt-4 text-xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-3xl lg:mt-6 xl:text-4xl">
							<div class="block">
								<?php echo e(__('messages.t_find_best')); ?> <span class="font-normal text-2xl sm:text-3xl xl:text-5xl" style="font-family: 'BEACH PARTY', sans-serif !important"><?php echo e(__('messages.t_freelance')); ?></span><br> <?php echo e(__('messages.t_services_for_ur_business')); ?>

							</div>
							</h1>
							<div class="mt-10 sm:mt-12">
		
								
								<form class="flex items-center mb-4" action="<?php echo e(url('search')); ?>" accept="GET">   
		
									
									<div class="relative w-full">
										<div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center ltr:pl-3 rtl:pr-3 pointer-events-none">
											<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
										</div>
										<input type="search" name="q" class="bg-white border-none text-gray-900 text-sm font-medium rounded-md block w-full ltr:pl-10 rtl:pr-10 px-2.5 py-4 focus:outline-none focus:ring-0" placeholder="<?php echo e(__('messages.t_what_service_are_u_looking_for_today')); ?>" required>
									</div>
		
									
									<button type="submit" class="px-5 py-4 ltr:ml-2 rtl:mr-2 text-sm font-medium text-white bg-primary-600 rounded-md border-none hover:bg-primary-800 focus:ring-0 focus:outline-none">
										<?php echo app('translator')->get('messages.t_search'); ?>
									</button>
		
								</form>
		
								
								<?php
									$popular_tags = App\Models\Category::whereHas('gigs')->withCount('gigs')->take(5)->orderBy('gigs_count')->get();
								?>
								<div class="hidden sm:flex items-center text-white font-semibold text-sm">
									<?php echo app('translator')->get('messages.t_popular_colon'); ?> 
									<ul class="flex ltr:ml-3 rtl:mr-3">
										<?php $__currentLoopData = $popular_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li class="flex ltr:mr-3 rtl:ml-3 whitespace-nowrap">
												<a href="<?php echo e(url('categories', $tag->slug)); ?>" class="border-2 border-white rounded-[40px] hover:bg-white hover:text-gray-700 transition-all duration-200 px-3 py-0.5 text-xs">
													<?php echo e($tag->name); ?>

												</a>
											</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>

			<?php endif; ?>
		<?php endif; ?>

        
        <main class="flex-grow"> 
            <div class="container !max-w-full py-12 px-4 md:px-10 lg:px-24 pt-16 pb-24 space-y-8 min-h-screen">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>

        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.includes.footer')->html();
} elseif ($_instance->childHasBeenRendered('y9UnN9w')) {
    $componentId = $_instance->getRenderedChildComponentId('y9UnN9w');
    $componentTag = $_instance->getRenderedChildComponentTagName('y9UnN9w');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('y9UnN9w');
} else {
    $response = \Livewire\Livewire::mount('main.includes.footer');
    $html = $response->html();
    $_instance->logRenderedChild('y9UnN9w', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        
        <?php echo \Livewire\Livewire::scripts(); ?>


        <script defer src="<?php echo e(url('js/app.js')); ?>"></script>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        
        <script src="<?php echo e(url('node_modules/vegas/dist/vegas.min.js')); ?>"></script>

        
        <script src="<?php echo e(url('node_modules/select2/dist/js/select2.min.js')); ?>"></script>

        
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

        
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        
        <script src="<?php echo e(asset('js/utils.js')); ?>"></script>
        <script src="<?php echo e(asset('js/components.js')); ?>"></script>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

        
        <script>

            // Check when page loaded
            document.addEventListener('DOMContentLoaded', () => {
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

            // Shopping cart dialog
            function WgRqLnTxHBZBRzq() {
                return {

                    title: null,
                    open: false,

                    close() {

                        // Close
                        this.open  = false;

                        // Reset title
                        this.title = null;
                    },

                    init() {

                        document.addEventListener('item-added-to-cart', (e) => {
                            const _this = this;

                            this.title  = e.detail.gig.title;

                            this.open   = true;

                            // // Hide this box after 10 secs
                            setTimeout(() => {
                                _this.open  = false;
                                _this.title = null;
                            }, 10000);

                        });

                        if(document.readyState === 'ready' || document.readyState === 'complete') {
                            $('#gig-added-to-cart').removeClass('hidden');
                        } else {
                            document.onreadystatechange = function () {
                                if (document.readyState == "complete") {
                                    $('#gig-added-to-cart').removeClass('hidden');
                                }
                            }
                        }

                    }

                }
            }
            window.WgRqLnTxHBZBRzq = WgRqLnTxHBZBRzq();

			<?php if(isInstalled() && sliders() && sliders()->count()): ?>
				$(".home-sliders").vegas({
					slides: [
						<?php $__currentLoopData = sliders(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							{ src: "<?php echo e(src($slider->image)); ?>" },
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					]
				});
			<?php endif; ?>

        </script>

        
        <script>
            window.rating({ target: "gig-card-rating-container", fill: "#ff9f31", background: "#eadeaf" });
        </script>

		
		<script>
			function jwUBiFxmwbrUwww() {
				return {

					scroll: false,

					init() {
						var _this = this;
						$(document).scroll(function () {
							$(this).scrollTop() > 70 ? _this.scroll = true : _this.scroll = false;
						});

					}

				}
			}
			window.jwUBiFxmwbrUwww = jwUBiFxmwbrUwww();
		</script>

        
        <?php echo $__env->yieldPushContent('scripts'); ?>

    </body>

</html><?php /**PATH D:\rizwan\riverr-13nulled\riverr-13nulled\codecanyon-39634853-riverr-freelance-services-marketplace\resources\views/livewire/main/layout/app.blade.php ENDPATH**/ ?>