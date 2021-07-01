<?php

function displayCard($i){
    $doc = simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss');
    $imgUrl = $doc->channel->item[$i]->enclosure["url"];
    $title = $doc->channel->item[$i]->title;
    $desc = $doc->channel->item[$i]->description;
    $source = $doc->channel->item[$i]->link; ?>
        <div class="col-lg-6">
            <div class="card mb-3 mycard red">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?= ($imgUrl)  ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body mybody">
                            <h5 class="card-title"><?= ($title) ?></h5>
                            <p class="card-text"><small class="text-muted">Date</small></p>
                            <div class="link">
                                <button class="mybtn">Voir plus</button>
                                <a href="<?= ($source) ?>" class="mybtn">Article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}

function displayCard2($i){
    $doc = simplexml_load_file('https://www.jeuxactu.com/rss/pc.rss');
    $imgUrl = $doc->channel->item[$i]->enclosure["url"];
    $title = $doc->channel->item[$i]->title;
    $desc = $doc->channel->item[$i]->description;
    $source = $doc->channel->item[$i]->link; ?>
        <div class="col-lg-6">
            <div class="card mb-3 mycard yellow">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?= ($imgUrl)  ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body mybody">
                            <h5 class="card-title"><?= ($title) ?></h5>
                            <p class="card-text"><small class="text-muted">Date</small></p>
                            <div class="link">
                                <button class="mybtn">Voir plus</button>
                                <a href="<?= ($source) ?>" class="mybtn">Article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}

function displayCard3($i){
    $doc = simplexml_load_file('https://www.jeuxactu.com/rss/mobile.rss');
    $imgUrl = $doc->channel->item[$i]->enclosure["url"];
    $title = $doc->channel->item[$i]->title;
    $desc = $doc->channel->item[$i]->description;
    $source = $doc->channel->item[$i]->link; ?>
        <div class="col-lg-6">
            <div class="card mb-3 mycard orange">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?= ($imgUrl)  ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body mybody">
                            <h5 class="card-title"><?= ($title) ?></h5>
                            <p class="card-text"><small class="text-muted">Date</small></p>
                            <div class="link">
                                <button class="mybtn">Voir plus</button>
                                <a href="<?= ($source) ?>" class="mybtn">Article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}

function loop(){
    for ($i = 1; $i <= 12; $i++) {
        displayCard($i);
        displayCard2($i);
        displayCard3($i);
    }
}

?>