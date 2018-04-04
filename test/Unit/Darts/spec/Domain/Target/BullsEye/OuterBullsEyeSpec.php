<?php

namespace spec\Nanou\Kata\Darts\Domain\Target\BullsEye;

use Nanou\Kata\Darts\Domain\Target\BullsEye\BullsEye;
use Nanou\Kata\Darts\Domain\Target\BullsEye\OuterBullsEye;
use Nanou\Kata\Darts\Domain\Target\GameArea;
use Nanou\Kata\Darts\Domain\Target\TargetArea;
use PhpSpec\ObjectBehavior;

class OuterBullsEyeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(OuterBullsEye::class);
        $this->shouldImplement(BullsEye::class);
        $this->shouldImplement(TargetArea::class);
        $this->shouldImplement(GameArea::class);
    }

    function it_has_a_value()
    {
        $this->value()->shouldBeInt();
        $this->value()->shouldReturn(25);
    }
}
