<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC8n2fja\appProdDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC8n2fja/appProdDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerC8n2fja.legacy');

    return;
}

if (!\class_exists(appProdDebugProjectContainer::class, false)) {
    \class_alias(\ContainerC8n2fja\appProdDebugProjectContainer::class, appProdDebugProjectContainer::class, false);
}

return new \ContainerC8n2fja\appProdDebugProjectContainer(array(
    'container.build_hash' => 'C8n2fja',
    'container.build_id' => 'c57a5c7e',
    'container.build_time' => 1544521274,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerC8n2fja');