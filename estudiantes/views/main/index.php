<?php require('main/views/header.php'); ?>

<div class="grid-container">
  <div class="grid-x">
      <div class="cell">
        <div class="img-hero">
          <img src="<?php echo constant('URL'); ?>public/img/hero1.png" alt="Logo IEP San Luis">
        </div>
      </div>
  </div>

  <div class="grid-x">
    <div class="cell small-9 medium-8 large-8">
      <h3>BIENVENIDOS</h3>
    </div>
    <div class="cell small-9 medium-4 large-4">
      ESSTUDIANTES GAAAAAAAAA
      <a href="<?php echo "http://localhost/iepsanluis/admin/"?>">admin</a>
      <a href="<?php echo "http://localhost/iepsanluis/estudiantes/"?>">Estudiantes</a>
      <a href="<?php echo "http://localhost/iepsanluis/docentes/"?>">Docentes</a>
    </div>
  </div>
</div>

<?php require('main/views/footer.php'); ?>
