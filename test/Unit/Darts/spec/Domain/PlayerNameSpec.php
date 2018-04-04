<?php

namespace spec\Nanou\Kata\Darts\Domain;

use Nanou\Kata\Darts\Domain\PlayerName;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerNameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('a_name');
        $this->shouldHaveType(PlayerName::class);
    }
}
