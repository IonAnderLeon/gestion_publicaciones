<?php

namespace App\Library;
use App\Library\Publication;
use Override;

class Magazine extends Publication
{
    public int $issueNumber;

    #[Override]
    public function __construct(string $title, string $author, int $year, int $issueNumber)
    {
        parent::__construct($title, $author, $year);
        $this->issueNumber = $issueNumber;
    }

    #[Override]
    public function mostrarInfo(): string
    {
        return sprintf("%s, Nº Edicion: %u", parent::mostrarInfo(), $this->issueNumber);
    }
    
}
