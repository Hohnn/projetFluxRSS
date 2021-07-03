<?php

/* - l'actualité : https://www.jeuxactu.com/rss/ja.rss
- les tests : https://www.jeuxactu.com/rss/tests.rss
- Actus mobile : https://www.jeuxactu.com/rss/mobile.rss
- Actus PC : https://www.jeuxactu.com/rss/pc.rss
- Actus multi : https://www.jeuxactu.com/rss/multi.rss */

$fluxPC = 'https://www.jeuxactu.com/rss/pc.rss';
$fluxActus = 'https://www.jeuxactu.com/rss/ja.rss';
$fluxTest = 'https://www.jeuxactu.com/rss/tests.rss';
$fluxMobile = 'https://www.jeuxactu.com/rss/mobile.rss';
$fluxMulti = 'https://www.jeuxactu.com/rss/multi.rss';

$allFlux = [$fluxPC, $fluxActus, $fluxTest, $fluxMobile, $fluxMulti];

function displayCard($i, $link, $color)
{
    $doc = simplexml_load_file($link);
    $imgUrl = $doc->channel->item[$i]->enclosure["url"];
    $title = $doc->channel->item[$i]->title;
    $desc = $doc->channel->item[$i]->description;
    $source = $doc->channel->item[$i]->link;
    $date = $doc->channel->item[$i]->children('dc', true)->date;
    $format = strftime('%d/%m/%Y', strtotime($date));
    $formatHeure = strftime('%H:%M', strtotime($date));

?>
    <div class="col-lg-6">
        <div class="card mb-3 mycard <?= $color ?>">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="<?= ($imgUrl)  ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body mybody">
                        <h5 class="card-title"><?= ($title) ?></h5>
                        <p class="card-text"><small class="text-muted"><?= ($format) ?></small></p>
                        <div class="link">
                            <a href="<?= ($source) ?>" class="mybtn">Aller vers l'article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}



function displayArticle($flux)
{
    $docCar = simplexml_load_file($flux);
    $i = -1;
    foreach ($docCar->channel->item as $items) {
        $i++;
        displayCard($i, $flux, 'red');
    }
}

if (isset($_GET['choice'])) {
    $fluxActus = $allFlux[$_GET['choice']];
    $doc = simplexml_load_file($allFlux[$_GET['choice']]);
    $title = $doc->channel->title;
    $subTitle = $doc->channel->description;
}


$themeClass = '';
if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'light') {
  $themeClass = 'light';
}
?>