<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX0Hx5vq\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX0Hx5vq/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerX0Hx5vq.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerX0Hx5vq\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerX0Hx5vq\appAppKernelProdContainer([
    'container.build_hash' => 'X0Hx5vq',
    'container.build_id' => '1622f820',
    'container.build_time' => 1698217927,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX0Hx5vq');
