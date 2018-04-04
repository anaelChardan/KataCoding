<?php

declare(strict_types=1);

namespace Nanou\Kata\Darts\Domain\Target;

interface TargetArea extends GameArea
{
    public function value(): int;
}
