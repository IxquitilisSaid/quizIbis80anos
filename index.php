<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="index, follow">
	<title>Íbis - 80 anos</title>
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Íbis - 80 anos" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="https://www.op9.com.br/jogos/ibis80anos/" />
	<meta property="og:site_name" content="Íbis - 80 anos" />
	<meta property="og:image" content="https://www.op9.com.br/jogos/ibis80anos/images/ibis80anos_FB.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="fb:app_id" content="282328752526719" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:title" content="Íbis - 80 anos" />
	<meta name="twitter:image" content="https://www.op9.com.br/jogos/ibis80anos/images/ibis80anos_FB.png" />
	<link rel="stylesheet" type="text/css" href="./styles/style.css">

	<?php /* ?>
	<link rel="icon" href="https://media.op9.com.br/uploads/2018/03/favicon.png" sizes="32x32" />
	<link rel="icon" href="https://media.op9.com.br/uploads/2018/03/favicon.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="https://media.op9.com.br/uploads/2018/03/favicon.png" />
	<meta name="msapplication-TileImage" content="https://media.op9.com.br/uploads/2018/03/favicon.png" />
	<?php */ ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-118143123-1', 'auto');
		  ga('send', 'pageview');
	</script>
</head>
<body>
	<div id="content">
		<div class="row">
			<div class="four columns">
				<section id="perguntas">
					<img class="logo" src="./images/logo-ibis.svg" alt="Logo Íbis">
					<div class="wrap-perguntas">
						<ul class="pergunta perg01 show" id="perg01">
							<h1><span>1</span> Qual foi o time responsável por aplicar a maior goleada em uma só partida?</h1>
							<li><button class="alt-a" onclick="err()" value="1"><i>&nbsp;</i><span>A</span> Sport</button></li>
							<li><button class="alt-b" onclick="err()" value="2"><i>&nbsp;</i><span>B</span> Náutico</button></li>
							<li><button class="alt-c" onclick="point()" value="3"><i>&nbsp;</i><span>C</span> Santa Cruz</button></li>
							<li><button class="alt-d" onclick="err()" value="4"><i>&nbsp;</i><span>D</span> Central</button></li>
						</ul>
						<ul class="pergunta perg02" id="perg02">
							<h1><span>2</span> Em quais anos o Pássaro Preto foi ganhou a taça do Torneio Início?</h1>
							<li><button class="alt-a" onclick="err()" value="5"><i>&nbsp;</i><span>A</span> 1948 e 1949</button></li>
							<li><button class="alt-b" onclick="err()" value="6"><i>&nbsp;</i><span>B</span> 1949 e 1950</button></li>
							<li><button class="alt-c" onclick="err()" value="7"><i>&nbsp;</i><span>C</span> 1947 e 1956</button></li>
							<li><button class="alt-d" onclick="point()" value="8"><i>&nbsp;</i><span>D</span> 1948 e 1950</button></li>
						</ul>
						<ul class="pergunta perg03" id="perg03">
							<h1><span>3</span> Qual time foi a vítima do único gol marcado por Mauro Shampoo com a camisa do Íbis?</h1>
							<li><button class="alt-a" onclick="point()" value="9"><i>&nbsp;</i><span>A</span> Ferroviário</button></li>
							<li><button class="alt-b" onclick="err()" value="10"><i>&nbsp;</i><span>B</span> Serrano</button></li>
							<li><button class="alt-c" onclick="err()" value="11"><i>&nbsp;</i><span>C</span> Central</button></li>
							<li><button class="alt-d" onclick="err()" value="12"><i>&nbsp;</i><span>D</span> Flamengo-PE</button></li>
						</ul>
						<ul class="pergunta perg04" id="perg04">
							<h1><span>4</span> Quais desses clubes levou a maior goleada do Pior Time do Mundo?</h1>
							<li><button class="alt-a" onclick="err()" value="13"><i>&nbsp;</i><span>A</span> Porto</button></li>
							<li><button class="alt-b" onclick="point()" value="14"><i>&nbsp;</i><span>B</span> Timbaúba</button></li>
							<li><button class="alt-c" onclick="err()" value="15"><i>&nbsp;</i><span>C</span> Ferroviário</button></li>
							<li><button class="alt-d" onclick="err()" value="16"><i>&nbsp;</i><span>D</span> Cabense</button></li>
						</ul>
						<ul class="pergunta perg05" id="perg05">
							<h1><span>5</span> Qual foi a última vez que o Pássaro Preto disputou a Série A1?</h1>
							<li><button class="alt-a" onclick="err()" value="17"><i>&nbsp;</i><span>A</span> 1999</button></li>
							<li><button class="alt-b" onclick="point()" value="18"><i>&nbsp;</i><span>B</span> 2000</button></li>
							<li><button class="alt-c" onclick="err()" value="19"><i>&nbsp;</i><span>C</span> 2001</button></li>
							<li><button class="alt-d" onclick="err()" value="20"><i>&nbsp;</i><span>D</span> 2002</button></li>
						</ul>
						<ul class="pergunta perg06" id="perg06">
							<h1><span>6</span> Em que ano o clube disputou o Pernambucano pela primeira vez?</h1>
							<li><button class="alt-a" onclick="err()" value="21"><i>&nbsp;</i><span>A</span> 1944</button></li>
							<li><button class="alt-b" onclick="err()" value="22"><i>&nbsp;</i><span>B</span> 1945</button></li>
							<li><button class="alt-c" onclick="err()" value="23"><i>&nbsp;</i><span>C</span> 1946</button></li>
							<li><button class="alt-d" onclick="point()" value="24"><i>&nbsp;</i><span>D</span> 1947</button></li>
						</ul>
					</div>
				</section>
				<section id="resultados" style="display: none;">
					<img class="logo" src="./images/logo-ibis.svg" alt="Logo Íbis">
					<div class="wrap-resultados">
						<div class="res01" id="num1fan">
							<img src="./images/shampoo.svg" alt="Mauro Shampoo">
							<h2>Barba, cabelo e bigode!</h2>
							<p>Pense num fã do Passaro Pretro. Tu é o artilheiro que faltou ao Íbis!!!</p>
						</div>
						<div class="res02" id="num2fan">
							<img src="./images/camisa.svg" alt="O mito, Nininho">
							<h2>É bem dizer o mito Nininho!</h2>
							<p>Não foi tão ruim, mas passou na peneira. Dá pra jogar na linha do Íbis!!</p>
						</div>
						<div class="res03" id="yikes">
							<img src="./images/ibisdoibis.svg" alt="Íbis do Íbis">
							<h2>O Íbis do Íbis!!!</h2>
							<p>Cabra coerente com o quiz, nenhum golzinho? Danôsse Menino, sei não vú...</p>
						</div>
						<div class="wrap-respostas">
							<a href="#" class="respostas">Respostas</a>
							<img class="seta" src="./images/seta.svg" alt="">
						</div>
					</div>
				</section>
				<section id="respostas">
					<ul>
						<img class="logo" src="./images/logo-ibis80-respostas.svg" alt="Logo Íbis">
						<li>
							<h4>Resposta - 01</h4>
							<p>Letra C. O Santa Cruz é o responsável pela maior goleada sofrida pelo Íbis. Não foi apenas uma, mas sim em duas oportunidades. Os tricolores venceram o Pássaro Preto por 13x0 em 1978 e em 1984.</p>
						</li>

						<li>
							<h4>Resposta - 02</h4>
							<p>Letra D. O Íbis sagrou-se campeão do Torneio Início nos anos de 1948 e 1950. O Pássaro Preto venceu o Náutico e Santa Cruz na disputa de pênaltis.</p>
						</li>

						<li>
							<h4>Resposta - 03</h4>
							<p>Letra A. Mauro Shampoo só conseguiu marcar um gol durante a sua trajetória como profissional, contra o Ferroviário. Mesmo com o gol marcado pelo craque, o Íbis saiu derrotado por 8x1.</p>
						</li>

						<li>
							<h4>Resposta - 04</h4>
							<p>Letra B. No ano de 2015, o Íbis e Timbaúba entraram em campo pela Série A2 do Pernambucano. O Pássaro Preto não tomou conhecimento do adversário e aplicou uma goleada por 8x2. O destaque ficou para o meia Moicano, que balançou as redes quatro vezes.</p>
						</li>

						<li>
							<h4>Resposta - 05</h4>
							<p>Letra B. O clube está há 18 anos longe da Série A1 do Campeonato Pernambucano. o Clube caiu de divisão no ano 2000 e desde então disputa a série A2.</p>
						</li>
						 
						<li>
							<h4>Resposta - 06</h4>
							<p>Letra C. A primeira participação do Íbis no Campeonato Pernambucano foi em 1946. Na oportunidade, o troféu ficou nas Repúblicas Independentes do Arruda, com o Santa Cruz como campeão.</p>
						</li>
						<div class="wrap-voltar">
							<a href="#" class="voltar">Voltar ao quiz</a>
							<img class="seta" src="./images/seta.svg" alt="">
						</div>
					</ul>
				</section>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<script type="text/javascript">

		var points = 0;
		var i = 0;

		var questions = document.getElementsByClassName('pergunta');

		function showResults() {
			document.getElementById('resultados').style.display = 'block';
			if (points <= 2) {
				document.getElementById('yikes').style.display = 'block';
				document.getElementById('num2fan').style.display = 'none';
				document.getElementById('num1fan').style.display = 'none';
			} else if (points == 3 || points == 4) {
				document.getElementById('num2fan').style.display = 'block';
				document.getElementById('num1fan').style.display = 'none';
				document.getElementById('yikes').style.display = 'none';
			} else if (points == 5 || points == 6) {
				document.getElementById('num1fan').style.display = 'block';
				document.getElementById('num2fan').style.display = 'none';
				document.getElementById('yikes').style.display = 'none';
			}
		}

		function next() {
			if(i == questions.length) {
				document.getElementById('perguntas').style.display = "none";
				showResults();
			} else {
				questions[i].classList.remove("show");
				i++;
				questions[i].classList.add("show");
			}
		}

		function err() {
			next();
		}

		function point() {
			points++;
			next();
		}




		/*var i = 0;

		var questions = document.getElementsByClassName('pergunta');

		var a = [1, 5, 9, 13, 17, 21];
		var b = [2, 6, 10, 14, 18, 22];
		var c = [3, 7, 11, 15, 19, 23];
		var d = [4, 8, 12, 16, 20, 24];

		var aa = [];
		var bb = [];
		var cc = [];
		var dd = [];
		
		function play(value){
			if (a.includes(value)){
				aa.push(value);
			} else if (b.includes(value)){
				bb.push(value);
			} else if (c.includes(value)){
				cc.push(value);
			} else if (d.includes(value)){
				dd.push(value);
			}

			if(i == questions.length) {
				document.getElementById('perguntas').style.display = "none";
				showResults();
			} else {
				questions[i].classList.remove("show");
				i++;
				questions[i].classList.add("show");
			}

		}

		function showResults() {
			if (aa.length >= 2) {

			} else if (bb.length >= 2) {

			}
		}*/



	</script>

	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5b58800cd6d379001104abef&product=custom-share-buttons"></script>
	<?php /* ?>
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b58800cd6d379001104abef&product=inline-share-buttons' async='async'></script>
	<?php */ ?>
</body>
</html>