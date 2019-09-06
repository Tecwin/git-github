var day;
function function1(){

var city=document.getElementById('input').value;

$.getJSON("http://api-cdn.apixu.com/v1/forecast.json?key=79404562edf343e79ea172616190109&q="+city+"&days=7",function(data)
{
console.log(data);
//day0
var iconi="http:"+data.current.condition.icon;
var wea=data.current.condition.text;
var tmp=data.current.temp_c;
var date0=data.forecast.forecastday[0].date;
$(".iconi0").attr("src",iconi);
document.getElementById('date0').innerHTML=date0;
document.getElementById('city').innerHTML=city;
document.getElementById('weather').innerHTML=wea;
document.getElementById('tmp0').innerHTML=tmp;
var d=new Date(date0);
 day=d.getDay();
myDate(day);
document.getElementById('day0').innerHTML=day;
//day1
var iconi1="http:"+data.forecast.forecastday[1].day.condition.icon;
var date1=data.forecast.forecastday[1].date;
var tmp=data.forecast.forecastday[1].day.avgtemp_c;
$(".iconi1").attr("src",iconi1);
document.getElementById('date1').innerHTML=date1;
document.getElementById('tmp1').innerHTML=tmp;
var d=new Date(date1);
 day=d.getDay();
myDate(day);
document.getElementById('day1').innerHTML=day;
//day2
var iconi2="http:"+data.forecast.forecastday[2].day.condition.icon;
var date2=data.forecast.forecastday[2].date;
var tmp=data.forecast.forecastday[2].day.avgtemp_c;
$(".iconi2").attr("src",iconi2);
document.getElementById('date2').innerHTML=date2;
document.getElementById('tmp2').innerHTML=tmp;
var d=new Date(date2);
 day=d.getDay();
myDate(day);
document.getElementById('day2').innerHTML=day;
//day3
var iconi3="http:"+data.forecast.forecastday[3].day.condition.icon;
var date3=data.forecast.forecastday[3].date;
var tmp=data.forecast.forecastday[3].day.avgtemp_c;
$(".iconi3").attr("src",iconi3);
document.getElementById('date3').innerHTML=date3;
document.getElementById('tmp3').innerHTML=tmp;
var d=new Date(date3);
 day=d.getDay();
myDate(day);
document.getElementById('day3').innerHTML=day;
//day4
var iconi4="http:"+data.forecast.forecastday[4].day.condition.icon;
var date4=data.forecast.forecastday[4].date;
var tmp=data.forecast.forecastday[4].day.avgtemp_c;
$(".iconi4").attr("src",iconi4);
document.getElementById('date4').innerHTML=date4;
document.getElementById('tmp4').innerHTML=tmp;
var d=new Date(date4);
 day=d.getDay();
myDate(day);
document.getElementById('day4').innerHTML=day;
//day5
var iconi5="http:"+data.forecast.forecastday[5].day.condition.icon;
var date5=data.forecast.forecastday[5].date;
var tmp=data.forecast.forecastday[5].day.avgtemp_c;
$(".iconi5").attr("src",iconi5);
document.getElementById('date5').innerHTML=date5;
document.getElementById('tmp5').innerHTML=tmp;
var d=new Date(date5);
 day=d.getDay();
myDate(day);
document.getElementById('day5').innerHTML=day;
//day6
var iconi6="http:"+data.forecast.forecastday[6].day.condition.icon;
var date6=data.forecast.forecastday[6].date;
var tmp=data.forecast.forecastday[6].day.avgtemp_c;
$(".iconi6").attr("src",iconi6);
document.getElementById('date6').innerHTML=date6;
document.getElementById('tmp6').innerHTML=tmp;
var d=new Date(date6);
 day=d.getDay();
myDate(day);
document.getElementById('day6').innerHTML=day;
});}
  function myDate(dayt) {
       if(dayt=="0")
       	day="Sunday";
       else if(dayt=="1")
       	day="Monday";
        else if(dayt=="2")
       	day="Tueday";
        else if(dayt=="3")
       	day="Wednesday";
       else if(dayt=="4")
       	day="Thurday";
       else if(dayt=="5")
       day="Friday";
       else if(dayt=="6")
       	day="Saturday";

       console.log(day);
    }