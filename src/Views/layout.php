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
    <link rel="stylesheet" href="/assets/css/mobile-menu.css">
    <link rel="stylesheet" href="/assets/css/offcanvas.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
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

    <main>
        <?php echo $content; ?>
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
    <script src="/assets/js/jquery-2.1.4.min.js" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery.easing.min.js" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery.min.js" crossorigin="anonymous"></script>
    <script src="/assets/js/mobile-menu.js" crossorigin="anonymous"></script>
    <script src="/assets/js/offcanvas.min.js" crossorigin="anonymous"></script>
    <script src="/assets/js/owl.carousel.min.js" crossorigin="anonymous"></script>
    <script src="/assets/js/pagination.js" crossorigin="anonymous"></script>
    <script src="/assets/js/script.js" crossorigin="anonymous"></script>
    <script src="/assets/js/scripts.js" crossorigin="anonymous"></script>
    <script src="/assets/js/smoothscroll.js" crossorigin="anonymous"></script>
    <script src="/assets/js/validation.js" crossorigin="anonymous"></script>
    <script src="/assets/lib/jquery/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <script src="/assets/lib/jquery/jquery.min.js" crossorigin="anonymous"></script>
    <script src="/assets/lib/popper/popper.min.js" crossorigin="anonymous"></script>
    <script src="/assets/lib/tinymce/skins/lightgray/content.inline.min.css" crossorigin="anonymous"></script>
    <script src="/assets/lib/tinymce/skins/lightgray/content.min.css" crossorigin="anonymous"></script>
    <script src="/assets/lib/tinymce/skins/lightgray/content.mobile.min.css" crossorigin="anonymous"></script>
    <script src="/assets/lib/tinymce/skins/lightgray/skin.min.css" crossorigin="anonymous"></script>
    <script src="/assets/lib/tinymce/skins/lightgray/skin.mobile.min.css" crossorigin="anonymous"></script>
    <script src="/assets/lib/tinymce/themes/inlite/theme.min.js" crossorigin="anonymous"></script>
    <script src="/assets/lib/tinymce/themes/mobile/theme.min.js" crossorigin="anonymous"></script>
    <script src="/assets/lib/tinymce/themes/modern/theme.min.js" crossorigin="anonymous"></script>
</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);
