<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use kartik\widgets\DatePicker;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model backend\models\PaymentPlan */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="modal-dialog modal-sm" style="width:450px;height:300px;">
  	<div class="modal-content">
		<div class="modal-header model-custom-header">
			<button type="button" class="close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
			</button>
			<?php if(Yii::$app->controller->action->id == 'create'  || Yii::$app->controller->action->id == 'zenith_create') { ?>
			<h4 class="modal-title" id="modalLabel">Add Plan</h4>	
			<?php } else { ?>
			<h4 class="modal-title" id="modalLabel">Update Plan</h4>	
			<?php } ?>
		  </div>
		  <div class="modal-body">
			<div class="gadget-details-index">
			<?php
			
				$gadget_type_array = array('1'=>'Single Gadget','2'=>'Multiple Gadget');
				$process_type_array = array('1'=>'Monthly','2'=>'Annual');
				$cover_limit_array = array('100'=>'100','200'=>'200','300'=>'300','400'=>'400','500'=>'500','600'=>'600','700'=>'700','750'=>'750','800'=>'800','900'=>'900','1000'=>'1000','1100'=>'1100','1150'=>'1150','1200'=>'1200','1250'=>'1250','1300'=>'1300','1400'=>'1400','1500'=>'1500','1750'=>'1750','1800'=>'1800','2000'=>'2000','2250'=>'2250','2500'=>'2500','2750'=>'2750','3000'=>'3000','3500'=>'3500','4000'=>'4000','5000'=>'5000','6000'=>'6000','7000'=>'7000','8000'=>'8000','9000'=>'9000','10000'=>'10000','15000'=>'15000','20000'=>'20000','25000'=>'25000','30000'=>'30000');
			?>
			<?php
$form = ActiveForm::begin([
        'id' => 'payment-form',
		//'enableClientValidation'=>false,
         //'enableAjaxValidation' => true,
        //'action' => Url::toRoute('payment-plan/create'),
         //'validationUrl' => Url::toRoute('gadget-details/create')
		]);
