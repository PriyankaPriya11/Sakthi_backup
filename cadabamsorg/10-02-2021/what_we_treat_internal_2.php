<?php

/*Template Name: What We Treat Internal two Template */

get_header();

?>



<div class="logohead" id="lhead">

      <div class="container lx-schi-bottom">

        <div class="row">

            <div class="col-sm-8 lx-schi">

                <!-- <div class="schi-text"> -->

                  <h1 ><?php echo get_field('banner_image_title');?></h1>

                  <p><?php echo get_field('banner_image_content');?></p>

              <!-- </div> -->

           

            </div>

            <div class="col-sm-4 lx-schi-form">

              <div class="row">

              <div id="headform">

              <h2>Consult a Specialist</h2>

              

<!-- <script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > </script>
<link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'  rel='stylesheet'>  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >    </script> 



<!-- Form -->
<!-- <div id="lsq-form-wrapper" class="lsq-form-wrapper" style="max-width: 400px; margin: 0 auto;"><div class="form-block-holder block-inner-content" style="min-height: 150px; margin-left: 15px; margin-right: 15px; border: 0px none rgb(173, 173, 173); filter: none; background: none left top no-repeat rgba(230, 230, 230, 0);" data-hover-bg-color="rgba(230, 230, 230, 0)" data-bg-color-type="solid"><div class="lp-form-header-wrapper"><div class="lp-form-header-content-wrapper" style="padding: 1px 4px 4px; filter: none; background: none;" data-hover-bg-color="rgba(71,71,71,0)" data-bg-color-type="none"></div></div><form id="frmrlp-block-40" contenteditable="false" method="Post" enctype="multipart/form-data" action="https://web-in21.mxradon.com/t/FormTracker.aspx" searchkey="EmailAddress" lsq-form-id="lp-form" name="FORM 0"><div id="lp-form" class="lp-form label-placement top" data-fieldlabel-fontsize="12" data-fieldlabel-fontfamily="Open Sans" data-fieldlabel-fontweight="normal" data-fieldlabel-color="#8a7f76" data-field-height="30" data-field-color="#999999" data-field-backgroundcolor="#ffffff" data-field-fontfamily="Open Sans" data-field-bordercolor="#8a7f76" data-field-borderwidth="1" data-field-cornerradius="5" data-field-shadow="0" data-buttontext-fontsize="16" data-buttontext-fontfamily="Open Sans" data-buttontext-fontweight="bold" data-buttontext-color="#ffffff" data-button-color="#eb6200" data-button-cornerradius="7" data-button-style="gradient" data-button-alignment="center" style="width: 92%; margin: 4% 4% 0px;"><div id="sec-message-wrapper" class="lp-form-section sec-message-wrapper" style="display: none;">Thank you for your interest.</div><div id="sec-error-message-wrapper" class="lp-form-section sec-error-message-wrapper" style="display: none;">Oops something went wrong.</div><div id="sec-fields-wrapper" class="lp-form-section sec-fields-wrapper"><div id="lp-form-column" class="lp-form-column  ui-sortable" style=""><div class="field-control-group " data-field-name="FirstName" data-field-type="text" data-seq="1" style=""> <div class="field-control"> <input type="text" id="FirstName" name="FirstName" maxlength="100" value="" autocomplete="off" style="" placeholder="Name" required="required"> </div> <div class="field-validation-messages"><label class="validation-msg hide"></label></div> </div><div class="field-control-group " data-field-name="EmailAddress" data-field-type="email" data-seq="2" style="">  <div class="field-control"> <input type="text" id="EmailAddress" name="EmailAddress" maxlength="100" value="" autocomplete="off" style="" placeholder="Email" required="required"> </div> <div class="field-validation-messages"><label class="validation-msg hide"></label></div> </div><div class="field-control-group " data-field-name="Phone" data-field-type="phone" data-ph-control-type="phone" data-seq="3" style=""> <div class="field-control"> <input type="text" id="Phone" name="Phone" maxlength="10" value="" autocomplete="off" placeholder="Phone" style="" data-control-style="height:30px !important;color:#999999;background-color:#ffffff !important;border:1px solid #8a7f76 !important;border-width:1px !important;border-radius:5px !important;-webkit-border-radius:5px !important;-moz-border-radius:5px !important;-o-border-radius:5px !important;font-family:Open Sans !important;-webkit-box-shadow:rgba(0,0,0,0) 0 0 0, inset rgba(0,0,0,0) 0 0 0 !important;-moz-box-shadow:rgba(0,0,0,0) 0 0 0, inset rgba(0,0,0,0) 0 0 0 !important;box-shadow:rgba(0,0,0,0) 0 0 0, inset rgba(0,0,0,0) 0 0 0 !important;" data-ph-style="color:#999999 !important;background-color:#ffffff !important;border:1px solid #8a7f76 !important;border-width:1px !important;border-radius:5px !important;-webkit-border-radius:5px !important;-moz-border-radius:5px !important;-o-border-radius:5px !important;font-family:Open Sans !important;-webkit-box-shadow:rgba(0,0,0,0) 0 0 0, inset rgba(0,0,0,0) 0 0 0 !important;-moz-box-shadow:rgba(0,0,0,0) 0 0 0, inset rgba(0,0,0,0) 0 0 0 !important;box-shadow:rgba(0,0,0,0) 0 0 0, inset rgba(0,0,0,0) 0 0 0 !important;" jqvalidaterange="true" jqmin="10" jqmax="10" required="required"> </div> <div class="field-validation-messages"><label class="validation-msg hide"></label></div> </div><div class="field-control-group " data-field-name="mx_Desired_Appointment_Date" data-field-type="date" data-seq="4" style=""> <label class="field-label" for="mx_Desired_Appointment_Date" style="color:#8a7f76;font-weight:normal;font-size:17px;">Desired Appointment Date 		<span class="mandatory" style="color:#8a7f76;font-family:Open Sans;font-weight:normal;font-size:12px;"></span> </label> <div class="field-control cal_icons"> <span id="calicon" class="fa fa-calendar"></span> <input type="text" id="mx_Desired_Appointment_Date" name="mx_Desired_Appointment_Date" maxlength="50" value="" data-field-type="date" autocomplete="off" style="" required="required"> </div> <div class="field-validation-messages"><label class="validation-msg hide"></label></div> </div></div></div><div id="sec-button-wrapper" class="lp-form-section sec-button-wrapper btn-align-center"><input type="hidden" name="Source" id="Source" value="<?php //echo get_the_title();?>"/><button id="form-submit-button" class="form-submit-button gradient btn center-block seekbtn" style=" ">SEEK HELP NOW</button></div><div id="sec-formdata-wrapper" class="lp-form-section sec-formdata-wrapper" style="display: none;"><textarea id="txtLoadedJson">{"LSQLeadFields":[{"Seq":1,"Name":"Caller Name","SchemaName":"FirstName","Type":"text","CtrlType":"textbox","IsMandatory":"1","DisplayName":"Name","MinLength":"","MaxLength":"100","DefaultValue":"","MaskText":null,"OptionValues":"","ChildFields":[],"FormLabel":"First Name","Position":"1,1","IsHidden":"0","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":false,"FieldConfiguration":null,"IsSearchKey":false},{"Seq":3,"Name":"Caller Email","SchemaName":"EmailAddress","Type":"email","CtrlType":"email","IsMandatory":"1","DisplayName":"Email","MinLength":"","MaxLength":"100","DefaultValue":"","MaskText":null,"OptionValues":"","ChildFields":[],"FormLabel":"Email","Position":"2,1","IsHidden":"0","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":true,"FieldConfiguration":{"IsDefaultSearchKey":true,"FormatValidationRequired":true,"ValidationRegex":"","ValidationMessage":"","MaxLength":100,"ValidationFor":"","AdditionalConfiguration":{"AllowLeadingZero":false,"DefaultCC":null,"IfCCNotProvided":0,"PhoneNumberFormat":0}},"IsSearchKey":true},{"Seq":4,"Name":"Caller Mobile Number","SchemaName":"Phone","Type":"phone","CtrlType":"phone","IsMandatory":"1","DisplayName":"Phone Number","MinLength":"10","MaxLength":"10","DefaultValue":"","MaskText":null,"OptionValues":"","ChildFields":[],"FormLabel":"Phone Number","Position":"3,1","IsHidden":"0","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":true,"FieldConfiguration":{"IsDefaultSearchKey":false,"FormatValidationRequired":true,"ValidationRegex":"","ValidationMessage":"","MinLength":10,"MaxLength":10,"AdditionalConfiguration":{"AllowLeadingZero":false,"DefaultCC":"91","IfCCNotProvided":1,"PhoneNumberFormat":1}},"IsSearchKey":false},{"Seq":261,"Name":"Desired Appointment Date ","SchemaName":"mx_Desired_Appointment_Date","Type":"date","CtrlType":"date","IsMandatory":"1","DisplayName":"Desired Appointment Date ","MinLength":"","MaxLength":"50","DefaultValue":"","MaskText":null,"OptionValues":"","ChildFields":[],"FormLabel":"Desired Appointment Date ","Position":"4,1","IsHidden":"0","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":false,"FieldConfiguration":null,"IsSearchKey":false}],"Version":"2.0","FormWidth":"216","FormSize":"","FieldLabelColor":"#8a7f76","FieldLabelFontSize":12,"FieldLabelFontWeight":"normal","FieldLabelFontFamily":"Open Sans","FieldHeight":"30","FieldColor":"#999999","FieldBackgroundColor":"#ffffff","FieldFontFamily":"Open Sans","FieldBorderColor":"#8a7f76","FieldBorderWidth":"1","FieldCornerRadius":"5","FieldShadow":"0","ButtonText":"SEEK HELP NOW","ButtonTextFontFamily":"Open Sans","ButtonTextFontSize":16,"ButtonTextFontWeight":"bold","ButtonTextColor":"#ffffff","ButtonColor":"#eb6200","ButtonWidth":"148","ButtonHeight":"37","ButtonCornerRadius":"7","ButtonStyle":"gradient","ButtonAlignment":"center","BackgroundColor":"transparent","Layout":"fluid","LabelPlacement":"top","ContainsCaptcha":false,"ContainsGoogleRecaptcha":false,"ContainsPasswordField":false,"AccountPhoneNumberFormat":"DEFAULT","DefaultCountryCode":"91","ContainsDPR":false,"ContainsDPRDetails":false}</textarea></div></div><input type="hidden" name="MXHOrgCode" value="48540"><input type="hidden" name="MXHLandingPageId" value="42cabeca-9a6f-11ea-89f6-0a22ff7e4b86"><input type="hidden" name="MXHFormBehaviour" value="1"><input type="hidden" name="MXHOutputMessagePosition" value="0"><input type="hidden" name="MXHFormDataTransfer" value="0"><input type="hidden" name="MXHRedirectUrl" value="https://www.cadabams.org/thank-you/"><input type="hidden" name="MXHAsc" value="5"><input type="hidden" name="MXHFormName" value="FORM 0"><input type="hidden" name="MXHIsExternallyUsed" value="1"><input type="hidden" name="MXHSecretKey" value="EmailAddress"></form><div class="lp-form-footer-wrapper"><div class="lp-form-footer-content-wrapper" data-hover-bg-color="rgba(0,0,0,0)" data-bg-color-type="none" style="filter: none; min-height: 0px; background: none;padding-bottom: 8px;"></div></div></div></div> -->



