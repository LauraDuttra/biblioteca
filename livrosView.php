<?php

function exibirLivros($livros){

echo "<h2> Biblioteca De Livros:</h2> <ul>";

foreach($livros as $livro){

echo "<li> Título - ".$livro['titulo']." - Autor ". $livro ['autor'] ." - Ano " . $livro ['ano'] ."</li>";

}

echo "</ul>";

}
?>