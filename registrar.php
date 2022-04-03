<?php 
  include ('conexion.php');

  
  $nombre                   = $_POST['nombre'];
  $email                    = $_POST['correo'];
  $telefono                 = $_POST['telefono'];
  $fecha_nacimiento         = $_POST['fecha'];
  $ciudad                   = $_POST['ciudad'];
  $estado                   = $_POST['estado'];
  $municipio                = $_POST['municipio'];
  $calle                    = $_POST['calle'];
  $codigo_postal            = $_POST['codigo_postal'];
  $solicitud                = $_POST['solicitud'];
  $medio_enterado           = $_POST['medios'];
  $otro                     = $_POST['otro'];



//   $destinatario = 'ivanrur95@gmail.com';  

  $insertar = "INSERT INTO tb_registro (nombre, email, fecha_nacimiento, ciudad, estado, municipio, codigo_postal, telefono, solicitud, medio, otro) VALUES
  ('$nombre','$email','$fecha_nacimiento','$ciudad','$estado','$municipio','$codigo_postal','$telefono', '$solicitud', '$medio_enterado', '$otro')";

$resultado = mysqli_query($conexion, $insertar);


  if ($resultado) {
    
    echo "<script>window.location='registro.php'</script>";   

  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }

//   $header = "Nueva requisicion";
//   $mensajeCompleto = "\nNueva petición de:" . $nombre . "\nTipo de solicitud: " . $tipo_solicitud . "\nDesatalle: " . $descripcion . "\nOficina: " . $oficina;
//   mail($destinatario, $mensajeCompleto, $header);

// if (mail) {
//   echo "<script>alert('se ha enviado un correo de aviso de tu solicitud registrada')</script>";
//   echo "<script> setTimeout(\"location.href='usuario.php'\",1000)</script>";
// }else{
//   echo "<script>alert('error no se pudo enviar el correo');</script>";
// }