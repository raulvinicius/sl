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

					<li id="ac" class="animado-02-in-out"><a href="#">Acre</a></li>
					<li id="al" class="animado-02-in-out"><a href="#">Alagoas</a></li>
					<li id="ap" class="animado-02-in-out"><a href="#">Amapá</a></li>
					<li id="am" class="animado-02-in-out"><a href="#">Amazonas</a></li>
					<li id="ba" class="animado-02-in-out"><a href="#">Bahia</a></li>
					<li id="ce" class="animado-02-in-out"><a href="#">Ceará</a></li>
					<li id="df" class="animado-02-in-out"><a href="#">Distrito Federal</a></li>
					<li id="es" class="animado-02-in-out"><a href="#">Espírito Santo</a></li>
					<li id="go" class="animado-02-in-out"><a href="#">Goiás</a></li>
					<li id="ma" class="animado-02-in-out"><a href="#">Maranhão</a></li>
					<li id="mt" class="animado-02-in-out"><a href="#">Mato Grosso</a></li>
					<li id="ms" class="animado-02-in-out"><a href="#">Mato Grosso do Sul</a></li>
					<li id="mg" class="animado-02-in-out"><a href="#">Minas Gerais</a></li>
					<li id="pa" class="animado-02-in-out"><a href="#">Pará</a></li>
					<li id="pb" class="animado-02-in-out"><a href="#">Paraíba</a></li>
					<li id="pr" class="animado-02-in-out"><a href="#">Paraná</a></li>
					<li id="pe" class="animado-02-in-out"><a href="#">Pernambuco</a></li>
					<li id="pi" class="animado-02-in-out"><a href="#">Piauí</a></li>
					<li id="rj" class="animado-02-in-out"><a href="#">Rio de Janeiro</a></li>
					<li id="rn" class="animado-02-in-out"><a href="#">Rio Grande do Norte</a></li>
					<li id="rs" class="animado-02-in-out"><a href="#">Rio Grande do Sul</a></li>
					<li id="ro" class="animado-02-in-out"><a href="#">Rondônia</a></li>
					<li id="rr" class="animado-02-in-out"><a href="#">Roraima</a></li>
					<li id="sc" class="animado-02-in-out"><a href="#">Santa Catarina</a></li>
					<li id="sp" class="animado-02-in-out"><a href="#">São Paulo</a></li>
					<li id="se" class="animado-02-in-out"><a href="#">Sergipe</a></li>
					<li id="to" class="animado-02-in-out"><a href="#">Tocantins</a></li>

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