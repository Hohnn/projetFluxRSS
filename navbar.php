<?php
    $subjects =
    [
        'Actus',
        'Tests',
        'Mobile',
        'PC',
        'Multi'
    ];
?>

<nav class="navbar navbar-expand navbar-dark fixed-bottom w-100">
    <div class="container-fluid">
        <a class="navbar-brand" href="accueil.html"><i class="bi bi-house"></i></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav w-100 justify-content-around mb-lg-0 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="<?= isset($_COOKIE['choice1']) ? $subjects[$_COOKIE['choice1']] : 'Actus'  ?>.html"><?= $subjects[$_COOKIE['choice1'] ?? 0] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= isset($_COOKIE['choice2']) ? $subjects[$_COOKIE['choice2']] : 'Tests'  ?>.html"><?= $subjects[$_COOKIE['choice2'] ?? 1]  ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= isset($_COOKIE['choice3']) ? $subjects[$_COOKIE['choice3']] : 'Mobile'  ?>.html" ><?= $subjects[$_COOKIE['choice3'] ?? 2]  ?></a>
                </li>
                <li>
                    <a class="nav-link" href="settings.html"><i class="bi bi-gear"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>