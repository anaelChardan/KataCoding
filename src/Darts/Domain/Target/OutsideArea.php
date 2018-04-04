<?php

declare(strict_types=1);

namespace Nanou\Kata\Darts\Domain\Target;

class OutsideArea implements TargetArea
{
    public function value(): int
    {
        return 0;
    }
}
