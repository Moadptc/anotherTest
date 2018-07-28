<?php
if(!isset($_SESSION['id'])) header('location:index.php?page=articleRedirect');

$id_article = $_GET['id_article'];

$stmt = $con->prepare("SELECT * FROM articles WHERE id = :id_article");
$stmt->bindParam(":id_article",$id_article);
$stmt->execute();
$row = $stmt->fetch();


?>


<div class="row">
	<div class="col-md-8 py-3">

		<article class="bg-white p-4 single-article">
			<h2><?= $row['title'] ?></h2>
			<img class="img-fluid my-3" src="data/<?= $row['img'] ?>">
			<p class="lead">
				<?= $row['description'] ?>
			</p>

			<p class="share-article">
				<a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank"><img alt="Share on Facebook" src="public/img/social_flat_rounded_rects_svg/Facebook.svg" class="share-article" /></a>
				<a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet"><img alt="Tweet" src="public/img/social_flat_rounded_rects_svg/Twitter.svg" class="share-article" /></a>
				<a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+"><img alt="Share on Google+" src="public/img/social_flat_rounded_rects_svg/Google+.svg" class="share-article" /></a>
				<a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn"><img alt="Share on LinkedIn" src="public/img/social_flat_rounded_rects_svg/LinkedIn.svg" class="share-article" /></a>
			</p>

		</article>

	</div>


	<div class="col-md-4 py-3 sidebar">
		<?php include 'includes/sidebar.php' ?>
	</div>


</div>
