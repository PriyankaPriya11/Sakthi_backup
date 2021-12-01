<?php global $wpdb; ?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
   
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel='stylesheet' href='https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css' media='all' />

<script src='https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js'></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
$(document).scrollTop(800); 
</script>

<style>

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
function showdata(str){
	
     $(".subbtns").trigger("click");
}
 
</script>


<div class="col-md-12" style="margin-bottom:230px">
<?php if(isset($_POST['searchbtn'])){
    session_destroy() ;
//header("Refresh:0");
}	?>
    <form method="post">
   <div class="col-md-4" style="float:left"><h3><a href=""  onclick="showdiv(this.id)"  id="div1">Select By Date</a></h3>
   <div class="div1 business">
      
       <p>From Date: <input type="date" name="fdate" class="form-control" onchange="showdata(this.value)" ></p>
         <p>To Date:<input type="date" name="tdate" class="form-control" ></p>
       </div>
   
   </div>
    <div class="col-md-4" style="float:left"><h3><a href=""  onclick="showdiv(this.id)"  id="div2">Select By Time</a></h3>
    
     <div class="div2 business">
    
       <p>From Time: <select class="form-control" name="ftime"><option value="">Select</option>
        <?php  $results = $wpdb->get_results( "SELECT *   FROM  wp_times order by id asc  "  );

    foreach ($results as $pages) {?>
    <option value="<?php  echo $pages->id; ?>"><?php  echo $pages->times; ?></option>
    <?php } ?>
       </select></p>
         <p>To Time:<select class="form-control" name="ttime"><option value="">Select</option>
        <?php  $results = $wpdb->get_results( "SELECT *   FROM  wp_times order by id asc  "  );

    foreach ($results as $pages) {?>
    <option value="<?php  echo $pages->id; ?>"><?php  echo $pages->times; ?></option>
    <?php } ?>
       </select></p>
       </div>
    </div>
    <div class="col-md-4" style="float:left"><h3><a href=""  onclick="showdiv(this.id)"  id="div3">Topic/Subtopic</a></h3>
     <div class="div3 business">
       <p>Topic: <select class="form-control" name="topic" ><option value="">Select</option>
        <?php  $results = $wpdb->get_results( "SELECT *   FROM  wp_categories where parent_id='0' order by category_id asc  "  );

    foreach ($results as $pages) {?>
    <option value="<?php  echo $pages->category_id; ?>"><?php  echo $pages->category; ?></option>
    <?php } ?>
       </select></p>
         <p>Subtopic:<select class="form-control" name="subtopic" ><option value="">Select</option>
        <?php  $results = $wpdb->get_results( "SELECT *   FROM  wp_categories where parent_id!='0' order by category_id asc  "  );

    foreach ($results as $pages) {?>
    <option value="<?php  echo $pages->category_id; ?>"><?php  echo $pages->category; ?></option>
    <?php } ?>
       </select></p>
       </div>
    </div>
    <div class="col-md-12" style="display:none">
       <button type="submit" name="searchbtn" class="subbtns" id="">Search</button>
        </div>
    </form>
</div>
<div class="col-md-12" style="margin-top:50px">
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
    <tbody>
        <?php  
		 if(isset($_POST['searchbtn'])){
			 $fromdate=$_POST['fdate'];
			 $todate=$_POST['tdate'];
			 $fromtime=$_POST['ftime'];
			 $totime=$_POST['ttime'];
			  $topic=$_POST['topic'];
			   $subtopic=$_POST['subtopic'];
			   
			   
			 $result = $wpdb->get_results( "SELECT t1.*,t2.times   FROM  wp_calender as t1,wp_times as t2 where t1.fromtime=t2.id and t1.fromdate='".$fromdate."'   order by cid desc limit 10 "  );
		
		 }else{
		
		$result = $wpdb->get_results( "SELECT t1.*,t2.times   FROM  wp_calender as t1,wp_times as t2 where t1.fromtime=t2.id order by cid desc limit 10 "  );
		 }
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
