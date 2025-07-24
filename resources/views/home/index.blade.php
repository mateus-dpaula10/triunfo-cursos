<?php 
	$time = time(); 
	//$link =  http_build_url();
	//echo $_SERVER['SERVER_NAME'];
	//echo $link;

	//$SITE_URL = $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);
	
	//echo '<br>'. 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
	//echo '<br>'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

	//$domain = $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
	$domain = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$domain = preg_replace('/index.php.*/', '', $domain);
	$domain = strtolower($domain);
	if (!empty($_SERVER['HTTPS'])) {
		$SITE_URL = 'https://' . $domain .'/';;
	} else {
		$SITE_URL = 'http://' . $domain .'/';;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Triunfo Cursos</title>

	<meta name="theme-color" content="#E75713" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="author" content="Misterlab - (11) 94891-9736 - marcio.misterlab@gmail.com" />

	<meta name="description" content="Triunfo Cursos | A Triunfo está aqui para te preparar para o sucesso. Trabalhamos de forma a facilitar a realização do seu sonho de conclusão do Ensino Fundamental e Médio." />
	<link rel="canonical" href="https://triunfocursos.com.br/"/>  
	<meta http-equiv="cache-control" content="public"/> 
	<meta http-equiv="Pragma" content="public"/>  
	<meta name="language" content="pt-br"/>
	<meta name="owner" content="Triunfo Cursos - Cursos Preparatórios"/>
	<meta name="Audience" content="ALL"/>
	<meta name="rating" content="general"/>
	<meta name="GOOGLEBOT" content="index,follow"/>
	<meta name="MSNBot" content="index,follow"/>
	<meta name="InktomiSlurp" content="index,follow"/>
	<meta name="Unknownrobot" content="index,follow"/>
	<meta name="Robots" content="index,follow"/>
	<meta property="og:image" content="https://triunfocursos.com.br/logotipo.png"/>
	<meta name="revisit-after" content="1day"/>

	<!-- SHARE TAGS -->
	<meta property="og:url" content="https://triunfocursos.com.br/" />
	<meta property="og:title" content="Triunfo - Cursos Preparatórios" />
	<meta property="og:description" content="Triunfo Cursos - Cursos Preparatórios | Triunfo Cursos está aqui para te preparar para o sucesso. Trabalhamos..." />
	<meta property="og:image" content="https://triunfocursos.com.br/logotipo.png" />
	<!-- //SHARE TAGS -->

	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	
	<script src="assets/plugins/jQuery-Mask-Plugin/dist/jquery.mask.min.js" type="text/javascript"></script>

	<link type="text/css" rel="stylesheet" href="assets/css/style.css?t=<?= $time ?>">
	<link type="text/css" rel="stylesheet" href="assets/css/responsive.css?t=<?= $time ?>">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!-- Google tag (gtag.js) :: Adicionado em: 2025.05.05 :: 11h55 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-748509881"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'AW-748509881');
	</script>

	<script>
		function gtag_report_conversion(sendTo, url) {
		var callback = function () {
			if (typeof(url) != 'undefined') {
				window.open(url, '_blank');
			}
		};
		gtag('event', 'conversion', {
			'send_to': sendTo,
			'value': 1.0,
			'currency': 'BRL',
			'event_callback': callback
		});
		return false;
		}
	</script>	

	<style>
		.swiper {
			width: 100%;
			height: 100%;
		}
		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 30px !important;
			margin-bottom: 50px !important;
		}
		.swiper-slide .item{
			background-color: white;
			padding: 12px;
			box-shadow: 0px .25rem 1.6rem rgb(36 73 168 / 37%);
			border-radius: .25rem;	
		}
		.swiper-slide img {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.box-text-cnt-form {
			padding: 15px;
			background-color: #ebebeb;
			border-radius: .5rem;
			box-shadow: 0px 0.5rem 1rem rgb(5 5 5 / 75%);
		}
		.item-cf{
			position: relative;
			background-color: white;
			border-radius: 0.75rem;
			margin: 10px 0;	
			padding: 20px;
			padding-left: 80px;
		}
		.item-cf .number{
			position: absolute;
			top: 0;
			left: 14px;
			font-size: 3rem;
			font-weight: 900;
			height: 100%;
			display: flex;
			align-items: center;
		}

		.item-cf-titulo{
			position: relative;
			padding: 25px;
			background-color: white;
			border-top-left-radius: 0.5rem;
			border-bottom-left-radius: 0.5rem;
		}
		.item-cf-titulo:before{
			content: '';
			position: absolute;
			height: 100%;
			border: 2px solid #0775ee;
			right: 0px;
			top: 0;
		}

		.list-items-container{
			padding: 30px;
			border-radius: 0.75rem;
		}
		.list-items-container.list-green{
			background-color: #93f6b8;
		}
		.list-items-container.list-red{
			background-color: #ffcece;
		}
		ul.icon-list-items{
			padding: 0;
			list-style: none;
		}
		ul.icon-list-items li{
			font-size: 1.25rem;
			margin: 4px 0;
		}

		.item-gs{
			position: relative;
			background-color: white;
			/*border-radius: 0.75rem;*/
			margin: 10px 0;	
			padding: 20px;
			height: 100%;
		}
		.item-gs .content{
			position: relative;
			z-index: 99;
		}
		.item-gs:before{
			content: '';
			border: 8px solid #cfcfd1;
			height: calc(100% + 16px);
			width: calc(100% + 16px);
			position: absolute;
			top: -8px;
			left: -8px;
			border-radius: 1.25rem;
			background-color: #dddddd54;
			z-index: 80;
		}

		.security-box{
			margin: 0 auto;
			height: 250px;
			width: 250px;
			border: 1px solid white;
			display: flex;
			text-align: cee;
			align-content: center;
			justify-content: center;
			align-items: center;
			border-radius: 50%;
		}
	</style>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=AW-17055627234"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="app" style="background-image: linear-gradient(to right, #f4f5fb 10%, #ffffff 100%);">
		<header style="background-color:#378298">
			<div class="top-header">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-md-9">
							<h5><b>Atenção: </b>
							Ensino Médio totalmente on line com prova única. Não perca mais oportunidades. Se matrícule hoje mesmo e um ganhe brinde exclusivo.
							</h5>
						</div>
					</div>
				</div>
			</div>
		</header>

		<main>
			<section class="section-default bg-banner" style="position: relative; height: auto; background-image: url('assets/images/fundo-banner.webp');">
				<div class="d-flex justify-content-center bar-top-banner">
					<div>SUPLETIVO APENAS PARA MAIORES DE 18 ANOS.</div>
					<div class="separa">&nbsp;</div>
					<div>PARCELAMOS EM ATÉ 12 VEZES.</div>
				</div>
				<div class="d-flex align-items-center" style="height: 100%; z-index: 39; position: relative;">
					<div class="container">
						<div class="is_mobile">
							<div class="row justify-content-start">
								<div class="col-12 col-md-5 text-center">
									<div class="pb-2" style="display:table; margin: 0 auto;">
										<div class="d-flex">
											<div style="padding: 0 8px;"><a href="." class="o-header_link" aria-label="Logotipo"><img class="lazy entered loaded img-fluid" src="assets/images/logotipo.png"  alt="Triunfo Cursos" title="Triunfo Cursos" data-ll-status="loaded" style="max-height: 90px;"></a></div>
											<div style="padding: 0 8px;"><a href="." class="o-header_link" aria-label="Selo MEC"><img class="lazy entered loaded img-fluid" src="assets/images/selo-mec.webp"  alt="Selo MEC" title="Selo MEC" data-ll-status="loaded" style="max-height: 90px;"></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row justify-content-start">
							<div class="col-8 col-md-5 text-center align-self-center">
								<div class="is_desktop">
									<div class="pb-0 pb-md-4" style="display:table; margin: 0 auto;">
										<div class="d-flex">
											<div style="padding: 0 8px;"><a href="." class="o-header_link" aria-label="Logotipo"><img class="lazy entered loaded img-fluid" src="assets/images/logotipo.png"  alt="Triunfo Cursos" title="Triunfo Cursos" data-ll-status="loaded" style="max-height: 150px;"></a></div>
											<div style="padding: 0 8px;"><a href="." class="o-header_link" aria-label="Selo MEC"><img class="lazy entered loaded img-fluid" src="assets/images/selo-mec.webp"  alt="Selo MEC" title="Selo MEC" data-ll-status="loaded" style="max-height: 150px;"></a></div>
										</div>
									</div>
								</div>
								<div class="m-desc o-hero_desc ">
									<h2 class="o_title_h2"><span style="color:#1FED77">Avance na sua vida</span> concluindo o ensino médio, de forma rápida e no conforto de sua casa!</h2>
									<div class="pt-4">
										<a href="{{ route('redirect.whatsapp') }}" class="btn btn-primary" onclick="return gtag_report_conversion('AW-748509881/hOmhCJX4h9QaELm19eQC', this.href);">FALE CONOSCO AGORA</a>
										<!-- <a href="https://wa.me/5511916069198?text=Olá,%20vim%20através%20do%20site%20e%20gostaria%20de%20maiores%20informações%20sobre%20o%20supletivo." aria-label="FALE CONOSCO" target="_blank" class="btn btn-primary btn-ligacao float_btn_wp">FALE CONOSCO AGORA</a> -->
									</div>
								</div>
							</div>
							<div class="col-4 col-md-3 text-center align-self-end">
								<img src="assets/images/foto-matricula-transparente.png" class="img-fluid" />
							</div>
							<div class="col-12 col-md-4 text-center ">


								<div class="pb-4 pt-3" style="position: relative;">

									<div class="box-video-header" style="height: 100%;">
										<video id="videoInicial" controls style="width:85%; display: block;" autoplay>
											<source src="assets/videos/saiba-mais-otimizado.mp4" type="video/mp4">
										</video>
									</div>

									<div class="pt-3">
										<a href="{{ route('redirect.whatsapp') }}" class="btn btn-primary btn-ligacao float_btn_wp" onclick="return gtag_report_conversion('AW-748509881/hOmhCJX4h9QaELm19eQC', this.href);">SAIBA MAIS</a>
										<!-- <a href="https://wa.me/5511916069198?text=Olá,%20vim%20através%20do%20site%20e%20gostaria%20de%20maiores%20informações%20sobre%20o%20supletivo." aria-label="FALE CONOSCO" target="_blank" class="btn btn-primary btn-ligacao float_btn_wp">SAIBA MAIS</a> -->
									</div>
								</div>



								<div class="box-text-cnt-form" style="position: relative; padding: 30px; width: 100%; margin: 30px auto; display:none !important;">
									<div class="box-loading" v-bind:class="{active: loading.active}">
										<div class="icon-loading">
											<div class="spinner-3"></div>
										</div>
									</div>

									<div class="box-overlay" v-bind:class="{active: overlay.active}">
										<div class="text-content">
											<div class="box-msg-result" v-html="messageResult">Informações enviadas com sucesso!</div>	
										</div>
									</div>

									<div class="box-contact-infos" style="margin-bottom: 35px;">
										<h5>Ainda temos algumas vagas disponíveis...</h5>
										<h2 style="font-weight: bold; line-height: 1;">Faça sua <br>pré-matrícula</h2>
										<h5>Um consultor educacional entrará em contato em breve para finalizar sua inscrição ou tirar suas dúvidas!</h5>
									</div>

									<!-- <transition name="fade"> -->
									<!-- <div v-if="messageResult.length"> -->
									<!-- 	<div class="row"> -->
									<!-- 		<div class="col-12"> -->
									<!-- 			<div class="box-msg-result" v-html="messageResult">Informações enviadas com sucesso!</div>	 -->
									<!-- 		</div> -->
									<!-- 	</div> -->
									<!-- </div> -->
									<!-- </transition> -->
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Estude no seu tempo -->
			<section class="section-default " style="position: relative; padding-top: 80px; padding-bottom: 120px; background-color: #e0e0e0;">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-12 col-md-12">
							<div class="selo-verificado">
								<div id="ra-verified-seal"><script type="text/javascript" id="ra-embed-verified-seal" src="https://s3.amazonaws.com/raichu-beta/ra-verified/bundle.js" data-id="MTQxNDY3MDpzdXBsZXRpdm8tdHJpdW5mbw==" data-target="ra-verified-seal" data-model="1"></script></div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-12 col-md-8">
							<div class="text-center">
								<h2 class="o_title fontAleo">Estude no seu tempo</h2>
								<h4>Obtenha mais oportunidade no mercado de trabalho finalizando o ensino médio.</h4>
							</div>
						</div>
					</div>

					<div class="section-servicos">
						<div class="row justify-content-center">
							<div class="col-12 col-md-3">

								<div class="text-center box-servicos-item top">
									<div class="services__decor"></div>
									<div class="services__icon">
										<img src="assets/images/24-hours.png" alt="" loading="lazy">
									</div>
									<div class="services__content">
										<h3 class="o_title_h3">Não tem tempo para estudar?</h3>
										<div class="text-justify">
											<p>Através da plataforma online, você poderá estudar de acordo com a sua disponibilidade de tempo, não importa onde você esteja, basta ter acesso a internet para estudar.</p>
										</div>
									</div>
								</div>

							</div>
							<div class="col-12 col-md-3">

								<div class="text-center box-servicos-item top">
									<div class="services__decor"></div>
									<div class="services__icon">
										<img src="assets/images/customer-service.png" alt="" loading="lazy">
									</div>
									<div class="services__content">
										<h3 class="o_title_h3">Suporte sempre que precisar</h3>
										<div class="text-justify">
											<p>No EAD, você tem todo suporte on-line, para estudar no conforto e segurança da sua casa, em uma plataforma completa, com conteúdo, exercícios, apostilas, simulados e provas.</p>
										</div>
									</div>
								</div>

							</div>
							<div class="col-12 col-md-3">

								<div class="text-center box-servicos-item top">
									<div class="services__decor"></div>
									<div class="services__icon">
										<img src="assets/images/working-woman.png" alt="" loading="lazy">
									</div>
									<div class="services__content">
										<h3 class="o_title_h3">No conforto da sua casa</h3>
										<div class="text-justify">
											<p>Dê hoje mesmo um passo à frente no seu futuro! Conosco você irá estudar no conforto da sua casa. Realizar as etapas exigidas pela escola e obter a sua tão sonhada conclusão do ensino médio.</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</section>

			<!-- Conclua seus estudos, sem sair de casa -->
			<section class="section-default section-conclua-estudos" style="position: relative; z-index:72; background-color: #0775ee; padding: 40px 0; padding-bottom: 0; /*background-image:url('assets/images/home-one-banner.3885e64011ecb9920f13.jpg')*/">
				<div class="container">

					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-md-10 text-center">
							<h2 class="o_title" style="color:#FFFFFF !important;">Conclua seus estudos sem sair de casa</h2>
						</div>
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-9 col-md-5 align-self-end order-2 order-md-1">
							<div><img src="assets/images/fernanda-img.webp" alt="" loading="lazy" class="img-fluid"></div>
						</div>
						<div class="col-12 col-md-6 align-self-center order-1 order-md-2">
							<div class="text-start pb-4">
								<div class="text-center pb-2">
									<h5 style="color:#FFFFFF !important;">Através do SUPLETIVO (EJA) ONLINE e <br>realize os seus sonhos e objetivos!</h5>
								</div>
								<div>
									<div class="box-inner-video white">
										<div class="capa-video" style="background-image: url('');">
											<a href="javascript:;" class="mfp-video play-now play-video" aria-label="Play Video" data-video="capa">
												<i class="icon fa fa-play"></i>
												<span class="ripple"></span>
											</a>
										</div>
										<video id="capa" class="video-play box-video-principal" controls="" controlslist="nodownload">
											<!-- <source src="assets/videos/icemellow-historia.webm" type="video/webm;"> -->
											<source src="assets/videos/video-otimizado.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										</video>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

			<!-- Garantia de satisfação -->
			<section class="section-default o-white" style="position: relative; padding: 60px 0; background-color: #ffffff; z-index:70;">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-12">
							<div class="text-center">
								<h2 style="font-weight: bold;">Garantia de satisfação</h2>

								<div class="text-center icon-gf">
									<img src="assets/images/badge.png" class="img-fluid" style="max-width: 200px;" />
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center align-items-center mb-0 mb-md-5 mt-3">
						<div class="col-12">

							<div class="row justify-content-center">
								<div class="col-12 col-md-4">
									<div class="item-gs">
										<div class="content">
											Estamos no mercado a quase 5 anos e já formamos mais de 2 mil alunos. Temos endereço fixo, mas você também pode fazer sua matricula totalmente on line. Fale com um de nossos consultores.
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="item-gs">
										<div class="content">
											A conclusão é 100% on-line justamente para você estudar de onde estiver e quando quiser, sem ter que gastar dinheiro e tempo com locomoção e ficar horas dentro de uma sala de aula. A lei 9394/96 permite que você conclua seus estudos através de uma avalição única. Mesmo que você não tenha terminado o ensino fundamental.
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="item-gs">
										<div class="content">
											Após a conclusão, você receberá a sua documentação em um prazo extremamente curto, possibilitando que você avance na vida! Esses documentos são: Histórico escolar, Certificado e Publicação em Diário Oficial. Esses documentos são emitidos por escola autoriza, totalmente reconhecido pelo MEC.
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-12">
							<div class="pt-4 text-center">
								<a href="{{ route('redirect.whatsapp') }}" class="btn btn-primary btn-ligacao float_btn_wp" onclick="return gtag_report_conversion('AW-748509881/hOmhCJX4h9QaELm19eQC', this.href);">FALE CONOSCO AGORA</a>
								<!-- <a href="https://wa.me/5511916069198?text=Olá,%20vim%20através%20do%20site%20e%20gostaria%20de%20maiores%20informações%20sobre%20o%20supletivo." aria-label="FALE CONOSCO" target="_blank" class="btn btn-primary btn-ligacao float_btn_wp">FALE CONOSCO AGORA</a> -->
							</div>
						</div>
					</div>

				</div>
			</section>

			<!-- Plataforma segura --> 
			<section class="section-default o-white" style="position: relative; padding: 60px 0; background-color: #0775ee; z-index:70; background-image: url('assets/images/fundo-security2.webp'); background-size:cover;">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-12">
							<div class="text-center">
								<h2 style="font-weight: bold; color:#FFFFFF;">Plataforma segura</h2>
								<div class="security-box">
									<img src="assets/images/cyber-security.png" class="img-fluid" style="max-width: 60%;" />
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center align-items-center mt-3">
						<div class="col-12">

							<div class="row justify-content-center">
								<div class="col-12 col-md-6">
									<div class="text-center" style="color:#FFFFFF;">
										<h5>Todo processo pode ser feito on-line. Atendimento, matrícula, pagamento e avaliação.</h5>
										<h5>Após a avaliação, em até 60 dias você recebe seu Histórico reconhecido em sua casa. Com esse documento em mãos poderá fazer uma faculdade, prestar um concurso público, fazer um curso técnico e arrumar um emprego. Não perca mais tempo e lute pelo seu futuro.</h5>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</section>

			<!-- Como funciona o supletivo EAD -->
			<section class="section-default o-white" style="position: relative; padding: 60px 0; background-color: #e1e1e1;">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-md-5 text-center text-md-end">

							<div class="item-cf-titulo text-center text-md-end">
								<h2 style="font-weight: bold;">Como funciona o <br>supletivo EAD</h2>
								<h5>A maneira mais fácil e rápida <br>de você conseguir seu certificado!</h5>
							</div>

						</div>
						<div class="col-12 col-md-7">

							<div class="row justify-content-center">
								<div class="col-12">
									<div class="item-cf">
										<div class="number">1.</div>
										Comece seus estudos ao realizar a matrícula. Você receberá o acesso a plataforma, onde terá acesso ao conteúdo e avaliações on-line.
									</div>
								</div>
								<div class="col-12">
									<div class="item-cf">
										<div class="number">2.</div>
										Em nossa plataforma o aluno terá́ acesso às apostilas, exercícios, simulados e as avaliações. Podendo assim estudar e realizar todas as etapas no conforto da sua casa. E o mais importante, o material didático é gratuito.
									</div>
								</div>
								<div class="col-12">
									<div class="item-cf">
										<div class="number">3.</div>
										"E a prova?" O aluno realiza sua prova totalmente online, através da plataforma da Escola. A pandemia tirou muitas vidas e prejudicou muitas pessoas. Porém ela abriu novas oportunidades, como a certificação on-line. Será uma prova de 40 questões de alternativas que você precisa acertar 20.
									</div>
								</div>
								<div class="col-12">
									<div class="item-cf">
										<div class="number">4.</div>
										"E como eu me formo?" Após a realização da prova, na hora saberá o resultado. A documentação de conclusão que é composta por 3 Documentos:  
										- Histórico 
										- Certificado 
										– Publicação em Diário Oficial.
									</div>
								</div>
								<div class="col-12">
									<div class="item-cf">
										<div class="number">5.</div>
										Tanto o curso EAD, quanto o presencial dão certificado reconhecido pelo MEC e pela Secretaria de Educação e a principal diferença é o método. No presencial o aluno assiste as aulas em um horário determinado, já o EAD, dá a liberdade de estudar onde e quando quiser, realizando todas as etapas no conforto da sua casa. Tornando a sua conclusão mais simples, rápida e prática, aliado a segurança que sua documentação de conclusão é válida em todo Território Nacional.
									</div>
								</div>
							</div>



							<div class="row justify-content-center mb-3 d-none">
								<div class="col-12">
									<div class="pt-4 text-center">
										<a href="https://wa.me/5511916069198?text=Olá,%20vim%20através%20do%20site%20e%20gostaria%20de%20maiores%20informações%20sobre%20o%20supletivo." aria-label="FALE CONOSCO" class="btn btn-primary btn-ligacao float_btn_wp">FALE CONOSCO AGORA</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- Depoimentos -->
			<section class="section-default section-depoimentos" style="padding: 60px 0; background-color: #0772e8;">
				<div class="container" style="">
					<div class="row justify-content-center" style="position: relative; z-index:10;">
						<div class="col-12 col-md-3"></div>
						<div class="col-12 col-md-9">
							<div class="text-center text-md-start" style="margin-left: 30px;">
								<h2 style="font-weight: bold; color:#FFFFFF;">Alguns alunos que já realizaram os seus sonhos...</h2>
								<h5 style="color:#FFFFFF;">Todos eles se formaram através da nossa plataforma on-line!</h5>
							</div>
						</div>
					</div>

					<div class="row justify-content-end mt-2 mb-1 mt-md-5" style="position: relative; z-index:4;">
						<div class="col-12 col-md-9">
							<div style="height: auto;">

								<div class="section-slider content-SliderPrincipal">
									<div class="container-old SliderOverlay">
										<div class="row-old">
											<div class="col-12-old">
												<div class="box-slider sliderPrincipal">
													<div class="item-content">
														<div class="container-fluid-old" style="position: relative;">
															<div class="itemSP">
																<div>
																	<div class="box-inner-video white">
																		<div class="capa-video" style="background-image: url(&quot;assets/videos/icemellow-historia.jpg&quot;);">
																			<a href="javascript:;" class="mfp-video play-now play-video" data-video="capa">
																				<i class="icon fa fa-play"></i>
																				<span class="ripple"></span>
																			</a>
																		</div>
																		<video id="capa" class="video-play box-video-depoimentos" controls="" controlslist="nodownload">
																			<source src="assets/videos/depoimento-01-otimizado.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
																		</video>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item-content">
														<div class="container-fluid-old" style="position: relative;">
															<div class="itemSP">
																<div>
																	<div class="box-inner-video white">
																		<div class="capa-video" style="background-image: url(&quot;assets/videos/icemellow-historia.jpg&quot;);">
																			<a href="javascript:;" class="mfp-video play-now play-video" data-video="capa">
																				<i class="icon fa fa-play"></i>
																				<span class="ripple"></span>
																			</a>
																		</div>
																		<video id="capa" class="video-play box-video-depoimentos" controls="" controlslist="nodownload">
																			<source src="assets/videos/depoimento-02-otimizado.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
																		</video>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item-content">
														<div class="container-fluid-old" style="position: relative;">
															<div class="itemSP">
																<div>
																	<div class="box-inner-video white">
																		<div class="capa-video" style="background-image: url(&quot;assets/videos/icemellow-historia.jpg&quot;);">
																			<a href="javascript:;" class="mfp-video play-now play-video" data-video="capa">
																				<i class="icon fa fa-play"></i>
																				<span class="ripple"></span>
																			</a>
																		</div>
																		<video id="capa" class="video-play box-video-depoimentos" controls="" controlslist="nodownload">
																			<source src="assets/videos/depoimento-03-otimizado.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
																		</video>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="box-slider-nav d-flex justify-content-end">
													<div class="controlNav prev">
														<a href="javascript:;" class="prevCp"><img class="lazy entered loaded img-fluid" src="assets/images/arrow-prev.svg"  alt="Slider Next" title="Slider Next" data-ll-status="loaded" style="max-height: 75px;"></a>
													</div>
													<div class="controlNav next">
														<a href="javascript:;" class="nextCp"><img class="lazy entered loaded img-fluid" src="assets/images/arrow-next.svg"  alt="Slider Next" title="Slider Next" data-ll-status="loaded" style="max-height: 75px;"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--
								<div class="site" style="display:none;">
									<div class="splide" aria-label="Splide Basic HTML Example">
										<div class="border-fixed"></div>
										<div class="splide__track">
											<ul class="splide__list" id="box-carousel-splide">
												<li class="splide__slide" data-convite="convite-01">
													<div class="itemSP">
														<div>
															<h3>Parabéns Ana Carolina</h3>
															<div class="content">
																<p>At in tellus integer feugiat scelerisque varius. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur.</p>
															</div>
															<div>
																<div class="box-inner-video white">
																	<div class="capa-video" style="background-image: url(&quot;assets/videos/icemellow-historia.jpg&quot;);">
																		<a href="javascript:;" class="mfp-video play-now play-video" data-video="capa">
																			<i class="icon fa fa-play"></i>
																			<span class="ripple"></span>
																		</a>
																	</div>
																	<video id="capa" class="video-play box-video-depoimentos" controls="" controlslist="nodownload">
																		<source src="assets/videos/video-otimizado.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
																	</video>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="splide__slide" data-convite="convite-02">
													<div class="itemSP">
														<div>
															<h3>Parabéns Ana Carolina</h3>
															<div class="content">
																<p>At in tellus integer feugiat scelerisque varius. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur.</p>
															</div>
															<div>
																<div class="box-inner-video white">
																	<div class="capa-video" style="background-image: url(&quot;assets/videos/icemellow-historia.jpg&quot;);">
																		<a href="javascript:;" class="mfp-video play-now play-video" data-video="capa">
																			<i class="icon fa fa-play"></i>
																			<span class="ripple"></span>
																		</a>
																	</div>
																	<video id="capa" class="video-play box-video-depoimentos" controls="" controlslist="nodownload">
																		<source src="assets/videos/video-otimizado.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
																	</video>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="splide__slide" data-convite="convite-03">
													<div class="itemSP">
														<div>
															<h3>Parabéns Ana Carolina</h3>
															<div class="content">
																<p>At in tellus integer feugiat scelerisque varius. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur.</p>
															</div>
															<div>
																<div class="box-inner-video white">
																	<div class="capa-video" style="background-image: url(&quot;assets/videos/icemellow-historia.jpg&quot;);">
																		<a href="javascript:;" class="mfp-video play-now play-video" data-video="capa">
																			<i class="icon fa fa-play"></i>
																			<span class="ripple"></span>
																		</a>
																	</div>
																	<video id="capa" class="video-play box-video-depoimentos" controls="" controlslist="nodownload">
																		<source src="assets/videos/video-otimizado.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
																	</video>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li class="splide__slide" data-convite="convite-04">
													<div class="itemSP">
														<div>
															<h3>Parabéns Ana Carolina</h3>
															<div class="content">
																<p>At in tellus integer feugiat scelerisque varius. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur.</p>
															</div>
															<div>
																<div class="box-inner-video white">
																	<div class="capa-video" style="background-image: url(&quot;assets/videos/icemellow-historia.jpg&quot;);">
																		<a href="javascript:;" class="mfp-video play-now play-video" data-video="capa">
																			<i class="icon fa fa-play"></i>
																			<span class="ripple"></span>
																		</a>
																	</div>
																	<video id="capa" class="video-play box-video-depoimentos" controls="" controlslist="nodownload">
																		<source src="assets/videos/video-otimizado.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
																	</video>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="slipe_nav_arrows">
											<div class="splide__arrows">
												<button
												class="splide__arrow splide__arrow--next"
												type="button"
												aria-label="Next slide"
												aria-controls="splide01-track"
												><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button>
												<button
												class="splide__arrow splide__arrow--prev"
												type="button"
												aria-label="Previous slide"
												aria-controls="splide01-track"
												><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button>
											</div>
										</div>
									</div>
								</div>
								-->

							</div>
						</div>
					</div>

					<div class="row justify-content-center mb-3">
						<div class="col-12">
							<div class="pt-4 text-center">
								<a href="{{ route('redirect.whatsapp') }}" class="btn btn-primary btn-ligacao float_btn_wp" onclick="return gtag_report_conversion('AW-748509881/hOmhCJX4h9QaELm19eQC', this.href);">FALE CONOSCO AGORA</a>
								<!-- <a href="https://wa.me/5511916069198?text=Olá,%20vim%20através%20do%20site%20e%20gostaria%20de%20maiores%20informações%20sobre%20o%20supletivo." aria-label="FALE CONOSCO" target="_blank" class="btn btn-primary btn-ligacao float_btn_wp">FALE CONOSCO AGORA</a> -->
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Motivos para terminar os estudos -->
			<section class="section-default o-white" style="position: relative; padding: 60px 0;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 text-center">
							<h2 style="font-weight: bold;">Motivos para terminar os estudos</h2>
						</div>
					</div>

					<div class="row justify-content-center mb-3 mt-4">
						<div class="col-12 col-md-6">

							<div class="list-items-container list-green">
								<ul class="icon-list-items">
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-check"></i></span>
										<span class="elementor-icon-list-text">Mais oportunidades no mercado de trabalho</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-check"></i></span>
										<span class="elementor-icon-list-text">Iniciar a faculdade dos sonhos</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-check"></i></span>
										<span class="elementor-icon-list-text">Iniciar um curso técnico</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-check"></i></span>
										<span class="elementor-icon-list-text">Participar de concursos públicos</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-check"></i></span>
										<span class="elementor-icon-list-text">Realizar o Enem</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-check"></i></span>
										<span class="elementor-icon-list-text">Crescer dentro de empresas e ter um aumento salarial</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-check"></i></span>
										<span class="elementor-icon-list-text">Oportunidade de estudar no exterior</span>
									</li>
								</ul>
							</div>

						</div>
						<div class="col-12 col-md-6">

							<div class="list-items-container list-red">
								<ul class="icon-list-items">
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-backspace"></i></span>
										<span class="elementor-icon-list-text">Perde oportunidade de trabalho</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-backspace"></i></span>
										<span class="elementor-icon-list-text">Não poderá cursar uma faculdade</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-backspace"></i></span>
										<span class="elementor-icon-list-text">Não poderá fazer cursos técnicos</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-backspace"></i></span>
										<span class="elementor-icon-list-text">Não poderá participar de concursos públicos</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-backspace"></i></span>
										<span class="elementor-icon-list-text">Não pode realizar o Enem </span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-backspace"></i></span>
										<span class="elementor-icon-list-text">Dificulta o crescimento pessoal e profissional</span>
									</li>
									<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-icon">
										<i aria-hidden="true" class="fas fa-backspace"></i></span>
										<span class="elementor-icon-list-text">Perde a chance de crescer dentro de empresas</span>
									</li>
								</ul>
							</div>

						</div>
					</div>

					<div class="row justify-content-center mb-3">
						<div class="col-12">
							<div class="pt-4 text-center">
								<a href="{{ route('redirect.whatsapp') }}" class="btn btn-primary btn-ligacao float_btn_wp" onclick="return gtag_report_conversion('AW-748509881/hOmhCJX4h9QaELm19eQC', this.href);">FALE CONOSCO AGORA</a>
								<!-- <a href="https://wa.me/5511916069198?text=Olá,%20vim%20através%20do%20site%20e%20gostaria%20de%20maiores%20informações%20sobre%20o%20supletivo." aria-label="FALE CONOSCO" target="_blank" class="btn btn-primary btn-ligacao float_btn_wp">FALE CONOSCO AGORA</a> -->
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="pb-2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-auto text-center"> 
						<small class="a-diclaimer"><span>©</span> Todos os direitos reservados.</small>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- <a href="https://wa.me/5511916069198?text=Olá,%20vim%20através%20do%20site%20e%20gostaria%20de%20maiores%20informações%20sobre%20o%20supletivo." style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; -->
    <!--   z-index:1000;" target="_blank"> -->
	<!-- 	<i style="margin-top:16px" class="fab fa-whatsapp float_btn_wp"></i> -->
	<!-- </a> -->

	<div class="button-whats" style="position: fixed; right: 25px; bottom: 30px; cursor: pointer; z-index: 98;">
		<a href="{{ route('redirect.whatsapp') }}" onclick="return gtag_report_conversion('AW-748509881/YXcgCOuKrLMZELm19eQC', this.href);"><img src="assets/images/buttonwpp.png" alt="Botão Whatsapp" style="width: 48px;" width="48px" height="48px"></a>
	</div>

	<div class="modal modal-lg" id="lightbox">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content bg-transparent border-0">
				<div class="modal-body p-0 border-0 text-center"></div>
					<div class="controls position-absolute bottom-0 top-0 w-100 h-100 d-flex justify-content-between align-items-center">
						<button class="btn btn-dark control-prev ms-3 bg-dark bg-opacity-50 border-0"><i class="bi-chevron-left fs-4"></i></button><button class="btn btn-dark control-next me-3 bg-dark bg-opacity-50 border-0"><i class="bi-chevron-right fs-4"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
	<!-- <script type="text/javascript" src="assets/plugins/youtube-popup/youtube-popup.jquery.js"></script> -->
	<!-- <link type="text/css" rel="stylesheet" href="assets/plugins/youtube-popup/youtube-popup.css?t=<?= $time ?>"> -->

	<!-- <link rel="stylesheet" href="assets/plugins/splide/css/splide.min.css"> -->
	<!-- <link rel="stylesheet" href="assets/plugins/splide/css/themes/splide-sea-green.min.css"> -->
	<!-- <script src="assets/plugins/splide/js/splide.min.js"></script> -->

	<link rel="stylesheet" href="assets/plugins/tiny-slider/tiny-slider.css?t=1687898155">
	<script defer type="text/javascript" src="assets/plugins/tiny-slider/tiny-slider.js?t=1687898155"></script>

	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.22.0/axios.min.js" integrity="sha512-m2ssMAtdCEYGWXQ8hXVG4Q39uKYtbfaJL5QMTbhl2kc6vYyubrKHhr6aLLXW4ITeXSywQLn1AhsAaqrJl8Acfg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script type="text/javascript" src="assets/js/app_plugins.js?t=<?= $time ?>"></script>

	<style>
		.textP{}
		.textP p{ font-size: .9rem; line-height: 1.3; text-align: justify; }
		.slbWrapOuter {
			overflow-x: hidden !important;
			overflow-y: hidden !important;
		}
		.slbOverlay {
			background-color: #374f8b !important;
			opacity: 0.95 !important;
		}
	</style>

	<script>
		let SITE_URL = '<?php echo($SITE_URL); ?>';

		//var splide = new Splide( '.splide', {
		//	//type	: 'loop',
		//	perPage : 5,
		//	focus   : 'center',
		//	pagination : true,
		//	arrows : true,
		//	breakpoints: {
		//		1024: {
		//			perPage: 3,
		//		},
		//		767: {
		//			perPage: 3,
		//		},
		//		640: {
		//			perPage: 1,
		//		},
		//	},
		//});


		//var splide = new Splide( '.splide', {
		//	//type	: 'loop',
		//	perPage : 3,
		//	focus   : 'center',
		//	pagination : true,
		//	arrows : true,
		//	drag : false, 
		//	classes: {
		//		arrows: 'splide__arrows your-class-arrows',
		//		arrow : 'splide__arrow your-class-arrow',
		//		prev  : 'splide__arrow--prev your-class-prev',
		//		next  : 'splide__arrow--next your-class-next',
		//	},
		//	breakpoints: {
		//		1024: {
		//			perPage: 3,
		//		},
		//		767: {
		//			perPage: 3,
		//		},
		//		640: {
		//			perPage: 1,
		//		},
		//	},
		//});
		//splide.on( 'mounted', function () {
		//	let $itemSP = $('.splide__slide.is-active');
		//	console.log( 'mounted: '+ $itemSP.find('.image').data( 'convite' ) );
		//	$('#conviteSelected').val( $itemSP.find('.image').data( 'convite' ) );
		//});
		//splide.on( 'active', function () {
		//	let $itemSP = $('.splide__slide.is-active');
		//	//console.log( 'mounted: '+ $itemSP.find('.image').data( 'convite' ) );
		//	$('#conviteSelected').val( $itemSP.find('.image').data( 'convite' ) );
		//});
		//splide.on( 'moved', function (newIndex, prevIndex, destIndex) {
		//	//console.log(`newIndex`);
		//	//console.log( 'newIndex: ', newIndex );
		//	//console.log( 'destIndex: ', destIndex );

		//	///$('.splide__slide').get( newIndex ); 
		//	//article.dataset.columns;
		//	
		//	//let $itemSP = $('.splide__slide').get( newIndex ); //.index(newIndex);
		//	//console.log( $('.splide__slide').get(destIndex) );

		//	//let $itemSP = $($('.splide__slide').get(destIndex));
		//	//console.log( $itemSP.data( 'convite' ) );
		//	//console.log( $itemSP.children().html() );

		//	let $itemSP = $('.splide__slide.is-active');
		//	console.log( $itemSP.find('.image').data( 'convite' ) );
		//	$('#conviteSelected').val( $itemSP.find('.image').data( 'convite' ) );
		//});
		//splide.mount();

	$(document).ready(function () {
		if ( $(".sliderPrincipal").length ) {
			let sliderPrincipal = tns({
				'container': '.sliderPrincipal',
				'items': 1,
				//"autoHeight": true,
				'mouseDrag': true,
				//'slideBy': 'page',
				//'autoplay': true, // true
				//'autoplayButton': false,
				'autoplayButtonOutput': false,
				"loop": true,
				'controls': false,
				'nav': false,
				'speed': 800,
				responsive: {
					640: {
						items: 1
					},
					700: {
						items: 3
					},
					900: {
						items: 3
					}
				}
			});
			document.querySelector(".nextCp").onclick = (() => {
				console.log('next');
				sliderPrincipal.goTo("next");
			});
			document.querySelector(".prevCp").onclick = (() => {
				console.log('prev');
				sliderPrincipal.goTo("prev");
			});
		}

		$(document).on('click', '.play-video', function (evt) {
			evt.preventDefault();
			let $this = $(this); 

			$(".video-play").each(function(){
				let $box = $(this).closest(".box-inner-video");
				let $capa = $box.find(".capa-video");
				$capa.show();
				$(this).get(0).pause();
			});

			let $imgCapa = $this.closest(".capa-video");
			let $boxInner = $this.closest(".box-inner-video");
			let $video = $boxInner.find('.video-play');
			$imgCapa.hide();
			$video.get(0).play();
		});
	});
	</script>


	<script type="text/javascript" src="assets/vue/utils.js?t=<?= $time ?>"></script>
	<script type="text/javascript" src="assets/vue/home.js?t=<?= $time ?>"></script>

	<style>
		.v-enter-active,
		.v-leave-active {
			transition: opacity 2.5s ease;
		}
		.v-enter-from,
		.v-leave-to {
			opacity: 0;
		}
		.fade-enter-active, .fade-leave-active {
		  transition: opacity 2.5s
		}
		.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
		  opacity: 0
		}
	</style>

</body>
</html>
