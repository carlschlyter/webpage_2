<?php 

$miniatures = get_field('service_miniatures');

?>

<div class="row" id="miniatures-row">

    <div class="col-md-12" id="miniatures-container">

        <?php 

            foreach($miniatures as $miniature) :   

            $img = $miniature['service_miniature']['sizes']['miniature-image'];
            $label = $miniature['label'];
            $link = $miniature['link'];

        ?>

            <div class="miniature-box">

                <a href="<?php echo $link; ?>">

                    <img src="<?php echo $img; ?>" alt="">

                    <p> <?php echo $label; ?> </p>

                </a>
                
            </div>

            <?php endforeach; ?>    

    </div>

</div>
