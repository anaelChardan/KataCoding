<?php

namespace spec\Nanou\Kata\RomanNumber;

use Nanou\Kata\RomanNumber\NumericNumber;
use Nanou\Kata\RomanNumber\RomanNumber;
use PhpSpec\ObjectBehavior;

class RomanNumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith("M");
        $this->shouldHaveType(RomanNumber::class);
    }

    function it_accepts_some_letters()
    {
        $this->shouldNotThrow()->during('__construct', ["M"]);
    }

    function it_does_not_accepts_some_other_letters()
    {
        $this->shouldThrow(\InvalidArgumentException::class)->during('__construct', ["E"]);
    }
}