<!-- live new starts here-->
<!-- Stylesheet -->
<link rel="stylesheet" type="text/css" href="https://dwmbily8o2kmd.cloudfront.net/common/css/lsq.form.min.css" />
<!-- Form -->
<div id="lsq-form-wrapper" class="lsq-form-wrapper" style="max-width: 400px; margin: 0 auto;"><div class="form-block-holder block-inner-content" style="min-height: 150px; margin-left: 15px; margin-right: 15px; border: 0px none rgb(173, 173, 173); filter: none; background: none left top no-repeat rgba(230, 230, 230, 0);" data-hover-bg-color="rgba(230, 230, 230, 0)" data-bg-color-type="solid"><div class="lp-form-header-wrapper"><div class="lp-form-header-content-wrapper" style="padding: 1px 4px 4px; filter: none; background: none;" data-hover-bg-color="rgba(71,71,71,0)" data-bg-color-type="none"></div></div><form id="frmrlp-block-40" contenteditable="false" method="Post" enctype="multipart/form-data" action="https://web-in21.mxradon.com/t/FormTracker.aspx" searchkey="EmailAddress" lsq-form-id="lp-form" name="FORM 0"><div id="lp-form" class="lp-form label-placement top" data-fieldlabel-fontsize="12" data-fieldlabel-fontfamily="Open Sans" data-fieldlabel-fontweight="normal" data-fieldlabel-color="#8a7f76" data-field-height="30" data-field-color="#999999" data-field-backgroundcolor="#ffffff" data-field-fontfamily="Open Sans" data-field-bordercolor="#8a7f76" data-field-borderwidth="1" data-field-cornerradius="5" data-field-shadow="0" data-buttontext-fontsize="16" data-buttontext-fontfamily="Open Sans" data-buttontext-fontweight="bold" data-buttontext-color="#ffffff" data-button-color="#eb6200" data-button-cornerradius="7" data-button-style="gradient" data-button-alignment="center" style="width: 92%; margin: 4% 4% 0px;"><div id="sec-message-wrapper" class="lp-form-section sec-message-wrapper" style="display: none;">Thank you for your interest.</div><div id="sec-error-message-wrapper" class="lp-form-section sec-error-message-wrapper" style="display: none;">Oops something went wrong.</div><div id="sec-fields-wrapper" class="lp-form-section sec-fields-wrapper"><div id="lp-form-column" class="lp-form-column  ui-sortable" style=""><div class="field-control-group " data-field-name="FirstName" data-field-type="text" data-seq="1">  <div class="field-control"> <input type="text" id="FirstName" name="FirstName" placeholder="Name" maxlength="100" value="" autocomplete="off" required="required"> </div> <div class="field-validation-messages"><label class="validation-msg hide"></label></div> 
</div><div class="field-control-group " data-field-name="EmailAddress" data-field-type="email" data-seq="2"> <div class="field-control"> <input type="text" id="EmailAddress" name="EmailAddress" placeholder="Email" maxlength="100" value="" autocomplete="off"  required="required"> </div> <div class="field-validation-messages"><label class="validation-msg hide"></label></div> </div><div class="field-control-group " data-field-name="Phone" data-field-type="phone" data-ph-control-type="phone" data-seq="3"> <div class="field-control"> <input type="text" id="Phone" placeholder="Phone" name="Phone" maxlength="10" value="" autocomplete="off"  jqvalidaterange="true" jqmin="10" jqmax="10" required="required"> </div> <div class="field-validation-messages"><label class="validation-msg hide"></label></div> </div>
<div class="field-control-group " data-field-name="mx_Desired_Appointment_Date" data-field-type="date" data-seq="4">  <div class="field-control">
<label class="field-label" for="mx_Desired_Appointment_Date" style="color:#8a7f76;font-weight:normal;font-size:17px;text-align:center;">Desired Appointment Date 		<span class="mandatory" style="color:#8a7f76;font-family:Open Sans;font-weight:normal;font-size:12px;"></span> </label>  
<input type="text" id="mx_Desired_Appointment_Date" name="mx_Desired_Appointment_Date" maxlength="50" value="" data-field-type="date" autocomplete="off" required="required"> </div> 

