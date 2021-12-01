<div id="hero"><!-- Hero Home -->

  <!-- Slider / Carousel -->
  <div id="slider" class="carousel slide" data-ride="carousel" data-interval="3000">
    
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
      <li data-target="#slider" data-slide-to="3"></li>
      <li data-target="#slider" data-slide-to="4"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php get_template_part ('framework/outputs/img-link'); ?>slider/slide-1.jpg" alt="slide 1">
        <!--<div class="carousel-caption hide-it">
          <h3>Caption Text</h3>
        </div>-->
      </div>
      <div class="item">
        <img src="<?php get_template_part ('framework/outputs/img-link'); ?>slider/slide-2.jpg" alt="slide 2">
        <!--<div class="carousel-caption hide-it">
          <h3>Caption Text</h3>
        </div>-->
      </div>
      <div class="item">
        <img src="<?php get_template_part ('framework/outputs/img-link'); ?>slider/slide-3.jpg" alt="slide 3">
        <!--<div class="carousel-caption hide-it">
          <h3>Caption Text</h3>
        </div>-->
      </div>
      <div class="item">
        <img src="<?php get_template_part ('framework/outputs/img-link'); ?>slider/slide-4.jpg" alt="slide 4">
        <!--<div class="carousel-caption hide-it">
          <h3>Caption Text</h3>
        </div>-->
      </div>
      <div class="item">
        <img src="<?php get_template_part ('framework/outputs/img-link'); ?>slider/slide-5.jpg" alt="slide 5">
        <!--<div class="carousel-caption hide-it">
          <h3>Caption Text</h3>
        </div>-->
      </div>
    </div>
    
    <!-- Controls -->
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    
  </div><!-- //Carousel -->
</div><!-- //Hero -->