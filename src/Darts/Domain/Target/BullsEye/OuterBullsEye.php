<?php

declare(strict_types=1);

namespace Nanou\Kata\Darts\Domain\Target\BullsEye;

class OuterBullsEye implements BullsEye
{
    public function value(): int
    {
        return 25;
    }
}