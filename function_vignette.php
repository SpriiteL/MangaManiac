<?php
    $products = array(
        array("img/popular/popular-1.jpg", "Action", "Seinen", "Attack on Titan"),
        array("img/popular/popular-2.jpg", "Adventure", "Shônen", "The Seven Deadly Sins: Wrath of the Gods"),
        array("img/popular/popular-3.jpg", "Comedy", "Josei", "Monthly Girls' Nozaki-kun"),
        array("img/popular/popular-4.jpg", "Drama", "Shôjo", "Fruits Basket: The Final"),
        array("img/popular/popular-5.jpg", "Fantasy", "Isekai", "That Time I Got Reincarnated as a Slime"),
        array("img/popular/popular-6.jpg", "Horror", "Psychological", "The Promised Neverland"),
        array("img/popular/popular-7.jpg", "Mystery", "Thriller", "Death Note"),
        array("img/popular/popular-8.jpg", "Romance", "Yaoi", "Given")
    );

    for($i=0; $i<8; $i++){
?>
        <div class="col-lg-3 col-md-8 col-sm-8">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="<?php echo $products[$i][0]; ?>">
                    <div class="ep"><?php echo ($i+1); ?> / 21</div>
                    <div class="comment"><i class="fa fa-comments"></i> <?php echo rand(1, 20); ?></div>
                    <div class="view"><i class="fa fa-eye"></i> <?php echo rand(1000, 5000); ?></div>
                </div>
                <div class="product__item__text">
                    <ul>
                        <li><?php echo $products[$i][1]; ?></li>
                        <li><?php echo $products[$i][2]; ?></li>
                    </ul>
                    <h5><a href="#"><?php echo $products[$i][3]; ?></a></h5>
                </div>
            </div>
        </div>
<?php
    }
?>
