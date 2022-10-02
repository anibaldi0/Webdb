
<?php include('../templates/header.php');?>
<?php include('../secciones/cursos.php');?>
  
  <div class="row">
    <div class="col-12">
      <br>
      <div class="row">

        <div class="col-md-5">
          <form action="" method="post">
            <div class="card">
              <div class="card-header">
                Cursos
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label for="" class="form-label">ID</label>
                  <!-- formulario de entrada del id del curso -->
                  <input type="text"
                    class="form-control"
                    name="id"
                    id="id"
                    value="<?php echo $id; ?>"
                    aria-describedby="helpId"
                    placeholder="ID">
                </div>
                <div class="mb-3">
                  <label for="nombre_curso" class="form-label">Nombre del curso</label>
                  <!-- formulario de entrada del nombre del curso -->
                  <input type="text"
                    class="form-control"
                    name="nombre_curso"
                    id="nombre_curso"
                    value="<?php echo $nombre_curso; ?>"
                    aria-describedby="helpId"
                    placeholder="Curso">
                </div>
                <!-- botones de agregar, editar y borrar -->
                <div class="btn-group" role="group" aria-label="Button group name">
                  <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                  <button type="submit" name="accion" value="editar" class="btn btn-info">Editar</button>
                  <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
                </div>
              </div>
            </div>
          </form>
          
        </div>
        <div class="col-md-7">
          <div class="table-responsive">
            <table class="table table-primary">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <!-- esta $listaCursos es la misma que $listaCursos en cursos.php -->
                <?php foreach($listaCursos as $curso){ ?> 
                    <td><?php echo $curso['id']; ?></td>
                    <td><?php echo $curso['nombre_curso']; ?></td>
                    <td>
                      <form action="" method="post">
                        <!-- el input type="text" lo pasamos a type="hidden" para que oculte el campo a seleccionar -->
                        <!-- el input type="submit" selecciona el id del curso y lo devuelve al formulario Nombre del curso al seleccionarlo -->
                        <input type="hidden" name="id" id="id" value="<?php echo $curso['id']; ?>" />
                        <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>
  </div>
<?php include('../templates/footer.php');?>