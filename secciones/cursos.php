<?php

//INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sitio web con PHP'); 

include_once '../configuraciones/db.php';
$conexionDB=DB::crearInstancia();

$consulta=$conexionDB->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();


?>