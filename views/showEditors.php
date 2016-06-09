<h1> Fiche de l'éditeur &nbsp; : <?php echo $datas["editor"]->name; ?> </h1>

<!-- editor -->
<?php if($datas["editor"]->name): ?>

	<ul class="names">
		<li class="ficheList"> Nom &nbsp; : <?php echo $datas["editor"]->name; ?> </li>
	</ul>

<?php endif; ?>

<!-- if there is a url, we post it -->
<?php if($datas["editor"]->url) : ?>

	<ul class="url">
		<li class="ficheList">
			<a href="<?php echo $datas["editor"]->url; ?>" > <?php echo $datas["editor"]->url; ?> </a>
		</li>
	</ul>

<?php endif; ?>

<!-- if there is a logo, we post it -->
<?php if($datas["editor"]->logo) : ?>

	<div class="logo">

		<img src="<?php echo $datas["editor"]->logo; ?>" alt="logo" />

	</div>

<?php endif; ?>


<!-- if there are some books, we post it -->
<?php if($datas["books"]): ?> Les livres de cet éditeur &nbsp; :
	<ul class="books">
		<?php foreach($datas["books"] as $book): ?>
			<li class="ficheList"> 
				<a href="?a=show&e=books&id=<?php echo $book->id; ?>&with=editors">
					<?php echo $book->title; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- if there are some authors, we post it -->
<?php if($datas["authors"]): ?> Les auteurs de cet éditeur &nbsp; :
	<ul class="authors">
		<?php foreach($datas["authors"] as $author): ?>
			<li class="ficheList"> 
				<a href="?a=show&e=authors&id=<?php echo $author->id; ?>&with=editors">
					<?php echo $author->name; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- if there are some types, we post it -->
<?php if($datas["types"]): ?> Les genres littéraires de cet éditeur &nbsp; :
	<ul class="types">
		<?php foreach($datas["types"] as $type): ?>
			<li class="ficheList"> 
				<a href="?a=show&e=types&id=<?php echo $type->id; ?>&with=editors">
					<?php echo $type->name; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<a href="index.php?a=index&e=editors" class="all"> Consulter tous les editeurs </a>