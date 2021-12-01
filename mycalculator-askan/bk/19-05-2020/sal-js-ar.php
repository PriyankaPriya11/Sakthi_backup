<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style type="text/css">
body{font-size: 20px;font-family: Tahoma, Geneva, sans-serif ;}
.row {margin-bottom: 11px;overflow: hidden; display:flex;justify-content: space-between;}
.text2 {float: left;padding: 0px 10px;}.inputHome {min-width: 100px;float: left;}
.text1Home {float: left;padding: 0px 15px;}.row1 .text1Home:first-child {padding-left: 0px;}
.FormWrapper{display: block;background-color: whitesmoke;padding: 30px;max-width: 390px;
border-radius: 10px;}
.FormWrapper2{padding: 0px}
.calculateBtn {background: #ff9014;border: none;padding: 9px 21px;  border-radius: 6px;font-size: 17px;cursor: pointer;} .a-bouns {animation-duration: 2s;position: relative;}.a-bouns:hover {animation-name: bounce;}.input {width: 100%;min-width: 120px;max-width: 140px;float: left;}.input-fld {width: 100%;padding: 10px 7px;outline: none;font-size: 15px;border-radius: 6px;color: black;border: 1px solid #ccc;box-sizing: border-box;}
.input-fld:hover {border: 1px solid #99e1e5;}.input-fld:focus {border-color: #66afe9;outline: 0;-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);}.text1 {float: left;min-width: 110px;text-align: left;padding: 0;margin-bottom:3px;}.label-text {font-size: 19px;}
@media screen and (min-width:768px) and (max-width:1366px){.label-text{font-size:14px;}}
.calculateDiv2 {display: block;margin: 10px 0px;text-align: left;border-bottom: 2px solid;padding: 0px 0px 16px 0px;}  
@keyframes bounce {from, 20%, 53%, 80%, to {animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);transform: translate3d(0, 0, 0);}40%, 43% {animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);transform: translate3d(0, -5px, 0);}70% {animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);transform: translate3d(0, -3px, 0);}90% {transform: translate3d(0, -2px, 0);}}
.FormWrapper .calculateDiv2 {
text-align: end;
}
.FormWrapper .calculateBtn {
padding: 9px 20px;
}
@media screen and (min-width:768px) and (max-width:1366px){
.FormWrapper.FormWrapper3 .calculateDiv2 {
    text-align: end;
}
.FormWrapper.FormWrapper3 .calculateBtn {
    margin-right: 11%;
    padding: 9px 20px;
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

/* Remove the arrow in number field*/
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.FormWrapper .text1 { width: 60%;}
.FormWrapper .input { max-width: 40%;}
@media only screen and (max-width: 360px) {
    .FormWrapper .text3 { width: 100%;}
    .FormWrapper .input2 { max-width: 80%;}
    .calculateDiv2{margin: 20px 0px;}
    /* .FormWrapper .calculateDiv2 { text-align: center;} */
    /* .row{display:block;} */
}
@media only screen and (min-width:300px) and (max-width:767px){
    .FormWrapper .inputcopy { max-width: 80%;}
}
@media only screen and (min-width:300px) and (max-width:767px){
    .row{
        display:block;
    }
}
/*16-5-2020*/
.FormWrapper.FormWrapper2 .calculateDiv2 {
    text-align: left;
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

     </style>
  </head>
  <body class="ar tbl"> 
    <div class="row FormWrapper FormWrapper2">    
    <form onsubmit = "event.preventDefault(); myfunction();">
        <div class="row">
            <div class="text1 text3">
                <label class="label-text">الراتب الحالي</label>

            </div>
            <div class="input input2">
                <input type="number"  min="1" id="salarAmount" class="input_result input-fld" required/>
            </div>
        </div>
        <div class="row">
            <div class="text1 text3">
                <label class="label-text"> % زيادة في السنة</label>
            </div>
            <div class="input input2">
                <input type="number" min="1" id="salarIncrement" class="input-fld" required/>
            </div>
        </div>
        <div class="row">
            <div class="text1 text3">
                <label class="label-text">عدد السنوات</label>
            </div>
            <div class="input input2">
                <input  type="number" min="1" max="10" name="myyear" id="myyear" class="input-fld" required/>
            </div>
        </div>
        <div class="calculateDiv2" style="text-align:right">
            <input type="submit" name="salary_btn" id="salary_btn" value="احسب" onclick="myfunction()" class="a-bouns calculateBtn" style="margin-right:0%;">
            <p id="error_msg"></p>
        </div>
      </form>
        <p id="result"></p>
       
    </div>                        
                       
        
 
			
        <script>
              function myfunction(){

                var salarAmount = document.getElementById("salarAmount").value;
                var salarIncrement = document.getElementById("salarIncrement").value;
                var year = document.getElementById("myyear").value;
                var incr_answer = salarAmount;
                var patt1 = /[A-Za-z-!@#$%^&*()+=]/g;
                var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
  var result = salarAmount.match(patt1);
  var result1 = salarIncrement.match(patt1);
  var result2 = year.match(patt1);
                document.getElementById("salarAmount").setAttribute("style", "box-shadow: none;border: 1px solid #ccc;");
                document.getElementById("salarIncrement").setAttribute("style", "box-shadow: none;border: 1px solid #ccc;");
                document.getElementById("myyear").setAttribute("style", "box-shadow: none;border: 1px solid #ccc;");
                    if(result ||result1 ||result2)
                    {
                    //document.getElementById("error_msg").innerHTML = 'Please input a value greater than 0';
                    document.getElementById("result").innerHTML='';
                        if(result)
                        {
                            document.getElementById("salarAmount").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                        else if (result1 )
                        {
                            document.getElementById("salarIncrement").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                        else if (result2)
                        {
                            document.getElementById("myyear").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                    return false;
                    }
                    else if(salarAmount ===""||salarIncrement===""||year==="")
                    {
                        //document.getElementById("error_msg").innerHTML = 'Please fill in this field.';
                        document.getElementById("result").innerHTML=''; 
                        console.log(salarAmount);
                        if(salarAmount<=0 ||salarAmount =="")
                        {
                            document.getElementById("salarAmount").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                        else if (salarIncrement==""||salarIncrement<=0 )
                        {
                            document.getElementById("salarIncrement").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                        else if (year<=0||year=="")
                        {
                            document.getElementById("myyear").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                        return false;
                    }
                    else if(salarAmount<=0 ||salarIncrement<=0||year<=0)
                    {
                       // document.getElementById("error_msg").innerHTML = 'Please input a value greater than 0';
                        document.getElementById("result").innerHTML=''; 
                        if(salarAmount<=0 ||salarAmount =="")
                        {
                            document.getElementById("salarAmount").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                        else if (salarIncrement==""||salarIncrement<=0 )
                        {
                            document.getElementById("salarIncrement").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                        else if (year<=0||year=="")
                        {
                            document.getElementById("myyear").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        }
                        return false;
                    }
                    else if(!((Number.isInteger(+year))))
                    {
                       // document.getElementById("error_msg").innerHTML = 'Please input whole numbers only';
                        document.getElementById("result").innerHTML=''; 
                        document.getElementById("myyear").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        return false;
                    }
                    else if(year >10)
                    {
                        //document.getElementById("error_msg").innerHTML = 'Please input a value from 1 to 10';
                        document.getElementById("result").innerHTML=''; 
                        document.getElementById("myyear").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);border: 1px solid #99e1e5;");
                        return false;
                    }
                    else 
                    {
                        document.getElementById("error_msg").innerHTML = ''; 
                    }

                 var text = "";
                  for(var i = 0; i < year; i++){

                        var inc = (incr_answer * salarIncrement) / 100;
                        incr_answer = (+inc) +  (+incr_answer);
                        text +="<div class='row'><div class='text1'><label class='label-text'>"+ (+i + +1) + " عام</label></div><div class='input input2'><input   type='text' name='y" + i + "' class='input-fld' value='" + incr_answer.toFixed(2) + "' readonly></div></div>";
                        document.getElementById("result").innerHTML ="<br>" + text + "<br>";
                  }
                  return true;
              }
        </script>
  </body>
</html>		