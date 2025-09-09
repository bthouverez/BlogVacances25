<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog Vacances</title>
	<style>
		.post {
			border: 1px solid black;
			border-radius: 10px;
			padding: 15px;
			width: 33%;
			margin:  20px auto;
		}
	</style>
</head>
<body>

	<a href="index.php?deco">Déconnexion</a>

	<form method="post" action="index.php">
		<input type="text" name="title">
		<textarea name="content">
		</textarea>
		<button name="storePost">Enregistrer</button>
	</form>

	<?php foreach($allPosts as $post) { ?>
		<section class="post">
			<h1><?= $post->getTitle() ?></h1>
			<small>Écrit par <?= $post->getAuthor()->getName() ?> 
			le <?= $post->getPostedAt()->format('d/m/Y') ?></small>

			<p><img	src="<?= $post->getPicture() ?>" alt="image">
				<?= $post->getContent() ?></p>
		</section>
	<?php } ?>

</body>
</html>