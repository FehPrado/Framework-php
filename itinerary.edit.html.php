<form action="/editar-roteiro/<?php echo $itinerary->id ?>" method="post">

	<h1>Editar Novo Produto</h1>

	<label>Nome</label> <br>
	<input type="text" name="name" placeholder="Digite aqui..." value="<?php echo $itinerary->name ?>">
  <label>Descrição</label> <br>
	<input type="text" name="description" placeholder="Digite aqui..." value="<?php echo $itinerary->description ?>">
	<label>Imagem</label> <br>
	<input type="file" name="img" placeholder="Selecione a foto..." value="<?php echo $itinerary->$img ?>">

	<br>
	<br>

	<button class="btn btn-primary">Editar</button>
	<a class="btn btn-primary" href="/roteiros">Cancelar</a>

</form>