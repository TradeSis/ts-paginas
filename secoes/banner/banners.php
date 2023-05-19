<?php

$banners = buscaBanner();
$banner = $banners[0];

?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 300px;">
  <div class="carousel-inner" style="height: 300px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo URLROOT . "/img/imgBanner/" . $banner["imgBanner1"] ?>" alt="1">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT . "/img/imgBanner/" . $banner["imgBanner2"] ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT . "/img/imgBanner/" . $banner["imgBanner3"] ?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT . "/img/imgBanner/" . $banner["imgBanner4"] ?>" alt="Third slide">
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