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
                    <input type="text" id="id" value=" <?php echo $this->datos['idmaestro']; ?>" hidden>
                    <img id="fotoprevia" src="<?php echo constant('URLADMIN') . $this->datos['foto']; ?>" alt="" width="130">
                    <input type="file" id="archivoInput" value="<?php echo constant('URLADMIN') . $this->datos['foto']; ?>" style="display: none;" disabled>
                    <label for="archivoInput">Cambiar foto</label>
                    <p class="lead">Acerca de:</p>
                    <textarea name="" id="acercade" cols="20" rows="10" value="" style="height: 90px;" disabled><?php echo $this->datos['acercade']; ?></textarea>
                </div>
                <div class="cell">
                    <p class="lead">Nombres</p>
                    <input type="text" id="nombre" value="<?php echo $this->datos['nombre']; ?>" disabled>
                    <p class="lead">fecha Nacimiento</p>
                    <input type="text" id="" value="<?php echo $this->datos['fecNacimiento']; ?>" disabled>
                    <p class="lead">sexo</p>
                    <input type="text" id="" value="<?php echo $this->datos['sexo']; ?>" disabled>
                    <p class="lead">telefono</p>
                    <input type="text" id="telefono" value="<?php echo $this->datos['telefono']; ?>" disabled>
                </div>
                <div class="cell">
                    <p class="lead">Apellidos</p>
                    <input type="text" id="apellidos" value="<?php echo $this->datos['apellidos']; ?>" disabled>
                    <p class="lead">Especialidad</p>
                    <input type="text" id="especialidad" value="<?php echo $this->datos['especialidad']; ?>" disabled>
                    <p class="lead">Ciudad</p>
                    <input type="text" id="ciudad" value="<?php echo $this->datos['ciudad']; ?>" disabled>
                    <p class="lead">Email</p>
                    <input type="text" id="email" value="<?php echo $this->datos['email']; ?>" disabled>
                </div>
            </div>
        </div>
        <div class="cell callout">
            <h3>Educacion</h3>
            <div class="grid-x large-up-3 grid-margin-x">
                <div class="cell">
                    <p class="lead">Universidad</p>
                    <input type="text" id="" value="<?php echo $this->datos['universidad']; ?>" disabled>
                    <p class="lead">Ciudad</p>
                    <input type="text" value="<?php echo $this->datos['ciudad_e']; ?>" disabled>
                    <p class="lead">Horas</p>
                    <input type="text" value="<?php echo $this->datos['horas']; ?>" disabled>
                </div>
                <div class="cell">
                    <p class="lead">Titulo</p>
                    <input type="text" value="<?php echo $this->datos['titulo']; ?>" disabled>
                    <p class="lead">anio inicio</p>
                    <input type="text" value="<?php echo $this->datos['inicio_e']; ?>" disabled>
                </div>
                <div class="cell">
                    <p class="lead">Grado</p>
                    <input type="text" id="grado" value="<?php echo $this->datos['grado']; ?>" disabled>
                    <p class="lead">anio fin</p>
                    <input type="text" value="<?php echo $this->datos['fin_e']; ?>" disabled>
                </div>

            </div>
        </div>
        <div class="cell callout">
            <h3>Experiencia</h3>
            <div class="grid-x large-up-3 grid-margin-x">
                <div class="cell">
                    <p class="lead">Institucion</p>
                    <input type="text" value="<?php echo $this->datos['institucion']; ?>" disabled>
                    <p class="lead">Cargo</p>
                    <input type="text" value="<?php echo $this->datos['cargo']; ?>" disabled>
                </div>
                <div class="cell">
                    <p class="lead">anio inicio</p>
                    <input type="text" value="<?php echo $this->datos['anio_inicio']; ?>" disabled>
                    <p class="lead">anio fin</p>
                    <input type="text" value="<?php echo $this->datos['anio_fin']; ?>" disabled>
                </div>
                <div class="cell">
                    <p class="lead">Ciudad</p>
                    <input type="text" value="<?php echo $this->datos['ciudad_exp']; ?>" disabled>
                    <p class="lead">Meses</p>
                    <input type="text" value="<?php echo $this->datos['meses']; ?>" disabled>
                </div>

            </div>
        </div>
    </div>
    <div class="grid-x align-justify grid-padding-x">
        <div class="cell large-2">
            <a class="button" href="<?php echo constant('URLADMIN').'docentes/render'?>">Volver</a>
        </div>
        <div class="cell large-2">
            <button class="button alert" id="editar">Editar</button>
            <button class="button success" id="guardar">Guardar</button>
        </div>
    </div>
    <script src="<?php echo constant('URLADMIN') . 'public/js/docentes.js' ?>"></script>
</div>
<?php require ('admin/views/footer.php'); ?>