

//get data

var fname,lname,mname,email,password,con_password;
var region,province,city,barangay,contact_no;
var address,class_;
var pass_match,email_val;

//check if email is in use by a user
function showHint(str) {
  if (str.length == 0) {
      document.getElementById("email_status").innerHTML = "";
      return;
  } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("email_status").innerHTML = this.responseText;
              // console.log(this.responseText)
              if(this.responseText == "OKAY!"){
                email_val = true;
                }
                else{
                  email_val = false;
                }
                next_stats();
          }
      };
      xmlhttp.open("POST", "php_func\\validate_email.php?q=" + str, true);
      xmlhttp.send();
  }
}



function select_class(n){
    $("#class")[0].value = n; // n for this.value 
    class_ =  $("#class")[0].value = n;
  }

//check if password matches
    $('#input_password, #input_con_password').on('keyup', function () {
        if ($('#input_password').val() == $('#input_con_password').val()) {
          $('#message').html('Matching').css('color', 'green');
        
          pass_match = true;
        } else {
          $('#message').html('Not Matching').css('color', 'red');
          pass_match = false;

            //   console.log("u called?!");
      }
      next_stats();
    }
  )


  function next_stats(){
  // check if both satisfied
  // $(' #input_email,#input_password, #input_con_password').on('keyup', function () {
    if(pass_match == true && email_val == true){
      $('#btn_next_basic').removeAttr("disabled");
    }
    else{
      $('#btn_next_basic').attr("disabled","disabled");
    }
  // }
  // )
  }


//get everything as is to restore
  function store_basic(){

    // the basics 
    fname =  $("#input_fname")[0].value;
    mname =  $("#input_mname")[0].value;
    lname =  $("#input_lname")[0].value;
    email =  $("#input_email")[0].value;
    password =  $("#input_password")[0].value;
    address = $("#input_region option:selected").text() + ',' +$("#input_province option:selected").text() + ',' +
    $("#input_city option:selected").text() + ',' + $("#input_barangay option:selected").text();
    contact_no =  $("#input_contact")[0].value;

  }


  function insert_user(){

    // console.log("called insert");

        store_basic();
        // logs();
        //put ajax here
        $.post({

          type: "POST",
        url: "php_func\\db_insert_create_account.php",
        data: 
        {
          fname: fname,
          mname : mname,
          lname : lname,
          email : email,
          password : password,
          address : address,
          contact_no : contact_no,
          class : class_
        },
        cache: false,
        success: function(data) {
        console.log("data : " , data);
        localStorage.setItem('openModal', '#loginform');
        window.location.replace("index.php?");
        },
        error: function(xhr, status, error) {
        console.error(xhr);
        }
        }
        );
        // console.log("after");
        // logs();

  }

  // function logs(){
  //   console.log(class_)
  //   console.log(fname);
  //   console.log(mname);
  //   console.log(lname);
  //   console.log(email);
  //   console.log(password);
  //   console.log(address);
  //   console.log(contact_no);
  // }
