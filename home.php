<?php get_header(); ?>

<section class="intruducao-interna intruducao-blog">
  <div class="container">
  <p>As principais noticias sobre Bicicletas</p>
  </div>
</section>

<div class="container blog-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	 <article class="grid-16 blog-post" style="margin-top: 150px;">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
  </article>

<?php endwhile; ?>

<div class="nav-blog grid-16">
<?php next_posts_link(' <- Posts Antigos '); ?>
<?php previous_posts_link(' -> Posts Novos '); ?>
</div>

<?php  else: endif; ?>
	
</div>

<?php get_footer(); ?>