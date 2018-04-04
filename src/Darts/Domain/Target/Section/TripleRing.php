<?php

declare(strict_types=1);

namespace Nanou\Kata\Darts\Domain\Target\Section;

class TripleRing implements SectionArea
{
    /** @var SectionPointsValue */
    private $id;

    public function __construct(SectionPointsValue $id)
    {
        $this->id = $id;
    }

    public function value(): int
    {
        return 3 * $this->id->pointsValue();
    }
}
