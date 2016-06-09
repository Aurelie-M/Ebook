<h1> Fiche du genre littéraire &nbsp; : <?php echo $datas["type"]->name; ?> </h1>

<!-- type -->
<?php if($datas["type"]->name): ?>

	<ul class="names">
		<li class="ficheList"> Nom &nbsp; : <?php echo $datas["type"]->name; ?> </li>
	</ul>

<?php endif; ?>

<!-- summary -->
<?php if($datas["type"]->summary): ?>

	<ul class="summary">
		<li class="ficheList"> <?php echo $datas["type"]->summary; ?> </li>
	</ul>

<?php endif; ?>

<!-- if there are some books, we post it -->
<?php if($datas["books"]): ?> Les livres de ce genre littéraire &nbsp; :

	<ul class="books">

		<?php foreach($datas["books"] as $book): ?>

			<li class="ficheList"> 
				<a href="?a=show&e=books&id=<?php echo $book->id; ?>&with=types">
					<?php echo $book->title; ?>
				</a>
			</li>

		<?php endforeach; ?>

	</ul>

<?php endif; ?> 

<!-- if there are some authors, we post it -->
<?php if($datas["authors"]): ?> Les auteurs qui utilisent ce genre &nbsp; :

	<ul class="authors">

		<?php foreach($datas["authors"] as $author): ?>

			<li class="ficheList"> 
				<a href="?a=show&e=authors&id=<?php echo $author->id; ?>&with=types">
					<?php echo $author->name; ?>
				</a>
			</li>

		<?php endforeach; ?>

	</ul>

<?php endif; ?> 

<!-- if there are some editors, we post it -->
<?php if($datas["editors"]): ?> Les éditeurs qui utilisent ce genre &nbsp; :

	<ul class="editors">

		<?php foreach($datas["editors"] as $editor): ?>

			<li class="ficheList"> 
				<a href="?a=show&e=editors&id=<?php echo $editor->id; ?>&with=types">
					<?php echo $editor->name; ?>
				</a>
			</li>

		<?php endforeach; ?>

	</ul>

<?php endif; ?> 

<a href="index.php?a=index&e=types" class="all"> Consulter tous les genres littéraires </a>