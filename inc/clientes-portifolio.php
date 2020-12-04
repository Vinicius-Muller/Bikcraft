<?php $portfolio = 35; ?>


<?php if( get_field('portfolio_item', $portfolio) ): ?>
	<?php while( the_repeater_field('portfolio_item', 35) ): ?>
		<ul class="portfolio_lista rslides_portfolio">
			<li>
			  <div class="grid-8"><img src="<?php the_sub_field('port_img_1', $portfolio); ?> " alt="<?php the_sub_field('port_img_description_1', $portfolio); ?> "></div>
			  <div class="grid-8"><img src="<?php the_sub_field('port_img_2', $portfolio); ?> " alt="<?php the_sub_field('port_img_description_2', $portfolio); ?> "></div>
			  <div class="grid-16"><img src="<?php the_sub_field('port_img_3', $portfolio); ?> " alt="<?php the_sub_field('port_img_description_3', $portfolio); ?> "></div>
			</li>
		</ul>
	<?php endwhile; ?>
<?php endif;  ?>

<?php if(!is_page('portifolio')) { ?>
<div class="call">
<p><?php the_field('port_call', $portfolio) ?></p>
<a href="Portfolio" class="btn">Portfólio</a>
</div>
<?php } ?>