<?php include('includes/banner.php') ?>

<?php include('includes/card.php') ?>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top: 72px;">
  <div class="carousel-inner">
      <?php foreach ($itinerarys as $key => $itinerary) { ?>
      <div class="carousel-item active">
        <div class="row" style="margin-left: 532px;">

          <div class="col-3 ">
            <div class="card" style="width: 18rem;">
              <div>
                <img src="<?php echo $itinerary->img ?>" class="card-img-top" style="height: 189px;" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $itinerary->name ?></h5>
                <p class="card-text"><?php echo $itinerary->description ?></p>
                <a href="/info-roteiro/<?php echo $itinerary->id ?>" class="btn btn-primary">Inscreva-se</a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

