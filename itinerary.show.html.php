<style>
  body {
    background-color: rgb(48, 254, 103);
  }

  .nav {
    background-color: rgb(101, 255 , 199) !important;
  }

  .top{
    margin-top:  123px;
  }
</style>

<div >
  <div>
    <h1>Bem vindo ao roteiro <?php echo $itinerary->name ?> </h1>
  </div>

  <div>
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

  <div  class="position-relative" >
    <img src="http://localhost:8000/<?php echo $itinerary->img ?>"  class="position-absolute top-50 start-50" alt="..." style="width: 45rem;margin-top: -258px;/* border: 24px; *//* border-block-color: black; */border-radius: 32px;border-style: solid; margin-left: -56px;"">
  </div>
   
  <br>
  <!-- Button trigger modal -->




  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Inscrever
  </button>
</div>


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