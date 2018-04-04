<?php

declare(strict_types=1);

namespace Nanou\Kata\Darts\Domain;

interface Game
{
    public function addPlayer(Player $player): Game;
}
