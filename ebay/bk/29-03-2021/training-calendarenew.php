<?php
/* Template Name:Training Calender*/
get_header();
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/training-calender-css/custom.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/training-calender-css/carousel.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<style>
div#myTable_filter {
    display: none;
}
div#myTable_length {
    display: none;
}
div#myTable_info {
    display: none;
}
</style>

<!-- <!DOCTYPE Html>
<title>ebay</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body> -->
<div class="ss-slider">
    <div id="image-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/training-img/1.png" alt="ss-ig">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/training-img/1.png" alt="ss-ig">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/training-img/1.png" alt="ss-ig">
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="ss-main-sec">
    <div class="ss-container">
        <h2>Upcoming Seller Training Sessions</h2>
        <hr>
        <div class="ss-form">
            <div class="row">
                <div class="ss-col-33">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/training-img/date.png" alt="ss-ig">
                    <div class="ss-form-cle">SELECT BY DATE</div>                   
                    <div class="ss-datepick">
                        <h4>Choose date for the training</h4>
                        <div class="ss-from-date">
                            <h5>From Date:</h5>
                            <div class="quesadilla">
                                <input type="date" class='date enchilada datesel1' required />
                            </div>
                        </div>
                        <div class="ss-from-date">
                            <h5>To Date:</h5>
                            <input type="date" class='date enchilada datesel2' required />
                        </div>
                        <button class="ss-reset calenderreset">RESET</button>
                    </div>
                </div>
                <div class="ss-col-33">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/training-img/Tt.png" alt="ss-ig">
                    <div class="ss-form-cle">SELECT BY TIME</div>                   
                    <div class="ss-datepick">
                        <h4>Choose time for the training</h4>
                        <div class="ss-from-date">
                            <h5>From Time:</h5>
                            <div class="quesadilla">
                                <select name="time" class="secondtime secondtimeone" id="time">
                                <option value="">SELECT</option>
                                <option value="12:00AM">12:00AM</option>
                                <option value="12:30AM">12:30AM</option>
                                <option value="1:00AM">1:00AM</option>
                                <option value="1:30AM">1:30AM</option>
                                <option value="2:00AM">2:00AM</option>
                                <option value="2:30AM">2:30AM</option>
                                <option value="3:00AM">3:00AM</option>
                                <option value="3:30AM">3:30AM</option>
                                <option value="4:00AM">4:00AM</option>
                                <option value="4:30AM">4:30AM</option>
                                <option value="5:00AM">5:00AM</option>
                                <option value="5:30AM">5:30AM</option>
                                <option value="6:00AM">6:00AM</option>
                                <option value="6:30AM">6:30AM</option>
                                <option value="7:00AM">7:00AM</option>
                                <option value="7:30AM">7:30AM</option>
                                <option value="8:00AM">8:00AM</option>
                                <option value="8:30AM">8:30AM</option>
                                <option value="9:00AM">9:00AM</option>
                                <option value="9:30AM">9:30AM</option>
                                <option value="10:00AM">10:00AM</option>
                                <option value="10:30AM">10:30AM</option>
                                <option value="11:00AM">11:00AM</option>
                                <option value="11:30AM">11:30AM</option>
                                <option value="12:00PM">12:00PM</option>
                                <option value="12:30PM">12:30PM</option>
                                <option value="1:00PM">1:00PM</option>
                                <option value="1:30PM">1:30PM</option>
                                <option value="2:00PM">2:00PM</option>
                                <option value="2:30PM">2:30PM</option>
                                <option value="3:00PM">3:00PM</option>
                                <option value="3:30PM">3:30PM</option>
                                <option value="4:00PM">4:00PM</option>
                                <option value="4:30PM">4:30PM</option>
                                <option value="5:00PM">5:00PM</option>
                                <option value="5:30PM">5:30PM</option>
                                <option value="6:00PM">6:00PM</option>
                                <option value="6:30PM">6:30PM</option>
                                <option value="7:00PM">7:00PM</option>
                                <option value="7:30PM">7:30PM</option>
                                <option value="8:00PM">8:00PM</option>
                                <option value="8:30PM">8:30PM</option>
                                <option value="9:00PM">9:00PM</option>
                                <option value="9:30PM">9:30PM</option>
                                <option value="10:00PM">10:00PM</option>
                                <option value="10:30PM">10:30PM</option>
                                <option value="11:00PM">11:00PM</option>
                                <option value="11:30PM">11:30PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="ss-from-date">
                            <h5>To Time:</h5>
                            <select name="time" class="secondtime secondtimetwo" id="time">
                            <option value="">SELECT</option>
                            <option value="12:00AM">12:00AM</option>
                                <option value="12:30AM">12:30AM</option>
                                <option value="1:00AM">1:00AM</option>
                                <option value="1:30AM">1:30AM</option>
                                <option value="2:00AM">2:00AM</option>
                                <option value="2:30AM">2:30AM</option>
                                <option value="3:00AM">3:00AM</option>
                                <option value="3:30AM">3:30AM</option>
                                <option value="4:00AM">4:00AM</option>
                                <option value="4:30AM">4:30AM</option>
                                <option value="5:00AM">5:00AM</option>
                                <option value="5:30AM">5:30AM</option>
                                <option value="6:00AM">6:00AM</option>
                                <option value="6:30AM">6:30AM</option>
                                <option value="7:00AM">7:00AM</option>
                                <option value="7:30AM">7:30AM</option>
                                <option value="8:00AM">8:00AM</option>
                                <option value="8:30AM">8:30AM</option>
                                <option value="9:00AM">9:00AM</option>
                                <option value="9:30AM">9:30AM</option>
                                <option value="10:00AM">10:00AM</option>
                                <option value="10:30AM">10:30AM</option>
                                <option value="11:00AM">11:00AM</option>
                                <option value="11:30AM">11:30AM</option>
                                <option value="12:00PM">12:00PM</option>
                                <option value="12:30PM">12:30PM</option>
                                <option value="1:00PM">1:00PM</option>
                                <option value="1:30PM">1:30PM</option>
                                <option value="2:00PM">2:00PM</option>
                                <option value="2:30PM">2:30PM</option>
                                <option value="3:00PM">3:00PM</option>
                                <option value="3:30PM">3:30PM</option>
                                <option value="4:00PM">4:00PM</option>
                                <option value="4:30PM">4:30PM</option>
                                <option value="5:00PM">5:00PM</option>
                                <option value="5:30PM">5:30PM</option>
                                <option value="6:00PM">6:00PM</option>
                                <option value="6:30PM">6:30PM</option>
                                <option value="7:00PM">7:00PM</option>
                                <option value="7:30PM">7:30PM</option>
                                <option value="8:00PM">8:00PM</option>
                                <option value="8:30PM">8:30PM</option>
                                <option value="9:00PM">9:00PM</option>
                                <option value="9:30PM">9:30PM</option>
                                <option value="10:00PM">10:00PM</option>
                                <option value="10:30PM">10:30PM</option>
                                <option value="11:00PM">11:00PM</option>
                                <option value="11:30PM">11:30PM</option>
                            </select>
                        </div>
                        <button class="ss-reset timereset">RESET</button>
                    </div>
                </div>
                <div class="ss-col-33">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/training-img/topic.png" alt="ss-ig">
                    <div class="ss-form-cle">SELECT BY TOPIC</div>                   
                    <div class="ss-datepick">
                        <h4>Choose topic</h4>
                        <div class="ss-from-date">
                            <h5>Topic:</h5>
                            <div class="quesadilla">
                            <?php
                                $taxonomy = 'calender';
                                $tax_terms = get_terms($taxonomy, array('hide_empty' => false)); 
                                
                                // print_r($tax_terms);
                                ?>
                                <select name="text" class="maincategoryfirst" id="topic">
                                      <option value="">SELECT</option>
                                 <?php foreach ($tax_terms as $tersms) {
                                     if($tersms->parent==0){ 
                                       //  print_r($tersms);
                                         ?>
                                 <option value="<?php echo $tersms->term_id; ?>"><?php echo $tersms->name; ?></option>
                                 <?php }
                                }?>
                                 </select>
                            </div>
                        </div>
                        <div class="ss-from-date">
                            <h5>Subtopic:</h5>
                            <select name="text" class="childproduct subtopic" id="topic">
                                      <option value="">SELECT</option>
                                 </select>
                        </div>
                        <button class="ss-reset topic-reset">RESET</button>
                    </div>
                </div>
            </div>

            <div class="ss-table">
                <div id="image-slider-table" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">                                
                                <div class="table-responsive">
                                    <table class="table table-hover table-dark border-light" id="myTable">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Subtopic</th>
                                        <th scope="col">Register</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr> 
                               
                                  
                                </tbody>
                                    </table>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="table-responsive">
                                    <table class="table table-hover table-dark border-light">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Subtopic</th>
                                        <th scope="col">Register</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td scope="row">1</td>
                                        <td>01/01/2021</td>
                                        <td>11:00 AM</td>
                                        <td>Lorem Ipsum has been the industry's</td>
                                        <td>long established fact that a reader</td>
                                        <td>Register Now</td>
                                        </tr>
                                        <tr>
                                        <td scope="row">2</td>
                                        <td>02/01/2021</td>
                                        <td>12:00 PM</td>
                                        <td>Lorem Ipsum has been the industry's</td>
                                        <td>long established fact that a reader</td>
                                        <td>Register Now</td>
                                        </tr>
                                        <tr>
                                        <td scope="row">3</td>
                                        <td>03/01/2021</td>
                                        <td>01:00 PM</td>
                                        <td>Lorem Ipsum has been the industry's</td>
                                        <td>long established fact that a reader</td>
                                        <td>Register Now</td>
                                        </tr>
                                    </tbody>
                                
                                    </table>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="table-responsive">
                                    <table class="table table-hover table-dark border-light">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Subtopic</th>
                                        <th scope="col">Register</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>01/01/2021</td>
                                        <td>11:00 AM</td>
                                        <td>Lorem Ipsum has been the industry's</td>
                                        <td>long established fact that a reader</td>
                                        <td>Register Now</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>02/01/2021</td>
                                        <td>12:00 PM</td>
                                        <td>Lorem Ipsum has been the industry's</td>
                                        <td>long established fact that a reader</td>
                                        <td>Register Now</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>03/01/2021</td>
                                        <td>01:00 PM</td>
                                        <td>Lorem Ipsum has been the industry's</td>
                                        <td>long established fact that a reader</td>
                                        <td>Register Now</td>
                                        </tr>
                                    </tbody>
                                
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/carousel-js/carousel.min.js"></script>
<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-slider', {
            perPage    : 1,
            breakpoints: {
                600: {
                    perPage: 1,
                }
            }
        } ).mount();
    } );
    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-slider-table', {
            perPage    : 1,
            drag: false,
            breakpoints: {
                600: {
                    perPage: 1,
                }
            }
        } ).mount();
    } );
</script>
<!-- </body> -->
</div>
<?php  
        $taxonomy = 'calender';
        $tax_terms = get_terms($taxonomy, array('hide_empty' => false));
        $args = array(
    'numberposts' => 10,
    'post_type'   => 'trainingcalender',
    );
    $latest_books = get_posts( $args );

                                     foreach($latest_books as $calender){
                                        $term = get_term($calender->ID, 'calender' );
                                        $date = get_post_meta($calender->ID,"main_category",true);
                                        $time = get_post_meta($calender->ID,"registration_to_time",true);
                                        $registerlink = get_post_meta($calender->ID,"registernow_link",true);
                                        $date=date_create($date);
                                         $datesformt= date_format($date,"Y-m-d"); 
                                        if($datesformt=='2021-03-11')
                                        {
                                            // echo $calender->ID;
                                            // echo "<br/>";

                                        }

                                       ?>
                                <?php    } ?>


<?php 


get_footer();
?>