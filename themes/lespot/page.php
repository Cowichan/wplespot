<?php get_header();
?>

<header id="header">
  <div class="intro" style="background-image: linear-gradient( -225deg, rgba(0, 101, 168, 0.6) 0%, rgba(0, 36, 61, 0.6) 50% ), url(<?php echo get_theme_file_uri('images/surf_pizza_logor.jpg') ?>);">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><?php the_title(); ?></h1>
            <p>L'histoire de la pizzeria le Spot</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container container--narrow page-section">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
      
      <?php }

      get_footer();

  ?>
</div>
