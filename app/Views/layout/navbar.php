<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
        <div class="navbar-brand">
            <?= anchor('/', 'Projekt obce', ['class'=>'nav-link']) ?>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">

                <?php
                foreach ($okres as $row) {
                ?>

                    <li class="nav-item">
                        <?= anchor('okres/'.$row->kod, $row->nazev, ['class'=>'nav-link']) ?>
                    </li>

                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>