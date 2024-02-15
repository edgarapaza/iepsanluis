
<?php require('views/header.php'); ?>
<br>
<div class="grid-container">
<div class="large text-center">
  <h1>CONTACTANOS</h1>
   <!-- <img src="./public/img/bienvenidos.jpg" alt=""> -->
</div>

<div class="grid-x">

<!-- formaulario de contacto-->
<div class="columns small-12 large-6">
  <form action="../controller/gmail.php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="correo">Correo Electrónico:</label>
      <input type="email" id="correo" name="correo" required>

      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" required>

      <label for="mensaje">Mensaje:</label><br>
      <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

      <button class="submit success button" type="submit">ENVIAR</button>
  </form>
</div>
<div class="columns small-12 large-1">
</div>
<!-- Datos institucion lateral derecho-->
<div class="columns small-12 large-5">
  <table class="responsive-card-table unstriped ">
    <thead>
      <tr>
        <th></th>
        <th>Datos</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Direccion:</th>
        <td>9M85+PW3, Av. de la Cultura, Ilo 18601</td>
      </tr>
      <tr>
        <th>Telefono:</th>
        <td>
          <span class="icon-phone"></span>
          (053) 486114
        </td>
      </tr>
      <tr>
        <th>Email:</th>
        <td>
          <p>
          <span class="icon-mail"></span>
          info@iepsanluis.edu.pe
          </p>
        </td>
      </tr>
      <tr>
        <th>Redes Sociales:</th>
        <td>
          <p>
            <span class="icon-facebook"></span>
            <a href="#">facebook</a>
          </p>
          <p>
            <span class="icon-youtube"></span>
            <a href="#">Tiktok</a>
          </p>
          <p>
            <span class="icon-instagram"></span>
            <a href="#">Instagram</a>
          </p>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div class="row text-center">
  <hr>
    <h3>Ubicación</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.357110004676!2d-71.34276992563858!3d-17.633237570915178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91445b74b1f804c7%3A0x17574056c773a8bc!2sI.%20E.%20P.%20San%20Luis!5e0!3m2!1ses-419!2spe!4v1706669669629!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  </div>
<br>
<hr>
<?php require('views/footer.php'); ?>
