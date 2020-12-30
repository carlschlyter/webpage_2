<?php

$txtimgs = get_field('text_and_image');

?>

<div class="container-fluid">

    <div class="row" id="txt-img-row">
    
        <div class="col-md-12" id="txt-img-col">

            <?php foreach($txtimgs as $txtimg) : 
                
            $header = $txtimg['header'];
            $descr = $txtimg['description']; 
            $img = $txtimg['image']['sizes']['imgtxt-section-image-2'];
            $side =$txtimg['side'];    

            ?>

                <?php if ($side == 'right'): ?>    

                    <div class="row txt-img-container">

                        <div class="txt-img-txtbox col-md-6">
                            <h2> <?php echo $header ?></h2>
                            <p> <?php echo $descr ?> </p>
                        </div>
        
                        <div class="txt-img-imgbox col-md-6">
                            <img src="<?php echo $img ?>" alt="">
                        </div>

                    </div>


                <?php else : ?>

                    <div class="row txt-img-container">

                        <div class="txt-img-imgbox col-md-6">
                            <img src="<?php echo $img ?>" alt="">
                        </div>

                        <div class="txt-img-txtbox col-md-6">
                            <h2> <?php echo $header ?></h2>
                            <p> <?php echo $descr ?> </p>
                        </div>

                    </div>

                    <?php endif; ?>    

            <?php endforeach; ?>

        </div>
    
    </div>

</div>