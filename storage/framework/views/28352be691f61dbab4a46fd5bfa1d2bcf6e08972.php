<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'placeholder', 'model', 'type' => 'text', 'icon' => null, 'suffix' => false, 'hint' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'placeholder', 'model', 'type' => 'text', 'icon' => null, 'suffix' => false, 'hint' => null]); ?>
<?php foreach (array_filter((['label', 'placeholder', 'model', 'type' => 'text', 'icon' => null, 'suffix' => false, 'hint' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>

    
    <label for="text-input-component-id-<?php echo e($model); ?>" class="block text-xs font-medium tracking-wide <?php echo e($errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-700 dark:text-white'); ?>"><?php echo e(htmlspecialchars_decode($label)); ?></label>
    
    
    <div class="mt-2 relative">

        
        <input type="<?php echo e($type); ?>" placeholder="<?php echo e(htmlspecialchars_decode($placeholder)); ?>" wire:model.defer="<?php echo e($model); ?>" id="text-input-component-id-<?php echo e($model); ?>" <?php echo e($type === 'password' ? 'readonly' : ''); ?> onfocus="<?php echo e($type === 'password' ? "this.removeAttribute('readonly');" : ""); ?>" class="dark:bg-transparent block w-full text-xs rounded border-2 ltr:pr-10 ltr:pl-3 rtl:pl-10 rtl:pr-3 py-3 font-normal <?php echo e($errors->first($model) ? 'border-red-500 text-red-600 placeholder-red-400 focus:ring-red-500 focus:border-red-500' : 'border-gray-200 dark:border-zinc-600 placeholder-gray-400 dark:placeholder-gray-200 focus:ring-primary-600 focus:border-primary-600 dark:text-gray-100'); ?>" <?php echo e($attributes); ?>>

        <?php if($suffix): ?>
            
            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-3 rtl:pl-3 flex items-center pointer-events-none">
                <span class="<?php echo e($errors->first($model) ? 'text-red-400' : 'text-gray-400'); ?>"><?php echo e($suffix); ?></span>
            </div>
        <?php elseif($icon): ?>
            
            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-3 rtl:pl-3 flex items-center pointer-events-none">
                <i class="mdi mdi-<?php echo e($icon); ?> <?php echo e($errors->first($model) ? 'text-red-400' : 'text-gray-400'); ?>"></i>
            </div>
        <?php endif; ?>

    </div>

    
    <?php if($hint): ?>
        <p class="mt-1 text-xs text-gray-400 dark:text-gray-200"><?php echo $hint; ?></p>
    <?php endif; ?>

    
    <?php $__errorArgs = [$model];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first($model)); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div><?php /**PATH D:\rizwan\riverr-13nulled\riverr-13nulled\codecanyon-39634853-riverr-freelance-services-marketplace\resources\views/components/forms/text-input.blade.php ENDPATH**/ ?>