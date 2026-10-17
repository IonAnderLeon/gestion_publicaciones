<?php
namespace App\Library;
use App\Library\Publication;
use Override;

class Book extends Publication {
    public int $pagesAmmount;


    #[Override]
    public function __construct(string $title, string $author, int $year, int $pagesAmmount)
    {
        parent::__construct($title, $author, $year);
        $this->pagesAmmount = $pagesAmmount;
        
    }

    #[Override]
    function mostrarInfo() : string {
        return sprintf("%s, Nº Paginas: %u", parent::mostrarInfo(), $this->pagesAmmount);
    }
}

?>
