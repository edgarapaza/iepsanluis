<?php require ('main/views/header.php'); ?>

<div class="grid-container">
  <div class="grid-x">
    <div class="cell">
      <div class="img-hero">
<<<<<<< HEAD
        <img src="<?php echo constant('URL'); ?>main/public/img/hero1.png" alt="Logo IEP San Luis">
=======
        <img src="<?php echo constant('URLMAIN'); ?>public/img/hero1.png" alt="Logo IEP San Luis">
>>>>>>> fa1110fced5c0e38ee42bb33462bcd9585818e5c
      </div>
    </div>
  </div>

  <div class="grid-x">
    <div class="cell small-9 medium-8 large-8">
      <h3>BIENVENIDOS PAGINA PRINCIPAL</h3>
    </div>
    <div class="cell small-9 medium-4 large-4">
      Secretarios
      <a href="<?php echo "http://localhost/iepsanluis/admin/" ?>">admin</a>
      <a href="<?php echo "http://localhost/iepsanluis/estudiantes/" ?>">Estudiantes</a>
      <a href="<?php echo "http://localhost/iepsanluis/docentes/" ?>">Docentes</a>
    </div>
    <div class="cell small-9 medium-4-large-4">
      <a href="<?php echo "http://localhost/iepsanluis/main/nosotros/" ?>">Nosotros</a>
    </div>
  </div>
</div>

<?php require('main/views/footer.php'); ?>