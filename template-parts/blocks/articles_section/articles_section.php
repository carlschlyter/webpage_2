<?php 

$articles = get_field('articles');

?>

<div class="container-fluid">

    <div class="row" id="articles-row">

        <div class="col-md-12" id="articles-container">

            <?php foreach($articles as $article) : 

            $img = $article['image']['sizes']['article-image'];
            $img2 = $article['image_2']['sizes']['article-image'];
            $header = $article['header'];
            $intro = $article['intro'];
            $art = $article['article'];
            $art2 = $article['article_2'];
            $link = $article['link']; 
            
            ?>
            
            <h2> <?php echo $header; ?> </h2>

            <h3> <?php echo $intro; ?> </h3>

            <p> <?php echo $art; ?> </p>

            <div class="article-image-box">

                <div class="article-image">

                    <img src="<?php echo $img; ?>" alt="" class="img-fluid ">

                </div>

                <div class="article-image">

                    <img src="<?php echo $img2; ?>" alt="" class="img-fluid ">

                </div>
                        
            </div>

            <p> <?php echo $art2; ?> </p>

            <?php endforeach; ?>

        </div>

    </div>

</div>