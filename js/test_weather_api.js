

// https://openweathermap.org/api/geocoding-api //! geocoding do this first

// fetch("https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid={66c41129d9056b9aa1b13ec1f2d20583}")
//   .then((response) => response.json())
//   .then((json) => console.log(json));

//   https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid={API key}

// $.get("https://api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid={66c41129d9056b9aa1b13ec1f2d20583}", function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
//   });


//   $.get("http://api.openweathermap.org/geo/1.0/direct?q={Nasugbu},{PH}&limit={limit}&appid={API key}", function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
//   });

  $("button").click(function(){
    $.get("api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=e2630aae7335274da681acc3f37f2620", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
      });
  });

//   https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid={API key}


// ! PROBLEM ! 
// ! REQUEST NOT PASSING THROUGH BECAUSE OF LOCALHOST