?>			<div class="col-md-12" style="text-align:center;">		
				<?php if($allow_update == true) {
					echo "<div class='help-block' style='font-size:12px;color:red'><b>Note</b> : This cover has been already to added to one of the policy, so not able to modify some fields.</div>";
				} ?>
			</div>
			<div class="col-md-12">			
				<div class="col-md-6">
					<div>
						<?= $form->field($model, 'amount_limit')->dropDownList($cover_limit_array,['prompt'=>'--Select--','readonly'=>$allow_update]); ?>
					</div>
				</div>
				<div class="col-md-6">
					<div>	
						<?= $form->field($model, 'gadget_type')->dropDownList($gadget_type_array,['prompt'=>'--Select--','readonly'=>$allow_update]); ?>
					</div>
				</div>
			</div>	
			<div class="col-md-12">			
				<div class="col-md-6">
					<div>
						<?= $form->field($model, 'process_type')->dropDownList($process_type_array,['prompt'=>'--Select--','readonly'=>$allow_update])->label('Term'); ?>
					</div>
				</div>
				</div>	
							
			<div class="col-md-12">	
				<div class="col-md-6">
					<div>	
						<?php	
						if(isset($model->buy_amount) && $model->buy_amount>0) {
							$model->buy_amount = number_format((float)$model->buy_amount, 2, '.', '');						
						}
						echo $form->field($model, 'buy_amount')->textInput(['maxlength'=>8,'readonly'=>$allow_update, 'id'=>'buyamount']) ?>
					</div>
				</div>
				<div class="col-md-6">
					<div>	
						<?php						
						if(isset($model->amount) && $model->amount>0) {
							$model->amount = number_format((float)$model->amount, 2, '.', '');							
						}
						echo $form->field($model, 'amount')->textInput(['maxlength'=>8,'readonly'=>$allow_update, 'id'=>'sellamount']) ?>
					</div>
				</div>
			</div>		
			<div class="col-md-12">
			<div class="col-md-6">
				<div>							
					<?= $form->field($model, 'commission_amount')->textInput(['maxlength'=>8,'readonly'=>$allow_update, 'id'=>'commission_amount']) ?>
				</div>
			</div>
			<div class="col-md-6">
				<div>							
					<?= $form->field($model, 'commission_percentage')->textInput(['maxlength'=>8,'readonly'=>$allow_update,'id'=>'commission_percentage']) ?>
				</div>
			</div>
			</div>
			<div class="col-md-12">			
				<div class="col-md-6">
					<div>
						<?php
						if(isset($model->discounted_sell_amt) && $model->discounted_sell_amt>0) {
							$model->discounted_sell_amt = number_format((float)$model->discounted_sell_amt, 2, '.', '');							
						}
						echo $form->field($model, 'discounted_sell_amt')->textInput(['maxlength'=>8, 'id'=>'discounted_sell_amt']) ?>
						<span class="discount_sell_amount" style="color:#a94442;display: block; margin-top: 5px; margin-bottom: 10px;font-size: 14px;"></span>
					</div>
				</div>
				<div class="col-md-6">
					<div>							
					<?php
						if(isset($model->discounted_amount) && $model->discounted_amount>0) {
							$model->discounted_amount = number_format((float)$model->discounted_amount, 2, '.', '');						
						}
						echo $form->field($model, 'discounted_amount')->textInput(['maxlength'=>8, 'id'=>'discounted_amount']) ?>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-4">
					<div>							
						<?= $form->field($model, 'discounted_commission')->textInput(['maxlength'=>8, 'id'=>'discounted_commission']) ?>
					</div>
				</div>
				<div class="col-md-2">
					<div>	
						<?= $form->field($model, 'plan_status')->checkbox()->label('Status'); ?>
					</div>
				</div>
				<div class="col-md-2">
					<div>	
						<?= $form->field($model, 'is_show')->checkbox()->label('Retire'); ?>
					</div>
				</div>
				<div class="col-md-2">
					<div>	
						<?= $form->field($model, 'retire_rate')->checkbox()->label('Renewal Rate'); ?>
					</div>
				</div>
			</div>	
			<div class="col-md-12">			
				<div class="col-md-6">
					<div>
						<label class="control-label" for="gadgetdetails-fromdate" style="width:100%">Effective Date</label>
						<?php
						
						if(isset($model->effective_date) && $model->effective_date!='' && $model->effective_date!='0000-00-00') {
							
							$effective_date_array = explode('-',$model->effective_date);
							$effective_date = $effective_date_array[2].'/'.$effective_date_array[1].'/'.$effective_date_array[0];
						} else {
							
							$effective_date = date('d/m/Y');
						}

						echo DatePicker::widget([
							'name' => 'effective_date',
							'id' => 'effective_date',
							'type' => DatePicker::TYPE_INPUT,
							'value' => $effective_date,
							'options'=>['placeholder' =>'From Date'],
							'pluginOptions' => [
								'autoclose'=>true,
								'format' => 'dd/mm/yyyy'
							]
						]);
						?>
					</div>
				</div>
				<div class="col-md-6">
					<div>	
						
					</div>
				</div>
			</div>	
			<div class="col-md-12">			
				<div class="col-md-12">
					<div>
						<?= $form->field($model, 'comment1')->textArea(["rows"=>3,"value"=>"Your monthly price is ##current_monthly_price## or ##current_annual_price## per year."]) ?>
					</div>
				</div>
			</div>
			<div class="col-md-12">			
				<div class="col-md-12">
					<div>
						<?= $form->field($model, 'comment2')->textArea(["rows"=>3,"value"=>"ADD more gadgets up to a total of ##next_cover_price##, for extra ##extra_monthly_price## per month or ##extra_annual_price## per year."]) ?>
					</div>
				</div>
			</div>
			<div class="col-md-12">			
				<div class="col-md-12">
					<div>
						<?= $form->field($model, 'buy_message')->textInput(['maxlength'=>200]) ?>
					</div>
				</div>
			</div>
			<div class="form-group">
			
				<?php if(Yii::$app->controller->action->id == 'create'  || Yii::$app->controller->action->id == 'zenith_create') { ?>
				<?= Html::Button('Add Gadget', ['class' => 'btn btn-primary', 'style'=>'margin-left:76%;', 'id'=>'btnAddPlan','name'=>'btnAddPlan']) ?>
				<?php } else { ?>
				
				<?= Html::Button('Update Gadget', ['class' => 'btn btn-primary','style'=>'margin-left:71%;','id'=>'btnUpdatePlan','name'=>'btnUpdatePlan']) ?>
				<?php } ?>
			
				
			</div>

			<?php ActiveForm::end(); ?>
			</div>
			
		</div>
	</div>
