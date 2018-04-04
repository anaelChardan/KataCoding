<?php

namespace spec\Nanou\Kata\Darts\Domain;

use Nanou\Kata\Darts\Domain\PlayerId;
use PhpSpec\ObjectBehavior;

class PlayerIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PlayerId::class);
    }
}
