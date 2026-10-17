<?php
namespace App\Library;

class Publication {
    public string $title;
    public string $author;
    public int $year;


    function __construct(string $title, string $author, int $year){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    function mostrarInfo() : string {
        return sprintf(
            "Titulo: %s, Autor: %s, Año de Publicacion: %u", 
            $this->title, 
            $this->author, 
            $this->year
            );
    }


}
?>
