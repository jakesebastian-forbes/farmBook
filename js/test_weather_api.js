
// ** STEPS 
// ASK USER FOR LOCATION
    // either by typing(city) or geolocation API 
//
//
//


//   $.get("http://api.openweathermap.org/geo/1.0/direct?q=Nasugbu,PH&limit=1&appid=e2630aae7335274da681acc3f37f2620", function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
//   });

// $.get("https://api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid={66c41129d9056b9aa1b13ec1f2d20583}", function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
//   });

//   https://api.openweathermap.org/data/2.5/weather?lat=14.0745886&lon=120.626089&appid=e2630aae7335274da681acc3f37f2620

var api_data;
var loc_lat,loc_long;
var area = "Manila";
var api_key = "e2630aae7335274da681acc3f37f2620"
var request_link = "https://api.openweathermap.org/data/2.5/weather?q="+area+",PH&APPID=" +api_key;
var permission_status = $("#permission_status");
var text_location;



  


function get_weather(){
  // $.get(request_link, function(data, status){
  //   api_data = data;  
  //   area = api_data.name;
  // alert("Data: " + data + "\nStatus: " + status +"\n Location : " + area);
 
  // refresh_text();

  // });

  
$.ajax({
  url: request_link,
  type: "GET",
  async: false,
  success: function(data, status){
  api_data = data;  
  // alert("Data: " + data + "\nStatus: " + status +"\n Location : " + area +","+api_data.name);
  refresh_text();

  }
  })  

}


  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
      permission_status.innerHTML = "The Browser Does not Support Geolocation";
    }
  }

  function showPosition(position) {
      loc_lat = position.coords.latitude;
      loc_long = position.coords.longitude;
      request_link ="https://api.openweathermap.org/data/2.5/weather?lat="+loc_lat+"&lon="+loc_long+"&appid=" + api_key;
      get_weather();
  
  }

  function showError(error) {
    if(error.PERMISSION_DENIED){
        permission_status.innerHTML = "The User have denied the request for Geolocation.";
      }
  }

  function refresh_text(){
    $("#data")[0].textContent = JSON.stringify(api_data);
    $("#location")[0].textContent = api_data.name;
    
  }


get_weather();


$("#btn_getLocation").click(function(){
  getLocation();
});


$("#btn_txtloc").click(function(){ //! doesn't work just yet
  text_location = document.getElementById("txt_location").value;
  request_link = "https://api.openweathermap.org/data/2.5/weather?q="+text_location+",PH&APPID=" +api_key;
  console.log(area);
  get_weather();
});
