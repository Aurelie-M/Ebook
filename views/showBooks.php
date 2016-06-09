<h1> Fiche du livre &nbsp; : <?php echo $datas['book']->title; ?> </h1>

<!-- cover -->
<?php if($datas['book']->cover): ?>
	<div class="cover">

		<img src=" <?php echo $book->cover; ?> " alt = "cover" />

	</div>
<?php endif; ?>

<!-- author(s) -->

<?php if($datas["authors"]): ?>
	<ul class="authors">
		<?php foreach($datas["authors"] as $author): ?>
			<li class="ficheList"> Auteur du livre &nbsp; :
				<a href="?a=show&e=authors&id=<?php echo $author->id; ?>&with=books"> 
					<?php echo $author->name; ?> 
				</a> 
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- editor(s) -->
<?php if($datas["editors"]) : ?>
	<ul class="editors">
		<?php foreach($datas["editors"] as $editor): ?>
			<li class="ficheList"> Editeur du livre &nbsp; :
				<a href="?a=show&e=editors&id=<?php echo $editor->id; ?>&with=books"> 
					<?php echo $editor->name; ?> 
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- summary -->
<?php if($datas["book"]->summary): ?>

	<ul class="summaries">
		<li class="ficheList"> Résumé &nbsp; : <?php echo $datas["book"]->summary; ?> </li>
	</ul>

<?php endif; ?>

<!-- type -->
<?php if($datas["types"]) : ?>
	<ul class="types">
		<?php foreach($datas["types"] as $type): ?>
			<li class="ficheList"> Genre du livre &nbsp; :
				<a href="?a=show&e=types&id=<?php echo $type->id; ?>&with=books"> 
					<?php echo $type->name; ?> 
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<!-- isbn-->
<?php if($datas["book"]->isbn): ?>

	<ul class="isbn">
		<li class="ficheList"> ISBN &nbsp; : <?php echo $datas["book"]->isbn; ?> </li>
	</ul>

<?php endif; ?>

<a href="index.php?a=index&e=books" class="all"> Consulter tous les livres </a>