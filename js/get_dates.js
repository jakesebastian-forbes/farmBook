 /**
  * *write dates and years
  * !user must be atleast 16 years of age
  */
 var date_obj = new Date;
 var currYear = date_obj.getFullYear();


 function getMonth(selection){
   $('#input_bday_day').children().remove();
 if($('#input_bday_month')[0].value == 2){
   for (var i = 1; i <= 29; i++) {
   $("#input_bday_day").append('<option value="' + i + '" >' + i + '</option>');
 }
 }
 else{
   for (var i = 1; i <= 31; i++) {
   $("#input_bday_day").append('<option value="' + i + '" >' + i + '</option>');
 }
 }
 
}