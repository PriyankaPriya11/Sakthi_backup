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
.FormWrapper .calculateDiv2 {
text-align: end;
}
.FormWrapper .calculateBtn {
padding: 9px 33px;
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
     </style>
  </head>
  <body> 
    <div class="FormWrapper">    
        <div class="row">
            <div class="text1">
                <label class="label-text">Current salary</label>
            </div>
            <div class="input">
                <input type="number"  id="salarAmount" class="input_result input-fld"/>
            </div>
        </div>
        <div class="row">
            <div class="text1">
                <label class="label-text"> % Increase per year</label>
            </div>
            <div class="input">
                <input type="number" id="salarIncrement" class="input-fld" />
            </div>
        </div>
        <div class="row">
            <div class="text1">
                <label class="label-text">Number of years</label>
            </div>
            <div class="input">
                <input  type="number" name="myyear" id="myyear" class="input-fld" />
            </div>
        </div>
        <div class="calculateDiv2">
            <input type="submit" name="salary_btn" id="salary_btn" value="Calculate" onclick="myfunction()" class="a-bouns calculateBtn">
            <p id="error_msg"></p>
        </div>
      
        <p id="result"></p>
       
    </div>                        
                       
        
 
			
        <script>
              function myfunction(){
                var salarAmount = document.getElementById("salarAmount").value;
                var salarIncrement = document.getElementById("salarIncrement").value;
                var year = document.getElementById("myyear").value;
                var incr_answer = salarAmount;
                var patt1 = /[A-Za-z-!@#$%^&*()+=]/g;
  var result = salarAmount.match(patt1);
  var result1 = salarIncrement.match(patt1);
  var result2 = year.match(patt1);
  if(result ||result1 ||result2)
  {
  document.getElementById("error_msg").innerHTML = 'Please input numerical values greater than 0';
  document.getElementById("result").innerHTML='';
  return false;
  }
  else if(salarAmount<=0 ||salarAmount ==""||salarIncrement==""||salarIncrement<=0||year<=0||year=="")
  {
  document.getElementById("error_msg").innerHTML = 'Please input numerical values greater than 0';
  document.getElementById("result").innerHTML=''; 
  }

  else 
  {
    document.getElementById("error_msg").innerHTML = ''; 
  }

            var text = "";
                  for(var i = 0; i < year; i++){

                        var inc = (incr_answer * salarIncrement) / 100;
                        incr_answer = (+inc) +  (+incr_answer);
                        text +="<div class='row'><div class='text1'><label class='label-text'>"+ (+i + +1) + " Year</label></div><div class='input'><input type='text' name='y" + i + "' class='input-fld' value='" + incr_answer.toFixed(2) + "' readonly></div></div>";
                        document.getElementById("result").innerHTML ="<br>" + text + "<br>";
                  }
              }
        </script>
  </body>
</html>		