<form action="/editar-roteiro/<?php echo $itinerary->id ?>" method="post">

	<h1>Editar Novo Produto</h1>

	<label>Nome</label> <br>
	<input type="text" name="name" placeholder="Digite aqui..." value="<?php echo $itinerary->name ?>">
  <label>Nome</label> <br>
	<input type="text" name="name" placeholder="Digite aqui..." value="<?php echo $itinerary->description ?>">

	<br>
	<br>

	<button>Editar</button>
	<a href="/roteiros">Cancelar</a>

</form>