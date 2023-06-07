<?php

$banners = buscaBanners();

/* $banner = $banners[0];
echo json_encode($banner); */
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 600px;">


  <div class="carousel-inner"  style="height: 600px;">
    <div class="carousel-item active">
      <img class="d-block w-100"src="<?php echo URLROOT . "/img/imgBanner/" . $banners[0]["imgBanner"] ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT . "/img/imgBanner/" . $banners[1]["imgBanner"] ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT . "/img/imgBanner/" . $banners[2]["imgBanner"] ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT . "/img/imgBanner/" . $banners[3]["imgBanner"] ?>">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>