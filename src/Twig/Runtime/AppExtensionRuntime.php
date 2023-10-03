<?php

namespace App\Twig\Runtime;

use App\Foo\FooInterface;
use App\Repository\ConferenceRepository;
use Symfony\Component\DependencyInjection\Attribute\TaggedIterator;
use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct(
        private ConferenceRepository $conferenceRepository,
        private FooInterface $foo,
    )
    {
    }

    public function getConferences()
    {
        return $this->conferenceRepository->findAll();
    }
}
