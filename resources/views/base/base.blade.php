<!DOCTYPE html>
<html lang="es">
<head>
	@section('head') @include('base.head') @show
	<title>SCAFILAB - @section('title') Base @show</title>
	@section('extraHead') @show
</head>
<body>
	@section('body')
	@section('navbar') @include('base.navbar') @show
	@section('sidebar') @include('base.sidebar') @show
	<!-- Inicio del contenido de la página -->
	<main role="main" class="container">
		<br>
		@section('contenido')
		<h1>Página Base</h1><p>adadasdasduas Gorgosaurus libratus (gr. γοργώ, gorgō, 'terrible' y σαῦρος, sauros, «lagarto terrible») es un dinosaurio terópodo tiranosáurido, única especie del género monotípico Gorgosaurus. Vivió a finales del período Cretácico, hace entre 76,5 y 75 millones de años, durante la edad Campaniense, en lo que hoy es Norteamérica. Sus restos fósiles fueron encontrados en la provincia canadiense de Alberta. Otros restos, hallados en el estado de Montana, Estados Unidos, probablemente correspondan a este género. Los paleontólogos admiten únicamente la especie G. libratus, aunque otras especies fueron incluidas erróneamente en este género.

Como todos los tiranosáuridos conocidos, Gorgosaurus fue un bípedo depredador que en su madurez pesaba más de una tonelada y medía nueve metros de largo. Mostraba docenas de afilados dientes alineados en sus mandíbulas, mientras que sus extremidades anteriores, con dos dedos, eran relativamente cortas. El género Gorgosaurus está íntimamente emparentado con Albertosaurus y, en menor proporción, con Tyrannosaurus. Los fósiles de Gorgosaurus y Albertosaurus, de hecho, son extremadamente similares, distinguiéndose sutilmente por pequeñas diferencias en los huesos del cráneo y los dientes, lo que hace que algunos expertos consideren a G. libratus como una de las especies, un sinónimo menor, del género Albertosaurus.

Gorgosaurus vivió en un exuberante ambiente inundable a lo largo de la costa del mar interior occidental. Fue un superdepredador, en la cima de la cadena alimenticia, conviviendo y alimentándose de abundantes ceratópsidos y hadrosáuridos. En algunas áreas, Gorgosaurus coexistía con otro tiranosáurido, Daspletosaurus. Aunque estos animales eran aproximadamente del mismo tamaño, hay evidencia de que existía una separación en distintos nichos ecológicos entre los dos. Gorgosaurus es el tiranosáurido mejor representado en el registro fósil, con numerosos restos de especímenes que permiten a los científicos calcular con exactitud la ontogenia, desarrollo y otros aspectos de su biología.</p>
		@show
	</main>
	@section('footer') @include('base.footer') @show
	@section('jsFooter') @include('base.jsfooter') @show
	@section('extraJS') @show
	@show
</body>
</html>
