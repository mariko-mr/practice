<?php

class PokerGame
{
    public function __construct(private array $cards1, private array $cards2)
    {
    }

    public function pokerStart(): array
    {

        return [$this->cards1, $this->cards2];
    }
}
