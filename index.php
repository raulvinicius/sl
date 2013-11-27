<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <?php $tUrl = get_bloginfo("template_url"); ?>

    <?php require( "frontend/index.php" ) ?>

<?php else : ?>

	<?php get_header(); ?>        

	<div class="container">

		<div class="row-fluid">

			<h1 class="logo span8 offset2">Sentidos da Luz</h1>

		</div>
		
		<div class="row-fluid">
			
			<div class="span2 line-instrucao offset2">
				<br>
			</div>

			<div id="instrucao" class="span4">Passe o mouse sobre os estados e conheça a história da luz</div>

			<div class="span2 line-instrucao">
				<br>
			</div>

		</div>

		<div class="row-fluid">

			<nav id="menu-principal" class="span8 offset2">

				<ul>

					<li id="ac" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/ac" data-toggle="tooltip" title="<p>AC</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Acre
						</a>
					</li>
					<li id="al" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/al" data-toggle="tooltip" title="<p>AL</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Alagoas
						</a>
					</li>
					<li id="ap" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/ap" data-toggle="tooltip" title="<p>AP</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Amapá
						</a>
					</li>
					<li id="am" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/am" data-toggle="tooltip" title="<p>AM</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Amazonas
						</a>
					</li>
					<li id="ba" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/ba" data-toggle="tooltip" title="<p>BA</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Bahia
						</a>
					</li>
					<li id="ce" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/ce" data-toggle="tooltip" title="<p>CE</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Ceará
						</a>
					</li>
					<li id="df" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/df" data-toggle="tooltip" title="<p>DF</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Distrito Federal
						</a>
					</li>
					<li id="es" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/es" data-toggle="tooltip" title="<p>ES</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Espírito Santo
						</a>
					</li>
					<li id="go" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/go" data-toggle="tooltip" title="<p>GO</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Goiás
						</a>
					</li>
					<li id="ma" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/ma" data-toggle="tooltip" title="<p>MA</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Maranhão
						</a>
					</li>
					<li id="mt" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/mt" data-toggle="tooltip" title="<p>MT</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Mato Grosso
						</a>
					</li>
					<li id="ms" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/ms" data-toggle="tooltip" title="<p>MS</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Mato Grosso do Sul
						</a>
					</li>
					<li id="mg" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/mg" data-toggle="tooltip" title="<p>MG</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Minas Gerais
						</a>
					</li>
					<li id="pa" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/pa" data-toggle="tooltip" title="<p>PA</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Pará
						</a>
					</li>
					<li id="pb" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/pb" data-toggle="tooltip" title="<p>PB</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Paraíba
						</a>
					</li>
					<li id="pr" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/pr" data-toggle="tooltip" title="<p>PR</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Paraná
						</a>
					</li>
					<li id="pe" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/pe" data-toggle="tooltip" title="<p>PE</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Pernambuco
						</a>
					</li>
					<li id="pi" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/pi" data-toggle="tooltip" title="<p>PI</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Piauí
						</a>
					</li>
					<li id="rj" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/rj" data-toggle="tooltip" title="<p>RJ</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Rio de Janeiro
						</a>
					</li>
					<li id="rn" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/rn" data-toggle="tooltip" title="<p>RN</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Rio Grande do Norte
						</a>
					</li>
					<li id="rs" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/rs" data-toggle="tooltip" title="<p>RS</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Rio Grande do Sul
						</a>
					</li>
					<li id="ro" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/ro" data-toggle="tooltip" title="<p>RO</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Rondônia
						</a>
					</li>
					<li id="rr" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/rr" data-toggle="tooltip" title="<p>RR</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Roraima
						</a>
					</li>
					<li id="sc" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/sc" data-toggle="tooltip" title="<p>SC</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Santa Catarina
						</a>
					</li>
					<li id="sp" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/sp" data-toggle="tooltip" title="<p>SP</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							São Paulo
						</a>
					</li>
					<li id="se" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/se" data-toggle="tooltip" title="<p>SE</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Sergipe
						</a>
					</li>
					<li id="to" class="animado-02-in-out">
						<a href="<?php bloginfo('url') ?>/galeria-de-historias/to" data-toggle="tooltip" title="<p>TO</p><p>60 <span>histórias</span></p><p>16 <span>dualismos</span></p>">
							Tocantins
						</a>
					</li>

				</ul>

			</nav>

		</div>

		<div class="row-fluid">

			<nav id="menu-secundario" class="span8 offset2">

				<ul>

					<li><a href="#">O Projeto</a></li>
					<li><a href="#">Imagem da Cidade</a></li>
					<li><a href="#">Fontes Bibliográficas</a></li>
					<li><a href="#">O Autor</a></li>

				</ul>

			</nav>

		</div>

	</div>

	<?php get_footer(); ?>

<?php endif; ?>