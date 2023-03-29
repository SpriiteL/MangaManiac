<?php
    include("header.php")
?>

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Avis</h2>
                        <p>Donnez votre Avis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <div class="anime__details__review">
                <div class="section-title">
                    <h5>Avis</h5>
                </div>
                <div class="anime__review__item">
                    <div class="anime__review__item__pic">
                        <img src="img/anime/review-1.jpg" alt="">
                    </div>
                    <div class="anime__review__item__text">
                        <h6>Chris Curry - <span>1 Hour ago</span></h6>
                        <p>whachikan Just noticed that someone categorized this as belonging to the genre
                        "demons" LOL</p>
                    </div>
                </div>
                <div class="anime__review__item">
                    <div class="anime__review__item__pic">
                        <img src="img/anime/review-2.jpg" alt="">
                    </div>
                    <div class="anime__review__item__text">
                        <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                        <p>Finally it came out ages ago</p>
                    </div>
                </div>
                <div class="anime__review__item">
                    <div class="anime__review__item__pic">
                        <img src="img/anime/review-3.jpg" alt="">
                    </div>
                    <div class="anime__review__item__text">
                        <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                        <p>Where is the episode 15 ? Slow update! Tch</p>
                    </div>
                </div>
                <div class="anime__review__item">
                    <div class="anime__review__item__pic">
                        <img src="img/anime/review-4.jpg" alt="">
                    </div>
                    <div class="anime__review__item__text">
                        <h6>Chris Curry - <span>1 Hour ago</span></h6>
                        <p>whachikan Just noticed that someone categorized this as belonging to the genre
                        "demons" LOL</p>
                    </div>
                </div>
                <div class="anime__review__item">
                    <div class="anime__review__item__pic">
                        <img src="img/anime/review-5.jpg" alt="">
                    </div>
                    <div class="anime__review__item__text">
                        <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                        <p>Finally it came out ages ago</p>
                    </div>
                </div>
                <div class="anime__review__item">
                    <div class="anime__review__item__pic">
                        <img src="img/anime/review-6.jpg" alt="">
                    </div>
                    <div class="anime__review__item__text">
                        <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                        <p>Where is the episode 15 ? Slow update! Tch</p>
                    </div>
                </div>
            </div>
            <div class="anime__details__form">
                <div class="section-title">
                    <h5>Your Comment</h5>
            </div>
                {% if user.is_authenticated %}
                <form action="#">
                    <textarea placeholder="Your Comment"></textarea>
                    <button type="submit"><i class="fa fa-location-arrow"></i> Envoyer</button>
                </form>
            {% else %}
                <p>You must be logged in to leave a comment.</p>
            {% endif %}
</div>

        </div>
        <div class="col-lg-4 col-md-4">
            <div class="anime__details__sidebar">
                <div class="section-title">
                    <h5>Suggestion</h5>
                </div>
                <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-1.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Boruto: Naruto next generations</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-2.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-3.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-4.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
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