<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style type="text/css">
    .amortisationLink {
        background: #ff9014;
        border: none;
        padding: 9px 21px;
        border-radius: 6px;
        font-size: 17px;
        cursor: pointer;
        color: black;
        text-decoration: none
    }

    body {
        font-size: 20px;
        font-family: Tahoma, Geneva, sans-serif;
    }

    .row {
        margin-bottom: 11px;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
    }

    .text2 {
        float: left;
        padding: 0px 10px;
    }

    .inputHome {
        min-width: 100px;
        float: left;
    }

    .text1Home {
        float: left;
        padding: 0px 15px;
    }

    .row1 .text1Home:first-child {
        padding-left: 0px;
    }

    .FormWrapper {
        display: block;
        background-color: whitesmoke;
        padding: 0px;
        max-width: 310px;
        margin: auto;
        border-radius: 10px;
    }

    .calculateBtn {
        background: #ff9014;
        border: none;
        padding: 9px 21px;
        border-radius: 6px;
        font-size: 17px;
        cursor: pointer;
    }

    .a-bouns {
        animation-duration: 2s;
        position: relative;
    }

    .a-bouns:hover {
        animation-name: bounce;
    }

    .input {
        width: 100%;
        min-width: 120px;
        max-width: 140px;
        float: left;
    }

    .input-fld {
        width: 100%;
        padding: 10px 7px;
        outline: none;
        font-size: 15px;
        border-radius: 6px;
        color: black;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .input-fld:hover {
        border: 1px solid #99e1e5;
    }

    .input-fld:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
    }

    .text1 {
        float: left;
        padding: 0px 10px;
        min-width: 110px;
        text-align: left;
        padding: 0;
    }

    .label-text {
        font-size: 19px;
    }

    .calculateDiv2 {
        display: block;
        margin: 10px 0px;
        text-align: left;
        border-bottom: 2px solid;
        padding: 0px 0px 16px 0px;
    }
    #mothly_payment_list table { border-collapse: collapse; width: 100%;}
    #mothly_payment_list td, div#mothly_payment_list th { border: 1px solid #ddd; padding: 8px;}
    #mothly_payment_list th { background-color: #000cad;}
    #mothly_payment_list tr:nth-child(even){background-color: #f2f2f2;}
    #mothly_payment_list tr:hover {background-color: #ddd;}
    #mothly_payment_list td { font-size: 16px; padding: 8px;}
    @keyframes bounce {

        from,
        20%,
        53%,
        80%,
        to {
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            transform: translate3d(0, 0, 0);
        }

        40%,
        43% {
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            transform: translate3d(0, -5px, 0);
        }

        70% {
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            transform: translate3d(0, -3px, 0);
        }

        90% {
            transform: translate3d(0, -2px, 0);
        }
    }

    div#mothly_payment_list {
        display: flex;
        justify-content: center;
    }

    th {
        background-color: #323edd;
        color: #ffffff;
        font-weight: normal;
        padding: 10px;
    }

    .FormWrapper {
        max-width: 100%;
    }

    @media only screen and (max-width: 767px) {
        .label-text {
            font-size: 17px;
        }

        table {
            font-size: 12px;
            width: auto;
        }
    }
    table { width: 100%;}
    .calculateDiv2{
text-align: end;
}
.label-text{
vertical-align: -webkit-baseline-middle;
}
.calculateBtn{
    padding: 9px 32px;
}
@media screen and (device-width:320px) and (device-height:568px){
.calculateBtn{
 padding: 9px 26px;
}
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
    font-size:15px;
}
@media only screen and (max-width: 599px) {
    .row { display: block;}
    .input { max-width: 100%;}
    .text1 { margin-bottom: 5px;}
    .FormWrapper .calculateDiv2 { text-align: center;}
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

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
    </style>
</head>

<body class="ar tbl">
    <div class="FormWrapper">
        <div class="row">
             <div class="text1">
                <label class="label-text">مبلغ القرض</label>
            </div>
            <div class="input">
                <input type="number" id="loanAmount" class="input_result input-fld" />
            </div>
           
        </div>
        <div class="row">

             <div class="text1">
                <label class="label-text">معدل الفائدة السنوي</label>
            </div>
            <div class="input">
                <input type="number" id="annualIntrest" class="input-fld" />
            </div>
            
           
        </div>
        <div class="row">
          <div class="text1">
                <label class="label-text">عدد الأشهر</label>
            </div>
         <div class="input">
                <input type="number" name="nomonth" id="nomonth" class="input-fld" />
            </div>
           
           
        </div>
        <div class="row">
             <div class="text1">
                <label class="label-text">تاريخ بدء القرض</label>
            </div>
             <div class="input">
                <input type="text" name="startdate" id="startdate" class="input-fld" />
            </div>
           
           
        </div>
        <div class="row">
            <div class="text1">
                <label class="label-text">رسوم مقدمة إضافية</label>
            </div>
            <div class="input">
                <input type="number" name="extra_fee" id="extra_fee" class="input-fld" />
            </div>
            
        </div>
        <div class="calculateDiv2">
            <input type="submit" name="salary_btn" id="salary_btn" value="احسب" onclick="myfunction()"
                class="a-bouns calculateBtn">
                <p id="error_msg"></p>
                
        </div>

        <div class="row">
             <div class="text1">
                <label class="label-text">سعر الفائدة الشهري</label>
            </div>
            <div class="input">
                <input type="text" readonly="" id="monthly_intrest_rate" class="input_result input-fld">
            </div>
           
        </div>
        <div class="row">
            <div class="text1">
                <label class="label-text">مجموع الفوائد</label>
            </div>
            <div class="input">
                <input type="text" readonly="" id="total_intrest" class="input_result input-fld">
            </div>
            
        </div>
        <div class="row">
             <div class="text1">
                <label class="label-text">مدفوعات شهرية</label>
            </div>
            <div class="input">
                <input type="text" readonly="" id="monthly_payment" class="input_result input-fld">
            </div>
            
        </div>
        <div class="row">
             <div class="text1">
                <label class="label-text">مبلغ القرض</label>
            </div>
            <div class="input">
                <input type="text" readonly="" id="loan_amount" class="input_result input-fld">
            </div>
           
        </div>
        <div class="row">
             <div class="text1">
                <label class="label-text">الإجمالي الواجب دفعه</label>
            </div>
            <div class="input">
                <input type="text" readonly="" id="total_paid" class="input_result input-fld">
            </div>
           
        </div>
        <div class="row">
           <div class="text1">
                <label class="label-text">تاريخ العائد المقدر </label>
            </div>
            <div class="input">
                <input type="text" readonly="" id="payoff_date" class="input_result input-fld">
            </div>
           
        </div>
        <div id="montly_list" style="display:none">
            <div align="center" id="amortisationLinkDiv">
                <a href="#" onclick="showAmortisation(); return false;" class="amortisationLink">إظهار جدول السداد</a>
            </div>
            <div>
                <h3 id= "loan_message" style='display:none;'>مدفوعات القرض حسب الشهر</h3>
                <div id="mothly_payment_list"></div>
            </div>
        </div>
    </div>




    <script type="text/javascript">
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }
    today = mm + '/' + dd + '/' + yyyy;
    document.getElementById("startdate").value = today;
    var userSelection = document.getElementsByClassName('input-fld');
    for (var i = 0; i < userSelection.length; i++) {
        (function(index) {
            userSelection[index].addEventListener("keyup, change", function(event) {
                document.getElementById("mothly_payment_list").innerHTML= '';
                document.getElementById("loan_message").style.display = 'none';
                if (event.keyCode === 13) {
                    if (index == 0 || index == 1 || index == 2 || index == 4) {
                        var loanAmount1 = document.getElementsByClassName("input-fld").item(0).value;
                        var loanpercentage = document.getElementsByClassName("input-fld").item(1).value;
                        var noperson = document.getElementsByClassName("input-fld").item(2).value;
                        var extrafee = document.getElementsByClassName("input-fld").item(4).value;

                        if (loanAmount1 != '' && loanpercentage != '' && noperson != '') {
                            document.getElementsByClassName('calculateBtn')[0].click();
                        }
                    }
                }

            })
        })(i);
    }

    function myfunction() {
        var loanAmount = document.getElementById("loanAmount").value;
        var annualIntrests = document.getElementById("annualIntrest").value;
        var annual_intrest = document.getElementById("annualIntrest").value;
        var month = document.getElementById("nomonth").value;
        var extrafee = document.getElementById("extra_fee").value;
        var extrafee_amount = document.getElementById("extra_fee").value;
        var patt1 = /[-+=!@#$%^&*]/g;
        var loanAmount1 = loanAmount.match(patt1);
        console.log(loanAmount1);
        var annualIntrestss = annualIntrests.match(patt1);
        var months = month.match(patt1);
        var extrafee = extrafee.match(patt1);
      var monthly_intestess=  annualIntrests/12;

        if (loanAmount != '' && annual_intrest != '' && month != '') {

            document.getElementById('monthly_intrest_rate').value=monthly_intestess.toFixed(2);
            annual_intrest = parseFloat(annual_intrest / 100);
            var result = parseFloat((loanAmount * annual_intrest / 12) * [Math.pow((1 + annual_intrest / 12), month)] /
                [Math.pow((1 + annual_intrest / 12), month) - 1]);
            var start_date = document.getElementById("startdate").value;
            var payoff = addMonths(new Date(start_date), month);
            console.log(payoff);
            document.getElementById("monthly_payment").value = result.toFixed(2);
            document.getElementById("loan_amount").value = (loanAmount);
            document.getElementById("total_intrest").value = ((result * month) - loanAmount).toFixed(2);
            document.getElementById("total_paid").value = (result * month).toFixed(2);
            document.getElementById("payoff_date").value = ((payoff.getMonth() + 1) + '/' + (payoff.getDate()) + '/' +
                payoff.getFullYear());
            document.getElementById("montly_list").style.display = 'block';
        }
        document.getElementById("loanAmount").setAttribute("style", "box-shadow: none;border: 1px solid #ccc;");
        document.getElementById("annualIntrest").setAttribute("style", "box-shadow: none;border: 1px solid #ccc;");
        document.getElementById("nomonth").setAttribute("style", "box-shadow: none;border: 1px solid #ccc;");
        document.getElementById("extra_fee").setAttribute("style", "box-shadow: none;border: 1px solid #ccc;");
        if(loanAmount1 || annualIntrestss || months || extrafee )
        {
            document.getElementById("error_msg").innerHTML = 'Please input a value greater than 0';
            if(loanAmount1)
            {
            document.getElementById("loanAmount").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            }
            else if(annualIntrestss)
            {
            document.getElementById("annualIntrest").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            }
            else if(months)
            {
            document.getElementById("nomonth").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            }
            else if(extrafee)
            {
            document.getElementById("extra_fee").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            }
            document.getElementById("monthly_payment").value='';
            document.getElementById("monthly_intrest_rate").value='';
            document.getElementById("loan_amount").value='';
            document.getElementById("total_intrest").value='';
            document.getElementById("total_paid").value='';
            document.getElementById("payoff_date").value='';
            return false;
        }
        else if(loanAmount<=0 ||loanAmount ==""||annualIntrests==""||annualIntrests<=0 || month<=0 || month== "")
        {
            document.getElementById("error_msg").innerHTML = 'Please input a value greater than 0';
            if(loanAmount<=0 ||loanAmount =="")
            {
            document.getElementById("loanAmount").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            }
            else  if(annualIntrests==""||annualIntrests<=0)
            {
            document.getElementById("annualIntrest").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            }
            else if(month<=0 || month== "")
            {
            document.getElementById("nomonth").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            }
            document.getElementById("monthly_payment").value=''; 
            document.getElementById("loan_amount").value='';
            document.getElementById("total_intrest").value='';
            document.getElementById("monthly_intrest_rate").value='';
            document.getElementById("total_paid").value='';
            document.getElementById("payoff_date").value='';
            return false;
        }
        else if(month<=0 || month >60)
        {
            document.getElementById("nomonth").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            document.getElementById("error_msg").innerHTML = 'Please input a value from 1 to 60';
            document.getElementById("monthly_payment").value=''; 
            document.getElementById("loan_amount").value='';
            document.getElementById("total_intrest").value='';
            document.getElementById("monthly_intrest_rate").value='';
            document.getElementById("total_paid").value='';
            document.getElementById("payoff_date").value='';
            return false;
        }
        else if (extrafee_amount < 0)
        {
            document.getElementById("extra_fee").setAttribute("style", "box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6); border-color: #66afe9;");
            document.getElementById("error_msg").innerHTML = 'Please input a value greater than or equal to 0';
            document.getElementById("monthly_payment").value=''; 
            document.getElementById("loan_amount").value='';
            document.getElementById("total_intrest").value='';
            document.getElementById("monthly_intrest_rate").value='';
            document.getElementById("total_paid").value='';
            document.getElementById("payoff_date").value='';
            return false;
        }
        else 
        {
            document.getElementById("error_msg").innerHTML = ''; 
        }
        /*text='';
        text +="<div class='row'><div class='text1'><label class='label-text'>Monthly Payments</label></div><div class='input'><input type='text' name='mothly_payments' class='input-fld' value='" + result.toFixed(2) + "' readonly></div><div class='text1'><label class='label-text'>Loan Amount</label></div><div class='input'><input type='text' name='loan_amount' class='input-fld' value='" + loanAmount + "' readonly></div>><div class='text1'><label class='label-text'>Total Intrest</label></div><div class='input'><input type='text' name='total_intrest' class='input-fld' value='" + annual_intrest + "%' readonly></div><div class='text1'><label class='label-text'>Total to be paid</label></div><div class='input'><input type='text' name='total_paid' class='input-fld' value='" + (annual_intrest+loanAmount) + "%' readonly></div></div>";
        document.getElementById("result").innerHTML ="<br>" + text + "<br>";*/
    }

    function addMonths(date, months) {
        var d = date.getDate();
        date.setMonth(date.getMonth() + +months);
        if (date.getDate() != d) {
            date.setDate(0);
        }
        return date;
    }

    function showAmortisation() {

        var loanAmount = document.getElementById("loanAmount").value;
        var annual_intrest = document.getElementById("annualIntrest").value;
        var month = document.getElementById("nomonth").value;
        var intresult = amort(loanAmount, annual_intrest, month);
        document.getElementById("mothly_payment_list").innerHTML = intresult;
    }

    function amort(balance, interestRate, terms) {
        document.getElementById("loan_message").style.display = "block";
        const monthNames = ["January", "February", "March", "April", "May", "June",
                            "July", "August", "September", "October", "November", "December"
                            ];
        var start_date = document.getElementById("startdate").value;
        var payoff = addMonths(new Date(start_date), 0);
        balance = parseInt(balance);
        interestRate = parseFloat(interestRate) / 100;
        terms = parseInt(terms);
        console.log(interestRate, "intrestrate");
        var payment_amount =document.getElementById("monthly_payment").value;
        //Calculate the per month interest rate
        var monthlyRate = interestRate / 12;

        //Calculate the payment
        var payment = balance * (monthlyRate / (1 - Math.pow(
            1 + monthlyRate, -terms)));

        //begin building the return string for the display of the amort table
        //add header row for table to return string
        var result = "<table border='1'><tr><th>موعد الدفع</th><th>المالك</th><th>فائدة</th><th>دفع</th><th>توازن</th>" ;

        /**
         * Loop that calculates the monthly Loan amortization amounts then adds 
         * them to the return string 
         */

        var interest = 0;

        //in-loop monthly principal amount holder
        var monthlyPrincipal = 0;

        //start a new table row on each loop iteration
        result += "<tr align=center>";

        //display the month number in col 1 using the loop count variable
        result += "<td>" + (monthNames[payoff.getMonth()]) +'  '+ (payoff.getFullYear())+ "</td>";

        //calc the in-loop interest amount and display
        //interest = balance * monthlyRate;


        //calc the in-loop monthly principal and display
        //monthlyPrincipal = payment - interest;
        result += "<td>  - </td>";

        //Monthly intrest

        result += "<td> - </td>";

        // Payment
        result += "<td>  - </td>";
        //code for displaying in loop balance
        result += "<td> " + balance.toFixed(2) + "</td>";            


        //end the table row on each iteration of the loop	
        result += "</tr>";

        
        payoff = addMonths(new Date(payoff), 1);

        for (var count = 0; count < terms; ++count) {

        interest2 = balance * monthlyRate;
        monthlyPrincipal2 = payment - interest2;
        //update the balance for each loop iteration
        balance2 = balance - monthlyPrincipal2;
            //in-loop interest amount holder
            var interest = 0;

            //in-loop monthly principal amount holder
           var monthlyPrincipal = 0;

            //start a new table row on each loop iteration
            result += "<tr align=center>";

            //display the month number in col 1 using the loop count variable
            result += "<td>" + (monthNames[payoff.getMonth()]) +'  '+ (payoff.getFullYear())+ "</td>";

            //calc the in-loop interest amount and display
            interest = balance * monthlyRate;


            //calc the in-loop monthly principal and display
            monthlyPrincipal = payment - interest;
            result += "<td>     " + monthlyPrincipal.toFixed(2) + "</td>";

            //Monthly intrest

            result += "<td> " + interest.toFixed(2) + "</td>";

            // Payment
            result += "<td> " + payment_amount+ "</td>";
            //code for displaying in loop balance
            result += "<td> " + balance2.toFixed(2) + "</td>";            
            

            //end the table row on each iteration of the loop	
            result += "</tr>";

            //update the balance for each loop iteration
                balance = balance - monthlyPrincipal;
                payoff = addMonths(new Date(payoff), 1);
        }

        //Final piece added to return string before returning it - closes the table
        result += "</table>";

        //returns the concatenated string to the page
        return result;
    }
    </script>
</body>

</html>