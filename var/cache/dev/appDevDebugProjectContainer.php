<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ0ge8ph\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ0ge8ph/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJ0ge8ph.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJ0ge8ph\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerJ0ge8ph\appDevDebugProjectContainer([
    'container.build_hash' => 'J0ge8ph',
    'container.build_id' => 'fc1c6136',
    'container.build_time' => 1610443325,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ0ge8ph');
