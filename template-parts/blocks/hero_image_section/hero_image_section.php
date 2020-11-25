
<?php 

$image = get_field('hero_image')['sizes']['hero-image-max'];
$header = get_field('welcome_header');
$text_1 = get_field('welcome_text_1');
$text_2 = get_field('welcome_text_2');

?>

<div class="row">

    <div class="col-12">

        <img src="<?php echo $image; ?>" alt="Hero Image" class="img-fluid">

        <h1> <?php echo $header; ?> </h1>

        <p> <?php echo $text_1; ?> </p>

        <p> <?php echo $text_2; ?> </p>

    </div>

</div>



