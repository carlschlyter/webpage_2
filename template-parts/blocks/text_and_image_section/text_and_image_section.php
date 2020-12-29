<?php

$txtimgs = get_field('text_and_image');

?>
<pre>
    <?php 
        // var_dump($txtimgs);    
    ?>
</pre>

<div class="container-fluid">

    <div class="row">
    
        <div class="col-md-12">

            <?php foreach($txtimgs as $txtimg) : 
                
            $header = $txtimg['header'];
            $descr = $txtimg['description']; 
            $img = $txtimg['image']['sizes']['imgtxt-section-image'];
            $side =$txtimg['side'];    

            ?>

                <?php if ($side == 'right'): ?>    

                    <h2> <?php echo $header ?></h2>
                    <p> <?php echo $descr ?> </p>
                    <img src="<?php echo $img ?>" alt="">

                <?php else : ?>

                    <img src="<?php echo $img ?>" alt="">
                    <h2> <?php echo $header ?></h2>
                    <p> <?php echo $descr ?> </p>

                    <?php endif; ?>    

            <?php endforeach; ?>

        </div>
    
    </div>

</div>