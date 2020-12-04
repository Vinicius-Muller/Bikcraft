<?php $sobre = get_page_by_title('Sobre'); ?>
<section class="qualidade container">
			<h2 class="subtitulo"><?php the_field('quality_title' , $sobre); ?></h2>
			<img src="<?php the_field('logo_bikcraft', $sobre); ?>" alt="Bikcraft">
			<ul class="qualidade_lista">
			<?php if(have_rows('quality_item', $sobre)): while(have_rows('quality_item', $sobre)) : the_row(); ?>
				<li class="grid-1-3">
					<h3><?php the_sub_field('quality_item_title',$sobre); ?></h3>
					<p><?php the_sub_field('quality_item_description',$sobre); ?></p>
				</li>
				<?php endwhile; else : endif; ?>
			</ul>
			<?php if (!is_page('Sobre')) { ?>
			<div class="call">
				<p><?php the_field('about-call', $sobre); ?></p>
				<a href="Sobre" class="btn btn-preto">Sobre</a>
			</div>
			<?php } ?> 
		</section>