<?php

declare(strict_types=1);

namespace Nanou\Kata\Darts\Domain\Target\Section;

use Nanou\Kata\Darts\Domain\Target\Section\SectionPointsValue;

class SimpleRing implements SectionArea
{
    /** @var SectionPointsValue */
    private $id;

    public function __construct(SectionPointsValue $id)
    {
        $this->id = $id;
    }

    public function value(): int
    {
        return $this->id->pointsValue();
    }
}
