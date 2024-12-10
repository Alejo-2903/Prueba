<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
  
<?php include ('../TEMPLATE/ENCABEZADO1.PHP');?>



<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../IMG/CARRUSEL1.avif" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="../IMG/CARRUSEL2.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="../IMG/CARRUSEL3.jpg" class="d-block w-100" >
    </div>
      
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div> <br>

<div id="tituloofertas">
<h1 class="tituloofertas">OFERTAS ACADEMICAS</h1>
</div> <br>

<div id="OFERTAS">
    <div class="ofertas1">TECNOLOGO</div>
    <div class="ofertas2">TECNICO</div>
    <div class="ofertas3">CURSOS</div>
</div>

<?php include ('../TEMPLATE/FOOTER.PHP');?>
</body>
</html>