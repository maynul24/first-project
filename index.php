<?php
/*
 *This template for displaying header
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    
    <?php wp_footer(); ?>
    <h1>Hello world</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, modi obcaecati facilis nesciunt tempora deserunt, odit sint qui, sunt corrupti perspiciatis tenetur quas consequuntur officiis voluptates nostrum exercitationem molestiae mollitia? </p>
    <div class="slider-container">
  <div class="slider">
    <div class="slide"><img src="image1.jpg" alt="Slide 1"></div>
    <div class="slide"><img src="image2.jpg" alt="Slide 2"></div>
    <div class="slide"><img src="image3.jpg" alt="Slide 3"></div>
    <!-- Add more slides as needed -->
  </div>
</div>
</body>
</html>