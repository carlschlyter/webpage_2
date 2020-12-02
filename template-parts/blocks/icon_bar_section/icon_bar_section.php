<?php 

$icons = get_field('icons');

?>

<div class="container-fluid">

    <div class="row" id="icon-row">

        <div class="col-md-12" id="icon-container">

            <?php foreach($icons as $icon) : 
            
            $img = $icon['icon']['sizes']['icon-image'];

            ?>
                <div class="icon-box">

                    <img src="<?php echo $img; ?>" alt="">

                </div>
             
            <?php endforeach; ?>

        </div>

    </div>

</div>