<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAyW2rYo\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAyW2rYo/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerAyW2rYo.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerAyW2rYo\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerAyW2rYo\App_KernelProdContainer([
    'container.build_hash' => 'AyW2rYo',
    'container.build_id' => 'f5e3e2d4',
    'container.build_time' => 1599066558,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAyW2rYo');
