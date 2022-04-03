<?php 
include ("conexion.php");
$solicitudes="SELECT * FROM tb_solicitud order by id_solicitud asc";

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <meta http-equiv="refresh" content="5">
  <title>Dashboard Template · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>



  <?php require 'complementos/header.php';?>

  <div class="container-fluid">
    <div class="row">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item ">
              <a class="nav-link active" href="solicitudes.php" id="pendiente">
                <span data-feather="clock"></span>
                Pendientes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="solicitud_aprobada.php">
                <span data-feather="check-square"></span>
                Aprobadas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="solicitud_rechazada.php">
                <span data-feather="x-square"></span>
                Rechazadas
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Bandeja de pendientes</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <!-- <a href="registrar.php" class="btn btn-sm btn-success">Agregar usuario</a>
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> -->
            </div>
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"> -->
            <!-- <span data-feather="calendar"></span>
          This week
        </button> -->
          </div>
        </div>

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

        <!-- <h2>Jenifer Santos Zamudio</h2> -->
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>

                <th scope="col">Nombre</th>
                <!-- <th scope="col">fecha </th>
            <th scope="col">Descripcion</th>
            <th scope ="col">fecha de Solicitud</th> -->
                <th scope="col">tipo de solicitud</th>
                <th scope="col">Nombre a quien solicita</th>
                <th scope="col">Oficina</th>
                <!-- <th scope ="col">Comentarios</th> -->
                <th scope="col">Acciones</th>



              </tr>
            </thead>
            <tbody>

              <?php  $resultado = mysqli_query($conexion, $solicitudes);

         while ($row=mysqli_fetch_assoc($resultado)) { ?>
              <tr>

                <td><?php echo $row['nombre']; ?></td>
                <!-- <td><?php //echo $row['fecha_actual']; ?></td>
            <td><?php // echo $row['descripcion']; ?></td>
            <td><?php // echo $row['fecha_solicitada']; ?></td> -->
                <td><?php echo $row['tipo_solicitud']; ?></td>
                <td><?php echo $row['nomb_solicita']; ?></td>
                <td><?php echo $row['oficina']; ?></td>
                <!-- <td><?php // echo $row['comentarios']; ?></td> -->
                <td>
                  <a href="aprobar_rechazar.php?id=<?php echo $row['id_solicitud'];?>" class="">Ver más</a>
                </td>
              </tr>

              <?php } mysqli_free_result($resultado)?>

            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/confirmar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
  </script>
  <script src="js/dashboard.js"></script>
  <script>
    setTimeout(() => {
      window.location.reload(true);
    }, 60000);
  </script>
</body>

</html>