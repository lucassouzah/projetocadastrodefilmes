<?php include "cabecalho.php"?>
<body>
    <!--fundo-->
<nav class="nav-extended  orange darken-1">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
        <li><a href="home.php">Home</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
    </ul>
      
    </div>

    <div class="nav-header center">
        <h1>Dimension Film</h1> 
    </div>

    <!--barra de menu-->
    <div class="nav-content">
      <ul class="tabs tabs-transparent  orange darken-4">
        <li class="tab"><a class="active" href="#">Todos</a></li>
        <li class="tab"><a class="active" href="#">Assistidos</a></li>
        <li class="tab"><a class="active" href="#">Favoritos</a></li>
        
      </ul>
    </div>
  </nav>
  <!--Formatação para o meio da pagina-->
  <div class="row">
    <div class="col s6 offset-s3">
        <div class="card ">
            <div class="card-content white-text">
                <span class="card-title">Cadastrar Filme</span>

                <!--Input do titulo-->
                <div class="row">
                    <div class="input-field col s12">
                     <input id="titulo" type="text" class="validate" require>
                        <label for="titulo">Titulo do Filme</label>
                    </div>
                </div> 

                <!--Input da sinopse-->
                <div class="row">
                    <form class="col s12">
                        <div class="row ">
                            <div class="input-field col s12 ">
                             <textarea id="sinopse" class="materialize-textarea"></textarea>
                             <label for="sinopse">Sinopse</label>
                            </div>
                        </div>
                    </form>
                </div>
                <!--Input da nota-->
                <div class="row">
                    <div class="input-field  col s4">
                     <input id="nota" type="number" stpe=".1" min="0"   max="10"class="validate" require>
                        <label for="nota">Nota</label>
                    </div>
                </div> 

                <!--Input da capa-->
            <div class="file-field input-field">
                <div class="btn  orange darken-4">
                    <span>Capa</span>
                    <input type="file">
                </div>
            <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
             </div>
            </div>
            
            <div class="card-action">
                <a class="btn waves-effect waves-light grey" href="home.php">Cancelar</a>
                <a href="#" class="waves-effect waves-light btn orange darken-4">Cadastrar</a>
            </div>
        </div>
    </div>
  </div>


  </body>