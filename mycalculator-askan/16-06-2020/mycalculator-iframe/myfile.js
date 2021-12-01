 var userSelection = document.getElementsByClassName('input-fld');
            for(var i = 0; i < userSelection.length; i++) {
              (function(index) {
                userSelection[index].addEventListener("keyup", function(event) {
                  alert(index);
                  if (event.keyCode === 13) { 
                    if(index ==0 || index ==1)
                    {
                      var loanAmount1= document.getElementsByClassName("input-fld").item(0).value;
                      var loanpercentage= document.getElementsByClassName("input-fld").item(1).value;
                      if(loanAmount1 !='' && loanpercentage !='')
                      {
                        document.getElementsByClassName('calculateBtn')[0].click();
                      }
                    }
                    else if(index ==3 || index ==4)
                    {
                      var loanAmount2= document.getElementsByClassName("input-fld").item(3).value;
                      var loanpercentage2= document.getElementsByClassName("input-fld").item(4).value;
                      if(loanAmount2 !='' && loanpercentage2 !='')
                      {
                        document.getElementsByClassName('calculateBtn')[1].click();
                      }
                    }
                    else if(index ==6 || index ==7)
                    {
                      var loanAmount3= document.getElementsByClassName("input-fld").item(6).value;
                      var loanpercentage3= document.getElementsByClassName("input-fld").item(7).value;
                      if(loanAmount3 !='' && loanpercentage3 !='')
                      {
                        document.getElementsByClassName('calculateBtn')[2].click();
                      }
                    }
                    else if(index ==9 || index ==10)
                    {
                      var loanAmount4= document.getElementsByClassName("input-fld").item(9).value;
                      var loanpercentage4= document.getElementsByClassName("input-fld").item(10).value;
                      if(loanAmount4 !='' && loanpercentage4 !='')
                      {
                        document.getElementsByClassName('calculateBtn')[3].click();
                      }
                    }
                    else if(index ==12 || index ==13)
                    {
                      var loanAmount5= document.getElementsByClassName("input-fld").item(12).value;
                      var loanpercentage5= document.getElementsByClassName("input-fld").item(13).value;
                      if(loanAmount5 !='' && loanpercentage5 !='')
                      {
                        document.getElementsByClassName('calculateBtn')[4].click();
                      }
                    }

                    else 
                    {
                      console.log("Undefined box"+ index);
                    }
                  }
                })
              })(i);
            }