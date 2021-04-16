<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDEN News</title>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                        <?php
                        $nom_jour_fr = array("DIMANCHE", "LUNDI", "MARDI", "MERCREDI", "JEUDI", "VENDREDI", "SAMEDI");
                        $mois_fr = Array("", "JANVIER", "FÉVRIER", "MARS", "AVRIL", "MAI", "JUIN", "JUILLET", "AÔUT", "SEPTEMBRE", "OCTOBRE", "NOVEMBRE", "DÉCEMBRE");
                        // on extrait la date du jour
                        list($nom_jour, $jour, $mois, $annee) = explode('/', date("w/d/n/Y"));
                        echo '<p id="date_header">'.$nom_jour_fr[$nom_jour].' . </p><p id="date_header2">&nbsp;'.$jour.' . '.$mois_fr[$mois].' . '.$annee.'</p>';
                        ?>
                </div>
                <div class="col-md-3 offset-md-6 offset-sm-0">
                    <p id="login_register_header">LOGIN / REGISTER &nbsp;</p><p id="language"> FR <i class="fas fa-chevron-down"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p id="resaux_header"><i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i class="fab fa-instagram"></i> <i class="fab fa-tumblr"></i> <i class="fas fa-wifi"></i></p>
                </div>
                <div class="col-md-3 offset-md-6 offset-sm-0">
                    <p id="search_header"><i class="fas fa-search"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 offset-4">
                    <img id="logo" src="./assets/img/logo-omega_200x200.png">
                </div>
            </div>
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid" id="big_menu">
                        <button class="navbar-toggler" id="menu_burger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav" id="menu">
                                <li class="nav-item">
                                    <a class="nav-link active a_header" aria-current="page" href="#">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a_header" href="#">Mobile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a_header" href="#">Tablet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a_header" href="#">Gadgets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a_header" href="#">Camera</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a_header" href="#">Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link a_header" href="#" onclick="menu_dropdown()">More <i id="icon_dropdown" class="fas fa-chevron-down"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="container-fluid" aria-labelledby="navbarDropdownMenuLink">
                    <div class="row" id="menu_dropdown">
                        <div class="col-3 div_dropdown border_right">
                            <h5>Wiget Header</h5>
                            <ul>
                                <li><a class="dropdown-item" href="#">Awesome Features</a></li>
                                <li><a class="dropdown-item" href="#">Clean Interface</a></li>
                                <li><a class="dropdown-item" href="#">Available Possibilities</a></li>
                                <li><a class="dropdown-item" href="#">Responsive Design</a></li>
                                <li><a class="dropdown-item" href="#">Pixel Perfect Graphics</a></li>
                            </ul>
                        </div>
                        <div class="col-3 div_dropdown border_right">
                            <h5>Wiget Header</h5>
                            <ul>
                                <li><a class="dropdown-item" href="#">Awesome Features</a></li>
                                <li><a class="dropdown-item" href="#">Clean Interface</a></li>
                                <li><a class="dropdown-item" href="#">Available Possibilities</a></li>
                                <li><a class="dropdown-item" href="#">Responsive Design</a></li>
                                <li><a class="dropdown-item" href="#">Pixel Perfect Graphics</a></li>
                            </ul>
                        </div>
                        <div class="col-3 div_dropdown border_right">
                            <h5>Wiget Header</h5>
                            <ul>
                                <li><a class="dropdown-item" href="#">Awesome Features</a></li>
                                <li><a class="dropdown-item" href="#">Clean Interface</a></li>
                                <li><a class="dropdown-item" href="#">Available Possibilities</a></li>
                                <li><a class="dropdown-item" href="#">Responsive Design</a></li>
                                <li><a class="dropdown-item" href="#">Pixel Perfect Graphics</a></li>
                            </ul>
                        </div>
                        <div class="col-3 div_dropdown">
                            <h5>Wiget Header</h5>
                            <ul>
                                <li><a class="dropdown-item" href="#">Awesome Features</a></li>
                                <li><a class="dropdown-item" href="#">Clean Interface</a></li>
                                <li><a class="dropdown-item" href="#">Available Possibilities</a></li>
                                <li><a class="dropdown-item" href="#">Responsive Design</a></li>
                                <li><a class="dropdown-item" href="#">Pixel Perfect Graphics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <?php
        if (isset($header)) {
            echo $header;
        }
    ?>

    <main>
        <section>
            <div class="container margintop">
                <div class="row">
                    <div class="col-lg-8">
                        <?php echo $content; ?>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="TitreCategoryAside margintop">Popular News</h2><div id="Aside_TraitGris"><div id="Aside_TraitBlack"></div></div>
                        <div class="container-fluid nopadding littlemargintop">
                            <div class="row">
                                <div class="col-5">
                                    <img class="miniImage" src="<?= $mostPopularPost[0]->getImage(); ?>">
                                </div>
                                <div class="col-7 petitPost">
                                    <h4><?= $mostPopularPost[0]->getHeader(); ?></h4>
                                    <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mostPopularPost[0]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mostPopularPost[0]->getFirstName(); ?> <?= $mostPopularPost[0]->getLastName(); ?></span></p>
                                    <div class="littlecontainer_social_coms">
                                        <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mostPopularPost[0]->getShare(); ?></span> Partage</p>
                                        <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mostPopularPost[0]->getComments(); ?></span> Commentaire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid nopadding littlemargintop">
                            <div class="row">
                                <div class="col-5">
                                    <img class="miniImage" src="<?= $mostPopularPost[1]->getImage(); ?>">
                                </div>
                                <div class="col-7 petitPost">
                                    <h4><?= $mostPopularPost[1]->getHeader(); ?></h4>
                                    <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mostPopularPost[1]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mostPopularPost[1]->getFirstName(); ?> <?= $mostPopularPost[1]->getLastName(); ?></span></p>
                                    <div class="littlecontainer_social_coms">
                                        <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mostPopularPost[1]->getShare(); ?></span> Partage</p>
                                        <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mostPopularPost[1]->getComments(); ?></span> Commentaire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid nopadding littlemargintop">
                            <div class="row">
                                <div class="col-5">
                                    <img class="miniImage" src="<?= $mostPopularPost[2]->getImage(); ?>">
                                </div>
                                <div class="col-7 petitPost">
                                    <h4><?= $mostPopularPost[2]->getHeader(); ?></h4>
                                    <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mostPopularPost[2]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mostPopularPost[2]->getFirstName(); ?> <?= $mostPopularPost[2]->getLastName(); ?></span></p>
                                    <div class="littlecontainer_social_coms">
                                        <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mostPopularPost[2]->getShare(); ?></span> Partage</p>
                                        <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mostPopularPost[2]->getComments(); ?></span> Commentaire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid nopadding littlemargintop">
                            <div class="row">
                                <div class="col-5">
                                    <img class="miniImage" src="<?= $mostPopularPost[3]->getImage(); ?>">
                                </div>
                                <div class="col-7 petitPost">
                                    <h4><?= $mostPopularPost[3]->getHeader(); ?></h4>
                                    <p class="subtitleLittlePost"><span class="creditPost"><?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro'); echo date('jD- Y', strtotime($mostPopularPost[3]->getTimeStamp())); ?></span>, by: <span class="creditPost"><?= $mostPopularPost[3]->getFirstName(); ?> <?= $mostPopularPost[3]->getLastName(); ?></span></p>
                                    <div class="littlecontainer_social_coms">
                                        <p class="littleshare_coms"><i class="fas fa-share-alt"></i> <span><?= $mostPopularPost[3]->getShare(); ?></span> Partage</p>
                                        <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mostPopularPost[3]->getComments(); ?></span> Commentaire</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <h2 class="TitreCategoryAside margintop">Most Commented</h2><div id="Aside_TraitGris"><div id="Aside_TraitBlack"></div></div>
                            <div class="container-fluid nopadding littlemargintop">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="miniImage" src="<?= $mostPopularPost[0]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <h4><?= $mostPopularPost[0]->getHeader(); ?></h4>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mostPopularPost[0]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid nopadding littlemargintop">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="miniImage" src="<?= $mostPopularPost[1]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <h4><?= $mostPopularPost[1]->getHeader(); ?></h4>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mostPopularPost[1]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid nopadding littlemargintop">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="miniImage" src="<?= $mostPopularPost[2]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <h4><?= $mostPopularPost[2]->getHeader(); ?></h4>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mostPopularPost[2]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid nopadding littlemargintop">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="miniImage" src="<?= $mostPopularPost[3]->getImage(); ?>">
                                    </div>
                                    <div class="col-7 petitPost">
                                        <h4><?= $mostPopularPost[3]->getHeader(); ?></h4>
                                        <div class="littlecontainer_social_coms">
                                            <p class="littleshare_coms2"><i class="far fa-comments"></i> <span><?= $mostPopularPost[3]->getComments(); ?></span> Commentaire</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <?php echo $content2; ?>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="footer_separation"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h4 class="h4Footer">ABOUT TECH</h4><div class="footer_traitGris"><div class="footer_traitColor"></div></div>
                        <img src="./assets/img/tech_about.jpg">
                        <p>Competently conceptualize go forward testing procedures and B2B expertise. Photofluorescnetly cultivate principle-centered methods.of empowerment through fully researched</p>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4Footer">DISCOVER</h4><div class="footer_traitGris"><div class="footer_traitColor"></div></div>
                        <div class="container-fluid nopadding">
                            <div class="row">
                                <div class="col-lg-5">
                                    <ul class="listFooter">
                                        <li>Mobile</li>
                                        <li>Tablet</li>
                                        <li>Gadgets</li>
                                        <li>Design</li>
                                        <li>Camera</li>
                                        <li>Apps</li>
                                        <li>Login</li>
                                        <li>About Us</li>
                                        <li>Membership</li>
                                        <li>Blog</li>
                                        <li>Job</li>
                                        <li>SiteMap</li>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <ul class="listFooter">
                                        <li>Contact Us</li>
                                        <li>Newsletter Alerts</li>
                                        <li>Podcast</li>
                                        <li>Sms Subscription</li>
                                        <li>Advertisement Policy</li>
                                        <li>Report Technical issue</li>
                                        <li>Complaints and Corrections</li>
                                        <li>Terms and Conditions</li>
                                        <li>Privacy Policy</li>
                                        <li>Cookie Policy</li>
                                        <li>Securedrop</li>
                                        <li>Archives</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4Footer">TECH PHOTOS</h4><div class="footer_traitGris"><div class="footer_traitColor"></div></div>
                        <div class="container-fluid nopadding">
                            <?php
                                for ($i = 0; $i < count($imageFooter); $i++){
                                    if ($i%3 == 0){
                                        echo '<div class="row"><div class="col-4"><img class="ImageFooter" src="'.$imageFooter[$i]->getImage().'"></div>';
                                    }else if ($i%3 == 2) {
                                        echo '<div class="col-4"><img class="ImageFooter" src="'.$imageFooter[$i]->getImage().'"></div></div>';
                                    }else {
                                        echo '<div class="col-4"><img class="ImageFooter" src="'.$imageFooter[$i]->getImage().'"></div>';
                                    }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer_separation2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <p id="resaux_header"><i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i class="fab fa-instagram"></i> <i class="fab fa-tumblr"></i> <i class="fas fa-wifi"></i></p>
                    </div>
                    <div class="col-lg-5">
                        <p class="textFooter">© COPYRIGHT 2022-OMEGA NEWS . DESIGN BY: OMEGA GRAPHICS</p>
                    </div>
                    <div class="col-lg-3">
                        <p class="textFooter">TECHNOLOGY NEWS MAGAZINE</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</body>
<script>
    var menu = document.getElementById('menu_dropdown');
    var icon = document.getElementById('icon_dropdown');
    var verif = 1;
    menu.style.display = 'none';

    function menu_dropdown() {
        if (verif === 1){
            menu.style.display = 'flex';
            icon.setAttribute('class',"fas fa-chevron-up")
            verif = 0;
        }else {
            menu.style.display = 'none';
            icon.setAttribute('class',"fas fa-chevron-down")
            verif = 1;
        }
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);
