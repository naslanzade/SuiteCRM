<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYDwbHVU\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYDwbHVU/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerYDwbHVU.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerYDwbHVU\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerYDwbHVU\App_KernelProdContainer([
    'container.build_hash' => 'YDwbHVU',
    'container.build_id' => 'e53161a5',
    'container.build_time' => 1709735432,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYDwbHVU');
