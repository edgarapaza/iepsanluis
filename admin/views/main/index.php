<?php require('admin/views/header.php'); ?>

<div class="grid-container">
  <div class="grid-x">
      <div class="cell">
        <div class="img-hero">
          <img src="<?php echo constant('URL'); ?>public/img/hero1.png" alt="Logo IEP San Luis">
        </div>
      </div>
  </div>

  <div class="grid-x">
    <h3>BIENVENIDOS a administradores</h3>
    <div class="cell small-9 medium-8 large-8">
      <?php 
      echo constant("URL")."<br>";
      echo constant("URLADMIN")."<br>";
      echo constant("URLESTUDIANTES")."<br>";
      echo constant("URLDOCENTES")."<br>";
      echo constant("COMPANY")."<br>";
      echo constant("HOST")."<br>";
      echo constant("USER")."<br>";
      echo constant("PASSWORD")."<br>";
      echo constant("DB")."<br>";
      ?>  
    </div>
    <div class="cell small-9 medium-4 large-4">
      administradores
      <a href="<?php echo "http://localhost/iepsanluis/admin/login/ver/1"?>">admin</a>
      <a href="<?php echo constant('URLESTUDIANTES')?>">Estudiantes</a>
      <a href="<?php echo "http://localhost/iepsanluis/docentes/"?>">Docentes</a>
    </div>
  </div>
</div>
<?php echo $_SESSION["admin"];?>
<?php require('admin/views/footer.php'); ?>
