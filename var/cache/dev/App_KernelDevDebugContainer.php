<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUX0mcTA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUX0mcTA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUX0mcTA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUX0mcTA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUX0mcTA\App_KernelDevDebugContainer([
    'container.build_hash' => 'UX0mcTA',
    'container.build_id' => '689e40f8',
    'container.build_time' => 1657905582,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUX0mcTA');