<div class="field-validation-messages"><label class="validation-msg hide"></label></div> </div>

<div class="field-control-group hidden-field" data-field-name="Source" data-field-type="select" data-seq="5"> <label class="field-label" for="Source" style="color:#8a7f76;font-family:Open Sans;font-weight:normal;font-size:12px;">Lead Source			</label> <div class="field-control"> <input type="text" value="" readonly=""><span class="hidden-field-message">Field will not be visible to web visitor</span><input type="hidden" id="Source" name="Source" value=""> </div> <div class="field-validation-messages"><label class="validation-msg hide"></label></div> </div></div></div>
<div id="sec-captcha-wrapper" class="lp-form-section sec-captcha-wrapper"><div class="captcha-panel"> <img alt="Loading..." src="data:image/jpeg;base64,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"> <button type="button" title="Reload Image" onclick="reloadCaptcha(false)"></button> <input type="hidden" name="MXHCaptchaChallenge" value=""> <input type="hidden" name="MXHCaptchaChallengeTxt" value=""> <input type="text" name="MXHCaptchaChallenge_Input" value=""> <label class="validation-msg hide">Incorrect Captcha!</label></div></div>
<div id="sec-button-wrapper" class="lp-form-section sec-button-wrapper btn-align-center"><button id="form-submit-button" class="form-submit-button gradient btn center-block" >		SEEK HELP NOW</button></div><div id="sec-formdata-wrapper" class="lp-form-section sec-formdata-wrapper" style="display: none;"><textarea id="txtLoadedJson">{"LSQLeadFields":[{"Seq":1,"Name":"Caller Name","SchemaName":"FirstName","Type":"text","CtrlType":"textbox","IsMandatory":"1","DisplayName":"Name","MinLength":"","MaxLength":"100","DefaultValue":"","MaskText":null,"OptionValues":"","ChildFields":[],"FormLabel":"First Name","Position":"1,1","IsHidden":"0","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":false,"FieldConfiguration":null,"IsSearchKey":false},{"Seq":3,"Name":"Caller Email","SchemaName":"EmailAddress","Type":"email","CtrlType":"email","IsMandatory":"1","DisplayName":"Email","MinLength":"","MaxLength":"100","DefaultValue":"","MaskText":null,"OptionValues":"","ChildFields":[],"FormLabel":"Email","Position":"2,1","IsHidden":"0","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":true,"FieldConfiguration":{"IsDefaultSearchKey":true,"FormatValidationRequired":true,"ValidationRegex":"","ValidationMessage":"","MaxLength":100,"ValidationFor":"","AdditionalConfiguration":{"AllowLeadingZero":false,"DefaultCC":null,"IfCCNotProvided":0,"PhoneNumberFormat":0}},"IsSearchKey":true},{"Seq":4,"Name":"Caller Mobile Number","SchemaName":"Phone","Type":"phone","CtrlType":"phone","IsMandatory":"1","DisplayName":"Phone Number","MinLength":"10","MaxLength":"10","DefaultValue":"","MaskText":null,"OptionValues":"","ChildFields":[],"FormLabel":"Phone Number","Position":"3,1","IsHidden":"0","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":true,"FieldConfiguration":{"IsDefaultSearchKey":false,"FormatValidationRequired":true,"ValidationRegex":"","ValidationMessage":"","MinLength":10,"MaxLength":10,"AdditionalConfiguration":{"AllowLeadingZero":false,"DefaultCC":"91","IfCCNotProvided":1,"PhoneNumberFormat":1}},"IsSearchKey":false},{"Seq":9,"Name":"Lead Source","SchemaName":"Source","Type":"select","CtrlType":"dropdownwithothers","IsMandatory":"0","DisplayName":"Lead Source","MinLength":"","MaxLength":"50","DefaultValue":"","MaskText":null,"OptionValues":"[{\"Text\":\"\",\"Value\":\"\",\"IsDefault\":true},{\"Text\":\"Organic Search\",\"Value\":\"Organic Search\",\"IsDefault\":false},{\"Text\":\"Referral Sites\",\"Value\":\"Referral Sites\",\"IsDefault\":false},{\"Text\":\"Direct Traffic\",\"Value\":\"Direct Traffic\",\"IsDefault\":false},{\"Text\":\"Social Media\",\"Value\":\"Social Media\",\"IsDefault\":false},{\"Text\":\"Customer Referral\",\"Value\":\"Customer Referral\",\"IsDefault\":false},{\"Text\":\"Email Marketing\",\"Value\":\"Email Marketing\",\"IsDefault\":false},{\"Text\":\"Pay per Click Ads\",\"Value\":\"Pay per Click Ads\",\"IsDefault\":false},{\"Text\":\"Inbound Email\",\"Value\":\"Inbound Email\",\"IsDefault\":false},{\"Text\":\"Inbound Phone call\",\"Value\":\"Inbound Phone call\",\"IsDefault\":false},{\"Text\":\"Outbound Phone call\",\"Value\":\"Outbound Phone call\",\"IsDefault\":false},{\"Text\":\"Practo\",\"Value\":\"Practo\",\"IsDefault\":false},{\"Text\":\"Just Dial\",\"Value\":\"Just Dial\",\"IsDefault\":false},{\"Text\":\"Contact Page\",\"Value\":\"Contact Page\",\"IsDefault\":false},{\"Text\":\"What we treat\",\"Value\":\"What we treat\",\"IsDefault\":false},{\"Text\":\"Homepage\",\"Value\":\"Homepage\",\"IsDefault\":false},{\"Text\":\"CF7_get_post_var key=\\\\'title\\\\'\",\"Value\":\"CF7_get_post_var key=\\\\'title\\\\'\",\"IsDefault\":false},{\"Text\":\"Frontpage\",\"Value\":\"Frontpage\",\"IsDefault\":false},{\"Text\":\"Bio Feedback\",\"Value\":\"Bio Feedback\",\"IsDefault\":false},{\"Text\":\"GROUP THERAPY\",\"Value\":\"GROUP THERAPY\",\"IsDefault\":false},{\"Text\":\"Depression\",\"Value\":\"Depression\",\"IsDefault\":false},{\"Text\":\"Schizophrenia\",\"Value\":\"Schizophrenia\",\"IsDefault\":false},{\"Text\":\"Neuro Rehab\",\"Value\":\"Neuro Rehab\",\"IsDefault\":false},{\"Text\":\"Home counseling\",\"Value\":\"Home counseling\",\"IsDefault\":false},{\"Text\":\"Counselling one-on-one/ Individual Counseling\",\"Value\":\"Counselling one-on-one/ Individual Counseling\",\"IsDefault\":false},{\"Text\":\"Neuro Feedback\",\"Value\":\"Neuro Feedback\",\"IsDefault\":false},{\"Text\":\"Sleep Problems\",\"Value\":\"Sleep Problems\",\"IsDefault\":false},{\"Text\":\"ONLINE COUNSELING\",\"Value\":\"ONLINE COUNSELING\",\"IsDefault\":false},{\"Text\":\"PSYCHOTHERAPY\",\"Value\":\"PSYCHOTHERAPY\",\"IsDefault\":false},{\"Text\":\"Child and Adolescent Psychiatry\",\"Value\":\"Child and Adolescent Psychiatry\",\"IsDefault\":false},{\"Text\":\"Alcoholism\",\"Value\":\"Alcoholism\",\"IsDefault\":false},{\"Text\":\"Bipolar disorder\",\"Value\":\"Bipolar disorder\",\"IsDefault\":false},{\"Text\":\"NPD_Facebook_OCD_Remarketing\",\"Value\":\"NPD_Facebook_OCD_Remarketing\",\"IsDefault\":false},{\"Text\":\"Personality Disorder\",\"Value\":\"Personality Disorder\",\"IsDefault\":false},{\"Text\":\"NPD_Facebook_Dementia_Remarketing\",\"Value\":\"NPD_Facebook_Dementia_Remarketing\",\"IsDefault\":false},{\"Text\":\"NPD_Facebook_Alcohol_Remarketing\",\"Value\":\"NPD_Facebook_Alcohol_Remarketing\",\"IsDefault\":false},{\"Text\":\"Autistic Spectrum Disorder\",\"Value\":\"Autistic Spectrum Disorder\",\"IsDefault\":false},{\"Text\":\"bipolar-disorder-treatment\",\"Value\":\"bipolar-disorder-treatment\",\"IsDefault\":false},{\"Text\":\"dementia-treatment\",\"Value\":\"dementia-treatment\",\"IsDefault\":false},{\"Text\":\"schizophrenia-treatment\",\"Value\":\"schizophrenia-treatment\",\"IsDefault\":false},{\"Text\":\"alcohol-dependence-treatment\",\"Value\":\"alcohol-dependence-treatment\",\"IsDefault\":false},{\"Text\":\"Specific Learning Disability\",\"Value\":\"Specific Learning Disability\",\"IsDefault\":false},{\"Text\":\"Alcohol Dependence\",\"Value\":\"Alcohol Dependence\",\"IsDefault\":false},{\"Text\":\"Obsessive Compulsive Disorder\",\"Value\":\"Obsessive Compulsive Disorder\",\"IsDefault\":false},{\"Text\":\"NPD_Facebook_Schizo_Remarketing\",\"Value\":\"NPD_Facebook_Schizo_Remarketing\",\"IsDefault\":false}]","ChildFields":[],"FormLabel":"Lead Source","Position":"5,1","IsHidden":"1","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":false,"FieldConfiguration":null,"IsSearchKey":false},{"Seq":261,"Name":"Desired Appointment Date ","SchemaName":"mx_Desired_Appointment_Date","Type":"date","CtrlType":"date","IsMandatory":"1","DisplayName":"Desired Appointment Date ","MinLength":"","MaxLength":"50","DefaultValue":"","MaskText":null,"OptionValues":"","ChildFields":[],"FormLabel":"Desired Appointment Date ","Position":"4,1","IsHidden":"0","IsUsedinForm":"1","Height":"0","SMSVerification":"0","AllowOnlyValidData":true,"ParentField":"","IsUnique":false,"FieldConfiguration":null,"IsSearchKey":false}],"Version":"2.0","FormWidth":"290","FormSize":"","FieldLabelColor":"#8a7f76","FieldLabelFontSize":12,"FieldLabelFontWeight":"normal","FieldLabelFontFamily":"Open Sans","FieldHeight":"30","FieldColor":"#999999","FieldBackgroundColor":"#ffffff","FieldFontFamily":"Open Sans","FieldBorderColor":"#8a7f76","FieldBorderWidth":"1","FieldCornerRadius":"5","FieldShadow":"0","ButtonText":"SEEK HELP NOW","ButtonTextFontFamily":"Open Sans","ButtonTextFontSize":16,"ButtonTextFontWeight":"bold","ButtonTextColor":"#ffffff","ButtonColor":"#eb6200","ButtonWidth":"148","ButtonHeight":"37","ButtonCornerRadius":"7","ButtonStyle":"gradient","ButtonAlignment":"center","BackgroundColor":"transparent","Layout":"fluid","LabelPlacement":"top","ContainsCaptcha":true,"ContainsGoogleRecaptcha":false,"ContainsPasswordField":false,"AccountPhoneNumberFormat":"DEFAULT","DefaultCountryCode":"91","ContainsDPR":false,"ContainsDPRDetails":false}</textarea></div></div><input type="hidden" name="MXHOrgCode" value="48540"><input type="hidden" name="MXHLandingPageId" value="42cabeca-9a6f-11ea-89f6-0a22ff7e4b86"><input type="hidden" name="MXHFormBehaviour" value="1"><input type="hidden" name="MXHOutputMessagePosition" value="0"><input type="hidden" name="MXHFormDataTransfer" value="0"><input type="hidden" name="MXHRedirectUrl" value="https://www.cadabams.org/thank-you/"><input type="hidden" name="MXHAsc" value="5"><input type="hidden" name="MXHFormName" value="FORM 0"><input type="hidden" name="MXHIsExternallyUsed" value="1"><input type="hidden" name="MXHSecretKey" value="EmailAddress"></form><div class="lp-form-footer-wrapper"><div class="lp-form-footer-content-wrapper" data-hover-bg-color="rgba(0,0,0,0)" data-bg-color-type="none" style="filter: none; min-height: 0px; background: none;padding-bottom: 8px;"></div></div></div></div>
<!-- Landing Page Id for Tracking -->
<script type="text/javascript"> var MXLandingPageId = '42cabeca-9a6f-11ea-89f6-0a22ff7e4b86'; </script>
<!-- Script -->
<script type="text/javascript" src="https://dwmbily8o2kmd.cloudfront.net/common_r21/js/lsq.form.min.js"></script>
<style>
  .page-template-what_we_treat_internal-php div#sec-button-wrapper #form-submit-button
  {
    padding:0px !important;
  }
  .page-template-what_we_treat_internal-php #headform input
  {
    padding: 25px 10px !important;  
  }
  .lsq-form-wrapper .label-placement.top .field-control-group input[type="text"]
  {
    box-shadow:unset;
  }
