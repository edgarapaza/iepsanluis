<?php require ('admin/views/sidebar.php'); ?>

<link rel="stylesheet" href="<?php echo constant('URLADMIN') . 'public/css/detalles.css' ?>">
<div class="grid-container full margin-3">
    <div class="grid-x">
        <h2>
            <?php echo $this->datos['nombre'] . ' ' . $this->datos['apellidos']; ?>
        </h2>

        <div class="cell callout">
            <h3>Informacion</h3>
            <div class="grid-x large-up-3 grid-margin-x">
                <div class="cell text-center">
                    <img src="<?php echo constant('URLADMIN') . $this->datos['foto']; ?>" alt="" width="130">
                    <input type="file" id="archivoInput" style="display: none;">
                    <label for="archivoInput">Cambiar foto</label>
                    <p class="lead">Acerca de:</p>
                    <textarea name="" id="" cols="20" rows="10" value="" style="height: 90px;"><?php echo $this->datos['acercade']; ?></textarea>
                </div>
                <div class="cell">
                    <p class="lead">Nombres</p>
                    <input type="text" id="nombre" value="<?php echo $this->datos['nombre']; ?>">
                    <p class="lead">fecha Nacimiento</p>
                    <input type="text" value="<?php echo $this->datos['fecNacimiento']; ?>">
                    <p class="lead">sexo</p>
                    <input type="text" value="<?php echo $this->datos['sexo']; ?>">
                    <p class="lead">telefono</p>
                    <input type="text" value="<?php echo $this->datos['telefono']; ?>">
                </div>
                <div class="cell">
                    <p class="lead">Apellidos</p>
                    <input type="text" value="<?php echo $this->datos['apellidos']; ?>">
                    <p class="lead">Especialidad</p>
                    <input type="text" value="<?php echo $this->datos['especialidad']; ?>">
                    <p class="lead">Ciudad</p>
                    <input type="text" value="<?php echo $this->datos['ciudad']; ?>">
                    <p class="lead">Email</p>
                    <input type="text" value="<?php echo $this->datos['email']; ?>">
                </div>
            </div>
        </div>
        <div class="cell callout">
            <h3>Educacion</h3>
            <div class="grid-x large-up-3 grid-margin-x">
                <div class="cell">
                    <p class="lead">Universidad</p>
                    <input type="text" value="<?php echo $this->datos['universidad']; ?>">
                    <p class="lead">Ciudad</p>
                    <input type="text" value="<?php echo $this->datos['ciudad_e']; ?>">
                    <p class="lead">Horas</p>
                    <input type="text" value="<?php echo $this->datos['horas']; ?>">
                </div>
                <div class="cell">
                    <p class="lead">Titulo</p>
                    <input type="text" value="<?php echo $this->datos['titulo']; ?>">
                    <p class="lead">anio inicio</p>
                    <input type="text" value="<?php echo $this->datos['inicio_e']; ?>">
                </div>
                <div class="cell">
                    <p class="lead">Grado</p>
                    <input type="text" value="<?php echo $this->datos['grado']; ?>">
                    <p class="lead">anio fin</p>
                    <input type="text" value="<?php echo $this->datos['fin_e']; ?>">
                </div>

            </div>
        </div>
        <div class="cell callout">
            <h3>Experiencia</h3>
            <div class="grid-x large-up-3 grid-margin-x">
                <div class="cell">
                    <p class="lead">Institucion</p>
                    <input type="text" value="<?php echo $this->datos['institucion']; ?>">
                    <p class="lead">Cargo</p>
                    <input type="text" value="<?php echo $this->datos['cargo']; ?>">
                </div>
                <div class="cell">
                    <p class="lead">anio inicio</p>
                    <input type="text" value="<?php echo $this->datos['anio_inicio']; ?>">
                    <p class="lead">anio fin</p>
                    <input type="text" value="<?php echo $this->datos['anio_fin']; ?>">
                </div>
                <div class="cell">
                    <p class="lead">Ciudad</p>
                    <input type="text" value="<?php echo $this->datos['ciudad_exp']; ?>">
                    <p class="lead">Meses</p>
                    <input type="text" value="<?php echo $this->datos['meses']; ?>">
                </div>

            </div>
        </div>
    </div>
    <div class="grid-x align-justify grid-padding-x">
        <div class="cell large-2">
            <button class="button">Volver</button>
        </div>
        <div class="cell large-2">
            <button class="button alert">Editar</button>
            <button class="button success">Guardar</button>
        </div>
    </div>
    <script src="<?php echo constant('URLADMIN') . 'public/js/docentes.js' ?>"></script>
</div>
<?php require ('admin/views/footer.php'); ?>