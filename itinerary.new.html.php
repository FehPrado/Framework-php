<form action="/criar-roteiro" method="post" enctype="multipart/form-data">

	<h1>Criar Novo Roterio</h1>

	<label>Nome</label> <br>
	<input type="text" name="name" placeholder="Digite aqui...">
	<br>
  <label>Descrição</label> <br>
	<input type="text" name="description" placeholder="Digite aqui...">
	<br>
	<label>Imagem</label>
	<input type="file" name="img" placeholder="Selecione a foto...">
	<br>
	<label> Data de Inicio</label>
	<input type="date" name="date_start">
	<br>
	<label> Data de Termino</label>
	<input type="date" name="date_end">

	<button>Criar</button>
	<a href="/roteiro">Cancelar</a>

</form>
<?php
if(isset($_FILES['img']))
 {
    $ext = strtolower(substr($_FILES['img']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './imagens/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['img']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="alert alert-success" role="alert" align="center">
          <img src="./imagens/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
          <br>
          Imagem enviada com sucesso!
          <br>
          <a href="exemplo_upload_de_imagens.php">
          <button class="btn btn-default">Enviar nova imagem</button>
          </a></div>';
 }
?>