</style>
<!-- live new ends here-->


              <?php //echo do_shortcode('[contact-form-7 id="6446" title="What we treat internal"]');?>

</div>

              <!-- <form id="headform" method="POST" action="mydbdetails.php">

                <h1>Consult a Specialist</h1>

                <p id="err1" onclick="hidep();"></p><br>

                <input type="text" id="firstname" name="fname" maxlength="15" placeholder="Name" onchange="fn1();"

                  required class="lx-placeholder"><br><br>

                

                  <input type="email" id="mail" name="femail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"

                  placeholder="Email Address" onchange="fn2();" required class="lx-placeholder"><br><br>

              

                  <input type="tel" id="phone" name="fmobile" pattern="[0-9]{10}" placeholder="Mobile Number" onchange="fn3();"

                  required class="lx-placeholder"><br><br>

                

                  <p>Desired Appointment Date</p>

                <span id="calicon" class="fa fa-calendar"></span>

               

                <input type="text" id="datepicker" name="fdate1" class="datef1"

                  required class="lx-placeholder">

               

                  <input type="text" id="datepicker1" name="fdate2" class="datef2" required class="lx-placeholder">

                

                  <input type="text" id="datepicker2" name="fdate3" class="datef3" required><br><br><br>

                

                  <button class="seekbtn">SEEK HELP NOW </button>

            

                </form> -->

              </div>

            </div>

          </div> 

        </div> 

  </div>

  <div class="container-fluid"  id="yrcontainer">

  <div class="container">

    <div class="lx-year1">

      <div class="row">

      <?php if (have_rows('count_section')):

        $i=0;?>

        <?php while (have_rows('count_section')): the_row();

        $i++;

        if($i>1){

            $j=yrbor1;

        } else {

            $j='yrbor';

        } ?> 

        <div class="col-sm-3 <?php echo $j; ?>">

          <h3><?php echo get_sub_field('count');?></h3>

          <p><?php echo get_sub_field('content');?></p>

        </div>

        <?php endwhile;?>

            <?php endif;?>

      </div>

    </div>

  </div>

  </div>

  <div class="container">

        <div class="lx-schizo-sec">

        <div class="lx-overview">

        <h3> <?php echo get_field('section_3_part_1_title');?></h3>

        <?php echo get_field('section_3_part_1_content');?>

        </div>
 

        <div class="lx-diagnosis">

            <h3> <?php echo get_field('section_3_part_2_title');?></h3>

            <?php echo get_field('section_3_part_2_content');?>

        </div>

        <div class="lx-treatment">

            <h3> <?php echo get_field('section_3_part_3_title');?></h3>

            <?php echo get_field('section_3_part_3_content');?>

        </div>
               <div class="fa_section_new">
        <h2><b><?php echo get_field('title_faq_section');?></b></h2>
