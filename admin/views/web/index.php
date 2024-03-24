<?php
// require('admin/views/sidebar.php');
require ('admin/views/header.php');
?>

<link rel="stylesheet" href="http://localhost/iepsanluis/admin/public/css/transportes.css">

<!-- <body>
  <div class="grid-container full">
    <div class="cell">
      <div class="title-bar">
        <div class="title-bar-left">
          <h4 class="title-bar-title padding-1">Direccion Regional de transportes comunicaciones vivienda y construccion
            ctar - PUNO</h4>
        </div>
        <div class="title-bar-right padding-1">
          <h4 class="title-bar-title">Ingreso de Datos Personal</h4>
        </div>
      </div>
    </div>
    <div class="cell text-center titulo">
      <h4>CONST. DE PAGO DE HABERES Y DESCTOS. PARA RECONOCIMIENTOS DE TIEMPO DE SERVICIOS</h4>
    </div>
    <div class="grid-x large-up-2 grid-margin-x">
      <div class="cell callout">
        <div class="grid-x grid-margin-x">
          <div class="cell large-3">
            <label for="middle-label" class="text-right middle">Nombres</label>
            <label for="middle-label" class="text-right middle">Apellido Paterno</label>
            <label for="middle-label" class="text-right middle">Apellido Materno</label>
            <label for="middle-label" class="text-right middle">Cargo</label>
          </div>
          <div class="cell large-9">
            <input type="text" id="middle-label" placeholder="">
            <input type="text" id="middle-label" placeholder="">
            <input type="text" id="middle-label" placeholder="">
            <input type="text" id="middle-label" placeholder="">
          </div>
          <div class="cell text-center">
            <button class="button primary">BUSCAR</button>
          </div>
        </div>
      </div>
      <div class="cell callout">
        <div class="grid-x grid-margin-x">
          <div class="cell large-3">
            <label for="middle-label" class="text-right middle">Desde la Fecha</label>
            <label for="middle-label" class="text-right middle">Hasta la Fecha</label>
            <label for="middle-label" class="text-right middle">Condicion</label>
            <label for="middle-label" class="text-right middle">Moneda</label>
          </div>
          <div class="cell large-9">
            <input type="text" id="middle-label" placeholder="12-12-1999">
            <input type="text" id="middle-label" placeholder="12-12-2015">
            <select>
              <option value="husker">Activo</option>
              <option value="starbuck">Pensionista</option>
            </select>
            <select>
              <option value="husker">Nuevo Sol</option>
              <option value="starbuck">Intis</option>
              <option value="starbuck">Sol Oro</option>
            </select>
          </div>
        </div>
      </div>
      <div class="cell callout">
        <div class="grid-x grid-margin-x">
          <div class="cell large-3">
            <label for="middle-label" class="text-right middle">Muc.</label>
            <label for="middle-label" class="text-right middle">Vet.</label>
            <label for="middle-label" class="text-right middle">Rem. basica</label>
            <label for="middle-label" class="text-right middle">Rem. Reunificada</label>
            <label for="middle-label" class="text-right middle">D. supremo 276</label>
            <label for="middle-label" class="text-right middle">Otros</label>
          </div>
          <div class="cell large-9">
            <input type="text" id="middle-label" placeholder="0.00">
            <input type="text" id="middle-label" placeholder="0.00">
            <input type="text" id="middle-label" placeholder="0.00">
            <input type="text" id="middle-label" placeholder="0.00">
            <input type="text" id="middle-label" placeholder="0.00">
            <input type="text" id="middle-label" placeholder="0.00">
          </div>
        </div>
      </div>
      <div class="cell callout">
        <div class="grid-x grid-margin-x">
          <div class="cell large-3">
            <label for="middle-label" class="text-right middle">Ley 19990</label>
            <label for="middle-label" class="text-right middle">Ley 20530</label>
            <label for="middle-label" class="text-right middle">AFP</label>
            <label for="middle-label" class="text-right middle">IPSS</label>
            <label for="middle-label" class="text-right middle">Fonavi</label>
          </div>
          <div class="cell large-9">
            <input type="text" id="middle-label" placeholder="00.0">
            <input type="text" id="middle-label" placeholder="00.0">
            <input type="text" id="middle-label" placeholder="00.0">
            <input type="text" id="middle-label" placeholder="00.0">
            <input type="text" id="middle-label" placeholder="00.0">
          </div>
          <div class="cell">
            <div class="grid-x align-spaced">
              <div class="cell small-3"><button class="button success">GUARDAR TODO</button></div>
              <div class="cell small-3"><button class="button warning">CANCELAR</button></div>
              <div class="cell small-3"><button class="button alert">SALIR</button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo constant('URLADMIN') . '' ?>"></script>
  </div>
</body> -->

<body>
  <div class="grid-container full">
    <div class="grid-x">
      <div class="cell">
        <div class="title-bar">
          <div class="title-bar-left">
            <h5 class="title-bar-title">Buscar -</h5>
            <h5 class="title-bar-title"> Agregar - </h5>
            <h5 class="title-bar-title"> Modificar - </h5>
            <h5 class="title-bar-title"> Eliminar </h5>
          </div>
          <div class="title-bar-right">
            <h5 class="title-bar-title">SALIR</h5>
          </div>
        </div>  
      </div>
    </div>
    <div class="grid-x">
      <div class="cell transportes">
        <div class="callout margin-3 padding-3">
          <h1>DIRECCION REGIONAL DE TRANSPORTES, COMUNICACIONES, VIVIENDA Y CONSTRUCCION - PUNO</h1>
        </div>

      </div>
    </div>
    <div class="grid-x">
      <div class="cell large-4 padding-3 text-center">
        <div class="radius bordered shadow card">
          <img src="https://www.coolmuster.com/uploads/file/202308/print-password-protected-pdf.png">
          <div class="card-divider align-center">
            PDF->Impresion
          </div>
          <div class="card-section">
            <h4>PLANILLA COMPLETA</h4>
            <p>Constancia de Pagos de ermuneraciones y descuentos de acuerdo a las planillas unicas de pago de remuneraciones consta los servicios prestados</p>
          </div>
        </div>
      </div>
      <div class="cell large-4 padding-3 text-center">
        <div class="radius bordered shadow card">
          <img src="https://elcomercio.pe/resizer/QLEq6u2qkVSjtKUdmr5DZXElbDk=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/SUIGVFT2N5G3TIDX6HDP5CEUEQ.jpg" width="390">
          <div class="card-divider align-center">
            PDF->FONAVI
          </div>
          <div class="card-section">
            <h4>FONAVI APORTACIONES</h4>
            <p>Constancia certificada de pagos de aportaciones al FONAVI</p>
          </div>
        </div>
      </div>
      <div class="cell large-4 padding-3 text-center">
        <div class="radius bordered shadow card">
          <img src="https://placehold.it/500x250">
          <div class="card-divider align-center">
            Styled Card
          </div>
          <div class="card-section">
            <h4>This is a card.</h4>
            <p>It has an easy to override visual style, and is appropriately subdued.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<?php require ('admin/views/footer.php'); ?>