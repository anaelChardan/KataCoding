<?php
declare(strict_types=1);

namespace Nanou\Kata\RomanNumber;

use Webmozart\Assert\Assert;

class RomanNumber
{
    private $roman;

    public function __construct(string $roman)
    {
        Assert::allOneOf(str_split($roman), ["I", "X", "V", "D", "C", "L", "M", ""]);

        $this->roman = $roman;
    }

    public function concat(RomanNumber $romanNumber): RomanNumber
    {
        return new RomanNumber($this->roman . $romanNumber->__toString());
    }

    public function __toString(): string
    {
        return $this->roman;
    }
}
