<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDOiViI0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDOiViI0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDOiViI0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDOiViI0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDOiViI0\App_KernelDevDebugContainer([
    'container.build_hash' => 'DOiViI0',
    'container.build_id' => 'bb8eebdf',
    'container.build_time' => 1713955733,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDOiViI0');
