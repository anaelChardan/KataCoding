<?php

namespace spec\Nanou\Kata\Darts\Domain;

use Nanou\Kata\Darts\Domain\Player;
use Nanou\Kata\Darts\Domain\PlayerId;
use Nanou\Kata\Darts\Domain\PlayerName;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    function it_is_initializable(PlayerId $id, PlayerName $playerName)
    {
        $this->beConstructedWith($id, $playerName);
        $this->shouldHaveType(Player::class);
    }
}
