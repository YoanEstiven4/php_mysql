<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
    <title>Subir videos con PHP y MySQL</title>

    </head>
    <body class="d-flex flex-column h-100">
    
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Portada <span class="sr-only">(current)</span></a>
        </li> 
        <li class="nav-item active">
          <a class="nav-link" href="ver_videos.php">Ver videos <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<hr>
<main role="main" class="flex-shrink-0">

<div class="container">
<div class="row">
<h3 class="mt-5">Ver videos subidos con PHP y MySQL </h3>
</div>
  <hr>  
    <div class="row">
     <?php
    $query = $db->prepare("SELECT * FROM videos ORDER BY id DESC");
    $query->execute();
    $data = $query->fetchAll();
        foreach ($data as $row):
            $ubicacion = $row['ubicacion'];
            echo "<div class='col-md-3'>";
            echo "<video src='videos/".$ubicacion."' controls width='100%' height='200px' >";
            echo "</div>";
        endforeach;
        ?>
          
</div>
 </div>
 </main>
 <footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Pie de pagina.</span>
  </div>
</footer>
    <!-- Aquí va el contenido de tu web -->
 
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

