
<?php 

$image = get_field('hero_image')['sizes']['hero-image-max'];
$header = get_field('welcome_header');
$text_1 = get_field('welcome_text_1');
$text_2 = get_field('welcome_text_2');

?>

<div id="hero-container">

    <div class="row" id="hero-sub-container">

        <div class="col-md-12" id="hero-sub-container-img">

            <img src="<?php echo $image; ?>" alt="Hero Image" class="img-fluid">

        </div>
        
        <div class="col-md-12" id="welcome-message">

            <div>
                <h1> <?php echo $header; ?> </h1>
            </div>

            <div id="welcome-text-message">

                <div class="col-md-3 text-box">
                    <p> <?php echo $text_1; ?> </p>
                </div>

                <div class="col-md-3 text-box">
                    <p> <?php echo $text_2; ?> </p>
                </div>

            </div>

        </div>

    </div>

</div>




