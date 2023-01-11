<a href="/novo-roteiro">Novo</a>

<table border=1>

	<?php foreach ($itinerary as $key => $itinerary) { ?>
		
		<tr>
			<td><?php echo $itinerary->id ?></td>
			<td><?php echo $itinerary->name ?></td>
			<td><?php echo $itinerary->description ?></td>
			<td><a href="/editar-produto/<?php echo $itinerary->id ?>">editar</a></td>
			<td><a href="/apagar-produto/<?php echo $itinerary->id ?>">apagar</a></td>
		</tr>

	<?php } ?>

</table>
