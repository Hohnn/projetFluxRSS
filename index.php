<?php
    include ('./controllers/index-controller.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/light.css">
    <title>Jeux Vidéo</title>
</head>
<body class="">
    <header>
    <?php include 'navbar.php' ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $imgUrlCar ?>" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#flux10">
                <p class="carousel-caption myCarouselCaption"><?= $titleCar ?></p>
                <div class="carousel-caption d-none d-md-block myCarousel">
                    <div class="top">
                        <div class="tag">ACTUS PC</div>
                        <div class="date"><?=  $date ?></div>
                    </div>
                    <h5><?= $titleCar ?></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $imgUrlCar2 ?>" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#flux20">
                <div class="carousel-caption myCarouselCaption"><?= $titleCar2 ?></div>
                <div class="carousel-caption d-none d-md-block myCarousel">
                    <div class="top">
                        <div class="tag">ACTUS PC</div>
                        <div class="date"><?=  $date2 ?></div>
                    </div>
                    <h5><?= $titleCar2 ?></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $imgUrlCar3 ?>" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#flux30">
                <div class="carousel-caption myCarouselCaption"><?= $titleCar3 ?></div>
                <div class="carousel-caption d-none d-md-block myCarousel">
                    <div class="top">
                        <div class="tag">ACTUS PC</div>
                        <div class="date"><?=  $date3 ?></div>
                    </div>
                    <h5><?= $titleCar3 ?></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </header>
    <main>
        <div class="container">
            <div class="row my-4 gy-3">
                <div class="col">
                    <div class="title neutreTag">
                        <div class="tag">Les news</div>
                        <div class="desc text-muted">Toutes les dernères actualités</div>
                    </div>
                </div>
            </div>
            <div class="row">
            <?= displayArticle($flux1, $flux2, $flux3) ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="category">
                        Plateforme
                        <ul>
                            <li>Xbox one</li>
                            <li>Playstation</li>
                            <li>PC</li>
                            <li>Switch</li>
                            <li>Wii</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="category">
                        Catégorie
                        <ul>
                            <li>Actualité</li>
                            <li>Tests</li>
                            <li>Actus mobile</li>
                            <li>Actus PC</li>
                            <li>Sorties</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="category">
                        Sociale
                        <ul>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitch"></i></li>
                            <li><i class="bi bi-discord"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