</div>

<style>
#paymentplan-plan_status,#paymentplan-is_show ,#paymentplan-retire_rate {
	height:20px;width:20px;
}
.modal-sm {
	width:550px !important;
}
#payment-form .help-block{
	padding-left:0px !important;
}
</style>
 <script>
 $(document).ready(function()
 {
	 var buy =$('#buyamount').val();
	 var discounted_sell_amount =$("#discounted_sell_amt").val();
	 if (buy !='' && discounted_sell_amount !='')
	 {	
		 $("#discount_code_details").css('display', 'block');
	 }
 });
 $("#discounted_sell_amt").keyup(function (event) {
	 var buy =$('#buyamount').val();
	 var discounted_sell_amount =$("#discounted_sell_amt").val();
	 $(".discount_sell_amount").html("");
	 discounted_sell_amount = parseFloat(discounted_sell_amount);
	 if(buy !='' && discounted_sell_amount !='')
	 {
		if(parseFloat(discounted_sell_amount) > parseFloat(buy))
		 {
			$(".discount_sell_amount").html("");
			var result= (discounted_sell_amount/1.12)- buy;
			$('#discounted_amount').val(result.toFixed(2));
			var commission=$("#discounted_amount").val();
			var results=commission /(discounted_sell_amount/1.12) * 100;
			$('#discounted_commission').val(results.toFixed(2));
		 }
		 else if (discounted_sell_amount !=0 && buy !=0 && discounted_sell_amount !='' && buy != '') {
			 $("#discount_code_details").css('display', 'none');
			 $(".discount_sell_amount").html("Invalid Discount Amount");
			  $("#discounted_amount").val('');
				$("#discounted_commission").val('');
			 return false;
		 }
		 else 
		 {
			$(".discount_sell_amount").html("");
			$("#discounted_amount").val('');
			 $("#discounted_commission").val('');
		 }
	 }
 });
 $("#sellamount").keyup(function (event) {
	 var sell=$("#sellamount").val();
	 var buy =$('#buyamount').val();
	 if(sell != "" && buy !="")
	 {
		 var result= (sell/1.12)- buy;
		 $('#commission_amount').val(result.toFixed(2));
		 var commission=$("#commission_amount").val();
		var results=commission /(sell/1.12) * 100;
		$('#commission_percentage').val(results.toFixed(2));
	 }
	 else 
	 {
		 $('#commission_amount').val("");
	 }
});
 $("#buyamount").keyup(function (event) {
	 var sell=$("#sellamount").val();
	 var buy =$('#buyamount').val();
	 if(sell != "" && buy !="")
	 {
		var result= (sell/1.12)- buy;
		$('#commission_amount').val(result.toFixed(2));
		var commission=$("#commission_amount").val();
		var results=(commission /(sell/1.12) *100);
		$('#commission_percentage').val(results.toFixed(2));
	 }
	 else 
	 {
		 $('#commission_amount').val("");
	 }
	 var discounted_sell_amount =$("#discounted_sell_amt").val();
	 discounted_sell_amount = parseFloat(discounted_sell_amount);
	 $(".discount_sell_amount").html("");
	 if(buy !='' && discounted_sell_amount !='')
	 {
		if(parseFloat(discounted_sell_amount) > parseFloat(buy))
		 {
			//var discount_amount = discounted_sell_amount;
			// var IPT_VALUE = 1.12
			// var ipt_tax = discount_amount - (discount_amount/IPT_VALUE);
			// var total = parseFloat(buy) + parseFloat(ipt_tax);
			// var comission_percent = discount_amount - parseFloat(total);
			//  $(".discount_sell_amount").html("");
			//  var discount_amount = discounted_sell_amount - buy;
			//  $("#discounted_amount").val(discount_amount.toFixed(2));
			//  $("#discounted_commission").val(comission_percent.toFixed(2));
			var result1= (discounted_sell_amount/1.12)- buy;
			$('#discounted_amount').val(result1.toFixed(2));
			var commission=$("#discounted_amount").val();
			var results1=commission /(discounted_sell_amount/1.12) * 100;
			$('#discounted_commission').val(results1.toFixed(2));
			 $("#discount_code_details").css('display', 'block');
		 }
		 else if (discounted_sell_amount !=0 && buy !=0 && discounted_sell_amount != '' && buy != '') {
			  $("#discount_code_details").css('display', 'none');
			 $(".discount_sell_amount").html("Invalid Discount Amount");
			  $("#discounted_amount").val('');
				$("#discounted_commission").val('');
			 return false;
		 }
		 else 
		 {
			$(".discount_sell_amount").html("");
			$("#discounted_amount").val('');
			 $("#discounted_commission").val('');
		 }
	 }
});
 $("#commission_amount").change(function (event) {
	 var sell=$("#sellamount").val();
	 var commission=$("#commission_amount").val();
	 var results=commission /(sell/1.12) * 100;
	 $('#commission_percentage').val("23");
 });
 $("#btnAddPlan").click(function() {	 
	 $("#payment-form").submit();
 });
 $("#btnUpdatePlan").click(function() {	 
	 let plan_status=$('#paymentplan-plan_status').is(':checked'); 
	 let renewal_rate=$('#paymentplan-retire_rate').is(':checked'); 
	//  if(plan_status===true){
	// 	 if(renewal_rate===true){
	// 		$(".form-group.field-paymentplan-retire_rate .help-block").html("Not able to set Renewal Rate");
	// 		$('#paymentplan-retire_rate').prop('checked', false);
	// 		// return false;
	// 	 }
	//  }
	//  if(renewal_rate===true){
	// 	 if(plan_status===true){
	// 		$('#paymentplan-plan_status').prop('checked', false);
	// 		$(".form-group.field-paymentplan-plan_status .help-block").html("Not able to the cover Active");
	// 		// return false;
	// 	 }
	//  }
	 if(plan_status===true && renewal_rate===true){
		$(".form-group.field-paymentplan-plan_status .help-block").html("Active Status cannot have Renewal Rate");
		return false;
	 }else{
		$("#payment-form").submit();	 
	 }
	//  $("#payment-form").submit();
 });
 </script>
