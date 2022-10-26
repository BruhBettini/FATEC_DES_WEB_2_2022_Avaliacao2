<<<<<<< HEAD
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="crud" href="?crud=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?crud=cadastro">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?crud=read">Listar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
        session_start();

        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: index.php");
            exit;
        }

        include("conexao/conexao.php");
        
        switch(@$_REQUEST["crud"]){
          case"home" :
            include ("welcome.php");
          break;
            case"cadastro" :
                include ("cadastro.php");
            break;
            case"read" :
                include ("read/read.php");
            break;
            default:
            case "create" :
                include ("create/create.php");
            break;    
            case "update" :
              include ("update/update.php");
            break; 
            case "delete" :
              include ("delete/delete.php");
          break;   
            case "editar" :
                include ("editar.php");
            break;    
        }
    ?>
        </div>
    </div>
</div>

  </body>
=======
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="crud" href="?crud=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?crud=cadastro">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?crud=read">Listar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
        session_start();

        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: index.php");
            exit;
        }

        include("conexao/conexao.php");
        
        switch(@$_REQUEST["crud"]){
          case"home" :
            include ("welcome.php");
          break;
            case"cadastro" :
                include ("cadastro.php");
            break;
            case"read" :
                include ("read/read.php");
            break;
            default:
            case "create" :
                include ("create/create.php");
            break;    
            case "update" :
              include ("update/update.php");
            break; 
            case "delete" :
              include ("delete/delete.php");
          break;   
            case "editar" :
                include ("editar.php");
            break;    
        }
    ?>
        </div>
    </div>
</div>

  </body>
>>>>>>> d348ae221ab5c9061f4738bb1348ec3bb822dea6
</html>