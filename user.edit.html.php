<form action="/editar-usuario/<?php echo $user->id ?>" method="post">

	<h1>Editar Novo Produto</h1>

	<label>Nome</label> <br>
	<input type="text" name="name" placeholder="Digite aqui..." value="<?php echo $user->name ?>">
  <br>
  <label>Email</label> <br>
	<input type="text" name="email" placeholder="Digite aqui..." value="<?php echo $user->email ?>">
  <br>
  <label>Senha</label> <br>
	<input type="password" name="password" placeholder="Digite aqui..." value="<?php echo $user->password ?>">

  <br>
	<br>
	<br>

	<button>Editar</button>
	<a href="/usuario">Cancelar</a>

</form>