<style>
  body {
    background-color: rgb(48, 254, 103);
  }

  .nav {
    background-color: rgb(101, 255, 199) !important;
  }

  .top {
    margin-top: 123px;
  }

  .img{
    width: 45rem;
    margin-top: -501px;
    border-radius: 32px;
    border-style: solid;
    margin-left: -56px;
  }

  .stable{
    margin-top: 210px;
  }
</style>

<div class="">
  <h1 class="pt-2 px-4 ">Bem vindo ao roteiro <?php echo $itinerary->name ?> </h1>
</div>
<div class="stable conteiner px-4">

  <div >
    <h2>Descrição</h2>
    <?php echo $itinerary->description ?>
  </div>

  <div>
    <h2>Data de Inicio</h2>
    <?php echo $itinerary->date_start ?>

    <h2>Data de termino</h2>
    <?php echo $itinerary->date_end ?>
  </div>


  <br>


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Inscrever
  </button>
</div> 

<div class="position-relative conteiner">
  <img src="http://localhost:8000/<?php echo $itinerary->img ?>" class="position-absolute top-50 start-50 img" alt="Flaha ao carregar foto ">
</div>
   
<br>


<!-- Modal -->
<div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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