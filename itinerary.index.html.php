<a href="/novo-roteiro">Novo</a>

<table class="table table-dark table-striped" border=1>

	<?php foreach ($itinerarys as $key => $itinerary) { ?>
		
		<tr>
			<td><?php echo $itinerary->id ?></td>
			<td><?php echo $itinerary->name ?></td>
			<td><?php echo $itinerary->description ?></td>
			<td><a class="btn btn-primary" href="/editar-roteiro/<?php echo $itinerary->id ?>">editar</a></td>
			<td><a class="btn btn-primary" href="/apagar-roteiro/<?php echo $itinerary->id ?>">apagar</a></td>
		</tr>

	<?php } ?>

</table>
