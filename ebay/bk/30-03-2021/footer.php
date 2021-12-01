<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
		

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	

</div><!-- #page -->


<script>
jQuery(document).ready(function(){
            get_all_info();
          });
    jQuery(".maincategoryfirst").change(function(){
	    var html ='';
        jQuery(".secondtime").val("");
        jQuery(".enchilada").val("");
        var category_id= jQuery(".maincategoryfirst").val();
        var ajaxurl= "/wp-admin/admin-ajax.php";
        ajaxcall_for_topic();
			var category_id_new= jQuery(".maincategoryfirst").val();
			var child='<option value='+""+'>SELECT</option>';
			jQuery.ajax({
            data: { action: 'getchildvalues',category_id_new:category_id_new },
            type: 'POST',
            url: ajaxurl,
            dataType: 'json',
            success: function (data) {
              if(data!=null){ 
				for(var i=0;i<data.length;i++)
				{
					 child +='<option value='+data[i].termsid+'>'+data[i].termsname+'</option>';
				}
				jQuery('.childproduct').html(child);
              }
              else 
              {
                html='no results found';
              jQuery('.append_table').html(html);
              }
            }
            });
    });

	jQuery(".datesel1---").change(function(){
    jQuery(".maincategoryfirst").val("");
    jQuery(".subtopic").val("");
		var ajaxurl= "/wp-admin/admin-ajax.php";
		 var fromdate =jQuery(".enchilada").val();
     var fromtime=jQuery(".secondtimeone").val();
     var totime=jQuery(".secondtimetwo").val();
     var todayte =jQuery(".datesel2").val();
     var html='';
		 var child='';
     if(fromdate!="" &&todayte!="" && fromtime!="" &&  totime!="" )
     {
      get_all_date_and_time();
     }
     else 
      { 
			// jQuery.ajax({
      //       data: { action: 'get_date_format',fromdate:fromdate },
      //       type: 'POST',
      //       url: ajaxurl,
      //       dataType: 'json',
      //       success: function (data) {
      //         if(data!=null){ 
      //         for(var i=0;i<data.length;i++)
			// 	{
			// 		 html +='<tr><td>'+data[i].date+'</td>'+'<td>'+data[i].time+'</td>'+'<td>'+data[i].categoryname+'</td>'+'<td>'+data[i].childcatname+'</td><td><button><a href="'+data[i].registerlinks+'">Register Now</a></button></td></tr>';
			// 	}
			// 	jQuery('.append_table').html(html);
      //         }
      //         else 
      //       {
      //         html='no results found';
      //         jQuery('.append_table').html(html);
      //       }
			// 	//jQuery('.childproduct').html(child);
      //       }
      //       });
      }
		  });
          jQuery(".calenderreset").click(function(){
            jQuery(".enchilada").val("");
            get_all_info();
          });
          jQuery(".timereset").click(function(){
            // alert("coming");
            jQuery(".secondtimetwo").val("");
            jQuery(".secondtimeone").val("");
           var fromdate =jQuery(".datesel1").val();
          //  alert(fromdate);
           if(fromdate!="")
           {
            get_all_date_and_time();
           }
           else 
           {
            get_all_info();
           }
            // jQuery(".datesel2").val("");
            
           
          });
          jQuery(".topic-reset").click(function(){
            jQuery(".maincategoryfirst").val("");
            jQuery(".subtopic").val("");
            get_all_info();
          });

          jQuery(".subtopic").change(function(){
            //ajaxcall_for_topic();
            var ajaxurl= "/wp-admin/admin-ajax.php";
            var category_id =jQuery(".subtopic").val();
            // if(category_id==""){
            //     var category_id =jQuery(".maincategoryfirst").val();
            // }
            // var parentcategory=jQuery(".maincategoryfirst").val();
		 var html='';
			// alert(category_id_new);
			// jQuery.ajax({
      //       data: { action: 'subcategory_filter',category_id:category_id },
      //       type: 'POST',
      //       url: ajaxurl,
      //       dataType: 'json',
      //       success: function (data) {
      //           //console.log(data[0].date,"price");
      //           if(data!=null){ 
			// 	for(var i=0;i<data.length;i++)
			// 	{
			// 		 html +='<tr><td>'+data[i].date+'</td>'+'<td>'+data[i].time+'</td>'+'<td>'+data[i].categoryname+'</td>'+'<td>'+data[i].childcatname+'</td><td><button><a href="'+data[i].registerlinks+'">Register Now</a></button></td></tr>';
			// 	}
			// 	jQuery('.append_table').html(html);
      //       }
      //       else 
      //       {
      //         html='no results found';
      //         jQuery('.append_table').html(html);
      //       }
      //       }
      //       });
      jQuery("#myTable").dataTable().fnClearTable();
		jQuery("#myTable").dataTable().fnDraw();
		jQuery("#myTable").dataTable().fnDestroy();

      var table = jQuery('#myTable').DataTable({
    "ajax": {
    "url": "/wp-admin/admin-ajax.php",
    "type": "POST",
     "data": function ( d ) {
                 d.action = "subcategory_filter";
                 d.category_id = category_id;
            },
            
    },
    "columns": [
      {"data": 'order'},
            {"data": 'date'},
            {"data": 'time'},
            {"data": 'categoryname'},
            {"data": 'childcatname'},
            {"data": 'registerlinks'},
    ],
    "order": [[1, 'asc']],
    "pageLength": 5,
    "oLanguage": {"sEmptyTable": "No data found in the table"}
    });

          });
       

          function ajaxcall_for_topic(){
            //  alert("");
            var ajaxurl= "/wp-admin/admin-ajax.php";
            //var category_id = jQuery(".subtopic").val();
            // if(category_id==""){
            //     var category_id =jQuery(".maincategoryfirst").val();
            // }
            var parentcategory=jQuery(".maincategoryfirst").val();
		 var html='';
			// alert(category_id_new);
      // jQuery("#myTable").dataTable().Destroy();
      // jQuery("#myTable").dataTable().fnDestroy();
      // jQuery('#myTable').dataTable().fnClearTable();

      jQuery("#myTable").dataTable().fnClearTable();
		jQuery("#myTable").dataTable().fnDraw();
		jQuery("#myTable").dataTable().fnDestroy();

      // table.destroy();
      if(parentcategory=="")
      {
        get_all_info();
      }
      if(parentcategory!="")
      { 
      var table = jQuery('#myTable').DataTable({
    "ajax": {
    "url": "/wp-admin/admin-ajax.php",
    "type": "POST",
     "data": function ( d ) {
                 d.action = "variableproduct_set_paypal";
                 d.parentcategory = parentcategory;
            },      
    },
  
    "columns": [
      {"data": 'order'},
            {"data": 'date'},
            {"data": 'time'},
            {"data": 'categoryname'},
            {"data": 'childcatname'},
            {"data": 'registerlinks'},
    ],
    "order": [[1, 'asc']],
    "pageLength": 5,
    "oLanguage": {"sEmptyTable": "No data found in the table"}
    });
          }
    // table.ajax.reload();

			// jQuery.ajax({
      //       data: { action: 'variableproduct_set_paypal',parentcategory:parentcategory },
      //       type: 'POST',
      //       url: ajaxurl,
      //       dataType: 'json',
      //       success: function (data) {
      //           //console.log(data[0].date,"price");
      //           if(data!=null){ 
			// 	for(var i=0;i<data.length;i++)
			// 	{
			// 		 html +='<tr><td>'+data[i].date+'</td>'+'<td>'+data[i].time+'</td>'+'<td>'+data[i].categoryname+'</td>'+'<td>'+data[i].childcatname+'</td><td><button><a href="'+data[i].registerlinks+'">Register Now</a></button></td></tr>';
			// 	}
			// 	jQuery('.append_table').html(html);
      //       }
      //       else 
      //       {
      //         html='no results found';
      //         jQuery('.append_table').html(html);
      //       }
      //       }
      //       });
          }
    
          jQuery(".datesel2").change(function(){
     var ajaxurl= "/wp-admin/admin-ajax.php";
		 var fromdate =jQuery(".datesel1").val();
     var todayte =jQuery(".datesel2").val();
     var fromtime=jQuery(".secondtimeone").val();
     var totime=jQuery(".secondtimetwo").val();
     var html='';
		 var child='';
     if(fromdate!="" &&todayte!="" && fromtime!="" &&  totime!="" )
     {
      get_all_date_and_time();
     }
     else 
      { 
     if(fromdate==" " ||fromdate=="" )
     {
alert("Please Choose From Date");
return false;
     }

    //  table.destroy();
    jQuery("#myTable").dataTable().fnClearTable();
		jQuery("#myTable").dataTable().fnDraw();
		jQuery("#myTable").dataTable().fnDestroy();
     var table = jQuery('#myTable').DataTable({
    "ajax": {
    "url": "/wp-admin/admin-ajax.php",
    "type": "POST",
     "data": function ( d ) {
                 d.action = "form_to_date_ajax_call";
                 d.fromdate = fromdate;
                 d.todayte = todayte;
            },
            
    },
    "columns": [
      {"data": 'order'},
            {"data": 'date'},
            {"data": 'time'},
            {"data": 'categoryname'},
            {"data": 'childcatname'},
            {"data": 'registerlinks'},
    ],
    "order": [[1, 'asc']],
    "pageLength": 5,
    "oLanguage": {"sEmptyTable": "No data found in the table"}
    });

			// jQuery.ajax({
      //       data: { action: 'form_to_date_ajax_call',fromdate:fromdate,todayte:todayte },
      //       type: 'POST',
      //       url: ajaxurl,
      //       dataType: 'json',
      //       success: function (data) {
      //         if(data!=null){ 
      //         for(var i=0;i<data.length;i++)
			// 	{
			// 		 html +='<tr><td>'+data[i].date+'</td>'+'<td>'+data[i].time+'</td>'+'<td>'+data[i].categoryname+'</td>'+'<td>'+data[i].childcatname+'</td><td><button><a href="'+data[i].registerlinks+'">Register Now</a></button></td></tr>';
			// 	}
			// 	jQuery('.append_table').html(html);
      //       }
      //       else 
      //       {
      //         html='no results found';
      //         jQuery('.append_table').html(html);
      //       }
      //       }
      //       });
      }
		  });
      jQuery(".secondtimeone").change(function(){
     var ajaxurl= "/wp-admin/admin-ajax.php";
		 var fromdate =jQuery(".datesel1").val();
     var todayte =jQuery(".datesel2").val();
     var fromtime=jQuery(".secondtimeone").val();
     var totime=jQuery(".secondtimetwo").val();
     var html='';
		 var child='';  
     if(fromdate!="" &&todayte!="" && fromtime!="" &&  totime!="" )
     {
      get_all_date_and_time();
     }
     else 
      { 
     if(fromdate==" " ||fromdate=="" )
     {
alert("Please Choose From Date");
return false;
     }
     jQuery("#myTable").dataTable().fnClearTable();
		jQuery("#myTable").dataTable().fnDraw();
		jQuery("#myTable").dataTable().fnDestroy();
     var table = jQuery('#myTable').DataTable({
    "ajax": {
    "url": "/wp-admin/admin-ajax.php",
    "type": "POST",
     "data": function ( d ) {
                 d.action = "timebased_filtering";
                 d.fromdate = fromdate;
                 d.todayte = todayte;
                 d.fromtime = fromtime;
                 d.totime = totime;
            },
            
    },
    "columns": [
      {"data": 'order'},
            {"data": 'date'},
            {"data": 'time'},
            {"data": 'categoryname'},
            {"data": 'childcatname'},
            {"data": 'registerlinks'},
    ],
    "order": [[1, 'asc']],
    "pageLength": 5,
    "oLanguage": {"sEmptyTable": "No data found in the table"}
    });

			// jQuery.ajax({
      //       data: { action: 'timebased_filtering',fromdate:fromdate,todayte:todayte,fromtime:fromtime,totime:totime },
      //       type: 'POST',
      //       url: ajaxurl,
      //       dataType: 'json',
      //       success: function (data) {
      //         if(data!=null){ 
      //         for(var i=0;i<data.length;i++)
			// 	{
			// 		 html +='<tr><td>'+data[i].date+'</td>'+'<td>'+data[i].time+'</td>'+'<td>'+data[i].categoryname+'</td>'+'<td>'+data[i].childcatname+'</td><td><button><a href="'+data[i].registerlinks+'">Register Now</a></button></td></tr>';
			// 	}
			// 	jQuery('.append_table').html(html);
      //       }
      //       else 
      //       {
      //         html='no results found';
      //         jQuery('.append_table').html(html);
      //       }
      //       }
           
      //       });
      }
		  });

      jQuery(".secondtimetwo").change(function(){
        var ajaxurl= "/wp-admin/admin-ajax.php";
var fromdate =jQuery(".datesel1").val();
var todayte =jQuery(".datesel2").val();
var fromtime=jQuery(".secondtimeone").val();
var totime=jQuery(".secondtimetwo").val();
        if((fromdate==" " ||fromdate=="") || (fromtime=="") )
{
alert("Please Choose From Date and from time");
return false;
}
        get_all_date_and_time();
 });

 function get_all_date_and_time(){
  var ajaxurl= "/wp-admin/admin-ajax.php";
var fromdate =jQuery(".datesel1").val();
var todayte =jQuery(".datesel2").val();
var fromtime=jQuery(".secondtimeone").val();
var totime=jQuery(".secondtimetwo").val();
var html='';

// table.destroy();
jQuery("#myTable").dataTable().fnClearTable();
		jQuery("#myTable").dataTable().fnDraw();
		jQuery("#myTable").dataTable().fnDestroy();
var table = jQuery('#myTable').DataTable({
    "ajax": {
    "url": "/wp-admin/admin-ajax.php",
    "type": "POST",
     "data": function ( d ) {
                 d.action = "timebased_filtering";
                 d.fromdate = fromdate;
                 d.todayte = todayte;
                 d.fromtime = fromtime;
                 d.totime = totime;
            },
            
    },
    "columns": [
         {"data": 'order'},
            {"data": 'date'},
            {"data": 'time'},
            {"data": 'categoryname'},
            {"data": 'childcatname'},
            {"data": 'registerlinks'},
    ],
    "order": [[1, 'asc']],
    "pageLength": 5,
    "oLanguage": {"sEmptyTable": "No data found in the table"}
    });

//  jQuery.ajax({
//        data: { action: 'timebased_filtering',fromdate:fromdate,todayte:todayte,fromtime:fromtime,totime:totime },

//        });
 }
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>	
			<link href="<?php echo get_template_directory_uri(); ?>/css/fontawesome.css" rel="stylesheet" media="print" onload="this.media='all'">	
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.css" rel="stylesheet" />
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="http://ebay.alldemosite.com/wp-content/themes/twentytwentyone/assets/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script>
jQuery(document).ready(function() {
// 	// jQuery('#myTable').DataTable({ "pageLength": 3 } );
//  jQuery('#myTable').DataTable({ "pageLength": 3 } );
});
</script>
<!-- <script>
 jQuery(".testdatatableajax").click(function(){
    var table = jQuery('#myTdfable').DataTable({
    "ajax": {
    "url": "/wp-admin/admin-ajax.php",
    "type": "POST",
     "data": function ( d ) {
                 d.action = "get_alldata_ajaxcall";
                 d.user_id = jQuery("body").find('.user_list_cpe').val();
            },
    },
    "columns": [
             {
              "className":'details-control',
              "orderable":false,
              "data":null,
              "defaultContent": ''
            },
            {"data": 'date'},
            {"data": 'categoryname'},
            {"data": 'childcatname'},
            {"data": 'categoryname'},
            {"data": 'registerlinks'},
            {"data": 'registerlinks'},
    ],
    "order": [[1, 'asc']]
    });
  });
