var city="goa";
$.getJSON("http://api-cdn.apixu.com/v1/forecast.json?key=79404562edf343e79ea172616190109&q="+city+"&days=7",function(data)
{
	console.log(data);
	var temp=data.current.temp_c;
	var humidity=data.current.humidity;
	var precep=data.current.precip_mm;
	var pressure=data.current.pressure_in;
	var windir=data.current.wind_dir;
	var windspeed=data.current.wind_mph;

	document.getElementById('temp').innerHTML="Temperature :"+temp+"<sup>o</sup> C";
	document.getElementById('humidity').innerHTML="Humidity :"+humidity;
	document.getElementById('precep').innerHTML="Precipitation :"+precep+" mm";
	document.getElementById('windir').innerHTML="Wind Direction :"+windir;
	document.getElementById('windspeed').innerHTML="Wind Speed :"+windspeed+" Mph";

});