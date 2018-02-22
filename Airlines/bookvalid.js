
function Submit(){
 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var fname = document.form.fname.value,
  lname = document.form.lname.value,
  femail = document.form.email.value,
  freemail = document.form.cemail.value,
  fphonenum = document.form.phonenum.value,
 // fmonth = document.form.birthday_month.value,
  //fday = document.form.birthday_day.value,
  //fyear = document.form.birthday_year.value;
   
 if( fname == "" )
   {
     document.form.fname.focus() ;
  document.getElementById("errorBox").innerHTML = "Enter the first name";
     return false;
   }
 if( lname == "" )
   {
     document.form.lname.focus() ;
   document.getElementById("errorBox").innerHTML = "Enter the last name";
     return false;
   }
    
   if (femail == "" )
 {
  document.form.email.focus();
  document.getElementById("errorBox").innerHTML = "Enter the email";
  return false;
  }else if(!emailRegex.test(femail)){
  document.form.email.focus();
  document.getElementById("errorBox").innerHTML = "Enter the valid email";
  return false;
  }
   
   if (freemail == "" )
 {
  document.form.cemail.focus();
  document.getElementById("errorBox").innerHTML = "Re-enter the email";
  return false;
  }else if(!emailRegex.test(freemail)){
  document.form.cemail.focus();
  document.getElementById("errorBox").innerHTML = "Re-enter the valid email";
  return false;
  }
   
  if(freemail !=  cemail){
   document.form.enterEmail.focus();
   document.getElementById("errorBox").innerHTML = "Emails are not matching, re-enter again";
   return false;
   }
   
   
 if(fphonenum == "")
  {
   document.form.phonenum.focus();
   document.getElementById("errorBox").innerHTML = "Enter the password";
   return false;
  }
 /*  if(fmonth == "" && fday == "" && fyear =="")
   {
		document.getElementById("errorBox").innerHTML = "Enter the Birthday";
        return false;
   }
   if (fmonth == "") {
        document.form.birthday_month.focus();
  document.getElementById("errorBox").innerHTML = "Select the birthday month";
        return false;
     }
  if (fday == "") {
        document.form.birthday_day.focus();
  document.getElementById("errorBox").innerHTML = "Select the birthday day";
        return false;
     }
  if (fyear == "") {
        document.form.birthday_year.focus();
  document.getElementById("errorBox").innerHTML = "Select the birthday year";
        return false;
     }
  if(document.form.radiobutton[0].checked == false && document.form.radiobutton[1].checked == false){
    document.getElementById("errorBox").innerHTML = "Select your gender";
    return false;
   }
  if(fname != '' && lname != '' && femail != '' && freemail != '' && fpassword != '' && fmonth != '' && fday != '' && fyear != ''){
   document.getElementById("errorBox").innerHTML = "Form submitted successfully";
   }*/
     
}
