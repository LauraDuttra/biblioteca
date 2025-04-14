<?php

class Livro{

    private $livros = [
        ['titulo' => 'Augusto Cury - O Vendedor de Sonhos', 'autor' => 'Augusto Cury', 'ano' => 2008],
        ['titulo' => 'Augusto Cury - Ansiedade: Como Enfrentar o Mal do Século', 'autor' => 'Augusto Cury', 'ano' => 2013],
        ['titulo' => 'A Dama, Seu Amado e Seu Senhor', 'autor' => 'T. D. Jakes', 'ano' => 2000],
        ['titulo' => 'Eu e o Meu Pavio Curto', 'autor' => 'Laura Schlessinger', 'ano' => 2003],
        ['titulo' => 'Uma Vida com Propósitos', 'autor' => 'Rick Warren', 'ano' => 2002],
        ['titulo' => 'A Cabana', 'autor' => 'William P. Young', 'ano' => 2007],
        ['titulo' => 'Em Seus Passos o Que Faria Jesus?', 'autor' => 'Charles Sheldon', 'ano' => 1896]
    ];

    public function listarLivros(){
        return $this->livros;
    }
}

?>
