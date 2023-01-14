
<table class="table table-dark table-striped" border=1>

	<?php foreach ($users as $key => $user) { ?>
		
		<tr>
			<td><?php echo $user->id ?></td>
			<td><?php echo $user->name ?></td>
			<td><?php echo $user->email ?></td>
			<td><?php echo $user->password ?></td>
			<td><a class="btn btn-primary" href="/editar-usuario/<?php echo $user->id ?>">editar</a></td>
			<td><a class="btn btn-primary" href="/apagar-usuario/<?php echo $user->id ?>">apagar</a></td>
		</tr>

	<?php } ?>

</table>

<form action=""></form>
asdasdadasdasdasdasdasdasdasdasdasdasdasdasdasdasdas