<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">
	<!-- header title -->
	<div class="container">
			<header class="title-header">
			<h1>Fornecedores</h1>
			</header>
		<section class="main-section">
			<div class="box-brands ">
    			<?php for($i = 1; $i <= 5; $i++): ?>
    			<div class="card-brands shadow">
    				<a href="">
    					<img src="assets/images/<?= $i ?>.jpg" alt="" title="">
    				</a>
    			</div>
    			<?php endfor; ?>
    			<?php for($i = 1; $i <= 5; $i++): ?>
    			<div class="card-brands shadow">
    				<a href="">
    					<img src="assets/images/<?= $i ?>.jpg" alt="" title="">
    				</a>
    			</div>
    			<?php endfor; ?>
    		</div>
		</section>
		<div class="box-paginator">
			
		</div>
    </div>
</main>
<?php require __DIR__ . "/footer.php"; ?>