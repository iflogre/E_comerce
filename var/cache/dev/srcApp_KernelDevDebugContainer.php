<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWNjRPc7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWNjRPc7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWNjRPc7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWNjRPc7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWNjRPc7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WNjRPc7',
    'container.build_id' => '6091be48',
    'container.build_time' => 1571044642,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWNjRPc7');
