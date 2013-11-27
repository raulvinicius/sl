<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <?php $tUrl = get_bloginfo("template_url"); ?>

    <?php require( "frontend/category.php" ) ?>

<?php else : ?>

	<?php get_header() ?>

		<?php 

		var_dump( get_query_var('p') );


			$cat = get_category_by_slug( get_query_var('category_name') );
			$args = array( 'post_type' => 'historia', 'category_name' => $cat->slug );
			$loop = new WP_Query( $args );
			$loop->the_post();

			$nome = get_the_title();
			$idade =  get_field('idade', $post->ID);
			$manchete =  get_field('manchete', $post->ID);
			$video =  get_field('video', $post->ID);
			$video = split('embed/', $video);
			$video = $video[1];
			$video = split( '&quot', $video );
			$video = $video[0];

			$tecnologia =  get_field('tecnologia', $post->ID);
			$habitosCostumes =  get_field('habitos_e_costumes', $post->ID);
			$situacaoUrbana =  get_field('situacao_urbana', $post->ID);
			$estetico =  get_field('estetico', $post->ID);
			$transcricao =  get_field('transcricao', $post->ID);

			wp_reset_postdata();

			 echo "

                <script type=\"text/javascript\">

                    idVideo = '" . $video . "';

                </script>

            ";

		?>

		<script>

		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

 		var player;
		function onYouTubeIframeAPIReady() 
		{

		    player = new YT.Player('player', {
				width: '560',
				height: '315',
				playerVars : {
					rel: '0'
				},
				videoId: idVideo
		    });

		    $('#menu-pontos .btn-ponto').css({
		    	'opacity': '1',
		    	'filter': 'alpha(opacity=100)'
		    });

		}

		function seek(num)
		{
			player.seekTo(num, true);
		}

		</script>

		<div id="galeria-historias" class="container">

			<header>

				<div class="row-fluid">

					<div class="span8">

						<div class="row-fluid">
							<h1 class="logo span12">Sentidos da Luz</h1>
						</div>

						<div class="row-fluid">
							<div class="wrap-voltar span12">
								<span><?php echo $cat->name; ?></span> > <a href="<?php bloginfo('url') ?>">Voltar para o mapa</a>
							</div>
						</div>

						<div class="row-fluid">

							<nav class="menu-galerias span12">

								<ul>

									<li><a>Galeria de Histórias</a></li>
									<li><a href="<?php bloginfo('url') ?>/galeria-dualista/<?php echo get_query_var('category_name') ?>">Galeria Dualista</a></li>

								</ul>

							</nav>

						</div>

					</div>

					<div id="coluna-vazia" class="span4">

						<br>

					</div>

				</div>

			</header>

			<div class="row-fluid">

				<div class="span8">

					<div class="row-fluid">

						<div id="nome-idade" class="span12">

							<h2><?php echo $nome ?></h2>
							<span><?php echo $idade ?> anos</span>

						</div>

					</div>

					<div class="row-fluid">

						<nav id="menu-pontos" class="span12">

							<ul>
								<?php if ( $tecnologia != "0" && $tecnologia != "" && $tecnologia != NULL ) :?>
									<li><a class="btn-ponto" onclick="javascript:seek(<?php echo $tecnologia ?>);">Tecnologia</a></li>
								<?php endif; ?>
								
								<?php if ( $habitosCostumes != "0" && $habitosCostumes != "" && $habitosCostumes != NULL ) :?>
									<li><a class="btn-ponto" onclick="javascript:seek(<?php echo $habitosCostumes ?>);">Hábitos e Costumes</a></li>
								<?php endif; ?>
								
								<?php if ( $situacaoUrbana != "0" && $situacaoUrbana != "" && $situacaoUrbana != NULL ) :?>
									<li><a class="btn-ponto" onclick="javascript:seek(<?php echo $situacaoUrbana ?>);">Situação Urbana</a></li>
								<?php endif; ?>
								
								<?php if ( $estetico != "0" && $estetico != "" && $estetico != NULL ) :?>
									<li><a class="btn-ponto" onclick="javascript:seek(<?php echo $estetico ?>);">Estética</a></li>
								<?php endif; ?>
							</ul>

						</nav>

					</div>

					<div class="row-fluid">

						<div id="wrap-video" class="span12">

							<!-- div substituida pelo iframe do youtube -->
							<div id="player"></div>

						</div>


					</div>

					<div class="row-fluid">

						<div id="wrap-texto" class="span12">

							<h2><?php echo $manchete ?></h2>

							<?php echo $transcricao ?>

						</div>

					</div>

				</div>

				<div id="outras-historias" class="span4">

					<div class="row-fluid">

						<h2 class="span12">Outras Histórias</h2>

					</div>

					<div class="row-fluid">

						<div class="span12">

							<ul>

								<?php 

									while ( $loop->have_posts() ) : $loop->the_post();

									?>

									<li>
										<a href="<?php echo get_permalink( $post->ID ) ?>">
											<article class="row-fluid">
												<q class="span10">“<?php echo get_field('manchete', $post->ID) ?>”</q>
												<div class="span2">
													<img class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/sentidosdaluz-seta-manchete.png">
												</div>
											</article>
										</a>
									</li>

									<?php 

									endwhile;

								?>
							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	<?php get_footer() ?>
<?php endif; ?>