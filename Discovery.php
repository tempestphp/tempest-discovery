<?php

declare(strict_types=1);

namespace Tempest\Discovery;

use Tempest\Container\Container;
use Tempest\Support\Reflection\ClassReflector;

interface Discovery
{
    public function discover(ClassReflector $class): void;

    public function hasCache(): bool;

    public function storeCache(): void;

    public function restoreCache(Container $container): void;

    public function destroyCache(): void;
}
