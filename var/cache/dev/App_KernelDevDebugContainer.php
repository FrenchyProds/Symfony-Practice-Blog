<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDx8gFFe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDx8gFFe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDx8gFFe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDx8gFFe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDx8gFFe\App_KernelDevDebugContainer([
    'container.build_hash' => 'Dx8gFFe',
    'container.build_id' => '4895a71a',
    'container.build_time' => 1610543654,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDx8gFFe');
