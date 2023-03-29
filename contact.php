<?php
    include("header.php")
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les réponses du formulaire
    $to = "nathanpa.etude@gmail.com";
    $subject = $_POST["subject"];
    $message = $_POST["comment"];
    $headers = "From: " . $_POST["username"] . " <" . $_POST["email"] . ">\r\n";
    
    // Envoyer l'e-mail
    mail($to, $subject, $message, $headers);
    
    // Rediriger l'utilisateur vers une page de confirmation
}
?>
    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Contact</h2>
                        <p>Contacter l'Assistance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    
    <section class="anime-details spad">
        <div class="container">
            <div class="contact_form">
                <div class="anime__details__content">
                    <div class="col-lg-8 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <div class="anime__details__form">
                                    <div class="section-title">
                                        <h5>MangaManiac</h5>
                                    </div>
                                        <form action="#" method="POST">
                                            <div class="input__item">
                                                <textarea name="email" placeholder="Adresse Mail" style="width: 200px; height: 30px;"></textarea>
                                                <span class="icon_profile"></span>
                                            </div>
                                            <br>
                                            <div class="input__item">
                                                <textarea name="username" placeholder="Nom d'utilisateur"></textarea>
                                                <span class="icon_lock"></span>
                                            </div>
                                            <br>
                                            <textarea name="subject" placeholder="Sujet"></textarea>
                                            <textarea name="comment" placeholder="Commentaire"></textarea>
                                            <button type="submit"><i class="fa fa-location-arrow"></i> Envoyer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section End -->

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