<?php require '../controllers/parameters-controller.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/light.css">
    <title>Paramètre</title>
</head>

<body class="parameters <?= $themeClass ?>">
    <header>
    <?php include '../navbar.php' ?>

    </header>
    <h1 class="text-uppercase mb-4">Paramètre </h1>
    <div class="cardPara">
            <form action="" method="post">
                    <div class="form-check form-switch">
                        <p class="form-check-label" for="flexSwitchCheckDefault">Mode jour
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="myFunction()" <?= $check ?>>
                        </p>
                    </div>
                    <p>Veuillez choisir la quantité de news</p>
                    <select name="number_article" class="form-select form-select-sm w-50">
                        <option selected disabled hidden><?= $_COOKIE['numberArticle'] ?? '6' ?></option>
                        <option value="6">6</option>
                        <option value="9">9</option>
                        <option value="12">12</option>
                    </select>
                    <div class="mt-4">

                        <div class="mb-2">Veuillez choisir vos actualitées</div>
                        <input class="case" onclick="doAction()" type="checkbox" id="option1" name="option_list[]" value="0" <?= isset($_COOKIE['myChoices']) ? (preg_match('/(0)/', $_COOKIE['myChoices']) ? 'checked' : '') : '' ?>>
                        <label for="option1">Actualité</label><br>
                        <input class="case" onclick="doAction()" type="checkbox" id="option2" name="option_list[]" value="1" <?= isset($_COOKIE['myChoices']) ? (preg_match('/(1)/', $_COOKIE['myChoices']) ? 'checked' : '') : '' ?>>
                        <label for="option2">Les test</label><br>
                        <input class="case" onclick="doAction()" type="checkbox" id="option3" name="option_list[]" value="2" <?= isset($_COOKIE['myChoices']) ? (preg_match('/(2)/', $_COOKIE['myChoices']) ? 'checked' : '') : ''  ?>>
                        <label for="option3">Actus mobile</label><br>
                        <input class="case" onclick="doAction()" type="checkbox" id="option4" name="option_list[]" value="3" <?= isset($_COOKIE['myChoices']) ? (preg_match('/(3)/', $_COOKIE['myChoices']) ? 'checked' : '') : ''  ?>>
                        <label for="option4">Actus PC</label><br>
                        <input class="case" onclick="doAction()" type="checkbox" id="option5" name="option_list[]" value="4" <?= isset($_COOKIE['myChoices']) ? (preg_match('/(4)/', $_COOKIE['myChoices']) ? 'checked' : '') : ''  ?>>
                        <label for="option5">Actus multijoueurs</label><br>
                        <p class="text-danger"><?= $error ?? '' ?></p>
                        <button type="submit" class="btn btn-secondary">Valider</button>
                    </div>
            </form>
    </div>
    </div>

    <script>
function myFunction() {
    var element = document.body;
    element.classList.toggle("light");
    let theme = "dark"
    if (element.classList.contains("light")) {
        theme = "light"
    }
    document.cookie = "theme=" + theme;
}
</script>
</body>

</html>