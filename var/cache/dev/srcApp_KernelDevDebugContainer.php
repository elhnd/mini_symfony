<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLwfKsNx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLwfKsNx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLwfKsNx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLwfKsNx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLwfKsNx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'LwfKsNx',
    'container.build_id' => 'd5930f83',
    'container.build_time' => 1563137010,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLwfKsNx');
