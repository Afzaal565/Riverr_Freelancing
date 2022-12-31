<header class="bg-white dark:bg-[#0f0f0f] shadow-sm w-full z-40 transition-all duration-200" x-data="window.TTRjRvxLbHzaKxW">
    
    
    <nav class="relative container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 justify-between items-center h-20 flex">
        
        
        <div class="inline-flex items-center min-w-fit">

            
            <button type="button" class="bg-white dark:bg-transparent rounded-md text-gray-500 dark:text-gray-100 dark:hover:text-white ltr:mr-5 rtl:ml-5 md:hidden" x-on:click="mobile_menu = true">
                <span class="sr-only">Open menu</span>
                <svg class="text-gray-400 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white h-6 w-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"></path></g></svg>
            </button>

            
            <?php if(Cookie::get('dark_mode') === 'enabled' && settings('general')->logo_dark): ?>
                <a href="<?php echo e(url('/')); ?>" class="block ltr:sm:mr-6 rtl:sm:ml-6">
                    <img src="<?php echo e(src(settings('general')->logo_dark)); ?>" alt="<?php echo e(settings('general')->title); ?>" style="height: <?php echo e(settings('appearance')->sizes['header_desktop_logo_height']); ?>px;">
                </a>
            <?php else: ?>
                <a href="<?php echo e(url('/')); ?>" class="block ltr:sm:mr-6 rtl:sm:ml-6">
                    <img src="<?php echo e(src(settings('general')->logo)); ?>" alt="<?php echo e(settings('general')->title); ?>" style="height: <?php echo e(settings('appearance')->sizes['header_desktop_logo_height']); ?>px;">
                </a>
            <?php endif; ?>

        </div>

        
        <form class="w-full hidden lg:block">   
            <div class="relative" x-data="{ open: false }">
                
                
                <input wire:model.debounce.500ms="q" wire:keydown.enter="enter" x-ref="search" x-on:click="open = true" type="search" class="block p-2.5 w-full z-20 text-sm text-gray-900 dark:text-white bg-white dark:bg-[#181818] rounded border border-gray-300 dark:border-[#181818] focus:ring-0 focus:border-gray-500" placeholder="<?php echo e(__('messages.t_what_service_are_u_looking_for_today')); ?>" required>
                
                
                <button type="submit" class="absolute top-0 ltr:right-0 rtl:left-0 p-2.5 text-white bg-zinc-700 hover:bg-zinc-800 ltr:rounded-r rtl:rounded-l border border-zinc-700 hover:border-zinc-800">
                    <svg class="w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                    <span class="sr-only">Search</span>
                </button>

                
                <?php if(count($gigs) || count($sellers) || count($tags) || $q): ?>
                    <div class="absolute top-16 w-full bg-white dark:bg-zinc-800 rounded-lg border border-gray-100 dark:border-zinc-800 shadow-md max-w-full z-[60]" @keydown.window.escape="opne = false" x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-on:click.away="open = false">
                        
                        <?php if(count($gigs) || count($sellers) || count($tags)): ?>
                            <ul class="max-h-80 scroll-py-10 scroll-pb-2 space-y-4 overflow-y-auto p-4 pb-2" id="options" role="listbox">

                                
                                <?php if($gigs && count($gigs)): ?>
                                    <li>
                                        <h2 class="text-xs font-semibold text-gray-900 dark:text-white"><?php echo e(__('messages.t_gigs')); ?></h2>
                                        <ul class="-mx-4 mt-2 text-sm text-gray-700 dark:text-gray-400">

                                            
                                            <?php $__currentLoopData = $gigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="group flex cursor-default select-none items-center px-4 py-2">
                                                    <a href="<?php echo e(url('service', $gig->slug)); ?>" class="flex items-center">
                                                        <svg class="h-6 w-6 flex-none text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/> </svg>
                                                        <span class="ltr:ml-3 rtl:mr-3 flex-auto ext-ellipsis overflow-hidden"><?php echo e($gig->title); ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    </li>
                                <?php endif; ?>
                            
                                
                                <?php if($sellers && count($sellers)): ?>
                                    <li>
                                        <h2 class="text-xs font-semibold text-gray-900 dark:text-white"><?php echo e(__('messages.t_sellers')); ?></h2>

                                        
                                        <ul class="-mx-4 mt-2 text-sm text-gray-700 dark:text-gray-400">
                                            <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="group flex cursor-default select-none items-center px-4 py-2">
                                                    <a href="<?php echo e(url('profile', $seller->username)); ?>" class="flex items-center">
                                                        <img src="<?php echo e(src($seller->avatar)); ?>" alt="<?php echo e($seller->username); ?>" class="h-6 w-6 flex-none rounded-full object-cover">
                                                        <span class="ltr:ml-3 rtl:mr-3 flex-auto truncate"><?php echo e($seller->username); ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                
                                <?php if($tags && count($tags)): ?>
                                    <li>
                                        <h2 class="text-xs font-semibold text-gray-900 dark:text-white"><?php echo e(__('messages.t_tags')); ?></h2>
                                        <ul class="-mx-4 mt-2 text-sm text-gray-700 dark:text-gray-400">

                                            
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="group flex cursor-default select-none items-center px-4 py-2">
                                                    <a href="<?php echo e(url('gigs', $tag->slug)); ?>" class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/></svg>
                                                        <span class="ml-3 flex-auto truncate"><?php echo e($tag->name); ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        <?php endif; ?>
                
                        
                        <?php if(count($gigs) === 0 && count($sellers) === 0 && count($tags) === 0 && $q): ?>
                            <div class="py-14 px-6 text-center text-sm sm:px-14">
                                <svg class="mx-auto h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/> </svg>
                                <p class="mt-4 font-semibold text-gray-900 dark:text-white"><?php echo e(__('messages.no_results_found')); ?></p>
                                <p class="mt-2 text-gray-500"><?php echo e(__('messages.t_we_couldnt_find_anthing_search_term')); ?></p>
                            </div>
                        <?php endif; ?>
                
                        
                        <div class="rounded-b-lg flex flex-wrap items-center bg-gray-50 dark:bg-zinc-700 py-2.5 px-4 text-xs text-gray-700 dark:text-gray-400">
                            <?php echo __('messages.t_press_enter_to_search_deeply'); ?>

                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </form>

        
        <div class="min-w-fit ltr:sm:ml-10 rtl:sm:mr-10 flex items-center font-medium text-sm transition-all duration-200">

            
            <a href="<?php echo e(url('search')); ?>" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 px-4 focus:outline-none hidden md:block dark:text-gray-100 dark:hover:text-white">
                <?php echo app('translator')->get('messages.t_explore_gigs'); ?>
            </a>

            
            <?php if(settings('general')->is_language_switcher): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.partials.languages')->html();
} elseif ($_instance->childHasBeenRendered('l3611120286-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3611120286-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3611120286-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3611120286-0');
} else {
    $response = \Livewire\Livewire::mount('main.partials.languages');
    $html = $response->html();
    $_instance->logRenderedChild('l3611120286-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>

            
            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(url('start_selling')); ?>" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 px-4 hidden md:block dark:text-gray-100 dark:hover:text-white">
                    <?php echo app('translator')->get('messages.t_become_a_seller'); ?>
                </a>
            <?php endif; ?>

            
            <?php if(auth()->guard()->check()): ?>
                
                
                <?php if(auth()->user()->account_type === 'seller' && !Illuminate\Support\Str::of(request()->path())->startsWith('seller')): ?>
                    
                    
                    <a href="<?php echo e(url('seller/home')); ?>" class="text-primary-600 hover:text-primary-700 transition-colors duration-300 py-2 px-4 hidden lg:block dark:text-gray-100 dark:hover:text-white">
                        <?php echo app('translator')->get('messages.t_switch_to_selling'); ?>
                    </a>

                <?php elseif(auth()->user()->account_type === 'seller' && Illuminate\Support\Str::of(request()->path())->startsWith('seller')): ?>

                    
                    <a href="<?php echo e(url('/')); ?>" class="text-primary-600 hover:text-primary-700 transition-colors duration-300 py-2 px-4 hidden lg:block dark:text-gray-100 dark:hover:text-white">
                        <?php echo app('translator')->get('messages.t_switch_to_buying'); ?>
                    </a>

                <?php endif; ?>

            <?php endif; ?>

            
            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(url('auth/login')); ?>" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 px-4 hidden md:block dark:text-gray-100 dark:hover:text-white">
                    <?php echo app('translator')->get('messages.t_sign_in'); ?>
                </a>
            <?php endif; ?>

            
            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(url('auth/register')); ?>" class="py-2 px-4 text-primary-600 hover:text-primary-800 transition-colors duration-300 rounded-full hidden md:inline-block dark:text-gray-100 dark:hover:text-white">
                    <?php echo app('translator')->get('messages.t_join'); ?>
                </a>
            <?php endif; ?>

            
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.partials.search')->html();
} elseif ($_instance->childHasBeenRendered('l3611120286-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3611120286-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3611120286-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3611120286-1');
} else {
    $response = \Livewire\Livewire::mount('main.partials.search');
    $html = $response->html();
    $_instance->logRenderedChild('l3611120286-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('main.partials.cart')->html();
} elseif ($_instance->childHasBeenRendered('l3611120286-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3611120286-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3611120286-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3611120286-2');
} else {
    $response = \Livewire\Livewire::mount('main.partials.cart');
    $html = $response->html();
    $_instance->logRenderedChild('l3611120286-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            
            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->account_type === 'seller'): ?>
                    <a href="<?php echo e(url('seller/orders')); ?>" class="text-gray-500 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white transition-colors duration-300 py-2 mx-4 relative hidden md:block">
                        <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                        <?php if(auth()->user()->sales->where('status', 'pending')->count()): ?>
                            <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                            </span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            
            <?php if(auth()->guard()->check()): ?>
                <button x-on:click="notifications_menu = true" type="button" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white hidden md:block">
                    <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
                    <?php if($notifications && count($notifications)): ?>
                        <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                        </span>
                    <?php endif; ?>
                </button>
            <?php endif; ?>

            
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('messages')); ?>" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative ltr:ml-4 rtl:mr-4 md:!mx-4 dark:text-gray-100 dark:hover:text-white hidden md:block">
                    <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                    <?php if($new_messages): ?>
                        <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                        </span>
                    <?php endif; ?>
                </a>
            <?php endif; ?>

            
            <?php if(auth()->guard()->check()): ?>
                <div class="hidden md:inline-block relative ltr:ml-4 rtl:mr-4" x-data="{ open: false }">

                    
                    <?php if(auth()->user()->isOnline() && !auth()->user()->availability): ?>
                        <div class="absolute top-0 ltr:right-0 rtl:left-0 w-3 h-3 rounded-full bg-green-400 border-2 border-white dark:border-transparent"></div>
                    <?php elseif(auth()->user()->availability): ?>
                        <div class="absolute top-0 ltr:right-0 rtl:left-0 w-3 h-3 rounded-full bg-gray-400 border-2 border-white dark:border-transparent"></div>
                    <?php else: ?>
                        <div class="absolute top-0 ltr:right-0 rtl:left-0 w-3 h-3 rounded-full bg-red-400 border-2 border-white dark:border-transparent"></div>
                    <?php endif; ?>

                    
                    <?php if(auth()->user()->avatar): ?>
                        <img x-on:click="open = !open" src="<?php echo e(src(auth()->user()->avatar)); ?>" alt="<?php echo e(auth()->user()->username); ?>" class="inline-block w-8 h-w-8 rounded-full cursor-pointer">
                    <?php else: ?>
                        <div x-on:click="open = !open" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 dark:bg-zinc-500 text-gray-300 dark:text-zinc-400 cursor-pointer">
                            <svg class="hi-solid hi-user inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        </div>
                    <?php endif; ?>

                    
                    <div 
                        x-show="open" 
                        x-transition:enter="transition ease-out duration-150" 
                        x-transition:enter-start="transform opacity-0 scale-75" 
                        x-transition:enter-end="transform opacity-100 scale-100" 
                        x-transition:leave="transition ease-in duration-100" 
                        x-transition:leave-start="transform opacity-100 scale-100" 
                        x-transition:leave-end="transform opacity-0 scale-75" 
                        x-on:click.outside="open = false"
                        class="absolute top-full ltr:right-0 rtl:left-0 w-60 mt-3 bg-white dark:bg-zinc-800 rounded-lg shadow-md ring-1 ring-gray-900 ring-opacity-5 font-normal text-sm text-gray-900 divide-y divide-gray-100 dark:divide-zinc-700 z-40">
                        
                            <p class="py-3 px-3.5 truncate">
                                <span
                                    class="block mb-0.5 text-xs text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_logged_in_as_username', ['username' => auth()->user()->username])); ?></span>
                                <span class="font-semibold dark:text-white"><?php echo money(auth()->user()->balance_available, settings('currency')->code, true); ?></span>
                            </p>

                            
                            <div class="py-1.5 px-3.5">

                                
                                <?php if(auth()->user()->account_type === 'buyer'): ?>
                                    
                                    <a href="<?php echo e(url('start_selling')); ?>"
                                        class="group flex items-center py-1.5 group-hover:text-primary-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                        </svg>
                                        <span
                                            class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_become_a_seller')); ?></span>
                                    </a>
                                <?php endif; ?>

                                
                                <?php if(auth()->user()->account_type === 'seller'): ?>
                                    
                                    <a href="<?php echo e(url('seller/home')); ?>"
                                        class="group flex items-center py-1.5 group-hover:text-primary-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                        </svg>
                                        <span
                                            class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_seller_dashboard')); ?></span>
                                    </a>
                                <?php endif; ?>

                            </div>

                            
                            <div class="py-1.5 px-3.5">

                                
                                <a href="<?php echo e(url('profile', auth()->user()->username)); ?>"
                                    class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span
                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_view_profile')); ?></span>
                                </a>

                                
                                <a href="<?php echo e(url('account/profile')); ?>"
                                    class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    <span
                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_edit_profile')); ?></span>
                                </a>

                                
                                <a href="<?php echo e(url('account/settings')); ?>"
                                    class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span
                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_account_settings')); ?></span>
                                </a>

                                
                                <a href="<?php echo e(url('account/password')); ?>"
                                    class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                    <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_update_password')); ?></span>
                                </a>

                            </div>

                            
                            <div class="py-1.5 px-3.5">

                                
                                <a href="<?php echo e(url('account/deposit')); ?>" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_deposit')); ?></span>
                                </a>

                                
                                <a href="<?php echo e(url('account/orders')); ?>"
                                    class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    <span
                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_my_orders')); ?></span>
                                </a>

                                
                                <a href="<?php echo e(url('messages')); ?>"
                                    class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span
                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_messages')); ?></span>
                                </a>

                                
                                <a href="<?php echo e(url('account/reviews')); ?>" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                                    <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_reviews')); ?></span>
                                </a>

                                
                                <a href="<?php echo e(url('account/refunds')); ?>" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z"/></svg>
                                    <span class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_refunds')); ?></span>
                                </a>

                            </div>

                            
                            <div class="py-1.5 px-3.5">

                                
                                <?php if(auth()->user()->status !== 'verified'): ?>
                                    <a href="<?php echo e(url('account/verification')); ?>"
                                        class="group flex items-center py-1.5 group-hover:text-primary-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <span
                                            class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_verification_center')); ?></span>
                                    </a>
                                <?php endif; ?>

                                
                                <a href="<?php echo e(url('auth/logout')); ?>"
                                    class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg aria-hidden="true" width="20" height="20" fill="none"
                                        class="flex-none ltr:mr-3 rtl:ml-3 text-gray-400 group-hover:text-primary-600 h-5 w-5">
                                        <path
                                            d="M10.25 3.75H9A6.25 6.25 0 002.75 10v0A6.25 6.25 0 009 16.25h1.25M10.75 10h6.5M14.75 12.25l2.5-2.25-2.5-2.25"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span
                                        class="font-semibold text-xs text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500"><?php echo e(__('messages.t_logout')); ?></span>
                                </a>

                            </div>

                        </div>

                </div>
            <?php endif; ?>

        </div>

    </nav>

    
    <div class="w-full h-px bg-gray-100 dark:bg-zinc-900 hidden md:block"></div>

    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 hidden md:block">

        
        <ul class="relative flex justify-between items-center overflow-y-auto transition-colors duration-300 space-x-3 rtl:space-x-reverse scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-zinc-600 scrollbar-track-gray-50 dark:scrollbar-track-zinc-400">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="inline-block flex-shrink-0 border-b-2 border-transparent hover:border-primary-600 focus:outline-none focus:ring-0 relative">

                    
                    <?php if(count($category->subcategories)): ?>
                        <button data-popover-target="popover-subcategories-<?php echo e($category->uid); ?>" data-popover-trigger="hover" class="block text-[13px] font-medium text-gray-700 dark:text-gray-300 dark:group-hover:text-white group-hover:text-primary-600 py-2 focus:outline-none focus:ring-0">
                            <?php echo e($category->name); ?>

                        </button>
                    <?php else: ?>
                        <a href="<?php echo e(url('categories', $category->slug)); ?>" class="block text-[13px] font-medium text-gray-700 dark:text-gray-300 dark:group-hover:text-white group-hover:text-primary-600 py-2 focus:outline-none focus:ring-0">
                            <?php echo e($category->name); ?>

                        </a>
                    <?php endif; ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($category->subcategories)): ?>
                <div data-popover id="popover-subcategories-<?php echo e($category->uid); ?>" data-popover-placement="bottom" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white rounded-md shadow-xl opacity-0 dark:text-zinc-400 dark:bg-zinc-800">
                    <ul class="max-h-96 !overflow-y-auto scrollbar-thin scrollbar-thumb-primary-600 scrollbar-track-white dark:scrollbar-track-zinc-800">

                        <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="first:rounded-t-md">
                                <a href="<?php echo e(url('categories/' . $category->slug . '/' . $sub->slug)); ?>" class="flex items-center py-2 px-3 hover:bg-gray-50 dark:hover:bg-zinc-700" style="border-radius: inherit">
                                    <div class="flex-shrink-0 ltr:mr-2 rtl:ml-2">
                                        <img class="mask is-squircle w-7 h-7" src="<?php echo e(src($sub->icon)); ?>" alt="<?php echo e($sub->name); ?>">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-[13px] font-semibold text-gray-700 truncate dark:text-zinc-200 group-hover:text-primary-600">
                                            <?php echo e($sub->name); ?>

                                        </p>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </ul>
                    <div class="bg-gray-50 dark:bg-zinc-700 rounded-b-md text-center">
                        <a href="<?php echo e(url('categories', $category->slug)); ?>" class="block px-1 py-4 text-gray-500 dark:text-zinc-300 hover:text-primary-600 hover:underline text-xs tracking-wide font-semibold">
                            <?php echo e(__('messages.t_browse_parent_category', ['category' => $category->name])); ?>

                        </a>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    
    <div x-show="mobile_menu" class="fixed inset-0 flex z-40 lg:hidden" x-ref="mobile_menu">

        
        <div x-show="mobile_menu" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="mobile_menu = false"
            aria-hidden="true">
        </div>

        
        <div 
            x-show="mobile_menu" 
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="ltr:-translate-x-full rtl:translate-x-full"
            x-transition:enter-end="ltr:translate-x-0 rtl:translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="ltr:translate-x-0 rtl:translate-x-0"
            x-transition:leave-end="ltr:-translate-x-full rtl:translate-x-full"
            class="relative max-w-[275px] w-full bg-white dark:bg-zinc-700 shadow-xl flex flex-col overflow-y-auto">

            
            <?php if(auth()->guard()->guest()): ?>
                <div class="w-full mb-6 px-5 pt-5">
                    <a href="<?php echo e(url('auth/register')); ?>" class="w-full inline-flex justify-center items-center rounded border text-xs uppercase tracking-widest font-semibold focus:outline-none px-3 py-2 leading-6 border-primary-700 bg-primary-700 text-white hover:text-white hover:bg-primary-800 hover:border-primary-800 focus:ring focus:ring-primary-500 focus:ring-opacity-50 active:bg-primary-700 active:border-primary-700">
                        <span><?php echo app('translator')->get('messages.t_join'); ?></span>
                    </a>
                </div>
            <?php endif; ?>

            
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['w-full overflow-auto h-full', 'pt-5' => auth()->check()]) ?>">

                <div class="flex items-center justify-center">

                    
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->user()->account_type === 'seller'): ?>
                            <a href="<?php echo e(url('seller/orders')); ?>" class="text-gray-500 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white transition-colors duration-300 py-2 mx-4 relative md:hidden">
                                <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                                <?php if(auth()->user()->sales->where('status', 'pending')->count()): ?>
                                    <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                                    </span>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
    
                    
                    <?php if(auth()->guard()->check()): ?>
                        <button x-on:click="notifications_menu = true" type="button" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white md:hidden">
                            <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
                            <?php if($notifications && count($notifications)): ?>
                                <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                                </span>
                            <?php endif; ?>
                        </button>
                    <?php endif; ?>
    
                    
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('messages')); ?>" class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative mx-4 dark:text-gray-100 dark:hover:text-white md:hidden">
                            <svg class="text-gray-400 hover:text-gray-700 h-6 w-6 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                            <?php if($new_messages): ?>
                                <span class="flex absolute h-2 w-2 top-0 ltr:right-0 rtl:left-0 mt-0 ltr:-mr-1 rtl:-ml-1">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                                </span>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>

                </div>

                
                <?php if(auth()->guard()->check()): ?>
                    <?php if (isset($component)) { $__componentOriginal6685289ee861d3ee4557d29ddf6c801887849aa3 = $component; } ?>
