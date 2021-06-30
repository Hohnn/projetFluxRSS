<?php
// $doc = new DOMDocument();
$doc = simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss');

?>

<?php
    for ($i = 1; $i <= 6; $i++) { ?>

        <div class="col">
            <div class="card mb-3 mycard red">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= ($doc->channel->item[$i]->enclosure["url"])  ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= ($doc->channel->item[$i]->title) ?></h5>
                            <p class="card-text"> <?= ($doc->channel->item[$i]->description) ?></p>
                            <p class="card-text"><small class="text-muted">Date</small></p>
                            <div class="link">
                                <button class="mybtn">Voir plus</button>
                                <a href="<?= ($doc->channel->item[$i]->link) ?>" class="mybtn"></a>
                                <p><?= ($doc->channel->item[$i]->link) ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>