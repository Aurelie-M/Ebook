<div class="navList">
	<h1> Liste des livres disponibles </h1>

	<ul>
		<?php foreach( $datas["books"] as $book): ?>
			<li> <a href="index.php?a=show&e=books&id=<?php echo $book->id; ?>&with=authors,editors,types" > <?php echo $book->title; ?> </a> </li>
		<?php endforeach; ?>

	</ul>
</div>