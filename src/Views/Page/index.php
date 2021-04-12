<?php
ob_start();

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7" id="hotnews" style="background-image: url('<?= $HotNew[0][0]->getImage(); ?>')">

                <div id="div_hotnews">
                    <div id="etiquette_HotNews">
                        <p>HOT NEWS</p>
                    </div>
                    <h4><?= $HotNew[0][0]->getHeader(); ?></h4>
                    <p class="subTitle"><?= $HotNew[0][0]->getLastName(); ?> <?= $HotNew[0][0]->getFirstName(); ?>, <?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('F j, Y', strtotime($HotNew[0][0]->getTimeStamp())); ?></p>
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
                                <div id="etiquette_TopViewed1">
                                    <p>HOT NEWS</p>
                                </div>
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
                                <div id="etiquette_TopViewed2">
                                    <p>HOT NEWS</p>
                                </div>
                                <h4><?= $MostViews[0][1]->getHeader(); ?></h4>
                                <p class="subTitle"><?= $MostViews[0][1]->getLastName(); ?> <?= $MostViews[0][1]->getFirstName(); ?>, <?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('F j, Y', strtotime($MostViews[0][1]->getTimeStamp())); ?></p>
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
<?php var_dump($mobilePost);?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 id="TitreMobile">Mobile</h2><div id="Mobile_TraitGris"><div id="Mobile_TraitViolet"></div></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <img class="bigImage" src="<?= $mobilePost[0]->getImage(); ?>">
                        </div>
                        <div class="col-6">
                            <div class="mobileEtiquette"><p>Mobile</p></div>
                            <h3><?= $mobilePost[0]->getHeader(); ?></h3>
                            <p><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mobilePost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                            <div class="text_contents">
                                <?php echo substr($mobilePost[0]->getContent() , 3, 120).'...' ?>
                            </div>
                            <div class="container_social_coms">
                                <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $mobilePost[1]->getImage(); ?>">
                                    </div>
                                     <div class="col-7 petitPost">
                                         <div class="mobileEtiquetteSmall"><p>Mobile</p></div>
                                        <h4><?= $mobilePost[1]->getHeader(); ?></h4>
                                         <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mobilePost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                                         <div class="littlecontainer_social_coms">
                                             <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                             <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                                         </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $mobilePost[2]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="mobileEtiquetteSmall"><p>Mobile</p></div>
                                        <h4><?= $mobilePost[2]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mobilePost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $mobilePost[3]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="mobileEtiquetteSmall"><p>Mobile</p></div>
                                        <h4><?= $mobilePost[3]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mobilePost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $mobilePost[4]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="mobileEtiquetteSmall"><p>Mobile</p></div>
                                        <h4><?= $mobilePost[4]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mobilePost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
