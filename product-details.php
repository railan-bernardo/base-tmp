<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">

	<!-- header title -->
	<div class="container">
		  <header class="title-header">
      <h1>Tenda Piramidial</h1>
  </header>
		<section class="box-section">
			 <article class="article" style="display: inline-block;">
            <div class="image-full-dt slide">
              <?php for ($i=0; $i <= 4; $i++): ?>
              <a class="slick-slide" href="assets/images/produto.jpg"><img src="assets/images/produto.jpg" alt="" title=""/> </a>
            <?php endfor; ?>
            </div> 
       </article>
       <article class="article">
            <p>Produzidas em diferentes cores e tamanhos, nossas
            tendas piramidais são ideais para todos os tipos de eventos, sejam eles de pequeno, médio ou grande porte.
            Podem ser desenvolvidas em formatos especiais com
            medidas adaptadas ao ambiente a ser coberto.
            </p>
            <p>
              Sua estrutura permite o encaixe de uma na outra, de
              modo a cobrir áreas maiores tornando-as perfeitas para
              atendender a eventos, feiras, pontos de venda,
              workshops, exposições, armazenagem de produtos, maquinários entre outros. Fale com nossa equipe e conheça
              hoje a tenda ideal para seu projeto.
           </p>
          <div class="box-group-button">
              <a href="" class="button btn-budget desktop"><i class="fab fa-whatsapp"></i>Orçamento</a>
              <a href="" class="button btn-budget mobile"><i class="fab fa-whatsapp"></i>Orçamento</a>
          </div>
       </article>
		</section>
    <!-- box section -->
    </div>

    
</main>
<?php require __DIR__ . "/footer.php"; ?>
<script src="assets/js/lighbox.js"></script>

</script>