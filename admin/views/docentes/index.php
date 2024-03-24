<?php require('admin/views/sidebar.php'); ?>

<link rel="stylesheet" href="<?php echo constant('URLADMIN') . 'public/css/docentes.css' ?>">

<div class="grid-container full">
  <div class="grid-x grid-padding-x margin-3">
    <!-- CONTENT-MAIN -->
    <div class="cell smoll-12 medium-6 large-12">
      <!-- CARDS -->
      <div class="grid-x grid-margin-x large-up-3">
        <div class="cell shadow card card-z">
          <div class="card-divider align-center">
            <h4>Docentes</h4>
          </div>
          <div class="card-section card-section-z">
            <i class="fas fa-school"></i>
            <h3>Docentes</h3>
          </div>
        </div>
        <div class="cell shadow card card-z">
          <div class="card-divider align-center">
            <h4>213124</h4>
          </div>
          <div class="card-section card-section-z">
            <i class="fas fa-person-chalkboard"></i>
            <h3>Ver retirados</h3>
          </div>
        </div>
        <div class="cell shadow card card-z">
          <div class="card-divider align-center">
            <h4>$2432324</h4>
          </div>
          <div class="card-section card-section-z">
            <i class="fas fa-sack-dollar"></i>
            <h3>Nuevo Docente</h3>
          </div>
        </div>
      </div>
      <!-- CARDS END-->
      <!-- BUSCADOR -->
      <div class="grid-x margin-vertical-2">
        <div class="cell">
          <h4>Buscador Docentes</h4>
          <input type="text" id="buscar" class="">
        </div>
        <div class="cell buscar-result text-center">
          <div class="table-scroll" id="task-result">
            <table class="stack" id="tabla-result">
              <thead>
                <tr>
                  <th class="text-center">id</th>
                  <th class="text-center">foto</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">especialidad</th>
                  <th class="text-center">telefono</th>
                  <th class="text-center">Email</th>
                  <th class="text-center" colspan="2">Acciones</th>
                </tr>
              </thead>
              <tbody id="container">

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- BUSCADOR END-->
      <!-- Tabla docentes -->
      <div class="grid-x">
        <div class="cell text-center table-scroll">
          <h3>Docentes</h3>
          <table class="stack" id="tblDatos">
            <thead>
              <tr>
                <th class="text-center">id</th>
                <th class="text-center">foto</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">especialidad</th>
                <th class="text-center">telefono</th>
                <th class="text-center">Email</th>
                <th class="text-center" colspan="2">Acciones</th>
              </tr>
            </thead>
            <tbody id="mostrarDatos">
              <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
              </tr>
            </tbody>
          </table>
          <div id="paginacion">

          </div>
        </div>
      </div>
      <!-- Tabla docentes END-->
    </div>
    <!-- CONTENT-MAIN-END -->
  </div>
  <script src="<?php echo constant('URLADMIN') . 'public/js/docentes.js' ?>"></script>
</div>
<?php require('admin/views/footer.php'); ?>
