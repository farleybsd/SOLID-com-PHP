<?php

namespace Alura\Solid\Model;

class Feedback
{
    private int  $nota;
    private  string $depoimento;
    function __construct(int $nota, ?string $depoimento)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    public function recuperarNota()
    {

        return $this->nota;
    }

    public function recuperarDepoimento()
    {
        return $this->depoimento;
    }
}
