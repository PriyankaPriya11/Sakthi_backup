<!-- Services -->
<div id="services">
  <?php get_template_part ('framework/outputs/service-1'); ?>
  <?php get_template_part ('framework/outputs/service-2'); ?>
  <?php get_template_part ('framework/outputs/service-3'); ?>
  <?php get_template_part ('framework/outputs/service-4'); ?>
</div>
<div id="services-mobile">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <?php get_template_part ('framework/outputs/service-5'); ?>
      </div>
      <div class="item">
        <?php get_template_part ('framework/outputs/service-1'); ?>
      </div>
      <div class="item">
        <?php get_template_part ('framework/outputs/service-4'); ?>
      </div>
    </div>
  </div>
</div>
