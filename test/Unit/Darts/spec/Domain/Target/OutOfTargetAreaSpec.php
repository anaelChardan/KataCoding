<?php

namespace spec\Nanou\Kata\Darts\Domain\Target;

use Nanou\Kata\Darts\Domain\Target\GameArea;
use Nanou\Kata\Darts\Domain\Target\OutOfTargetArea;
use PhpSpec\ObjectBehavior;

class OutOfTargetAreaSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(OutOfTargetArea::class);
        $this->shouldImplement(GameArea::class);
    }
}
