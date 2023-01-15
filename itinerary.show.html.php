<h1>Bem vindo ao roteiro <?php echo $itinerary->name ?> </h1>



<h2>Descrição</h2>
<?php echo $itinerary->description ?>

	<br>
	<br>
<img src="http://localhost:8000/<?php echo $itinerary->img ?>" alt="..." class="card-img-top" style="width: 18rem;">
  <br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Inscrever
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Parabéns</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Roteiro adquirido com sucesso</h2>
      </div>
      <div class="modal-footer">
        <a> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button></a>
      </div>
    </div>
  </div>
</div>