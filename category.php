<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">
	<!-- header -->
	<div class="container">
			<header class="title-header">
			<h1>Categoria: Adesivos</h1>
	</header>
			<section class="main-form">
				<h1 class="right-filter mobile" id="filter"><i class="fas fa-filter"></i>Filtros</h1>
				<article class="right-contact" id="boxFilter">
					<h1 class="right-filter descktop"><i class="fas fa-filter"></i>Filtros</h1>
			           
			     <div class="cols-filter">
			     	<h2>Marcas</h2>
			     	<ul>
			     		<?php for($i = 0; $i <= 4; $i++): ?>
			     		<li><a href="">Marca <?= $i ?></a></li>
			     	<?php endfor; ?>
			     	</ul>
			     </div>
				</article>
				<div class="contain-category">
					<?php for($i = 1; $i <= 8; $i++): ?>
				<article class="box-article">
					<a href="product-details.php">
					<div class="img-container">
							<img src="assets/images/produto.jpg" alt="" title="">
					</div>
					<!-- img -->
							<h2>LIMITADOR PORTA S-10 /11 TZ C/MOLA</h2>
						</a>
							<span>CÓDIGO: 23582</span>
							<span>CHEVROLET</span>
					<div class="box-group-button">
							<a href="" class="button btn-budget"><i class="fab fa-whatsapp"></i>Orçamento</a>
					</div>
				</article>
			<?php endfor; ?>
				</div>
				
			</section>
		</div>
</main>
<?php require __DIR__ . "/footer.php"; ?>