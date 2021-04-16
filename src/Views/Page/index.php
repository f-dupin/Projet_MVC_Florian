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

<?php
$header = ob_get_clean();
ob_start();
$cpt = 0;
    foreach ($lesPosts AS $post) {

                for ($i = 0; $i < count($post); $i++){

                    if ($i == 0) {

                        ?>
                        <h2 class="TitreCategory margintop"><?= $categories[0][$cpt]->getCategoryName() ?></h2><div id="Mobile_TraitGris"><div id="Mobile_TraitViolet"></div></div>
                        <div class="container-fluid margintop">
                        <div class="row">
                            <div class="col-6">
                                <img class="bigImage" src="<?= $post[$i]->getImage(); ?>">
                            </div>
                            <div class="col-6">
                                <div class="<?= $categories[0][$cpt]->getCategoryName() ?>Etiquette"><p><?= $categories[0][$cpt]->getCategoryName() ?></p></div>
                                <h3><?= $post[$i]->getHeader(); ?></h3>
                                <p><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($post[$i]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $post[$i]->getFirstName(); ?> <?= $post[$i]->getLastName(); ?></span></p>
                                <div class="text_contents">
                                    <?php echo substr($post[$i]->getContent() , 3, 120).'...' ?>
                                </div>
                                <div class="container_social_coms">
                                    <p class="share_coms"><i class="fas fa-share-alt"></i> <span><?= $post[$i]->getShare(); ?></span> Partage</p>
                                    <p class="share_coms2"><i class="far fa-comments"></i> <span><?= $post[$i]->getComments(); ?></span> Commentaire</p>
                                </div>
                            </div>
                        </div>
                        <div class="row margintop">
                        <?php
                    }else if ($i == 2) {

                ?>

                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row littlemargintoplg">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $post[$i]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="<?= $categories[0][$cpt]->getCategoryName() ?>EtiquetteSmall"><p><?= $categories[0][$cpt]->getCategoryName() ?></p></div>
                                        <h4><?= $post[$i]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($post[$i]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $post[$i]->getFirstName(); ?> <?= $post[$i]->getLastName(); ?></span></p>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $post[$i]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $post[$i]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row margintop">
                <?php
                    }else if ($i == 4){

                        ?>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row littlemargintoplg">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $post[$i]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="<?= $categories[0][$cpt]->getCategoryName() ?>EtiquetteSmall"><p><?= $categories[0][$cpt]->getCategoryName() ?></p></div>
                                        <h4><?= $post[$i]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($post[$i]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $post[$i]->getFirstName(); ?> <?= $post[$i]->getLastName(); ?></span></p>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $post[$i]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $post[$i]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row littlemargintop">
                            <div class="col-9">
                                <div class="TraitGrisMore"></div>
                            </div>
                            <div class="col-3">
                                <p class="ReadMore">MORE NEWS »</p>
                            </div>
                        </div>
                        </div>
                        <?php
                    }else {

                        ?>
                        <div class="col-lg-6">
                            <div class="container-fluid nopadding">
                                <div class="row littlemargintoplg">
                                    <div class="col-5">
                                        <img class="smallImage" src="<?= $post[$i]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <div class="<?= $categories[0][$cpt]->getCategoryName() ?>EtiquetteSmall"><p><?= $categories[0][$cpt]->getCategoryName() ?></p></div>
                                        <h4><?= $post[$i]->getHeader(); ?></h4>
                                        <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($post[$i]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $post[$i]->getFirstName(); ?> <?= $post[$i]->getLastName(); ?></span></p>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $post[$i]->getShare(); ?></span> Partage</p>
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $post[$i]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
?>



<?php
        $cpt++;
    }
?>



<?php

$content = ob_get_clean();
ob_start();
?>
    <div id="videoContainer" class="container">
        <div class="row">
            <div class="col-lg-6">
                <iframe height="100%" src="https://www.youtube.com/embed/MJ-jbFdUPns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <iframe height="auto" src="https://www.youtube.com/embed/LjouKxXuE4k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6">
                            <iframe height="auto" src="https://www.youtube.com/embed/UPvJXBI_3V4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div><div class="row">
                        <div class="col-lg-6">
                            <iframe height="auto" src="https://www.youtube.com/embed/Z6UzkcSDUys" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6">
                            <iframe height="auto" src="https://www.youtube.com/embed/grx-5UtRDDU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="12">
                <div class="container">
                    <div class="row margintop">
                        <div class="col-lg-6">
                            <h2 id="newslatterH2"><span>SIGN UP</span> FOR THE LATEST NEWS</h2>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <label id="labelleNewslatter" for="newslatter">Email</label>
                                <input id="newslatter" type="email">
                                <button id="buttonNewslatter">SIGN UP</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

$content2 = ob_get_clean();
require VIEWS . 'layout.php';
