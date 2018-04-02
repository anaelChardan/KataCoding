<?php
declare(strict_types=1);

namespace Nanou\Kata\RomanNumber;

use Webmozart\Assert\Assert;

class NumericNumber
{
    private $number;

    public function __construct(int $number)
    {
        Assert::greaterThanEq($number, 0, 'NumericNumber only accepts positive numbers');
        Assert::lessThanEq($number, 3000, "Romans didn't expected number greater than 3000");

        $this->number = $number;
    }

    private function unitSize(): int
    {
        return strlen((string)$this->number);
    }

    private function lowerBound(): NumericNumber
    {
        $number = 1;

        for ($i = 0; $i < $this->unitSize() - 1; $i++) {
            $number *= 10;
        }

        return new NumericNumber($number);
    }

    private function upperBound(): NumericNumber
    {
        $upperBounds = [5, 10, 50, 100, 500, 1000];

        foreach ($upperBounds as $upperBound) {
            if ($this->number < $upperBound) {
                return new NumericNumber($upperBound);
            }
        }

        return new NumericNumber(0);
    }

    private function isAtOneUnitFromUpperBound(): bool
    {
        $upperBound = $this->upperBound();

        if (0 === $upperBound->toInt()) {
            return false;
        }

        $lowerBound = $this->lowerBound();

        return $this->number >= ($upperBound->number - $lowerBound->number);
    }

    private function toInt(): int
    {
        return $this->number;
    }

    public function toRoman(): RomanNumber
    {
        switch ($this->number) {
            case 0:
                return new RomanNumber("");
            case 1:
                return new RomanNumber("I");
            case 5:
                return new RomanNumber("V");
            case 10:
                return new RomanNumber("X");
            case 50:
                return new RomanNumber("L");
            case 100:
                return new RomanNumber("C");
            case 500:
                return new RomanNumber("D");
            case 1000:
                return new RomanNumber("M");
        }

        $lowerBound = $this->lowerBound();
        $upperBound = $this->upperBound();
        $romanNumber = new RomanNumber("");

        if ($this->isAtOneUnitFromUpperBound()) {
            $romanNumber = $romanNumber->concat($lowerBound->toRoman())->concat($upperBound->toRoman());

            $remainingNumber = $this->number - ($upperBound->number - $lowerBound->number);


            return $romanNumber->concat((new NumericNumber($remainingNumber))->toRoman());
        }

        return $lowerBound->toRoman()->concat((new NumericNumber($this->number - $lowerBound->number))->toRoman());
    }
}