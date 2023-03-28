
var fname,lname,mname,email,password,con_password,region,province,city,barangay,contact;
var my_arr = [fname,lname,mname,email,password,con_password,region,province,city,barangay,contact]
var my_ids = ["input_fname","input_lname","input_mname","input_email","input_password","input_con_password",
"input_region","input_province","input_city","input_barangay",'input_contact']

  function get_value(id){
    return $("#"+id)[0].value;
  }

  function store(vars,ids){
    for(var i = 0; i< vars.length; i++){
        vars[i] = get_value(ids[i]);
    }
  }
