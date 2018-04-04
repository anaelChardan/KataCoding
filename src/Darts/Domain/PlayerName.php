<?php

declare(strict_types=1);

namespace Nanou\Kata\Darts\Domain;

class PlayerName
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }
}
