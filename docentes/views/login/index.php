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
      <h3>BIENVENIDOS login docentes</h3>
    </div>
    <div class="cell small-9 medium-4 large-4">
      administradores
      <a href="<?php echo "http://localhost/iepsanluis/admin/" ?>">admin</a>
      <a href="<?php echo "http://localhost/iepsanluis/admin/login" ?>">login</a>
      <div class="form">
        <h1>LOGIN ESTUDIANTES</h1>
        <form action="http://localhost/iepsanluis/admin/login/user" method="POST">
          <label for="">USUARIO<input type="text" name="usuario" value="123"></label>
          <label for="">PASSWORD<input type="password" name="password" value="123"></label>
          <button type="submit">ENVIAR GAAAAAAAAAA</button>
        </form>
      </div>
        </form>
      </div>
      <a href="<?php echo "http://localhost/iepsanluis/admin/login/ver/1"?>">verrr</a>
    </div>
  </div>
</div>

<?php require('main/views/footer.php'); ?>