</script> -->
<script>
jQuery(".datesel1").change(function(){
  jQuery(".maincategoryfirst").val("");
    jQuery(".subtopic").val("");
		// var ajaxurl= "/wp-admin/admin-ajax.php";
		 var fromdate =jQuery(".enchilada").val();
     var fromtime=jQuery(".secondtimeone").val();
     var totime=jQuery(".secondtimetwo").val();
     var todayte =jQuery(".datesel2").val();
  // alert("TESt");
  // table.destroy();
  jQuery("#myTable").dataTable().fnClearTable();
		jQuery("#myTable").dataTable().fnDraw();
		jQuery("#myTable").dataTable().fnDestroy();

  var table = jQuery('#myTable').DataTable({
    
    "ajax": {
    "url": "/wp-admin/admin-ajax.php",
    "type": "POST",
     "data": function ( d ) {
                 d.action = "get_date_format";
                 d.fromdate = fromdate;
            },
  
    },

    "columns": [
            {"data": 'order'},
            {"data": 'date'},
            {"data": 'time'},
            {"data": 'categoryname'},
            {"data": 'childcatname'},
            {"data": 'registerlinks'},
    ],
  
    "order": [[1, 'asc']],
    "pageLength": 5,
    "oLanguage": {"sEmptyTable": "No data found in the table"}
    
    });
          });




          function get_all_info(){
            // table.destroy();
            jQuery("#myTable").dataTable().fnClearTable();
		jQuery("#myTable").dataTable().fnDraw();
		jQuery("#myTable").dataTable().fnDestroy();
                  var table = jQuery('#myTable').DataTable({
    "ajax": {
    "url": "/wp-admin/admin-ajax.php",
    "type": "POST",
     "data": function ( d ) {
                 d.action = "get_alldata_ajaxcall";
            },
            
    },
    "columns": [
      {"data": 'order'},
            {"data": 'date'},
            {"data": 'time'},
            {"data": 'categoryname'},
            {"data": 'childcatname'},
            {"data": 'registerlinks'},
    ],
    "order": [[1, 'asc']],
    "pageLength": 5,
    "oLanguage": {"sEmptyTable": "No data found in the table"}
    });



          }

          window.addEventListener('scroll', function (e) {
        var box = document.querySelector('header');
        var x = window.scrollY;
        if (x >= 1) {
            box.classList.add("stick");
        } else {
            box.classList.remove("stick");
        }
});

</script>
<?php wp_footer(); ?>

</body>
</html>

	
			