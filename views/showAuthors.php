<h1> Fiche de l'auteur &nbsp; : <?php echo $datas["author"]->name; ?> </h1>

<!-- author -->
<?php if($datas["author"]->name): ?>

	<ul class="names">
		<li class="ficheList"> Nom &nbsp; : <?php echo $datas["author"]->name; ?> </li>
	</ul>

<?php endif; ?>

<!-- birth date -->
<?php if($datas["author"]->birth_date): ?>

	<ul class="birth">
		<li class="ficheList"> Date de naissance &nbsp; : <?php echo $datas["author"]->birth_date; ?> </li>
	</ul>

<?php endif; ?>

<!-- death date -->
<?php if($datas["author"]->death_date): ?>

	<ul class="death">
		<li class="ficheList"> Date de décès &nbsp; : <?php echo $datas["author"]->death_date; ?> </li>
	</ul>

<?php endif; ?>

<!-- if there is a bio, we post it -->
<?php if($datas["author"]->bio): ?>

	<ul class="bio">
		<li class="ficheList"> <?php echo $datas["author"]->bio; ?> </li>
	</ul>

<?php endif; ?>

<!-- if there are some books, we post it -->
<?php if($datas["books"]): ?> Ses autres livres &nbsp; :
	<ul class="books">
		<?php foreach($datas["books"] as $book): ?>
			<li class="ficheList"> 
				<a href="?a=show&e=books&id=<?php echo $book->id; ?>&with=authors"> 
					<?php echo $book->title; ?> </a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- if there are some editors, we post it -->
<?php if($datas["editors"]): ?> Ses éditeurs &nbsp; :
	<ul class="editors">
		<?php foreach($datas["editors"] as $editor): ?>
			<li class="ficheList"> 
				<a href="?a=show&e=editors&id=<?php echo $editor->id; ?>&with=authors">
					<?php echo $editor->name; ?> </a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- if there are some types, we post it -->
<?php if($datas["types"]): ?>
	<ul class="types">
		<?php foreach($datas["types"] as $type): ?>
			<li class="ficheList"> Ses genres littéraires &nbsp; :
				<a href="?a=show&e=types&id=<?php echo $type->id; ?>&with=authors">
					<?php echo $type->name; ?> </a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<a href="index.php?a=index&e=authors" class="all"> Consulter tous les auteurs </a>