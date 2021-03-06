<?php 
/**
 * Template Name: contact
 */
get_header(); ?>
<div class="naccs">
      <div class="container">
      <h1>Contacto</h1>
        <div class="grid">
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
            </div>
            <div class="gc gc--2-of-3">
              <ul class="nacc">
                <li class="active">
                  <div>
                    <div class="col-md-12" data-aos="fade-up">
                      <div class="row">
                      <div class="form-group" id="arr1">
                      <div class="row">
                      <?php echo do_shortcode( '[contact-form-7 id="68" title="Contact form general"]' ); ?> 
                        <!-- <div class="col-sm-6 lx-seb1">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">Sebasti</label>
                            <input type="text" name="name" class="form-control" id="Sebasti">
                          </div>
                        </div>
                        <div class="col-sm-6 lx-seb1">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">EMPRESA</label>
                            <input type="text" name="name" class="form-control" id="EMPRESA">
                          </div>
                        </div>
                        <div class="col-sm-6 lx-seb1">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">EMAIL</label>
                            <input type="text" name="name" class="form-control" id="EMAIL">
                          </div>
                        </div>
                        <div class="col-sm-6 lx-seb1">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">TEL??FONO</label>
                            <input type="text" name="name" class="form-control" id="TEL??FONO">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">CU??NTANOS, ??QU?? NECESITAS?</label>
                            <input type="text" name="name" class="form-control" id="CU??NTANOS">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="lx-he-leido">
                            <div class="row">
                              <div class="col-sm-6 lx-radio">
                                <label class="radio-inline">
                                  <input type="radio" class="mr-1" value="agree"> He le??do y acepto la <a href="#"
                                    class="lx-a-poli">pol??tica de privacidad</a>
                                </label>
                              </div>
                              <div class="col-sm-6 lx-left">
                                <a href="#" class="lx-enviar">ENVIAR</a>
                              </div>
                            </div>
                          </div>
                        </div>--> 
                      </div>
                    </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="form-group" id="arr2">
                      <div class="row">
                      <?php echo do_shortcode( '[contact-form-7 id="69" title="Contact form ventas"]' ); ?> 
                        <!-- <div class="col-sm-6 lx-seb1">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">Sebasti</label>
                            <input type="text" name="name" class="form-control" id="Sebasti">
                          </div>
                        </div>
                        <div class="col-sm-6 lx-seb1">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">EMPRESA</label>
                            <input type="text" name="name" class="form-control" id="EMPRESA">
                          </div>
                        </div>
                        <div class="col-sm-6 lx-seb1">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">EMAIL</label>
                            <input type="text" name="name" class="form-control" id="EMAIL">
                          </div>
                        </div>
                        <div class="col-sm-6 lx-seb1">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">TEL??FONO</label>
                            <input type="text" name="name" class="form-control" id="TEL??FONO">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="row">
                            <label for="name" class="control-label lx-lable">CU??NTANOS, ??QU?? NECESITAS?</label>
                            <input type="text" name="name" class="form-control" id="CU??NTANOS">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="lx-he-leido">
                            <div class="row">
                              <div class="col-sm-6 lx-radio">
                                <label class="radio-inline">
                                  <input type="radio" class="mr-1" value="agree"> He le??do y acepto la <a href="#"
                                    class="lx-a-poli">pol??tica de privacidad</a>
                                </label>
                              </div>
                              <div class="col-sm-6 lx-left">
                                <a href="#" class="lx-enviar">ENVIAR</a>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
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
    $(document).on("click", ".naccs .menu div", function () {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
        $(".naccs .menu div").removeClass("active");
        $(".naccs ul li").removeClass("active");

        $(this).addClass("active");
        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

        var listItemHeight = $(".naccs ul")
          .find("li:eq(" + numberIndex + ")")
          .innerHeight();
        // $(".naccs ul").height(listItemHeight + "px");
      }
    });
  </script>