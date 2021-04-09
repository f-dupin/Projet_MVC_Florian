<?php
ob_start();

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7" id="hotnews" style="background-image: url('<?= $HotNew[0][0]->getImage(); ?>')">
                <div id="div_hotnews">
                    <h4><?= $HotNew[0][0]->getHeader(); ?></h4>
                    <p class="subTitle"><?= $HotNew[0][0]->getLastName(); ?> <?= $HotNew[0][0]->getFirstName(); ?>, <?= $HotNew[0][0]->getTimeStamp(); ?></p>
                    <div class="text_contents">
                        <?php echo substr($HotNew[0][0]->getContent() , 3, 150).'...' ?>
                    </div>
                    <div class="container_social_coms">
                        <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $HotNew[0][0]->getShare(); ?></span> Partage</p>
                        <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $HotNew[0][0]->getComments(); ?></span> Commentaire</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 topviews" style="background-image: url('<?= $MostViews[0][0]->getImage(); ?>')">
                            <div class="div_mostview">
                                <h4><?= $MostViews[0][0]->getHeader(); ?></h4>
                                <p class="subTitle"><?= $MostViews[0][0]->getLastName(); ?> <?= $MostViews[0][0]->getFirstName(); ?>, <?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('F j, Y', strtotime($MostViews[0][0]->getTimeStamp())); ?></p>
                                <div class="text_contents">
                                    <?php echo substr($MostViews[0][0]->getContent() , 3, 75).'...' ?>
                                </div>
                                <div class="container_social_coms">
                                    <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $MostViews[0][0]->getShare(); ?></span> Partage</p>
                                    <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $MostViews[0][0]->getComments(); ?></span> Commentaire</p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row" id="second_most_view">
                        <div class="col-12 topviews" style="background-image: url('<?= $MostViews[0][1]->getImage(); ?>')">
                            <div class="div_mostview">
                                <h4><?= $MostViews[0][1]->getHeader(); ?></h4>
                                <p class="subTitle"><?= $MostViews[0][1]->getLastName(); ?> <?= $MostViews[0][1]->getFirstName(); ?>, <?= $MostViews[0][1]->getTimeStamp(); ?></p>
                                <div class="text_contents">
                                    <?php echo substr($MostViews[0][1]->getContent() , 3, 75).'...' ?>
                                </div>

                                <div class="container_social_coms">
                                    <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $MostViews[0][1]->getShare(); ?></span> Partage</p>
                                    <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $MostViews[0][1]->getComments(); ?></span> Commentaire</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-8" id="red">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-5" id="blue">

                        </div>
                        <div class="col-7" id="green">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4" id="blue">

            </div>
        </div>
    </div>
</section>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
