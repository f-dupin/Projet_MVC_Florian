<?php
ob_start();

?>

<div class="container">
    <div class="row">
        <div class="col-7" id="hotnews" style="background-image: url('<?= $HotNew[0][0]->getImage(); ?>')">
            <div id="div_hotnews">
                <h5><?= $HotNew[0][0]->getHeader(); ?></h5>
                <p><?= $HotNew[0][0]->getLastName(); ?> <?= $HotNew[0][0]->getFirstName(); ?>, <?= $HotNew[0][0]->getTimeStamp(); ?></p>
                <?php echo substr($HotNew[0][0]->getContent() , 3, 150).'...' ?>
            </div>
        </div>
        <div class="col-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="background-image: url('<?= $MostViews[0][0]->getImage(); ?>')">
                        <div class="div_mostview">
                            <h5><?= $MostViews[0][0]->getHeader(); ?></h5>
                            <p><?= $MostViews[0][0]->getLastName(); ?> <?= $HotNew[0][0]->getFirstName(); ?>, <?= $HotNew[0][0]->getTimeStamp(); ?></p>
                            <?php echo substr($MostViews[0][0]->getContent() , 3, 150).'...' ?>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="background-image: url('<?= $MostViews[0][1]->getImage(); ?>')">
                        <div class="div_mostview">
                            <h5><?= $MostViews[0][1]->getHeader(); ?></h5>
                            <p><?= $MostViews[0][1]->getLastName(); ?> <?= $HotNew[0][0]->getFirstName(); ?>, <?= $HotNew[0][0]->getTimeStamp(); ?></p>
                            <?php echo substr($MostViews[0][1]->getContent() , 3, 150).'...' ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        var_dump($MostViews[0]);
        var_dump($HotNew[0]);
    ?>

        <p><?= $MostViews[0][0]->getHeader();  ?></p>
</div>
<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
