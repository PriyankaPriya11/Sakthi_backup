<?php 
/**
 * Template Name: contact
 */
get_header(); ?>
<div class="naccs">
      <div class="container">
      <h1>Contacto</h1>
        <div class="grid">
          <div class="row">
            <div class="gc gc--1-of-3">
              <div class="menu">
                <div class="active">
                  <ul class="expertise__list is-hidden--sm-down has-active light" id="click1">
                    <li class="js-expertise-item is-active">
                      <div class="expertise__list__icon">
                        <div></div>
                      </div>
                      <h4 class="lx-general">GENERAL</h4>
                      <a></a>
                    </li>
                  </ul></span>
                </div>
                <div>
                  <ul class="expertise__list is-hidden--sm-down light" id="click2">
                    <li class="js-expertise-item">
                      <div class="expertise__list__icon lx-icon">
                        <div></div>
                      </div>
                      <h4 class="lx-general">VENTAS</h4>
                      <a></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="ss-addrez-text">
                <p>Polígono Industrial</p> 
                <p>El Clérigo s/n Parcela 2A Apdo.289</p>
                <p>Alcoy, Alicante provincia, España</p>
              </div>
            </div>            
            <div class="gc gc--2-of-3">
              <ul class="nacc">
                <li class="active">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="form-group" id="arr1">
                            <?php echo do_shortcode( '[contact-form-7 id="68" title="Contact form general"]' ); ?>
                        </div>
                    </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                      <div class="form-group" id="arr2">                      
                          <?php echo do_shortcode( '[contact-form-7 id="69" title="Contact form ventas"]' ); ?> 
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</div>
<?php get_footer(); ?>
<script>
    AOS.init({
      duration: 1200
    });
    jQuery('ul.expertise__list li.js-expertise-item a').click(function () {
      jQuery('ul.expertise__list li.js-expertise-item').removeClass('is-active');
      jQuery('ul.expertise__list').removeClass('has-active');
      jQuery(this).parent().addClass('is-active');
      jQuery(this).parent().parent().addClass('has-active');
    })
    jQuery(document).on("click", ".naccs .menu div", function () {
      var numberIndex = jQuery(this).index();

      if (!jQuery(this).is("active")) {
        jQuery(".naccs .menu div").removeClass("active");
        jQuery(".naccs ul li").removeClass("active");

        jQuery(this).addClass("active");
        jQuery(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

        var listItemHeight = jQuery(".naccs ul")
          .find("li:eq(" + numberIndex + ")")
          .innerHeight();
        // jQuery(".naccs ul").height(listItemHeight + "px");
      }
    });
    // jQuery(document).ready(function(){
    //   jQuery("input#Sebasti").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-sab").addClass("intro");
    //   });
    //   jQuery("input#EMPRESA").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-emp").addClass("intro");
    //   });
    //   jQuery("input#EMAIL").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-eml").addClass("intro");
    //   });
    //   jQuery("input#TELFONO").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-tel").addClass("intro");
    //   });
    //   jQuery("input#CUNTANOS").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-cqc").addClass("intro");
    //   });
    //   jQuery("div#arr2 input#Sebasti").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-sab-1").addClass("intro");
    //   });
    //   jQuery("div#arr2 input#EMPRESA").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-emp-1").addClass("intro");
    //   });
    //   jQuery("div#arr2 input#EMAIL").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-eml-1").addClass("intro");
    //   });
    //   jQuery("div#arr2 input#TELFONO").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-tel-1").addClass("intro");
    //   });
    //   jQuery("div#arr2 input#CUNTANOS").click(function(){
    //     jQuery("label.control-label.lx-lable.ss-cqc-1").addClass("intro");
    //   });
    // });
  </script>