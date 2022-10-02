
<?php include('../templates/header.php');?>
  
  <div class="row">
    <div class="col-5">
      <form action="" method="post">
        <div class="card">
          <div class="card-header">
            Alumnos
          </div>
          <div class="card-body">

            <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input type="text"
                class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="id">
            </div>
            <div class="mb-3">
              <label for="dni" class="form-label">DNI</label>
              <input type="text"
                class="form-control" name="dni" id="dni" aria-describedby="helpId" placeholder="dni">
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre">
            </div>
            <div class="mb-3">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="text"
                class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="escriba los apellidos">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Cursos del Alumno:</label>
              <select multiple name="cursos[]" id="lista_cursos" class="form-control">
                <option value="">Seleccione una opcion</option>
                <option value="">Curso 1</option>
                <option value="">Curso 2</option>
              </select>
            </div>
            <div class="btn-group" role="group" aria-label="">
              <button type="button" class="btn btn-success">Agregar</button>
              <button type="button" class="btn btn-info">Editar</button>
              <button type="button" class="btn btn-danger">Borrar</button>
            </div>

          </div>
          <div class="card-footer">
            Pie de Pagina
          </div>
        </div>
      </form>
    </div>
    <div class="col-7">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

<?php include('../templates/footer.php');?>