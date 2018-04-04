<?php

namespace spec\Nanou\Kata\Darts\Domain\Target\Section;

use Nanou\Kata\Darts\Domain\Target\Section\DoubleRing;
use Nanou\Kata\Darts\Domain\Target\GameArea;
use Nanou\Kata\Darts\Domain\Target\Section\SectionArea;
use Nanou\Kata\Darts\Domain\Target\Section\SectionPointsValue;
use Nanou\Kata\Darts\Domain\Target\TargetArea;
use PhpSpec\ObjectBehavior;

class DoubleRingSpec extends ObjectBehavior
{
    function it_is_initializable(SectionPointsValue $id)
    {
        $this->beConstructedWith($id);
        $this->shouldHaveType(DoubleRing::class);
        $this->shouldImplement(SectionArea::class);
        $this->shouldImplement(TargetArea::class);
        $this->shouldImplement(GameArea::class);
    }

    function it_gets_the_value(SectionPointsValue $id) {
        $id->pointsValue()->willReturn(5);
        $this->beConstructedWith($id);

        $this->value()->shouldBeInteger();
        $this->value()->shouldBeEqualTo(10);
    }
}
