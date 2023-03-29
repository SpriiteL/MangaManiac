<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php
    require_once('/reCaptcha/autoload.php');
    if(isset($_POST['submitpost'])){

        if(isset($_POST['g-captcha-response'])){
            $recaptcha = new \ReCaptcha\ReCaptcha('6LdCYjolAAAAAJIS4hHFxZvw0ZIz0m1H6JPJYG4K');
            $resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
                            ->verify($_POST['g-recaptcha-response']);
            if ($resp->isSuccess()) {
                echo('Captcha Valide');
            } else {
                $errors = $resp->getErrorCodes();
                echo('Captcha Invalide');
                var_dump($errors);
            }
        }else{
            echo('Captcha non remplie');
        }
    }
?>
<?php
    include("header.php")
?>

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Connexion</h2>
                        <p>Bienvenue sur MangaManiac !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Connexion</h3>
                        <form action="#">
                            <div class="input__item">
                                <input type="text" placeholder="Adresse Mail">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Mot de Passe">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LdCYjolAAAAAILLS_pufOlYF1IZ_a5ZiSgQqRzn"></div>
                            <button type="submit" class="site-btn">Connectez-Vous</button>
                        </form>
                        <a href="#" class="forget_pass">Problème ?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Vous n'avez pas de compte ?</h3>
                        <a href="signup.php" class="primary-btn">Inscrivez-Vous</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>ou</span>
                            <ul>
                                <li><a href="https://fr-fr.facebook.com/" class="facebook"><i class="fa fa-facebook"></i> Connexion avec Facebook</a></li>
                                <li><a href="https://www.google.com/account" class="google"><i class="fa fa-google"></i> Connexion avec Google</a></li>
                                <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZnIifQ%3D%3D%22%7D" class="twitter"><i class="fa fa-twitter"></i> Connexion avec Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

    <?php
            include("footer.php")
        ?>

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>