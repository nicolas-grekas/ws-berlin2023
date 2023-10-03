<?php

namespace App\Foo;

use Symfony\Component\DependencyInjection\Attribute\AsAlias;

#[AsAlias(FooInterface::class)]
class FooBar implements FooInterface
{
}