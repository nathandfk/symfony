<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI2n6rCE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI2n6rCE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI2n6rCE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI2n6rCE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerI2n6rCE\App_KernelDevDebugContainer([
    'container.build_hash' => 'I2n6rCE',
    'container.build_id' => '0106d613',
    'container.build_time' => 1658399189,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI2n6rCE');
