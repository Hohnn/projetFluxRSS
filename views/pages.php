<?php
    include ('../controllers/pages-controller.php');
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
    <title><?= $subjects[$_GET['choice']] ?></title>
</head>
<body class="<?= $themeClass ?>">
    <header>
    <?php include '../navbar.php' ?>
    </header>
    <main>
        <div class="container">
            <div class="row my-4 gy-3">
                <div class="col">
                    <div class="title">
                        <div class="tag"><?= $title ?></div>
                        <div class="desc text-muted"><?= $subTitle ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
            <?= displayArticle($fluxActus) ?>
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
