<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <?php $tUrl = get_bloginfo("template_url"); ?>

    <?php require( "frontend/category.php" ) ?>

<?php else : ?>

	<?php get_header() ?>

		<div id="galeria-historias" class="container">

			<header>

				<div class="row-fluid">

					<div class="span8">

						<div class="row-fluid">
							<h1 class="logo span12">Sentidos da Luz</h1>  
						</div>

						<div class="row-fluid">
							<div class="wrap-voltar span12">
								<span><?php echo single_cat_title( '', false ); ?></span> > <a href="<?php bloginfo('url') ?>">Voltar para o mapa</a>
							</div>
						</div>

						<div class="row-fluid">

							<nav class="menu-galerias span12">

								<ul>

									<li><a>Galeria de Histórias</a></li>
									<li><a href="<?php bloginfo('url') ?>/galeria-dualista">Galeria Dualista</a></li>

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

							<h2>Maria dos Santos</h2>
							<span>94 anos</span>

						</div>

					</div>

					<div class="row-fluid">

						<nav id="menu-pontos" class="span12">

							<ul>
								<li><a href="#">Tópico 01</a></li>
								<li><a href="#">Tópico 02</a></li>
								<li><a href="#">Tópico 03</a></li>
								<li><a href="#">Tópico 04</a></li>
							</ul>

						</nav>

					</div>

					<div class="row-fluid">

						<div id="wrap-video" class="span12">

							<iframe width="560" height="315" src="//www.youtube.com/embed/-ytJhzoCTMo" frameborder="0" allowfullscreen></iframe>

						</div>

					</div>

					<div class="row-fluid">

						<div id="wrap-texto" class="span12">

							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

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
								<li>
									<a href="#">
										<article class="row-fluid">
											<q class="span10">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit.”</q>
											<div class="span2">
												<img class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/sentidosdaluz-seta-manchete.png">
											</div>
										</article>
									</a>
								</li>
								<li>
									<a href="#">
										<article class="row-fluid">
											<q class="span10">“Aliquam tincidunt mauris eu risus.”</q>
											<div class="span2">
												<img class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/sentidosdaluz-seta-manchete.png">
											</div>
										</article>
									</a>
								</li>
								<li>
									<a href="#">
										<article class="row-fluid">
											<q class="span10">“Fusce lobortis lorem at ipsum semper sagittis.”</q>
											<div class="span2">
												<img class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/sentidosdaluz-seta-manchete.png">
											</div>
										</article>
									</a>
								</li>
								<li>
									<a href="#">
										<article class="row-fluid">
											<q class="span10">“Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in”</q>
											<div class="span2">
												<img class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/sentidosdaluz-seta-manchete.png">
											</div>
										</article>
									</a>
								</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	<?php get_footer() ?>
<?php endif; ?>