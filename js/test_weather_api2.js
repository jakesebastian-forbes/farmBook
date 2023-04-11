var api_key = "281d43540a3447179f45add2639cb209"
// var request_link = "https://api.weatherbit.io/v2.0/forecast/hourly?city=Nasugbu,PH&key="+api_key+"&hours=48";
var request_link = "https://api.weatherbit.io/v2.0/forecast/agweather?lat=14.077130&lon=120.636147&key="+api_key;
var api_data;


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



function refresh_text(){
  $("#data")[0].textContent = JSON.stringify(api_data);
  // $("#data")[0].textContent = api_data;
  // $("#location")[0].textContent = api_data.name;
  
}



// ! limited calls

// * we have 1,500 api calls per day
// ? should we store data in the database to save on calls?
// * store JSON data in DB


// ! new plan :
// get the long and lat from openweather
// pass details to weatherbit
// use the weatherbit as the main weather api