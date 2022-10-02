<?php

//INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sitio web con PHP'); 

include_once '../configuraciones/db.php';
$conexionDB=DB::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';
// consultas e interaccion con la db
if($accion!=''){
  switch($accion){
    case 'agregar':
      // se ejecuta una insercion, en la tabla cursos, del nombre_curso con id autoincremental
      $sql="INSERT INTO cursos (id, nombre_curso) VALUES (NULL, :nombre_curso)";
      // se prepara la consulta para poder ejecutar dicha consulta
      $consulta=$conexionDB->prepare($sql);
      // se agrega un parametro 
      $consulta->bindParam(':nombre_curso', $nombre_curso);
      // se ejecuta la consulta o instruccion de insercion
      $consulta->execute();
    break;
    case 'editar':
      // actualiza cursos cambiando nombre_cursos por el valor que viene en :nombre_cursos cuando el id sea = a :id
      $sql="UPDATE cursos SET nombre_curso=:nombre_curso WHERE id=:id";
      $consulta=$conexionDB->prepare($sql);
      $consulta->bindParam(':id',$id);
      $consulta->bindParam(':nombre_curso', $nombre_curso);
      $consulta->execute();
    break;
    case 'borrar';
    // cuando se presione Borrar se ejecuta la instruccion borrar cursos cuando el id sea = a :id
      $sql="DELETE FROM cursos WHERE id=:id";
      $consulta=$conexionDB->prepare($sql);
      $consulta->bindParam(':id', $id);
      $consulta->execute();
      
    break;
    case "Seleccionar":
      // seleccionamos un registro en la tabla cursos, se busca el registro con el :id para acceder a la info
      $sql="SELECT * FROM cursos WHERE id=:id";
      $consulta=$conexionDB->prepare($sql);
      // el :id seleccionado se pasa como parametro
      $consulta->bindParam(':id', $id);
      // se ejecuta la consulta de seleccion
      $consulta->execute();
      // se hace la instruccion con consulta fetch para mostrar todos los registros recuperados en la consulta SELECT
      $curso=$consulta->fetch(PDO::FETCH_ASSOC);
      // se imprime la consulta en el formulario nombre_curso con su respectivo id
      $nombre_curso=$curso['nombre_curso'];
      // echo $nombre_curso;

  }
}


$consulta=$conexionDB->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();


?>