<div class="conteiner pt-5 mx-5">
  <div class="row">
    <?php foreach ($itinerarys as $key => $itinerary) { ?>
    <div class="col-3 ">
        <div class="card" style="width: 18rem;">
          <div>  
            <img src="<?php echo $itinerary->img ?>" class="card-img-top" style="height: 189px;" alt="..."  >
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $itinerary->name ?></h5>
            <p class="card-text"><?php echo $itinerary->description ?></p>
            <a href="/info-roteiro/<?php echo $itinerary->id ?>" class="btn btn-primary">Inscreva-se</a>
          </div>
        </div>
      </div>
      <?php } ?>
  </div>
</div>