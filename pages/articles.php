<div class="row">
	<div class="col-md-8 py-3">

		<div class="main-articles">
			<?php

			$stmt = $con->prepare("SELECT * FROM articles ORDER BY 
										created_at DESC");
			$stmt->execute();
			$rows = $stmt->fetchAll();

			foreach ($rows as $row)
			{

				?>

				<article class="article border border-bottom-0 py-3 bg-white px-3">
					<div class="row">
						<div class="col-lg-6">
							<img src="data/<?= $row['img'] ?>"
							     class="img-responsive img-fluid img-article" >
						</div>
						<div class="col-lg-6">
							<h2><?= $row['title'] ?></h2>
							<p class="lead">
								<?= substr($row['description'],0,100).'...'; ?>
							</p>
							<a href="index.php?page=article&id_article=<?= $row['id'] ?>"
							   class="btn btn-success">
								Read More
							</a>
						</div>
					</div>

				</article>

				<?php
			}
			?>
		</div>



	</div>


	<div class="col-md-4 py-3 sidebar">
		<?php include 'includes/sidebar.php' ?>
	</div>


</div>