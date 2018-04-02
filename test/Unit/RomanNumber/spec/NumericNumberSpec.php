<?php

namespace spec\Nanou\Kata\RomanNumber;

use Nanou\Kata\RomanNumber\NumericNumber;
use Nanou\Kata\RomanNumber\RomanNumber;
use PhpSpec\ObjectBehavior;

class NumericNumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(1);
        $this->shouldHaveType(NumericNumber::class);
    }

    function it_accepts_positive_number()
    {
        $this->shouldNotThrow()->during('__construct', [2]);
    }

    function it_does_not_accepts_negative_number()
    {
        $this->shouldThrow(\InvalidArgumentException::class)->during('__construct', [-1]);
    }

    function it_does_not_accepts_number_upper_than_3000()
    {
        $this->shouldThrow(\InvalidArgumentException::class)->during('__construct', [3001]);
    }

    function it_returns_the_good_roman_for_1()
    {
        $this->beConstructedWith(1);
        $this->toRoman()->shouldBeLike(new RomanNumber("I"));
    }

    function it_returns_the_good_roman_for_2()
    {
        $this->beConstructedWith(2);
        $this->toRoman()->shouldBeLike(new RomanNumber("II"));
    }

    function it_returns_the_good_roman_for_3()
    {
        $this->beConstructedWith(3);
        $this->toRoman()->shouldBeLike(new RomanNumber("III"));
    }

    function it_returns_the_good_roman_for_4()
    {
        $this->beConstructedWith(4);
        $this->toRoman()->shouldBeLike(new RomanNumber("IV"));
    }

    function it_returns_the_good_roman_for_5()
    {
        $this->beConstructedWith(5);
        $this->toRoman()->shouldBeLike(new RomanNumber("V"));
    }

    function it_returns_the_good_roman_for_15()
    {
        $this->beConstructedWith(15);
        $this->toRoman()->shouldBeLike(new RomanNumber("XV"));
    }

    function it_returns_the_good_roman_for_40()
    {
        $this->beConstructedWith(40);
        $this->toRoman()->shouldBeLike(new RomanNumber("XL"));
    }

    function it_returns_the_good_roman_for_49()
    {
        $this->beConstructedWith(49);
        $this->toRoman()->shouldBeLike(new RomanNumber("XLIX"));
    }

    function it_returns_the_good_roman_for_50()
    {
        $this->beConstructedWith(50);
        $this->toRoman()->shouldBeLike(new RomanNumber("L"));
    }

    function it_returns_the_good_roman_for_90()
    {
        $this->beConstructedWith(90);
        $this->toRoman()->shouldBeLike(new RomanNumber("XC"));
    }

    function it_returns_the_good_roman_for_499()
    {
        $this->beConstructedWith(499);
        $this->toRoman()->shouldBeLike(new RomanNumber("CDXCIX"));
    }

    function it_returns_the_good_roman_for_3000()
    {
        $this->beConstructedWith(3000);
        $this->toRoman()->shouldBeLike(new RomanNumber("MMM"));
    }
}
