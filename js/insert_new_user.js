
  

// var my_arr = [fname,mname,lname,email,password,con_password,region,province,city,barangay,contact];
// var my_ids = ["input_fname","input_lname","input_mname","input_email","input_password","input_con_password",
// "input_region","input_province","input_city","input_barangay",'input_contact'];

var fname,lname,mname,email,password,con_password;
var region,province,city,barangay,contact;
var address,class_;


function select_class(n){
    $("#class")[0].value = n; // n for this.value 
    class_ =  $("#class")[0].value = n;
  }

//check if password matches
    $('#input_password, #input_con_password').on('keyup', function () {
        if ($('#input_password').val() == $('#input_con_password').val()) {
          $('#message').html('Matching').css('color', 'green');
        } else 
          $('#message').html('Not Matching').css('color', 'red');
          $('#btn_next_basic').attr("disabled","disabled");
            //   console.log("u called?!");
      });


//get everything as is to restore
  function store_basic(){

    // the basics 
    fname =  $("#input_fname")[0].value;
    mname =  $("#input_mname")[0].value;
    lname =  $("#input_lname")[0].value;
    email =  $("#input_email")[0].value;
    password =  $("#input_password")[0].value;

  }


  function insert_user(){
  
//put ajax here

  }

  function logs(vars){
    for(var i = 0; i< vars.length; i++){
        console.log(my_arr[i]);

    }
  }
// fname,lname,mname,email,password,con_password,region,province,city,barangay,contact
//   function store2(){
//     //get everything as text to put on the db
//     fname = get_value("input_fname");
//     mname = get_value("input_mname");
//     lname = get_value("input_lname");
//     email = get_value("input_email");
//     password = get_value("input_password");
//     con_password = get_value("input_con_password");
//     region = $("#input_region option:selected").text();
//     province = $("#input_province option:selected").text();
//     city = $("#input_city option:selected").text();
//     barangay = $("#input_barangay option:selected").text();
    
//   }

