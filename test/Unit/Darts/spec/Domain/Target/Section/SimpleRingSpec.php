<?php

namespace spec\Nanou\Kata\Darts\Domain\Target\Section;

use Nanou\Kata\Darts\Domain\Target\GameArea;
use Nanou\Kata\Darts\Domain\Target\Section\SectionArea;
use Nanou\Kata\Darts\Domain\Target\Section\SimpleRing;
use Nanou\Kata\Darts\Domain\Target\Section\SectionPointsValue;
use Nanou\Kata\Darts\Domain\Target\TargetArea;
use PhpSpec\ObjectBehavior;

class SimpleRingSpec extends ObjectBehavior
{
    function it_is_initializable(SectionPointsValue $id)
    {
        $this->beConstructedWith($id);
        $this->shouldHaveType(SimpleRing::class);
        $this->shouldImplement(SectionArea::class);
        $this->shouldImplement(TargetArea::class);
        $this->shouldImplement(GameArea::class);
    }

    function it_gets_the_value(SectionPointsValue $id) {
        $id->pointsValue()->willReturn(5);
        $this->beConstructedWith($id);

        $this->value()->shouldBeInteger();
        $this->value()->shouldBeEqualTo(5);
    }
}