<?php $component = App\View\Components\Main\Account\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main.account.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main\Account\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-b border-gray-100 dark:border-zinc-600 mb-[14px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6685289ee861d3ee4557d29ddf6c801887849aa3)): ?>
<?php $component = $__componentOriginal6685289ee861d3ee4557d29ddf6c801887849aa3; ?>
<?php unset($__componentOriginal6685289ee861d3ee4557d29ddf6c801887849aa3); ?>
<?php endif; ?>
                <?php endif; ?>

                
                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(url('auth/login')); ?>" class="py-2 px-5 block text-gray-500 dark:text-gray-200 font-semibold text-sm">
                        <?php echo app('translator')->get('messages.t_sign_in'); ?>
                    </a>
                <?php endif; ?>

                
                <?php if(auth()->guest() || ( auth()->check() && auth()->user()->account_type !== 'seller' )): ?>
                    <a href="<?php echo e(url('start_selling')); ?>" class="py-2 px-5 block text-gray-500 dark:text-gray-200 font-semibold text-sm">
                        <?php echo app('translator')->get('messages.t_become_a_seller'); ?>
                    </a>
                <?php endif; ?>

                
                <a href="<?php echo e(url('search')); ?>" class="py-2 px-5 block text-gray-500 dark:text-gray-200 font-semibold text-sm">
                    <?php echo app('translator')->get('messages.t_explore_gigs'); ?>
                </a>

                
                <div x-data="{ open: false }" class="space-y-1">

                    
                    <a href="javascript:void(0)" class="py-2 px-5 text-gray-500 dark:text-gray-200 font-semibold text-sm flex items-center space-x-3 rtl:space-x-reverse relative z-1" x-on:click="open = !open">
                        <span class="grow">
                            <?php echo app('translator')->get('messages.t_browse_categories'); ?>
                        </span>
                        <span x-bind:class="{ 'rotate-90': !open, 'rotate-0': open }" class="transform transition ease-out duration-150 opacity-75 rotate-0">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-chevron-down inline-block w-4 h-4"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </span>
                    </a>

                    
                    <div 
                        x-show="open" 
                        x-transition:enter="transition ease-out duration-100" 
                        x-transition:enter-start="transform -translate-y-6 opacity-0" 
                        x-transition:enter-end="transform translate-y-0 opacity-100" 
                        x-transition:leave="transition ease-in duration-100 bg-transparent" 
                        x-transition:leave-start="transform translate-y-0 opacity-100" 
                        x-transition:leave-end="transform -translate-y-6 opacity-0" 
                        class="relative z-0">

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <details class="group ltr:ml-4 rtl:mr-4" wire:key="header-categories-<?php echo e($category->uid); ?>">
        
                                
                                <summary class="flex items-center text-gray-500 dark:text-gray-300 py-2 px-5">
        
                                    
                                    <img src="<?php echo e(src($category->icon)); ?>" alt="<?php echo e($category->name); ?>" class="h-6 w-6 rounded-full object-contain">
                        
                                    
                                    <span class="ltr:ml-3 rtl:mr-3 text-[13px] font-medium"> <?php echo e($category->name); ?> </span>
                        
                                    
                                    <span class="ltr:ml-auto rtl:mr-auto transition duration-300 shrink-0 group-open:-rotate-180">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path> </svg>
                                    </span>
        
                                </summary>
                    
                                
                                <nav class="mt-1.5 ltr:ml-8 rtl:mr-8 flex flex-col">
        
                                    
                                    <a href="<?php echo e(url('categories/' . $category->slug)); ?>" class="flex items-center px-4 py-2 text-gray-800 dark:text-gray-100 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-700 hover:text-gray-700 dark:hover:text-gray-200">
                                        <span class="ltr:ml-3 rtl:mr-3 text-xs font-medium"> <?php echo e(__('messages.t_browse_parent_category', ['category' => $category->name])); ?> </span>
                                    </a>
        
                                    
                                    <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(url('categories/' . $category->slug . '/' . $sub->slug)); ?>" class="flex items-center px-4 py-2 text-gray-500 dark:text-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                                            <span class="ltr:ml-3 rtl:mr-3 text-xs font-medium"> <?php echo e($sub->name); ?> </span>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                                </nav>
        
                            </details>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>

                
                <div class="w-full h-px bg-gray-100 dark:bg-zinc-600 my-3"></div>

                
                <a href="<?php echo e(url('/')); ?>" class="py-2 px-5 flex items-center text-gray-500 dark:text-gray-200 font-semibold text-sm">
                    <svg class="w-[18px] h-[18px] ltr:mr-2.5 rtl:ml-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 22h14a2 2 0 0 0 2-2v-9a1 1 0 0 0-.29-.71l-8-8a1 1 0 0 0-1.41 0l-8 8A1 1 0 0 0 3 11v9a2 2 0 0 0 2 2zm5-2v-5h4v5zm-5-8.59 7-7 7 7V20h-3v-5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v5H5z"></path></svg>
                    <?php echo app('translator')->get('messages.t_home'); ?>
                </a>

                
                <div x-data="{ open: false }" class="space-y-1">

                    
                    <a href="javascript:void(0)" class="py-2 px-5 text-gray-500 dark:text-gray-200 font-semibold text-sm flex items-center space-x-3 rtl:space-x-reverse relative z-1" x-on:click="open = !open">
                        <span class="grow flex items-center">
                            <svg class="w-[18px] h-[18px] ltr:mr-2.5 rtl:ml-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm7.931 9h-2.764a14.67 14.67 0 0 0-1.792-6.243A8.013 8.013 0 0 1 19.931 11zM12.53 4.027c1.035 1.364 2.427 3.78 2.627 6.973H9.03c.139-2.596.994-5.028 2.451-6.974.172-.01.344-.026.519-.026.179 0 .354.016.53.027zm-3.842.7C7.704 6.618 7.136 8.762 7.03 11H4.069a8.013 8.013 0 0 1 4.619-6.273zM4.069 13h2.974c.136 2.379.665 4.478 1.556 6.23A8.01 8.01 0 0 1 4.069 13zm7.381 6.973C10.049 18.275 9.222 15.896 9.041 13h6.113c-.208 2.773-1.117 5.196-2.603 6.972-.182.012-.364.028-.551.028-.186 0-.367-.016-.55-.027zm4.011-.772c.955-1.794 1.538-3.901 1.691-6.201h2.778a8.005 8.005 0 0 1-4.469 6.201z"></path></svg>
                            <?php echo e($default_language_name); ?>

                        </span>
                        <span x-bind:class="{ 'rotate-90': !open, 'rotate-0': open }" class="transform transition ease-out duration-150 opacity-75 rotate-0">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-chevron-down inline-block w-4 h-4"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </span>
                    </a>

                    
                    <div 
                        x-show="open" 
                        x-transition:enter="transition ease-out duration-100" 
                        x-transition:enter-start="transform -translate-y-6 opacity-0" 
                        x-transition:enter-end="transform translate-y-0 opacity-100" 
                        x-transition:leave="transition ease-in duration-100 bg-transparent" 
                        x-transition:leave-start="transform translate-y-0 opacity-100" 
                        x-transition:leave-end="transform -translate-y-6 opacity-0" 
                        class="relative z-0">

                        <?php $__currentLoopData = supported_languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div <?php if($default_language_code !== $lang->language_code): ?> wire:click="setLocale('<?php echo e($lang->language_code); ?>')" <?php endif; ?> class="py-2 px-5 rounded-sm inline-flex items-center cursor-pointer justify-between <?php echo e($default_language_code === $lang->language_code ? 'bg-primary-100/25 text-primary-600' : 'hover:bg-gray-50 dark:hover:bg-zinc-600'); ?> focus:outline-none w-full">
                                <div class="inline-flex items-center">
                                    <img src="<?php echo e(countryFlag($lang->country_code)); ?>" alt="<?php echo e($lang->name); ?>" class="w-5 ltr:mr-3 rtl:ml-3">
                                    <span class="font-normal text-xs dark:text-gray-300"><?php echo e($lang->name); ?></span>
                                </div>
                                <?php if($default_language_code === $lang->language_code): ?>
                                    <div class="block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                <?php else: ?>
                                    <div wire:loading wire:target="setLocale('<?php echo e($lang->language_code); ?>')">
                                        <svg role="status" class="block w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/> </svg>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    
                </div>

                
                <a href="<?php echo e(url('help/contact')); ?>" class="py-2 px-5 flex items-center text-gray-500 dark:text-gray-200 font-semibold text-sm">
                    <svg class="w-[18px] h-[18px] ltr:mr-2.5 rtl:ml-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 6a3.939 3.939 0 0 0-3.934 3.934h2C10.066 8.867 10.934 8 12 8s1.934.867 1.934 1.934c0 .598-.481 1.032-1.216 1.626a9.208 9.208 0 0 0-.691.599c-.998.997-1.027 2.056-1.027 2.174V15h2l-.001-.633c.001-.016.033-.386.441-.793.15-.15.339-.3.535-.458.779-.631 1.958-1.584 1.958-3.182A3.937 3.937 0 0 0 12 6zm-1 10h2v2h-2z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                    <?php echo app('translator')->get('messages.t_contact_us'); ?>
                </a>


            </div>
            
        </div>

    </div>

    
    <?php if(auth()->guard()->check()): ?>
        <div x-show="notifications_menu" class="fixed inset-0 flex z-40" x-ref="notifications_menu">

            
            <div x-show="notifications_menu" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="notifications_menu = false"
                aria-hidden="true">
            </div>

            
            <div 
                x-show="notifications_menu" 
                x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full"
                x-transition:enter-end="ltr:translate-x-0 rtl:-translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="ltr:-translate-x-0 rtl:translate-x-0"
                x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full"
                class="fixed ltr:right-0 rtl:left-0 max-w-xs w-full bg-white dark:bg-zinc-700 shadow-xl flex flex-col h-full">

                
                <div class="py-4 px-4 lg:px-4 w-full bg-gray-50 dark:bg-zinc-600 sm:flex sm:justify-between sm:items-center">
                    <div class="flex justify-center sm:justify-left">
                        <h3 class="inline-flex items-center space-x-2 rtl:space-x-reverse font-semibold">
                            <svg class="text-gray-500 dark:text-gray-200 inline-block w-6 h-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
                            <span class="text-sm dark:text-gray-100"><?php echo app('translator')->get('messages.t_notifications'); ?></span>
                        </h3>
                    </div>
                </div>

                
                <div class="w-full overflow-auto h-full">
                    <div class="space-y-2 py-6">
                        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="px-4 pb-1 pt-2" wire:key="header-notifications-<?php echo e($n->uid); ?>">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <span class="rounded-md h-10 w-10 flex items-center justify-center bg-primary-100/25 text-primary-600 dark:bg-primary-500/20 dark:text-primary-100">
                                            <svg class="h-5 w-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M22 20H2v-2h1v-6.969C3 6.043 7.03 2 12 2s9 4.043 9 9.031V18h1v2zM9.5 21h5a2.5 2.5 0 1 1-5 0z"></path></g></svg>
                                        </span>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3 w-0 flex-1">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">
                                            <?php if($n->params): ?>
                                                <?php echo __('messages.' . $n->text, $n->params); ?>

                                            <?php else: ?>
                                                <?php echo __('messages.' . $n->text); ?>

                                            <?php endif; ?>
                                        </p>
                                        <div class="mt-2 flex space-x-7 rtl:space-x-reverse">

                                            
                                            <a href="<?php echo e($n->action); ?>" class="bg-transparent rounded-md text-[13px] font-medium text-primary-600 hover:text-primary-700 focus:outline-none">
                                                <?php echo e(__('messages.t_view')); ?>

                                            </a>
                                            
                                            
                                            <button wire:click="readNotification('<?php echo e($n->uid); ?>')" wire:loading.attr="disabled" wire:target="read('<?php echo e($n->uid); ?>')" type="button" class="bg-transparent rounded-md text-[13px] font-medium text-gray-700 dark:text-gray-400 hover:text-gray-500 focus:outline-none">
                                                
                                                <div wire:loading wire:target="readNotification('<?php echo e($n->uid); ?>')">
                                                    <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                    </svg>
                                                </div>

                                                
                                                <div wire:loading.remove wire:target="readNotification('<?php echo e($n->uid); ?>')">
                                                    <?php echo e(__('messages.t_mark_as_read')); ?>

                                                </div>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
            </div>

        </div>
    <?php endif; ?>

</header>

<?php $__env->startPush('scripts'); ?>
    
    <script>
        function TTRjRvxLbHzaKxW() {
            return {

                mobile_menu       : false,
                notifications_menu: false,
                open              : false,
                is_announce       : true,

                // Close announce
                closeAnnounce() {
                    this.is_announce = false
                    window.livewire.find('<?php echo e($_instance->id); ?>').closeAnnounce();
                }

            }
        }
        window.TTRjRvxLbHzaKxW = TTRjRvxLbHzaKxW();
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\rizwan\riverr-13nulled\riverr-13nulled\codecanyon-39634853-riverr-freelance-services-marketplace\resources\views/livewire/main/includes/header.blade.php ENDPATH**/ ?>