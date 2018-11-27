<div class="menu-gov">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-2 logo-governo-ms-topo">
				<a href="http://www.ms.gov.br" title="Governo do Estado do MS">
					<img src="admin/imagens/menu/logo-governo-ms-topo.png" class="img-fluid"/>
				</a>
			</div>
			<div class="col-md-6 transparencia">
				<a href="http://www.transparencia.ms.gov.br/" target="_new" title="Portal da Transparência">			
					<img src="admin/imagens/menu/campanhas-intitucionais.jpg" class="img-fluid mx-auto d-block">			
				</a>
			</div>
			<div class="col-md-3 col-sm-9 col-xs-10">
				<div class="midias">
					<ul>
						<li>
							<a href="https://twitter.com/GovernoMS" target="_new">
								<img src="admin/imagens/menu/icone-twitter.png" alt="Twitter" title="Twitter" />
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/GovernodeMatoGrossodoSul" target="_new">
								<img src="admin/imagens/menu/icone-facebook.png" alt="Facebook" title="Facebook" />
							</a>
						</li>
						<li>
							<a href="http://www.instagram.com/governoms" target="_new">
								<img src="admin/imagens/menu/icone-instagram.png" alt="Instagram" title="Instagram" />
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCsx68AuYoA3ogPBBYOURHaA" target="_new">
								<img src="admin/imagens/menu/icone-youtube.png" alt="YouTube" title="YouTube" />
							</a>
						</li>
					</ul>
				</div>
				<div class="links">
					<ul>
						<li>
							<a href="http://www.noticias.ms.gov.br/" target="_new">Notícias</a>
						</li>
						<li>
							<a href="http://www.portaldoservidor.ms.gov.br/" target="_new">Servidor</a>
						</li>
						<li>
							<a href="http://www.portaldatransparencia.ms.gov.br/" target="_new">Transparência</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--menu-gov-->
<div class="contato-escola">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h4 class="numero-contato">
					<span class="ddd">+55 67</span> 
					<?=$instituicao->getTelefone()?> | <?=$instituicao->getEmail()?> 
				</h4>
			</div>
			<div class="col-sm-3">
				<div class="midias midias-escola">
					<ul>
						<li>
							<a href="<?=$instituicao->getFacebook()?>" target="_new" alt="Facebook" title="Facebook">
								<i class="fa fa-facebook icon-midia" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?=$instituicao->getYoutube()?>" target="_new" alt="YouTube" title="YouTube">
								<i class="fa fa-youtube-play icon-midia" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--contato-escola-->
<div class="slogan-escola">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-3 centro-vertical">
				<img src="admin/imagens/<?=$instituicao->getLogoPrincipal()?>" title="<?=$instituicao->getNome()?>" alt="Logo Principal" class="img-fluid mx-auto d-block logo-escola" />
			</div>
			<hgroup class="col-md-8 col-sm-6">
				<h3 class="h1-escola"><?=$instituicao->getNome()?></h3>
				<h6 class="slogan"><?=$instituicao->getSlogan()?></h6>
			</hgroup>
			<div class="col-md-2 col-sm-3 centro-vertical">
				<img src="admin/imagens/<?=$instituicao->getLogoSecundaria()?>" title="<?=$instituicao->getSlogan()?>" alt="Logo da Secundário" class="img-fluid mx-auto d-block logo-escola" />
			</div>
		</div>
	</div>
</div><!--slogan-escola-->
<nav class="navbar navbar-expand-lg navbar-light py-lg-4 menu-escola">
	<div class="container">
		<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.html">
			<?=$instituicao->getSigla()?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="index.php">HOME</a>
				</li>
				<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="institucional.php">INSTITUCIONAL</a>
				</li>
			<?php if ($instituicao->getTemProfissional()):?>
				<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="profissional.php">EDUCAÇÃO PROFISSIONAL</a>
				</li>
			<?php endif;?>
				<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="equipe.php">EQUIPE WBS</a>
				</li>
				<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="noticias.php">NOTÍCIAS</a>
				</li>
				<li class="nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="contato.php">CONTATO</a>
				</li>
			</ul>
		</div>
	</div>
</nav> <!--MenuEscola-->
