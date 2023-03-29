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
    <section class="normal-breadcrumb set-bg" data-setbg="img/inside.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Inscription</h2>
                        <p>Bienvenue sur MangaManiac</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Inscription</h3>
                        <form method="POST" action="#">
                            <div class="input__item">
                                <input name="Adresse_Mail" type="text" placeholder="Adresse_Mail">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input name="Nom_Complet" type="text" placeholder="Nom_Complet">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input name="MotdePasse" type="password" placeholder="MotdePasse">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LdCYjolAAAAAILLS_pufOlYF1IZ_a5ZiSgQqRzn"></div>
                            <button type="submit" class="site-btn" name="submitpost">Se Connecter</button>
                        </form>
                        <h5>Vous avez déjà un compte ? <a href="#">Connectez-vous !</a></h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <h3>Connexion avec :</h3>
                        <ul>
                            <li><a href="https://fr-fr.facebook.com/" class="facebook"><i class="fa fa-facebook"></i> Connexion avec Facebook</a></li>
                            <li><a href="https://www.google.com/account" class="google"><i class="fa fa-google"></i> Connexion avec Google</a></li>
                            <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZnIifQ%3D%3D%22%7D" class="twitter"><i class="fa fa-twitter"></i> Connexion avec Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->

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
    <?php

// Vérification des données envoyées par le formulaire
if (!isset($_POST['Adresse_Mail'], $_POST['Nom_Complet'], $_POST['MotdePasse'])) {
    echo "Tous les champs sont obligatoires";
    exit;
}

$host = 'localhost';
$dbname = 'loginmm';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Echec de connexion à MySQL : " . $e->getMessage();
    exit;
}

// Préparation de la requête d'insertion
$sql = "INSERT INTO inscription (Adresse_Mail, Nom_Complet, MotdePasse) VALUES (:adresse, :nom, :mdp)";
$stmt = $pdo->prepare($sql);

// Affectation des valeurs aux paramètres de la requête
$stmt->bindValue(':adresse', $_POST['Adresse_Mail'], PDO::PARAM_STR);
$stmt->bindValue(':nom', $_POST['Nom_Complet'], PDO::PARAM_STR);
$stmt->bindValue(':mdp', $_POST['MotdePasse'], PDO::PARAM_STR);

// Exécution de la requête
if (!$stmt->execute()) {
    echo "Echec de l'insertion : (" . $pdo->errorCode() . ") " . implode(", ", $pdo->errorInfo());
    exit;
}

echo "Inscription réussie !";

$pdo = null;
?>


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