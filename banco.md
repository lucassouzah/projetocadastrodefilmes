
BANCO PHP

Em Processo ...

<?php
    $bd = new mysql_query("filmes.bd");

    $sql = "DROP TABLE IF EXISTS filmes";

    if($bd->exec($sql))
        echo "\n tabela filmes apagada!\n";

    $sql = "CREATE TABLE filmes(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titulo VARCHAR(100) NOT NULL,
            poster VARCHAR(200),
            sinopse TEXT,
            nota DECIMAL(2,1)
            )
    ";

if ($bd->exec($sql))
    echo "\ntabela filmes criada!\n"; 

else 
        echo"\n erro ao criar tabela filmes!\n";

$sql = "INSERT INTO filmes (id, titulo , poster ,sinopse,nota)VALUES(
    0,
    'Homem-Aranha: Sem Volta Para Casa',
    'https://www.themoviedb.org/t/p/w400/fVzXp3NwovUlLe7fvoRynCmBPNc.jpg',
    'Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos de ser um super-herói. 
    Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda mais perigosos, e o forçam a descobrir o que 
    realmente significa ser o Homem-Aranha.',
    9.7

    )";

if ($bd->exec($sql))
echo "\nfilmes inseridos com sucesso!\n"; 

else 
    echo"\n erro ao criar filme!\n";

  
<? 