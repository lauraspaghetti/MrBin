<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container62gIzMb\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container62gIzMb/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container62gIzMb.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container62gIzMb\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container62gIzMb\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '62gIzMb',
    'container.build_id' => 'bd16af31',
    'container.build_time' => 1594393255,
], __DIR__.\DIRECTORY_SEPARATOR.'Container62gIzMb');
