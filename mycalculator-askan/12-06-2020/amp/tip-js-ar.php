<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
     <title></title>
     <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style type="text/css">
body{font-size: 20px;font-family: Tahoma, Geneva, sans-serif ;}
.row {margin-bottom: 11px;overflow: hidden;display: flex;justify-content: space-between;}
.text2 {float: left;padding: 0px 10px;}.inputHome {min-width: 100px;float: left;}
.text1Home {float: left;padding: 0px 15px;}.row1 .text1Home:first-child {padding-left: 0px;}
.FormWrapper{display: block;background-color: whitesmoke;padding: 30px;max-width: 310px;
margin: auto;border-radius: 10px;}.calculateBtn {background: #ff9014;border: none;padding: 9px 21px;  border-radius: 6px;font-size: 17px;cursor: pointer;} .a-bouns {animation-duration: 2s;position: relative;}.a-bouns:hover {animation-name: bounce;}.input {width: 100%;min-width: 120px;max-width: 140px;float: left;}.input-fld {width: 100%;padding: 10px 7px;outline: none;font-size: 15px;border-radius: 6px;color: black;border: 1px solid #ccc;box-sizing: border-box;}
.input-fld:hover {border: 1px solid #99e1e5;}.input-fld:focus {border-color: #66afe9;outline: 0;-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}.text1 {float: left;padding: 0px 10px;min-width: 110px;text-align: left;padding: 0;}.label-text {font-size: 19px;}
.calculateDiv2 {display: block;margin: 10px 0px;text-align: left;border-bottom: 2px solid;padding: 0px 0px 16px 0px;}  
@keyframes bounce {from, 20%, 53%, 80%, to {animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);transform: translate3d(0, 0, 0);}40%, 43% {animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);transform: translate3d(0, -5px, 0);}70% {animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);transform: translate3d(0, -3px, 0);}90% {transform: translate3d(0, -2px, 0);}}
/*.FormWrapper .calculateDiv2 {
text-align: end;
}*/
.FormWrapper .calculateBtn {
padding: 9px 20px;
}
@media screen and (min-width:768px) and (max-width:1366px){
.FormWrapper.FormWrapper3 .calculateDiv2 {
    text-align: end;
}
.FormWrapper.FormWrapper3 .calculateBtn {
    margin-right: 11%;
    padding: 9px 32px;
}
}
.FormWrapper .label-text {
vertical-align: -webkit-baseline-middle;
}
.calculateBtn {
    background: #ff9014;
    border: none;
    padding: 9px 21px;
    border-radius: 6px;
    font-size: 17px;
    cursor: pointer;
    -webkit-appearance: none;
}
#error_msg
{
    color:red;
    font-size: 15px;
}