<?php
$this->registerJs(
    'jQuery(document).ready(function($){ 
                $(document).ready(function () { 
                    $("body").on("beforeSubmit", "form#payment-form", function (e) {	
						e.preventDefault();
						e.stopImmediatePropagation();
						$(".err_msg").html("");						
                        var form = $("#payment-form");
                        // return false if form still have some validation errors
                        if (form.find(".has-error").length) 
                        {
                            return false;
                        }  
						
                        // submit form
                        $.ajax({
                            url    : form.attr("action"),
                            type   : "post",
                            data   : form.serialize(),
                            success: function (response) 
                            { 									
								window.location.href = BACKENDURL + "/payment-plan/index";
                            },
                            error  : function () 
                            {
                                console.log("internal server error");
                            }
                        });
                        return false;
                     });
                    });

    });'
);
?> 
<style>
/* label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 500 !important;
} */
.help-block{
	color:red;
}
.field-paymentplan-plan_status, .field-paymentplan-is_show,..field-paymentplan-retire_rate {
	padding-top:25px;	
}
#paymentplan-plan_status,#paymentplan-is_show,#paymentplan-retire_rate {
	margin-left:10px;
}
<?php if($allow_update == true) { ?>
.field-paymentplan-amount_limit, .field-paymentplan-gadget_type, .field-paymentplan-process_type {
	pointer-events:none;
}
<?php } ?>

@media screen and (max-device-width: 480px) and (orientation: portrait){
#btnAddPlan,#btnUpdatePlan {margin-left: 28px !important; }
}


@media screen and (max-device-width: 640px) and (orientation: landscape){
#btnAddPlan,#btnUpdatePlan {margin-left: 28px !important; }
}

@media screen and (max-device-width: 640px){
#btnAddPlan,#btnUpdatePlan  {margin-left: 28px !important; }
}
</style>