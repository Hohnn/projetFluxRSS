<?php 
$subjects =
[
    'Actus',
    'Tests',
    'Mobile',
    'PC',
    'Sorties'
];

$choice1 = 0;
$choice2 = 2;
$choice3 = 4;

//prise en compte des choix en fonction des cookies//

/* if (isset($_COOKIE['myChoices'])) {
    $choice1 = $subjects[$_COOKIE['choice1']];
    $choice2 = $_COOKIE['choice2'];
    $choice3 = $_COOKIE['choice3'];
} */

//creation des cookies dans le formulaire parametres//

if (isset($_POST['option_list'])) {
/* $myChoices = $_POST['option_list'][0] . $_POST['option_list'][1] . $_POST['option_list'][2];
setcookie('myChoices', $myChoices); */
setcookie('choice1', $subjects[$_POST['option_list'][0]]);
setcookie('choice2', $subjects[$_POST['option_list'][1]]);
setcookie('choice3', $subjects[$_POST['option_list'][2]]);
header('Location: index.php');
}

if(!empty($_POST['option_list'][0]) && $_POST['option_list'][1] && $_POST['option_list'][2]){
    $error = "Veuillez choisir au moins 3 categories";
}


if (isset($_POST['number_aricle'])) {
    $numberArticles = $_POST['number_aricle'];
    setcookie('numberaricle', $_POST['number_aricle'], time() + 86400);
    header('Location: index.php');

    var_dump("ok");


    if ($_POST['option_list'] == "veuillez choisir vos actualitées") {
        var_dump("ok2");
        $message2 = "Veuillez choisir 3 catégories";
        header('Location: parameters-controller.php');
    }
}
?>