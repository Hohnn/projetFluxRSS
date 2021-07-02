<?php

?>

<nav class="navbar navbar-expand navbar-dark fixed-bottom w-100">
    <div class="container-fluid">
        <a class="navbar-brand" href="accueil.html"><i class="bi bi-house"></i></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="actus-pc.html"><?= $_COOKIE['choice1'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actus.html"><?= $_COOKIE['choice2'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="test.html" ><?= $_COOKIE['choice3'] ?></a>
                </li>
            </ul>
            <a class="navbar-brand me-0" href="settings.html"><i class="bi bi-gear"></i></a>
        </div>
    </div>
</nav>