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
    <title>Video Game News</title>
</head>
<body class="<?= $themeClass ?>">
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
                <img src="<?= imgUrl($flux1) ?>" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#flux10">
                <div class="carousel-caption myCarouselCaption d-md-none"><?= title($flux1) ?></div>
                <div class="carousel-caption d-none d-md-block myCarousel">
                    <div class="top">
                        <div class="tag"><?= $subjects[$_COOKIE['choice1'] ?? 0] ?></div>
                        <div class="date"><?= dateFlux($flux1) ?></div>
                    </div>
                    <h5><?= title($flux1) ?></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= imgUrl($flux2) ?>" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#flux20">
                <div class="carousel-caption myCarouselCaption d-md-none"><?= title($flux2) ?></div>
                <div class="carousel-caption d-none d-md-block myCarousel">
                    <div class="top">
                        <div class="tag"><?= $subjects[$_COOKIE['choice2'] ?? 1] ?></div>
                        <div class="date"><?= dateFlux($flux2) ?></div>
                    </div>
                    <h5><?= title($flux2)  ?></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= imgUrl($flux3) ?>" class="d-block w-100" alt="..." data-bs-toggle="modal" data-bs-target="#flux30">
                <div class="carousel-caption myCarouselCaption d-md-none"><?= title($flux3) ?></div>
                <div class="carousel-caption d-none d-md-block myCarousel">
                    <div class="top">
                        <div class="tag"><?= $subjects[$_COOKIE['choice3'] ?? 2] ?></div>
                        <div class="date"><?= dateFlux($flux3) ?></div>
                    </div>
                    <h5><?= title($flux3) ?></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon myArrow" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon myArrow" aria-hidden="true"></span>
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
                        <div class="desc text-muted">Toutes les dern??res actualit??s</div>
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
                        <div class="title">Plateformes
                            <div class="plus d-md-none">+</div>
                        </div>
                        <ul class="d-none d-md-block text-muted">
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
                        <div class="title">Cat??gories
                            <div class="plus d-md-none">+</div>
                        </div>
                        <ul class="d-none d-md-block text-muted">
                            <li>Actualit??</li>
                            <li>Tests</li>
                            <li>Actus mobile</li>
                            <li>Actus PC</li>
                            <li>Multijoueurs</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="category">
                        <div class="title">R??seaux
                            <div class="plus d-md-none">+</div>
                        </div>
                        <ul class="d-none d-md-block text-muted">
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
<script src="./assets/script/script.js"></script>
</body>
</html>
