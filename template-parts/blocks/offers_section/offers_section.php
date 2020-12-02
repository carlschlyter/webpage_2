<?php

$boxes = get_field('offers_boxes');

?>

<div class="container-fluid">

    <div class="row" id="offers-row">

        <div class="col-md-12" id="offers-container">

            <?php foreach($boxes as $box) : 
                
                $img = $box['image']['sizes']['offers-image'];
                $header = $box['header'];
                $descr = $box['description'];
                $link = $box['link'];

                ?>

                <div class="offers-box">

                    <a href="<?php $link; ?>">

                        <div class="image-box">

                            <img src="<?php echo $img; ?>" alt="">

                        </div>

                        <h2> <?php echo $header; ?> </h2>

                        <p> <?php echo $descr; ?> </p>

                    </a>

                </div>

            <?php endforeach; ?>    

        </div>

    </div>

</div>