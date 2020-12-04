<?php get_header(); ?>

    <?php include( TEMPLATEPATH . "/inc/introducao.php"); ?>

      <div style="margin-top: 10px;">
	    <?php 
            query_posts(array( 
                'post_type' => 'produtos',
                'showposts' => -1
            ) );  
        ?>
        <?php while (have_posts()) : the_post(); ?>
            <!-- TUDO QUE COLOCAR AQUI VAI REPETIR  -->
            <h2 style="text-align: center;"><a href="<?php the_permalink() ?>">

 <section class="container produto_item animar-interno">
 <a href="<?php the_permalink(); ?>">
			<div class="grid-11">
				<img src="<?php the_field('foto_produto1'); ?>" alt="<?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto'); ?>" alt="<?php the_title(); ?>"></div>
            </a>
            </section>
        <?php endwhile;?>
        <?php wp_reset_query(); wp_reset_postdata(); ?>
        <section class="orcamento">
        <div class="container">
            <h2 class="subtitulo">Orçamento</h2>
            <form action="<?php echo get_template_directory_uri(); ?>"enviar.php" method="post" name="form" class="formphp form grid-8">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="text">
                <label for="telefone">Telefone</label>
                <input id="telefone" name="telefone" type="text">

                <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                <input type="text" class="nao-aparece" name="leaveblank">
                <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                <input type="text" class="nao-aparece" name="dontchange" value="http://" >

                <label for="mensagem">Especificações</label>
                <textarea name="mensagem" id="mensagem"></textarea>

                <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
            </form>

            <?php 
        $contato = get_page_by_title('contato');
        $produtos = get_page_by_title('produtos'); 
        ?>

            <div class="orcamento_dados grid-8">
					<h3>Dados</h3>
       
					<span><?php the_field('fone', $contato); ?></span>
					<span><?php the_field('mail', $contato); ?></span>
					<h3>Monte a sua Bikcraft</h3>
					<p>Escolha as especificações:</p>
					<?php the_field('item_orcamento', $produtos); ?>
				</div>
         </div>
           </section>
            
<?php get_footer(); ?>