<?php if (have_rows('faq_section')):?>
<?php while (have_rows('faq_section')): the_row(); ?>
<button class="faq_sec"><b><?php echo get_sub_field('title_faq');?></b></button>
<div class="panel_faq">
<?php echo get_sub_field('grid_content_faq');?>
</div>

<?php endwhile;?>

 <?php endif;?>
        </div>
        <div class="lx-overview-new">

        <?php echo get_field('section_3_part_1_content_new');?>

        </div>


        </div>

        

    </div>

</div>

<div class="container-fluid  lx-cada-bg">

<div class="container">

    <div class="lx-why-cadabams">

        <div class="lx-why-cada">

            <h2><?php echo get_field('section_4_part_1_title');?></h2>

            <?php echo get_field('section_4_part_1_content');?>

        </div>



   

    <div class="lx-copy">

        <h3><?php echo get_field('section_4_part_2_title');?></h3>

        <?php echo get_field('section_4_part_2_content');?>

       

    </div>

</div>

</div>

</div>

  <div class="container" id="iconcontainer">

  <?php if (have_rows('section_5_grid')):

      $i=0;?>

<?php while (have_rows('section_5_grid')): the_row();

$i++; ?>   

  <div class="col-sm-6" id="iconbor<?php echo $i;?>">

      <div class="iconitem" id="icitem<?php echo $i;?>">

        <img src="<?php echo site_url();?>/wp-content/themes/cadabams/assets/img/icon<?php echo $i;?>.png" class="img-sm">

        <h2><?php echo get_sub_field('title');?></h2>

        <?php echo get_sub_field('content');?>

      </div>

    </div>

    <?php endwhile;?>

 <?php endif;?>

  </div>

  <div class="container lx-accor">

  <?php if (have_rows('section_5_bars')):?>