p#result .row:nth-child(2) .text1 {
    background-color: #000cad;
    color: #ffffff;
    padding: 0 10px 10px;
    line-height: normal;
    text-align: center;
    min-width: 27%;
}
p#result .input-fld {
    width: 70%;
    padding: 10px 0px;
    outline: none;
    font-size: 15px;
    color: black;
    border: 1px solid #ccc;
    box-sizing: border-box;
    text-align: center;
}
p#result .text1 { text-align: center;}
p#result .label-text { font-size: 16px;}
p#result .row:nth-child(2) .text1:nth-child(2) {
    border-right: 1px solid #dddddd;
    border-left: 1px solid #dddddd;
}
@media only screen and (max-width: 767px) {
    p#result .label-text { font-size: 13px;}
    /* p#result .text1 { min-width: 40%;}
    p#result .input { min-width: 38%;} */
    p#result { width: 300px;}
}
@media only screen and (max-width: 767px) {
    .FormWrapper.FormWrapper3 .calculateBtn, .FormWrapper.FormWrapper2 .calculateBtn {
        margin-right: 19%;
    }
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.ar .input, .ar .text1, .ar .text2 {
    float: right;
}
.ar .text1 {
    text-align: right;
}

 
.ar .calculateDiv2 {
    text-align: right;
}
.ar .inputHome {
    float: right;
}

.ar .text1Home {
    float: right;
}

.ar .dFlex {
    flex-direction: row-reverse;
}

.ar .calculateDiv {
    float: right;
}
.ar .row1 .text1Home:first-child {
    padding-left: 15px;
    padding-right: 0;
    margin-top: 0px;
}
.ar .calculateDiv {
    min-width: 90px;
}
.row1{
        flex-grow: 1;
}
.ar .disC .text1 {
    min-width: 160px;
}
.ar .FormWrapper3 .text1 {
    min-width: 230px;
}
.ar .w1{
        max-width: 330px;
}
.w2{
        max-width: 350px;
}
.ar .w2{
        max-width: 380px;
}

.w3{
        max-width: 360px;
}
.ar .w3{
        max-width: 430px;
}

.w4{
        max-width: 355px;
}
.ar .w4{
        max-width: 465px;
}
.ar .row2, .ar .row1{
    float: right;
}
.ar .w3 .text1Home, .ar .w4 .text1Home, .ar .w5 .text1Home {
    display: block;
    width: 80%;
    text-align: right;
    margin-bottom: 13px;
    margin-top: 13px;
}

.ar .w3 .row1 .inputHome, .ar .w4 .row1 .inputHome, .ar .w5 .row1 .inputHome {
    max-width: 90%;
    min-width: 170px;
}
.ar .w3 .row1 .text1Home:last-child, .ar .w4 .row1 .text1Home:last-child, .ar .w5 .row1 .text1Home:last-child {
    width: auto;
}
.ar .row2 .inputHome {
    max-width: 170px;
}
.ar .row .results{
    margin-top: 13px;
}
@media only screen and (max-width: 360px){
    .ar .inputHome{
        max-width: 75px;
        min-width: 75px;
    }
}
p#result .row:nth-child(3) .text1:first-child label.label-text, p#result .row:nth-child(4) .text1:first-child label.label-text, 
p#result .row:nth-child(5) .text1:first-child label.label-text, p#result .row:nth-child(6) .text1:first-child label.label-text, 
p#result .row:nth-child(7) .text1:first-child label.label-text {
    margin-left: -10px;
}
p#result .row:nth-child(3) .input:last-child input.input-fld, p#result .row:nth-child(4) .input:last-child input.input-fld, 
p#result .row:nth-child(5) .input:last-child input.input-fld, p#result .row:nth-child(6) .input:last-child input.input-fld, 
p#result .row:nth-child(7) .input:last-child input.input-fld { margin-left: -3px;}
     </style>
  </head>
  <body class="ar tbl"> 
  
    <div class="FormWrapper">    
        <div class="row">
            <div class="input">
                <input type="number" min="1" size="3" id="salarAmount" class="input_result input-fld" required/>
            </div>
            <div class="text1">
                <label class="label-text">مبلغ الفاتورة</label>
            </div>
        </div>

        <div class="calculateDiv2">
            <input type="submit" name="salary_btn" id="salary_btn" value="احسب" onclick="myfunction()" class="a-bouns calculateBtn">
            <p id="error_msg"></p>
        </div>        
        <p id="result"></p>
       
    </div>                        

 
			
        <script>
              function myfunction(e){

                var salarAmount = document.getElementById("salarAmount").value;
                var Billamount = salarAmount;
                var patt1 = /[A-Za-z-!@#$%^&*()+=]/g;
  var result = salarAmount.match(patt1);
  document.getElementById("salarAmount").setAttribute("style", "box-shadow: none;border: 1px solid #ccc;");
  if(result)
  {
  document.getElementById("error_msg").innerHTML = 'Please input a value greater than 0';
  document.getElementById("salarAmount").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
  document.getElementById("result").innerHTML='';
  return false;
  }
  else if(salarAmount<=0 ||salarAmount =="")
  {
  document.getElementById("error_msg").innerHTML = 'Please input a value greater than 0';
  document.getElementById("salarAmount").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
  document.getElementById("result").innerHTML=''; 
  return false;
  }
  else 
  {
    document.getElementById("error_msg").innerHTML = ''; 
  }

            var text = "";
               //   for(var i = 0; i < year; i++){

                        var tipamount   = (Billamount * (5/100));
                        var tipamount10 = (Billamount * (10/100));
                        var tipamount15 = (Billamount * (15/100));
                        var tipamount20 = (Billamount * (20/100));
                        var tipamount25 = (Billamount * (25/100));
                        var tipamount30 = (Billamount * (30/100));
                        var tipamount40 = (Billamount * (40/100));
                        var tipamount50 = (Billamount * (50/100));

var tpamt=parseFloat(tipamount);
var tpamt10=parseFloat(tipamount10);
var tpamt15=parseFloat(tipamount15);
var tpamt20=parseFloat(tipamount20);
var tpamt25=parseFloat(tipamount25);
var tpamt30=parseFloat(tipamount30);
var tpamt40=parseFloat(tipamount40);
var tpamt50=parseFloat(tipamount50);

var bl_amt=parseFloat(Billamount);
                        var total   =   (tpamt + bl_amt);
                        var total10 = (tpamt10 + bl_amt);
                        var total15 = (tpamt15 + bl_amt);
                        var total20 = (tpamt20 + bl_amt);
                        var total25 = (tpamt25 + bl_amt);
                        var total30 = (tpamt30 + bl_amt);
                        var total40 = (tpamt40 + bl_amt);
                        var total50 = (tpamt50 + bl_amt);

                        text +="<div class='row'><div class='text1'><label class='label-text'>النسبة المئوية للإكرامية %</label></div><div class='text1'><label class='label-text'>مبلغ الإكرامية</label></div><div class='text1'><label class='label-text'>الإجمالي</label></div></div><div class='row'><div class='text1'><label class='label-text'>5%</label></div><div class='input' style='margin-right: -17px;'><input type='text' name='y' class='input-fld' value='" + tipamount+ "' readonly></div><div class='input'><input type='text' name='y' class='input-fld' value='" + total.toFixed(2)+ "' readonly></div></div><div class='row'><div class='text1'><label class='label-text'>10%</label></div><div class='input' style='margin-right: -17px;'><input type='text' name='y' class='input-fld' value='" + tipamount10+ "' readonly></div><div class='input'><input type='text' name='y' class='input-fld' value='" + total10.toFixed(2)+ "' readonly></div></div><div class='row'><div class='text1'><label class='label-text'>15%</label></div><div class='input' style='margin-right: -17px;'><input type='text' name='y' class='input-fld' value='" + tipamount15+ "' readonly></div><div class='input'><input type='text' name='y' class='input-fld' value='" + total15.toFixed(2)+ "' readonly></div></div><div class='row'><div class='text1'><label class='label-text'>20%</label></div><div class='input' style='margin-right: -17px;'><input type='text' name='y' class='input-fld' value='" + tipamount20+ "' readonly></div><div class='input'><input type='text' name='y' class='input-fld' value='" + total20.toFixed(2)+ "' readonly></div></div><div class='row'><div class='text1'><label class='label-text'>25%</label></div><div class='input' style='margin-right: -17px;'><input type='text' name='y' class='input-fld' value='" + tipamount25+ "' readonly></div><div class='input'><input type='text' name='y' class='input-fld' value='" + total25.toFixed(2)+ "' readonly></div></div><div class='row'><div class='text1'><label class='label-text'>30%</label></div><div class='input' style='margin-right: -17px;'><input type='text' name='y' class='input-fld' value='" + tipamount30+ "' readonly></div><div class='input'><input type='text' name='y' class='input-fld' value='" + total30.toFixed(2)+ "' readonly></div></div><div class='row'><div class='text1'><label class='label-text'>40%</label></div><div class='input' style='margin-right: -17px;'><input type='text' name='y' class='input-fld' value='" + tipamount40+ "' readonly></div><div class='input'><input type='text' name='y' class='input-fld' value='" + total40.toFixed(2)+ "' readonly></div></div><div class='row'><div class='text1'><label class='label-text'>50%</label></div><div class='input' style='margin-right: -17px;'><input type='text' name='y' class='input-fld' value='" + tipamount50+ "' readonly></div><div class='input'><input type='text' name='y' class='input-fld' value='" + total50.toFixed(2)+ "' readonly></div></div>";
                        document.getElementById("result").innerHTML ="<br>" + text + "<br>";
                 // }
              }
        </script>
  
  </body>
</html>		