<?php require('admin/views/sidebar.php'); ?>

<link rel="stylesheet" href="http://localhost/iepsanluis/admin/public/css/dashboard.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
<div class="grid-container full">
    <div class="grid-x grid-padding-x margin-3">
        <!-- CONTENT-MAIN -->
        <div class="cell smoll-12 medium-6 large-8">
            <!-- CARDS -->
            <div class="grid-x grid-margin-x large-up-3">
                <div class="cell shadow card card-z">
                    <div class="card-divider align-center">
                        <h4>18923</h4>
                    </div>
                    <div class="card-section card-section-z">
                        <i class="fas fa-school"></i>
                        <h3>School</h3>
                    </div>
                </div>
                <div class="cell shadow card card-z">
                    <div class="card-divider align-center">
                        <h4>213124</h4>
                    </div>
                    <div class="card-section card-section-z">
                        <i class="fas fa-person-chalkboard"></i>
                        <h3>Docentes</h3>
                    </div>
                </div>
                <div class="cell shadow card card-z">
                    <div class="card-divider align-center">
                        <h4>$2432324</h4>
                    </div>
                    <div class="card-section card-section-z">
                        <i class="fas fa-sack-dollar"></i>
                        <h3>Ingresos</h3>
                    </div>
                </div>
            </div>
            <!-- CARDS END-->
            <!-- GRAFICO CHARJS -->
            <div class="grid-x grafico-z">
                <div class="cell text-center">
                    <h3>Trayectoria del colegio</h3>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <!-- GRAFICO CHARJS END-->
        </div>
        <!-- CONTENT-MAIN-END -->
        <!-- CONTENT-RIGHT -->
        <div class="cell smoll-12 medium-6 large-4 hide-for-small-only">
            <div class="grid-x grid-padding-x margin-horizontal-2 right-content-z">
                <!-- CALENDAR -->
                <div class="cell text-center margin-top-1">
                    <h4>Calendario</h4>
                </div>
                <div class="cell calendar-z show-for-large">
                    <div class="wrapper-z">
                        <header class="header-calendar">
                            <p class="current-date"></p>
                            <div class="icons">
                                <span id="prev" class="material-symbols-rounded">chevron_left</span>
                                <span id="next" class="material-symbols-rounded">chevron_right</span>
                            </div>
                        </header>
                        <div class="calendar">
                            <ul class="weeks show-for-medium">
                                <li>D</li>
                                <li>L</li>
                                <li>M</li>
                                <li>Mi</li>
                                <li>J</li>
                                <li>V</li>
                                <li>S</li>
                            </ul>
                            <ul class="days"></ul>
                        </div>
                    </div>
                </div>
                <!-- CALENDAR END-->
                <div class="cell padding-2">
                    <div class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nobis deleniti ab aliquam neque
                    voluptates nostrum eaque maiores consectetur obcaecati rerum mollitia dicta, culpa necessitatibus
                    sed temporibus consequatur quibusdam eos.
                    </div>
                </div>
                <div class="cell padding-2">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At reiciendis omnis impedit, nemo unde
                    debitis cupiditate accusamus molestiae odio animi, esse tempore quod sunt voluptas sapiente repellat
                    sed quas laudantium!
                    Exercitationem culpa laudantium, nihil unde atque cum. Aut expedita quis explicabo non porro
                    corporis tempore maxime, vel dicta id voluptatem rerum ullam minima delectus magnam, ipsam earum
                    laudantium qui neque?
                    Quos, iure. Vitae error obcaecati officiis, consectetur perferendis delectus vero ducimus corporis
                    corrupti nemo eos dolore inventore? Aspernatur id porro eum autem. Ullam labore, culpa molestiae cum
                    quidem delectus nulla.
                    Harum voluptatibus ratione sit, corporis alias saepe odit quia, amet ab ipsa culpa maxime deserunt
                    ex excepturi animi repellat. Nesciunt doloribus, fugit autem quos quas hic adipisci voluptate
                    repudiandae accusamus?
                    Suscipit, eius maxime. Dolorem est laborum, minima recusandae natus debitis iure dicta minus sit
                    repudiandae qui! Molestias sit ad consectetur inventore vero pariatur ratione ex, quidem nihil
                    asperiores natus mollitia?
                    Ex sapiente aperiam quibusdam repellendus tenetur, ratione blanditiis voluptas sed fugiat nulla
                    repudiandae maiores sit sunt beatae illum cum, nihil natus explicabo incidunt deserunt reprehenderit
                    aliquid exercitationem similique? Aspernatur, in?
                    Nobis modi nam beatae, consequuntur magnam totam aut, minus harum fugit cupiditate praesentium
                    perferendis commodi incidunt, quisquam iusto doloribus repellendus sit ullam odio fugiat maiores
                    tenetur facilis qui reiciendis. Voluptas.
                </div>
            </div>
        </div>
        <!-- CONTENT-RIGHT END-->
    </div>
    <script src="<?php echo constant('URLADMIN') . 'public/js/dashboard/dashboard.js' ?>"></script>
</div>
<?php require('admin/views/footer.php'); ?>