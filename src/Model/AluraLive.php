<?php

namespace Alura\Solid\Model;

class AluraLive implements Pontuavel
{
    public function recuperaPontuacao(): int
    {
        return 10;
    }
}
