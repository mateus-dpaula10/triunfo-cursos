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
	<title>EJA</title>

	<meta name="theme-color" content="#100F25" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Misterlab - (11) 94891-9736 - marcio.misterlab@gmail.com" />

	<meta name="description" content="Triunfo Cursos | A Triunfo está aqui para te preparar para o sucesso. Trabalhamos de forma a facilitar a realização do seu sonho de conclusão do Ensino Fundamental e Médio." />
	<link rel="canonical" href="https://triunfocursos.com.br/eja/"/>  
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
	<meta property="og:url" content="https://triunfocursos.com.br/eja/" />
	<meta property="og:title" content="Triunfo - Cursos Preparatórios" />
	<meta property="og:description" content="Triunfo Cursos - Cursos Preparatórios | Triunfo Cursos está aqui para te preparar para o sucesso. Trabalhamos..." />
	<meta property="og:image" content="https://triunfocursos.com.br/logotipo.png" />
	<!-- //SHARE TAGS -->

	<link rel="shortcut icon" href="assets-eja/images/favicon.ico">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<link defer type="text/css" rel="stylesheet" href="assets-eja/css/style.css?t=<?= $time ?>">
	<link defer type="text/css" rel="stylesheet" href="assets-eja/css/responsive.css?t=<?= $time ?>">
	<link defer type="text/css" rel="stylesheet" href="assets-eja/css/animation.css?t=<?= $time ?>">

	<!-- Google tag (gtag.js) :: Adicionado em: 2025.05.05 :: 11h55 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17055627234"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-17055627234');
	</script>

	<script>
	function gtag_report_conversion(url) {
	  var callback = function () {
		if (typeof(url) != 'undefined') {
		  window.location = url;
		}
	  };
	  gtag('event', 'conversion', {
		  'send_to': 'AW-17055627234/PaAgCMqxpMIaEOLv4MQ_',
		  'value': 1.0,
		  'currency': 'BRL',
		  'event_callback': callback
	  });
	  return false;
	}
	</script>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=AW-17055627234"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="app" style="background-color: #FFFFFF; overflow:hidden;">
		<main>

			<!-- EJA -->
			<section class="section-default heightAutoSM bg-img" style="position: relative; background-color: #000000;">
				<div class="container heightAutoSM" style="position: relative; ">
					<div class="row justify-content-between align-items-center pt-3 pb-3">
						<div class="col-12 col-md-3">
							<h1 class="color-white">EJA</h1>
						</div>
						<div class="col-12 col-md-auto">
							<div class="d-none d-lg-none d-xl-block">
								<div class="d-flex mrMenu">
									<div><a href="#VANTAGENS">Vantagens</a></div>
									<div><a href="#DUVIDAS">Dúvidas</a></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3">
							<div class="d-none d-lg-none d-xl-block">
								<div class="d-grid">
									<a href="{{ route('redirect.whatsapp') }}" target="_blank" class="btn btn-primary" onclick="return gtag_report_conversion('{{ route('redirect.whatsapp') }}');">Quero Começar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Termine seus estudos de forma Simples e Rápida -->
			<section class="section-default heightAutoSM pt-5 pt-md-0" style="position: relative; background-color: #FFFFFF;">
				<div class="container heightAutoSM" style="position: relative;">
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-md-6">
							<div class="tag-online mb-2 mt-3">EJA ONLINE</div>
							<h2>Termine seus estudos de forma <strong>Simples e Rápida</strong></h2>
							<div class="tag-distancia mb-3 mt-3">À Distância</div>
							<p>Não Deixe a Falta de Conclusão Educacional Frear Seu Progresso: Descubra Como Encurtar o Caminho Para o Sucesso com Nosso Método Simples e Rápido de Concluir Seus Estudos</p>

							<div class="row justify-content-center align-items-center">
								<div class="col-11 col-md-12">
									<div class="d-grid">
										<a href="{{ route('redirect.whatsapp') }}" target="_blank" class="btn btn-primary" onclick="return gtag_report_conversion('{{ route('redirect.whatsapp') }}');">Quero Começar</a>
									</div>
								</div>
							</div>

						</div>
						<div class="col-12 col-md-6">
							<div class="pt-5 pt-md-0">
								<img src="assets-eja/images/estudante-v2.webp" class="img-fluid" title="Termine seus estudos de forma simples" alt="Termine seus estudos de forma simples" class="img-fluid" width="100%" height="100%" />
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Vantagens -->
			<section id="VANTAGENS" class="section-default heightAutoSM pt-5 pb-5" style="position: relative; background-color: #F3F3F3;">
				<div class="container heightAutoSM" style="position: relative; ">
					<div class="row justify-content-center align-items-center pt-3 pb-3">
						<div class="col-12 col-md-6 text-center">
							<h2>Vantagens</h2>
						</div>
					</div>
					<div class="row justify-content-center align-items-start pt-3 pb-3">
						<div class="col-12 col-md-4 text-center">
							<div style="margin: 0 auto;">
								<div class="pb-3">
									<img src="assets-eja/images/smiling-face.png" data-src="assets-eja/images/smiling-face.png" decoding="async" style="height: 75px; width: auto;" title="Sorriso" alt="Sorriso" class="img-fluid" width="100%" height="100%" />
								</div>
								<h3 class="subtitle-h3">Termine seus estudos de forma rápida e segura.</h3>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center">
							<div style="margin: 0 auto;">
								<div class="pb-3">
									<img src="assets-eja/images/checked.png" data-src="assets-eja/images/checked.png" decoding="async" style="height: 75px; width: auto;" title="Certificado" alt="Certificado" class="img-fluid" width="100%" height="100%" />
								</div>
								<h3 class="subtitle-h3">Certificação válida em todo território nacional.</h3>
							</div>
						</div>
						<div class="col-12 col-md-4 text-center">
							<div style="margin: 0 auto;">
								<div class="pb-3">
									<img src="assets-eja/images/computer.png" data-src="assets-eja/images/computer.png" decoding="async" style="height: 75px; width: auto;" title="Estude em casa" alt="Estude em casa" class="img-fluid" width="100%" height="100%" />
								</div>
								<h3 class="subtitle-h3">Estude sem sair de casa.</h3>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Certificado de Conclusão Válido em todo Brasil -->
			<section class="section-default heightAutoSM bg-img pt-5 pb-5" style="position: relative; background-color: #FFFFFF;">
				<div class="container heightAutoSM pt-5 pb-5" style="position: relative; ">
					<div class="row justify-content-center align-items-center pt-3 pb-3">
						<div class="col-12 col-md-12 text-center">
							<h2>Certificado de Conclusão Válido em todo Brasil</h2>
						</div>
					</div>
					<div class="row justify-content-center align-items-center pt-3 pb-3">
						<div class="col-12 col-md-11 text-center">
							<div style="margin: 0 auto;">
								<p>A validade do certificado dos cursos a distância é a mesma de um curso presencial, aceito em todo território nacional, autorizado e Credenciado pela Secretaria Estadual da Educação e Conselho Estadual de Educação do Estado, garantindo assim que seu certificado de conclusão do Ensino Médio seja emitido com toda segurança, de estar recebendo um documento genuíno, dentro das Leis que regem a Educação de Jovens e Adultos no Brasil.</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-center align-items-center pt-3 pb-3">
						<div class="col-11 col-md-6 text-center">
							<div class="d-grid">
								<a href="{{ route('redirect.whatsapp') }}" target="_blank" class="btn btn-primary" onclick="return gtag_report_conversion('{{ route('redirect.whatsapp') }}');">Quero Concluir os Estudos</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Conclua os estudos sem burocracia -->
			<section class="section-default heightAutoSM bg-img" style="position: relative; background-color: #FFFFFF;">
				<div class="overlayConcluir" style="position: absolute; bottom: 0; height: 80%; width: 100%; background-color: #2AA6CA;"></div>
				<div class="container heightAutoSM" style="position: relative;">
					<div class="row justify-content-between align-items-center">
						<div class="col-12 col-md-5">
							<div class="pt-5 text-center text-md-start">
								<h2 class="color-white">Conclua os estudos sem burocracia</h2>

								<div class="d-none d-lg-none d-xl-block">
									<div class="d-grid pt-3">
										<a href="{{ route('redirect.whatsapp') }}" target="_blank" class="btn btn-primary" onclick="return gtag_report_conversion('{{ route('redirect.whatsapp') }}');">Quero Concluir os Estudos</a>
									</div>
								</div>

							</div>
						</div>
						<div class="col-12 col-md-5">
							<div>
								<img src="assets-eja/images/concluir-estudos-v2b.webp" class="img-fluid" title="Conclua os estudos sem burocracia" alt="Conclua os estudos sem burocracia" class="img-fluid" width="100%" height="100%" />
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Perguntas Frequentes -->
			<section id="DUVIDAS" class="section-default heightAutoSM" style="position: relative; background-color: #FFFFFF;">
				<div class="container pt-5 pb-5" style="position: relative;">
					<div class="row justify-content-center align-items-center pt-5">
						<div class="col-12 col-md-10 text-center">
							<div class=" pb-3">
								<h2 class="">Perguntas Frequentes</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center pb-5">
						<div class="col-11 col-md-7">
							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta1" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">É gratuito?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta1" style="">
									<div class="box">
										<p>Não, há um valor de investimento, que pode ser parcelado em até 12 vezes.</p>
									</div>
								</div>
							</div>

							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta2" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">Qual a idade mínima?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta2" style="">
									<div class="box">
										<p>A idade mínima é 18 anos para o ensino médio e 16 anos para o ensino fundamental.</p>
									</div>
								</div>
							</div>

							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta3" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">É 100% a distância?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta3" style="">
									<div class="box">
										<p>Sim, você pode estudar completamente online pelo nosso site ou aplicativo.</p>
									</div>
								</div>
							</div>

							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta4" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">Quais formas de pagamento?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta4" style="">
									<div class="box">
										<p>Aceitamos boleto, PIX e parcelamento no cartão de crédito.</p>
									</div>
								</div>
							</div>

							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta5" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">É válido em todo território nacional?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta5" style="">
									<div class="box">
										<p>Sim, nosso certificado é válido em todo o Brasil.</p>
									</div>
								</div>
							</div>

							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta6" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">A prova também é a distância?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta6" style="">
									<div class="box">
										<p>Sim, a prova é realizada 100% online pelo site ou aplicativo, podendo ser feita pelo celular ou computador.</p>
									</div>
								</div>
							</div>

							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta7" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">Qual o prazo de conclusão?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta7" style="">
									<div class="box">
										<p>O prazo de conclusão depende do seu ritmo, sendo que a certificação ocorre a partir de 30 dias após a realização da prova.</p>
									</div>
								</div>
							</div>

							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta8" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">Como recebo a documentação?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta8" style="">
									<div class="box">
										<p>A documentação eletrônica será enviada via WhatsApp e e-mail. Os documentos físicos serão enviados para sua residência via correios.</p>
									</div>
								</div>
							</div>

							<div class="duvidas__box-pergunta text-center px-2 px-sm-3 px-md-4" data-bs-toggle="collapse" data-bs-target="#resposta9" >
								<div class="d-flex justify-content-between align-items-center">
									<h3 class="pergunta py-3">Quais documentos?</h3>
									<img src="assets-eja/images/seta2.png" alt="seta" class="duvidas__box-pergunta-seta lazyloaded" data-src="assets-eja/images/seta2.png" decoding="async" title="seta" alt="Seta" class="img-fluid" width="100%" height="100%" />
								</div>
								<div class="duvidas__box-resposta collapse" id="resposta9" style="">
									<div class="box">
										<p>
										– Declaração de matrícula<br>
										– Declaração de conclusão<br>
										– Histórico escolar<br>
										– Certificado<br>
										– Declaração de autenticidade da secretaria escolar<br>
										– Publicação no diário oficial
										</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- Footer -->
			<section class="section-default heightAutoSM" style="position: relative; background-color: #155466;">
				<div class="container pt-5 pb-5" style="position: relative;">
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-md-10 text-center">
							<div class="pt-3 pb-3">
								<a href="{{ route('redirect.whatsapp') }}" target="_blank" class="btn btn-primary" onclick="return gtag_report_conversion('{{ route('redirect.whatsapp') }}');">5511916069198</a>
							</div>
						</div>
					</div>
				</div>
				<div style="position: relative; background-color: #000000;">
					<div class="container" style="position: relative;">
						<div class="row justify-content-center align-items-center">
							<div class="col-12 col-md-10 text-center">
								<div class="pt-3 pb-3">
									<div class="color-white">© 2024 – Todos os Direitos Reservados</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main>
	</div>

	<div class="button-whats" style="position: fixed; right: 25px; bottom: 30px; cursor: pointer; z-index: 98;">
		<a href="{{ route('redirect.whatsapp') }}" target="_blank" onclick="return gtag_report_conversion('{{ route('redirect.whatsapp') }}');"><img src="assets-eja/images/buttonwpp.png" alt="Botão Whatsapp" style="width: 48px;" width="48px" height="48px"></a>
	</div>

	<script defer type="text/javascript" src="assets-eja/js/app_plugins.js?t=<?= $time ?>"></script>
	<script defer type="text/javascript" src="assets-eja/js/all.js?t=<?= $time ?>"></script>

</body>
</html>
