<?php $contato = get_page_by_title('Contato'); ?>


<style>
.quebra {
	background: url("<?php the_field('background_footer', $contato); ?>") no-repeat center;
	background-size: cover;
}
</style>


<div class="quebra">
			<blockquote class="quote-externo container">
				<?php the_field('frase_footer', $contato); ?>
				<cite><?php the_field('autor_footer', $contato); ?></cite>
			</blockquote>
		</div>


<footer>
			<div class="footer">
				<div class="container">

					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>
						<?php  the_field('histori_briefing', $contato); ?>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contato</h3>
						<ul>
							<li><?php the_field('fone', $contato); ?></li>
							<li><?php the_field('mail', $contato); ?></li>
							<li><?php the_field('addres2', $contato); ?></li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Redes Sociais</h3>
						<?php include( TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16"><?php bloginfo('name'); ?> <?php  echo date('y'); ?> - Alguns direitos reservados.</p>
				</div>
			</div>
		</footer>


	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60088262-1', 'auto');
	  ga('send', 'pageview');

	</script>

		<script src="<?php echo get_template_directory_uri() ?>/js/libs/jquery-1.11.2.min.js"></script>

		<script src="<?php echo get_template_directory_uri() ?>/js/libs/modernizr.custom.45655.js"></script>

		<script src="<?php echo get_template_directory_uri() ?>/js/plugins.js"></script>

		<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

  <!-- inicio wordpress footer -->
  <?php wp_footer(); ?>
  <!-- final wordpress footer -->
	</body>
</html>