<?php global $wpdb; ?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
   
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src='https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js'></script>
<script>
    jQuery(document).ready(function() {
      jQuery('#example').DataTable();
} );
jQuery(document).scrollTop(800); 

</script>

<style>

.dataTables_length{
    display:none;
}
.dataTables_filter{
    display:none;
}.dataTables_info{
    display:none;
}
    .div1{
        display:none;
    }
      .div2{
        display:none;
    }
    .div3{
        display:none;
    }
  
   
</style>
<script>
    function showdiv(str)
{
  event.preventDefault();
		 var optionValue = str;
            if(optionValue){
               // $(".business").not("." + optionValue).hide();
                $("." + optionValue).toggle();
	
            } else{
                $(".business").hide();
            }
	
}	
  function resetdate()
{
  event.preventDefault();
  document.getElementById("fdate").value = "";
     document.getElementById("tdate").value = "";
	 showdata(1);
}
 function resettime()
{
  event.preventDefault();
  document.getElementById("ftime").value = "";
     document.getElementById("ttime").value = "";
	 showdata(1);
}
 function resetcat()
{
  event.preventDefault();
  document.getElementById("topic").value = "";
     document.getElementById("subtopic").value = "";
	 showdata(1);
}
 
</script>


<div class="container">

       
    <form method="post" name="contact-me">
        <div class="row">
   <div class="col-md-4 text-center"><a href=""  onclick="showdiv(this.id)"  id="div1"><h3 class="btn btn-sm btn-theme">Select By Date</h3></a>
   <div class="div1 business" style="text-align:left">
      
       <p>From Date: <input type="date" name="fdate" class="form-control" id="fdate" onchange="showdata(this.value)" ></p>
         <p>To Date:<input type="date" name="tdate" class="form-control" id="tdate" onchange="showdata(this.value)" ></p>
		 <p><a href="" style="padding:5px;float:right" class="btn btn-sm btn-theme black-hover" onclick="resetdate()" >Reset</a></p>
       </div>
   
   </div>
    <div class="col-md-4 text-center"><a href=""  onclick="showdiv(this.id)"  id="div2"><h3 class="btn btn-sm btn-theme">Select By Time</h3></a>
    
     <div class="div2 business" style="text-align:left">
    
       <p>From Time: <select class="form-control" name="ftime" id="ftime" onchange="showdata(this.value)"><option value="">Select</option>
        <?php  $results = $wpdb->get_results( "SELECT *   FROM  wp_times order by id asc  "  );

    foreach ($results as $pages) {?>
    <option value="<?php  echo $pages->id; ?>"><?php  echo $pages->times; ?></option>
    <?php } ?>
       </select></p>
         <p>To Time:<select class="form-control" name="ttime" id="ttime" onchange="showdata(this.value)"><option value="">Select</option>
        <?php  $results = $wpdb->get_results( "SELECT *   FROM  wp_times order by id asc  "  );

    foreach ($results as $pages) {?>
    <option value="<?php  echo $pages->id; ?>"><?php  echo $pages->times; ?></option>
    <?php } ?>
       </select></p>
	    <p><a href="" style="padding:5px;float:right" class="btn btn-sm btn-theme black-hover" onclick="resettime()" >Reset</a></p>
       </div>
    </div>
    <div class="col-md-4 text-center"><a href=""  onclick="showdiv(this.id)"  id="div3"><h3 class="btn btn-sm btn-theme">Topic/Subtopic</h3></a>
     <div class="div3 business" style="text-align:left">
       <p>Topic: <select class="form-control" name="topic" id="topic" onchange="showtest(this.value)" ><option value="">Select</option>
        <?php  $results = $wpdb->get_results( "SELECT *   FROM  wp_categories where parent_id='0' order by category_id asc  "  );

    foreach ($results as $pages) {?>
    <option value="<?php  echo $pages->category_id; ?>"><?php  echo $pages->category; ?></option>
    <?php } ?>
       </select></p>
         <p id="showtestdiv">Subtopic:<select class="form-control" name="subtopic" id="subtopic" onchange="showdata(this.value)" ><option value="">Select</option>
        <?php  $results = $wpdb->get_results( "SELECT *   FROM  wp_categories where parent_id!='0' order by category_id asc  "  );

    foreach ($results as $pages) {?>
    <option value="<?php  echo $pages->category_id; ?>"><?php  echo $pages->category; ?></option>
    <?php } ?>
       </select></p>
	    <p><a href="" style="padding:5px;float:right" class="btn btn-sm btn-theme black-hover" onclick="resetcat()" >Reset</a></p>
       </div>
    </div>
	 <input type="hidden" name="action" value="send_form" style="display: none; visibility: hidden; opacity: 0;">
   
    <div class="col-md-12" style="display:none">
       <button type="submit" name="searchbtn" class="subbtns" id="">Search</button>
        </div>
   
</div>
 </form>
</div>
<div style="width:100%;clear:both"></div>
<div class="container" style="margin-top:2em">
    <div class="row">
    <div class="table-responsive">    
		
  <table class="table" id="example">
    <thead>
      <tr>
        <th>#</th>
        <th>Date</th>
        <th>Time</th>
        <th>Topic</th>
        <th>Sub-Topic</th>
        <th>Register</th>
      </tr>
    </thead>
    <tbody id="wpajaxdisplay">
        <?php  
	
		
		$result = $wpdb->get_results( "SELECT t1.*,t2.times   FROM  wp_calender as t1,wp_times as t2 where t1.fromtime=t2.id order by cid desc limit 10 "  );
		 
		$ctr=0;
    foreach ($result as $page) {
          $ctr++;
$cat = $wpdb->get_row("SELECT category FROM wp_categories WHERE category_id='".$page->category_id."' ");
$subcat = $wpdb->get_row("SELECT category FROM wp_categories WHERE category_id='".$page->subcategory_id."' ");
    ?>
      <tr>
        <td><?php echo $ctr; ?></td>
        <td><?php  echo $page->fromdate; ?></td>
        <td><?php  echo $page->times; ?></td>
        <td><?php  echo $cat->category; ?></td>
        <td><?php  echo $subcat->category; ?></td>
        <td><a href="" class="btn btn-sm btn-theme black-hover">Register Now</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
   </div>
    </div>
