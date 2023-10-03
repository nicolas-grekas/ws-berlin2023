<?php

namespace App\Foo;

use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag('foo')]
interface FooInterface
{
}
