<?php

$fluxPC = 'https://www.jeuxactu.com/rss/pc.rss';
$fluxActus = 'https://www.jeuxactu.com/rss/ja.rss';
$fluxTest = 'https://www.jeuxactu.com/rss/tests.rss';
$fluxMobile = 'https://www.jeuxactu.com/rss/mobile.rss';
$fluxMulti = 'https://www.jeuxactu.com/rss/multi.rss';
setlocale(LC_TIME, "fr_FR", "fra");

$allFlux = [$fluxActus, $fluxTest, $fluxMobile, $fluxPC, $fluxMulti];

$flux1 = isset($_COOKIE['choice1']) ? $allFlux[$_COOKIE['choice1']] : $fluxActus;
$flux2 = isset($_COOKIE['choice2']) ? $allFlux[$_COOKIE['choice2']] : $fluxTest;
$flux3 = isset($_COOKIE['choice3']) ? $allFlux[$_COOKIE['choice3']] : $fluxMobile;


function imgUrl($flux){
    $doc = simplexml_load_file($flux);
    return $doc->channel->item[0]->enclosure["url"];
}

function title($flux){
    $doc = simplexml_load_file($flux);
    return $doc->channel->item[0]->title;
}

function dateFlux($flux){
    $doc = simplexml_load_file($flux);
    $date = $doc->channel->item[0]->children('dc', true)->date;
    $format = strftime('%d/%m', strtotime($date));
    $formatHeure = strftime('%H:%M', strtotime($date));
    return "$formatHeure $format";
}

$subjects =
    [
        'Actus',
        'Tests',
        'Mobile',
        'PC',
        'Multi'
    ];

function displayCard($i, $link, $color, $name, $tag)
{
    $doc = simplexml_load_file($link);
    $imgUrl = $doc->channel->item[$i]->enclosure["url"];
    $title = $doc->channel->item[$i]->title;
    $desc = $doc->channel->item[$i]->description;
    $source = $doc->channel->item[$i]->link;
    $date = $doc->channel->item[$i]->children('dc', true)->date;
    $format = strftime('%d/%m', strtotime($date));
    $formatHeure = strftime('%H:%M', strtotime($date)); 
?>

    <a class="col-12" data-bs-toggle="modal" data-bs-target="#<?= $name . $i ?>">
        <div class="miniCard">
            <div class="title <?= $color ?>"><?= $formatHeure ?> <br> <?= $format ?></div>
            <div class="card-body">
                <div class="tag text-primary"><?= $tag ?></div>
                <div class="titre "><?= $title ?></div>
            </div>
        </div>
    </a>

    <!-- Modal -->
    <div class="modal fade" id="<?= $name . $i ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header flex-column border-0">
                <h5 class="modal-title text-center"><?= $title ?></h5>
            </div>
            <img src="<?= ($imgUrl)  ?>" class="img-fluid" alt="...">

            <div class="modal-body">
                <p class="mt-2 mb-0"><?= $desc ?></p>
                <small class="pt-2 text-muted"><?= $formatHeure ?> <?= $format ?></small>
            </div>
            <div class="modal-footer d-flex border-0">
                <a href="<?= $source ?>" class="mybtn me-auto">Voir l'article</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
            </div>
        </div>
    </div>
    
<?php

}



$doc = simplexml_load_file($flux1);
$title = $doc->channel->title;
$subTitle = $doc->channel->description;

function category($flux){
    $doc = simplexml_load_file($flux);
    $title = $doc->channel->title;
    return $title;
}



function displayArticle($flux1, $flux2, $flux3){
    $subjects =
    [
        'Actus',
        'Tests',
        'Mobile',
        'PC',
        'Multi'
    ];

    $tag1 = $subjects[$_COOKIE['choice1'] ?? 0];
    $tag2 = $subjects[$_COOKIE['choice2'] ?? 1];
    $tag3 = $subjects[$_COOKIE['choice3'] ?? 2];

    for ($i = 0; $i < ($_COOKIE['numberArticle'] ?? 6)/3; $i++) {
        displayCard($i, $flux1, '', 'flux1', $tag1);
        displayCard($i, $flux2, 'yellowTag', 'flux2', $tag2);
        displayCard($i, $flux3, 'bleuTag', 'flux3', $tag3);
    }
}

$themeClass = '';
if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'light') {
    $themeClass = 'light';
}

?>
