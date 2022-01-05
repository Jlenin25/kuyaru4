<header>
	<div class="header-top">
		<div class="logo">
			<img src="<?= media(); ?>/img/logo.png" alt="">
		</div>
		<div class="search">
			<input type="search" placeholder="¿Qué deseas buscar?">
		</div>
	</div>
	<div class="container-menu">
		<div class="menu">
			<input type="checkbox" id="check-menu">
			<label for="check-menu" id="label-check">
				<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 icon-menu" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
			</label>
			<nav>
				<ul>
					<li><a href="<?= BASE_URL; ?>" id="selected"></a></li>
					<li>
						<a href="#">Categorías</a>
						<ul>
							<li><a href="#">Albañilería</a></li>
							<li><a href="#">Asfalto</a></li>
							<li><a href="#">Concreto</a></li>
							<li><a href="#">Suelo</a></li>
							<li><a href="#">Sin Categoría</a></li>
						</ul>
					</li>
					<li><a href="#">Cotizar</a></li>
					<li><a href="#">Tienda</a></li>
					<li><a href="../contact.php">Contáctanos</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>