<?php while (have_rows('section_5_bars')): the_row(); ?>

    <button class="lx-accordion"><?php echo get_sub_field('title');?></button>

<div class="lx-panel-accor">

<?php echo get_sub_field('grid_content');?>

</div>

<?php endwhile;?>

 <?php endif;?>

</div>

  <!-- 12-12-19 -->

  <div class="botomcont">

    <div class="cont2">



      <h1><b><?php the_field('seek_help_title', 'option');?></b></h1>

    </div>

    <div class="reachbtn">

      <a href="#lhead">Seek Help Out</a>

    </div>

  </div>



  





<script>

  function fn1() {

    var inpObj = document.getElementById("firstname").value;

    if (!inpObj.match(/^[a-zA-Z]+$/)) {

      document.getElementById("err1").style.display = "block";

      document.getElementById("err1").innerHTML = "Enter only text";

    } else {

      document.getElementById("err1").innerHTML = null;

    }

  }

  function fn2() {

    if (document.getElementById("mail").validity.patternMismatch) {

      document.getElementById("err1").style.display = "block";

      document.getElementById("er1").innerHTML = "Must cointain mail format(@,.com)";

    } else {

      document.getElementById("err1").innerHTML = null;

    }

  }

  function fn3() {

    if (document.getElementById("phone").validity.patternMismatch) {

      document.getElementById("err1").style.display = "block";

      document.getElementById("err1").innerHTML = "Must contain 10 numbers.";

    } else {

      document.getElementById("err1").innerHTML = null;

    }

  }

  function hidep() {

    document.getElementById("err1").style.display = "none";

  }

