<?php include"cabecalho.php"?>

<?php

#$bd = new mysql_query("filmes.bd");

$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);


$filme1 = [
  "titulo"=>"Homem-Aranha: Sem Volta Para Casa ",
  "nota"=> 9.7,
  "sinopse"=>"Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos de ser um super-herói. Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda mais perigosos, e o forçam a descobrir o que realmente significa ser o Homem-Aranha.",
  "poster"=>"https://www.themoviedb.org/t/p/w400/fVzXp3NwovUlLe7fvoRynCmBPNc.jpg"

];
$filme2 = [
  "titulo"=>"Cidade Perdida ",
  "nota"=> 9.0,
  "sinopse"=>"Uma romancista reclusa acredita que nada seria pior que fazer a turnê do seu livro mais recente com o modelo que ilustra a capa. Tudo muda quando a autora e o modelo sofrem uma tentativa de sequestro, e, com isso, são levados para uma surpreendente aventura na selva.",
  "poster"=>"https://www.themoviedb.org/t/p/w400/wUxLy5iIOTd8wsW3Exgzl31W88o.jpg"

];

$filme3 = [
  "titulo"=>"Sonic 2: O Filme ",
  "nota"=> 8.3 ,
  "sinopse"=>"Depois de se estabelecer em Green Hills, Sonic está pronto para mais liberdade e deixar sua marca como um herói, e Tom e Maddie concordam em deixá-lo em casa enquanto vão de férias. Mas, assim que eles se foram, Dr. Robotnik volta, desta vez com um novo parceiro, Knuckles, em busca de uma esmeralda que tem o poder de construir e destruir civilizações. Sonic se une a um novo companheiro, Tails, e juntos eles embarcam em uma jornada para encontrar a esmeralda antes que ela caia nas mãos erradas. ",
  "poster"=>"https://www.themoviedb.org/t/p/w400/f4SvCKIUrC2cDR7Xo4k1kaGAqQ2.jpg"

];
$filme4 = [
  "titulo"=>"Thor: Amor e Trovão ",
  "nota"=> 9.5 ,
  "sinopse"=>" Thor parte em uma jornada diferente de tudo que já enfrentou – uma busca pela paz interior. Mas sua aposentadoria é interrompida por um assassino galáctico conhecido como Gorr, o Carniceiro de Deus, que busca a extinção dos deuses. Para combater a ameaça, Thor pede a ajuda do Rei Valquíria, Korg e da ex-namorada Jane Foster, que – para surpresa de Thor – inexplicavelmente empunha seu martelo mágico, Mjolnir, como o Poderoso Thor. Juntos, eles embarcam em uma angustiante aventura cósmica para descobrir o mistério da vingança do God Butcher e detê-lo antes que seja tarde demais.",
  "poster"=>"https://www.themoviedb.org/t/p/w400/6OEBp0Gqv6DsOgi8diPUslT2kbA.jpg "

];

$filmes =[$filme1,$filme2,$filme3,$filme4];
?>


<body>
<nav class="nav-extended orange darken-1">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
        <li class="active waves-effect waves-light"><a href="home.php">Home</a></li>
        <li class="active waves-effect waves-light"><a href="cadastrar.php">Cadastrar</a></li>
    </ul>
      
    </div>

    <div class="nav-header center">
        <h1>Dimension Film</h1> 
    </div>

    <div class="nav-content">
      <ul class="tabs tabs-transparent orange darken-4">
        <li class="tab"><a class="active waves-effect waves-light" href="#test1">Todos</a></li>
        <li class="tab"><a class="active waves-effect waves-light" href="#test2">Assistidos</a></li>
        <li class="tab"><a class="active waves-effect waves-light" href="#test3">Favoritos</a></li>
        
      </ul>
    </div>
  </nav>

  <!--Card -->
  <div class="container">

  <div class="row">
<!--implementação de card com laço for -->
      <?php 
        foreach ($filmes as $filme)
          
      : ?>

       <div class="col s3">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?php echo $filme["poster"] ?>">
              <a class="btn-floating halfway-fab waves-effect waves-light red">
                <i class="material-icons">favorite_border</i></a>
            </div>
            <div class="card-content">
                <p class="valign-wrapper">
                  <i class="material-icons amber-text">star</i><?php echo $filme["nota"] ?>
                </p>
                <span class="card-title"><?php echo $filme["titulo"] ?></span>
                <p><?php echo $filme["sinopse"] ?></p>
            </div>
          </div>
        </div>

      <?php endforeach ?>

  </div>

  
</div>

  </div>


  
    
</body>
</html>