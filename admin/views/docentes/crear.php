<?php require ('admin/views/sidebar.php'); ?>
<link rel="stylesheet" href="<?php echo constant('URLADMIN') . 'public/css/detalles.css' ?>">
<div class="grid-container full margin-3">
    <link rel="stylesheet" href="<?php echo constant('URLADMIN') . 'public/css/detalles.css' ?>">
    <form enctype="multipart/form-data" action="<?php echo constant('URLADMIN') .'docentes/create';?>" method="POST">
        <div class="grid-x">
            <h2>
                <?php echo $this->datos['nombre'] . ' ' . $this->datos['apellidos'];?>
            </h2>
            <div class="cell callout">
                <h3>Informacion</h3>
                <div class="grid-x large-up-3 grid-margin-x">
                    <div class="cell text-center">
                        <input type="file" id="archivoInput" name="foto" style="display: none;" >
                        <label class="callout lead" for="archivoInput">Subir Foto</label>
                        <p class="lead">Acerca de:</p>
                        <textarea name="acercade" id="acercade" cols="20" rows="10" value="" style="height: 120px;"></textarea>
                        <p class="lead">Grado</p>
                        <input type="text" id="idgrado" name="idgrado" value="" >
                    </div>
                    <div class="cell">
                        <p class="lead">Nombres</p>
                        <input type="text" id="nombre" name="nombre" value="" >
                        <p class="lead">fecha Nacimiento</p>
                        <input type="date" id="" name="fechaNac" value="" >
                        <p class="lead">sexo</p>
                        <input type="text" id="" name="sexo" value="" >
                        <p class="lead">telefono</p>
                        <input type="text" id="telefono" name="telefono" value="" >
                    </div>
                    <div class="cell">
                        <p class="lead">Apellidos</p>
                        <input type="text" id="apellidos" name="apellidos" value="" >
                        <p class="lead">Especialidad</p>
                        <input type="text" id="especialidad" name="especialidad" value=""
                            >
                        <p class="lead">Ciudad</p>
                        <input type="text" id="ciudad" name="ciudad" value="" >
                        <p class="lead">Email</p>
                        <input type="text" id="email" name="email" value="" >
                    </div>
                </div>
            </div>
            <div class="cell callout">
                <h3>Educacion</h3>
                <div class="grid-x large-up-3 grid-margin-x">
                    <div class="cell">
                        <p class="lead">Universidad</p>
                        <input type="text" id="" name="universidadEdu" value="" >
                        <p class="lead">Ciudad</p>
                        <input type="text" value="" name="ciudadEdu" >
                        <p class="lead">Horas</p>
                        <input type="text" value="" name="horasEdu" >
                    </div>
                    <div class="cell">
                        <p class="lead">Titulo</p>
                        <input type="text" value="" name="titulo" >
                        <p class="lead">anio inicio</p>
                        <input type="text" value="" name="anioInicio" >
                    </div>
                    <div class="cell">
                        <p class="lead">Grado</p>
                        <input type="text" id="grado" name="grado" value="" >
                        <p class="lead">anio fin</p>
                        <input type="text" value="" name="anioFin" >
                    </div>

                </div>
            </div>
            <div class="cell callout">
                <h3>Experiencia</h3>
                <div class="grid-x large-up-3 grid-margin-x">
                    <div class="cell">
                        <p class="lead">Institucion</p>
                        <input type="text" value="" name="institucionExp" >
                        <p class="lead">Cargo</p>
                        <input type="text" value="" name="cargoExp" >
                    </div>
                    <div class="cell">
                        <p class="lead">anio inicio</p>
                        <input type="date" value="" name="anioInicioExp" >
                        <p class="lead">anio fin</p>
                        <input type="date" value="" name="anioFinExp" >
                    </div>
                    <div class="cell">
                        <p class="lead">Ciudad</p>
                        <input type="text" value="" name="ciudadExp" >
                        <p class="lead">Meses</p>
                        <input type="text" value="" name="mesesExp" >
                    </div>

                </div>
            </div>
        </div>
        <div class="grid-x align-justify grid-padding-x">
            <div class="cell large-2">
                <a class="button" href="<?php echo constant('URLADMIN') . 'docentes/render' ?>">Volver</a>
            </div>
            <div class="cell large-2">
                <button class="button success" id="guardar" type="submit">Guardar</button>
            </div>
        </div>
    </form>
    <script src="<?php echo constant('URLADMIN') . 'public/js/docentes.js' ?>"></script>
</div>
<?php require ('admin/views/footer.php'); ?>