</script>



<?php //function footer_script() { ?>

    <!-- <script>

    $(document).ready(function () {

      $("#datepicker").datepicker({

        minDate: 1,

        onSelect: function (dateText) {

          var arr = dateText.split('/');

          $('#datepicker').val(arr[1]);

          $('#datepicker1').val(arr[0]);

          $('#datepicker2').val(arr[2]);

        }

      });

      $('.fa-calendar').click(function () {

        $("#datepicker").focus();

      });



    }); 

  </script> -->

  

  <script> 



        $(document).ready(function() { 



          



            $(function() { 



                $( "#mx_Desired_Appointment_Date" ).datepicker(); 



            }); 



        }) 



    </script> 

  <script>

    var acc = document.getElementsByClassName("lx-accordion");

    var i;

    

    for (i = 0; i < acc.length; i++) {

      acc[i].addEventListener("click", function() {

        this.classList.toggle("active");

        var panel = this.nextElementSibling;

        panel.classList.toggle("active1");

        if (panel.style.maxHeight) {

          panel.style.maxHeight = null;

        } else {

          panel.style.maxHeight = panel.scrollHeight + "px";

        } 

      });

    }

    $( document ).ready(function() {

    var getUrlParameter = window.location.href;

    if(getUrlParameter.indexOf('?') != -1){

      var url=getUrlParameter.split('?');

      if(url[1].indexOf('=') != -1){

    var param=url[1].split('=');

    if(param[0]=="UTM") {

    var par=param[1];

    $('#source').val(par);

      } 

      }

     } 

    });

    </script>
   

<?php //} 

//add_action('wp_footer', 'footer_script', 100); ?>

<?php

get_footer();	

?>

