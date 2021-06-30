<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style/style.css">
    <title>Jeux Vidéo</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                    <select class="nav-link dropdown-toggle btn btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <option selected disabled hidden>Veuillez choisir sujet</option>
                        <option>L'actualité</option>
                        <option>Les tests</option>
                        <option>Actus mobile</option>
                        <option>Actus PC</option>
                        <option>Les sorties</option>
                    </select>
                    <select class="nav-link dropdown-toggle btn btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <option selected disabled hidden>Veuillez choisir sujet</option>
                        <option>L'actualité</option>
                        <option>Les tests</option>
                        <option>Actus mobile</option>
                        <option>Actus PC</option>
                        <option>Les sorties</option>
                    </select>
                    <select class="nav-link dropdown-toggle btn btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <option selected disabled hidden>Veuillez choisir sujet</option>
                        <option>L'actualité</option>
                        <option>Les tests</option>
                        <option>Actus mobile</option>
                        <option>Actus PC</option>
                        <option>Les sorties</option>
                    </select>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./assets/img/bf-2042-screenshot-dive.jpg.adapt.crop16x9.818p.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block myCarousel">
                <div class="top">
                    <div class="tag">ACTUS PC</div>
                    <div class="date">31 octobre 2019</div>
                </div>
                <h5>Titre de l'article</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, repellendus est sed soluta magnam minus. Repudiandae voluptates doloribus nisi voluptas fuga itaque deleniti. Debitis dicta dolores, perspiciatis in quidem eaque suscipit deserunt iusto vitae nobis iure totam repellendus esse praesentium ipsam provident amet dolore rem! Possimus laborum non voluptatibus consequuntur.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./assets/img/bf-2042-screenshot-dive.jpg.adapt.crop16x9.818p.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block myCarousel">
                <div class="top">
                    <div class="tag">ACTUS PC</div>
                    <div class="date">31 octobre 2019</div>
                </div>
                <h5>Titre de l'article</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, repellendus est sed soluta magnam minus. Repudiandae voluptates doloribus nisi voluptas fuga itaque deleniti. Debitis dicta dolores, perspiciatis in quidem eaque suscipit deserunt iusto vitae nobis iure totam repellendus esse praesentium ipsam provident amet dolore rem! Possimus laborum non voluptatibus consequuntur.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./assets/img/bf-2042-screenshot-dive.jpg.adapt.crop16x9.818p.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block myCarousel">
                <div class="top">
                    <div class="tag">ACTUS PC</div>
                    <div class="date">31 octobre 2019</div>
                </div>
                <h5>Titre de l'article</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, repellendus est sed soluta magnam minus. Repudiandae voluptates doloribus nisi voluptas fuga itaque deleniti. Debitis dicta dolores, perspiciatis in quidem eaque suscipit deserunt iusto vitae nobis iure totam repellendus esse praesentium ipsam provident amet dolore rem! Possimus laborum non voluptatibus consequuntur.</p>
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
            <div class="row">
                <div class="col">
                    <div class="title">
                        <div class="tag">actus pc</div>
                        <div class="desc text-muted">Toutes l'actualité sur pc</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-3 mycard red">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./assets/img/bf-2042-screenshot-epic-scale.jpg.adapt.crop16x9.818p.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Date</small></p>
                                <div class="link">
                                    <button class="mybtn">Voir plus</button>
                                    <a href="#" class="mybtn">Article</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
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