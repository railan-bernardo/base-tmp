<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">
	<section class="slide-container slide">
			<div class="slick-slide">
				<img src="assets/images/banner.jpg" alt="" title=""/>
			</div>
				<div class="slick-slide">
				<img src="assets/images/banner.jpg" alt="" title=""/>
			</div>
				<li class="slick-slide">
				<img src="assets/images/banner.jpg" alt="" title=""/>
			</div>
				<div class="slick-slide">
				<img src="assets/images/banner.jpg" alt="" title=""/>
			</div>
	</section>
	<!-- slide end -->
	<!-- header title -->
	<div class="container">
			<header class="title-header">
				<h1>Itens Lançamento</h1>
			</header>
		<section class="main-section">
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
		</section>
    </div>
    <section class="sec-brands">
    	<div class="container">
    		<h1>Selecione uma Marca</h1>
    		<div class="box-brands slide-link-brand">
    			<?php for($i = 1; $i <= 5; $i++): ?>
    			<div class="card-brands">
    				<a href="">
    					<img src="assets/images/<?= $i ?>.jpg" alt="" title="">
    				</a>
    			</div>
    			<?php endfor; ?>
    			<?php for($i = 1; $i <= 5; $i++): ?>
    			<div class="card-brands">
    				<a href="">
    					<img src="assets/images/<?= $i ?>.jpg" alt="" title="">
    				</a>
    			</div>
    			<?php endfor; ?>
    		</div>
    	</div>
    </section>
</main>
<?php require __DIR__ . "/footer.php"; ?>
<script>
	$('.slide-link-brand').slick({
  dots: true,
  infinite: true,
   autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

</script>