<?php get_header(); ?>

<!-- Header -->
<header id="header">
  <div class="intro" style="background-image: linear-gradient( -225deg, rgba(0, 101, 168, 0.6) 0%, rgba(0, 36, 61, 0.6) 50% ), url(<?php echo get_theme_file_uri('images/gs.jpg') ?>);">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>L'actu de la Pizzeria le Spot</h1>
            <p>toutes l'actualité de la pizzeria le Spot à Guéthary !</p>
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
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="metabox">
        <!-- <p>Posted by Co in News</p> -->
        <p>Ecrit par <?php the_author_posts_link(  ); ?> le <?php the_time('n/j/y'); ?> dans <?php echo get_the_category_list(', '); ?></p>

      </div>
      <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Lire la suite &raquo</a></p>
      </div>
    </div>
  <?php }
  echo paginate_links();
  ?>
</div>

<?php get_footer(); ?>
