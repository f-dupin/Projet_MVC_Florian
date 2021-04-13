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
<section>
    <div class="container margintop">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="TitreCategory">Mobile</h2><div id="Mobile_TraitGris"><div id="Mobile_TraitViolet"></div></div>
                <div class="container-fluid margintop">
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
                    <div class="row margintop">
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
                    <div class="row littlemargintop">
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
            <div class="col-lg-4">
                <h2 class="TitreCategoryAside">Popular News</h2><div id="Aside_TraitGris"><div id="Aside_TraitBlack"></div></div>
                <div class="container-fluid nopadding littlemargintop">
                    <div class="row">
                        <div class="col-5">
                            <img class="miniImage" src="<?= $mobilePost[1]->getImage(); ?>">
                        </div>
                        <div class="col-7 petitPost">
                            <h4><?= $mobilePost[1]->getHeader(); ?></h4>
                            <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mobilePost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                            <div class="littlecontainer_social_coms">
                                <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid nopadding littlemargintop">
                    <div class="row">
                        <div class="col-5">
                            <img class="miniImage" src="<?= $mobilePost[1]->getImage(); ?>">
                        </div>
                        <div class="col-7 petitPost">
                            <h4><?= $mobilePost[1]->getHeader(); ?></h4>
                            <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mobilePost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                            <div class="littlecontainer_social_coms">
                                <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid nopadding littlemargintop">
                    <div class="row">
                        <div class="col-5">
                            <img class="miniImage" src="<?= $mobilePost[1]->getImage(); ?>">
                        </div>
                        <div class="col-7 petitPost">
                            <h4><?= $mobilePost[1]->getHeader(); ?></h4>
                            <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mobilePost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                            <div class="littlecontainer_social_coms">
                                <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid nopadding littlemargintop">
                    <div class="row">
                        <div class="col-5">
                            <img class="miniImage" src="<?= $mobilePost[1]->getImage(); ?>">
                        </div>
                        <div class="col-7 petitPost">
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
        </div>
    </div>

    <div class="container margintop">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="TitreCategory">Tablet Pc</h2><div id="Tablet_TraitGris"><div id="Tablet_TraitRed"></div></div>
                <div class="container-fluid  margintop">
                    <div class="row">
                        <div class="col-6">
                            <img class="bigImage" src="<?= $tabletPost[0]->getImage(); ?>">
                        </div>
                        <div class="col-6">
                            <div class="tabletEtiquette"><p>Tablet</p></div>
                            <h3><?= $tabletPost[0]->getHeader(); ?></h3>
                            <p><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($tabletPost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mobilePost[0]->getFirstName(); ?> <?= $mobilePost[0]->getLastName(); ?></span></p>
                            <div class="text_contents">
                                <?php echo substr($tabletPost[0]->getContent() , 3, 120).'...' ?>
                            </div>
                            <div class="container_social_coms">
                                <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $tabletPost[0]->getShare(); ?></span> Partage</p>
                                <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $tabletPost[0]->getComments(); ?></span> Commentaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="row margintop">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $tabletPost[1]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="tabletEtiquetteSmall"><p>Tablet</p></div>
                                        <h4><?= $tabletPost[1]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($tabletPost[1]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $tabletPost[1]->getFirstName(); ?> <?= $tabletPost[1]->getLastName(); ?></span></p>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $tabletPost[1]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $tabletPost[1]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $tabletPost[2]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="tabletEtiquetteSmall"><p>Tablet</p></div>
                                        <h4><?= $tabletPost[2]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($tabletPost[2]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $tabletPost[2]->getFirstName(); ?> <?= $tabletPost[2]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $tabletPost[2]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $tabletPost[2]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row littlemargintop">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $tabletPost[3]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="tabletEtiquetteSmall"><p>Tablet</p></div>
                                        <h4><?= $tabletPost[3]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($tabletPost[3]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $tabletPost[3]->getFirstName(); ?> <?= $tabletPost[3]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $tabletPost[3]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $tabletPost[3]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $tabletPost[4]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="tabletEtiquetteSmall"><p>Tablet</p></div>
                                        <h4><?= $tabletPost[4]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($tabletPost[4]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $tabletPost[4]->getFirstName(); ?> <?= $tabletPost[4]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $tabletPost[4]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $tabletPost[4]->getComments(); ?></span> Commentaire</p>
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

    <div class="container margintop">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="TitreCategory">Gadgets</h2><div id="Gadgets_TraitGris"><div id="Gadgets_TraitBlack"></div></div>
                <div class="container-fluid  margintop">
                    <div class="row">
                        <div class="col-6">
                            <img class="bigImage" src="<?= $gadgetsPost[0]->getImage(); ?>">
                        </div>
                        <div class="col-6">
                            <div class="GadgetsEtiquette"><p>Gadgets</p></div>
                            <h3><?= $gadgetsPost[0]->getHeader(); ?></h3>
                            <p><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($gadgetsPost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $gadgetsPost[0]->getFirstName(); ?> <?= $gadgetsPost[0]->getLastName(); ?></span></p>
                            <div class="text_contents">
                                <?php echo substr($gadgetsPost[0]->getContent() , 3, 120).'...' ?>
                            </div>
                            <div class="container_social_coms">
                                <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $gadgetsPost[0]->getShare(); ?></span> Partage</p>
                                <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $gadgetsPost[0]->getComments(); ?></span> Commentaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="row margintop">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $gadgetsPost[1]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="GadgetsEtiquetteSmall"><p>Gadgets</p></div>
                                        <h4><?= $gadgetsPost[1]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($gadgetsPost[1]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $gadgetsPost[1]->getFirstName(); ?> <?= $gadgetsPost[1]->getLastName(); ?></span></p>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $gadgetsPost[1]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $gadgetsPost[1]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $gadgetsPost[2]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="GadgetsEtiquetteSmall"><p>Gadgets</p></div>
                                        <h4><?= $gadgetsPost[2]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($gadgetsPost[2]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $gadgetsPost[2]->getFirstName(); ?> <?= $gadgetsPost[2]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $gadgetsPost[2]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $gadgetsPost[2]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row littlemargintop">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $gadgetsPost[3]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="GadgetsEtiquetteSmall"><p>Gadgets</p></div>
                                        <h4><?= $gadgetsPost[3]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($gadgetsPost[3]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $gadgetsPost[3]->getFirstName(); ?> <?= $gadgetsPost[3]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $gadgetsPost[3]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $gadgetsPost[3]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $gadgetsPost[4]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="GadgetsEtiquetteSmall"><p>Gadgets</p></div>
                                        <h4><?= $gadgetsPost[4]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($gadgetsPost[4]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $gadgetsPost[4]->getFirstName(); ?> <?= $gadgetsPost[4]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $gadgetsPost[4]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $gadgetsPost[4]->getComments(); ?></span> Commentaire</p>
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

    <div class="container margintop">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="TitreCategory">Camera</h2><div id="Camera_TraitGris"><div id="Camera_TraitOrange"></div></div>
                <div class="container-fluid margintop">
                    <div class="row">
                        <div class="col-6">
                            <img class="bigImage" src="<?= $cameraPost[0]->getImage(); ?>">
                        </div>
                        <div class="col-6">
                            <div class="CameraEtiquette"><p>Camera</p></div>
                            <h3><?= $cameraPost[0]->getHeader(); ?></h3>
                            <p><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($cameraPost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $cameraPost[0]->getFirstName(); ?> <?= $cameraPost[0]->getLastName(); ?></span></p>
                            <div class="text_contents">
                                <?php echo substr($cameraPost[0]->getContent() , 3, 120).'...' ?>
                            </div>
                            <div class="container_social_coms">
                                <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $cameraPost[0]->getShare(); ?></span> Partage</p>
                                <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $cameraPost[0]->getComments(); ?></span> Commentaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="row margintop">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $cameraPost[1]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="CameraEtiquetteSmall"><p>Camera</p></div>
                                        <h4><?= $cameraPost[1]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($cameraPost[1]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $cameraPost[1]->getFirstName(); ?> <?= $cameraPost[1]->getLastName(); ?></span></p>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $cameraPost[1]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $cameraPost[1]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $cameraPost[2]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="CameraEtiquetteSmall"><p>Camera</p></div>
                                        <h4><?= $cameraPost[2]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($cameraPost[2]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $cameraPost[2]->getFirstName(); ?> <?= $cameraPost[2]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $cameraPost[2]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $cameraPost[2]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row littlemargintop">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $cameraPost[3]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="CameraEtiquetteSmall"><p>Camera</p></div>
                                        <h4><?= $cameraPost[3]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($cameraPost[3]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $cameraPost[3]->getFirstName(); ?> <?= $cameraPost[3]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $cameraPost[3]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $cameraPost[3]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $cameraPost[4]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="CameraEtiquetteSmall"><p>Camera</p></div>
                                        <h4><?= $cameraPost[4]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($cameraPost[4]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $cameraPost[4]->getFirstName(); ?> <?= $cameraPost[4]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $cameraPost[4]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $cameraPost[4]->getComments(); ?></span> Commentaire</p>
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

    <div class="container margintop">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="TitreCategory">Design</h2><div id="Design_TraitGris"><div id="Design_TraitBlue"></div></div>
                <div class="container-fluid margintop">
                    <div class="row">
                        <div class="col-6">
                            <img class="bigImage" src="<?= $designPost[0]->getImage(); ?>">
                        </div>
                        <div class="col-6">
                            <div class="DesignEtiquette"><p>Design</p></div>
                            <h3><?= $designPost[0]->getHeader(); ?></h3>
                            <p><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($designPost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $designPost[0]->getFirstName(); ?> <?= $designPost[0]->getLastName(); ?></span></p>
                            <div class="text_contents">
                                <?php echo substr($designPost[0]->getContent() , 3, 120).'...' ?>
                            </div>
                            <div class="container_social_coms">
                                <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $mobilePost[0]->getShare(); ?></span> Partage</p>
                                <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $mobilePost[0]->getComments(); ?></span> Commentaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="row margintop">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $designPost[1]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="DesignEtiquetteSmall"><p>Design</p></div>
                                        <h4><?= $designPost[1]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($designPost[1]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $designPost[1]->getFirstName(); ?> <?= $designPost[1]->getLastName(); ?></span></p>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $designPost[1]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $designPost[1]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $designPost[2]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="DesignEtiquetteSmall"><p>Design</p></div>
                                        <h4><?= $designPost[2]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($designPost[2]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $designPost[2]->getFirstName(); ?> <?= $designPost[2]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $designPost[2]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $designPost[2]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row littlemargintop">
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $designPost[3]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="DesignEtiquetteSmall"><p>Design</p></div>
                                        <h4><?= $designPost[3]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($designPost[3]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $designPost[3]->getFirstName(); ?> <?= $designPost[3]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $designPost[3]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $designPost[3]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $designPost[4]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="DesignEtiquetteSmall"><p>Design</p></div>
                                        <h4><?= $designPost[4]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($designPost[4]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $designPost[4]->getFirstName(); ?> <?= $designPost[4]->getLastName(); ?></span></p>
                                        <div class="container_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $designPost[4]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $designPost[4]->getComments(); ?></span> Commentaire</p>
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




<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
