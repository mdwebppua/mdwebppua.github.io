$(document).ready(function () {
//получаем гет переменную
var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }
    $_GET[decode(arguments[1])] = decode(arguments[2]);
});

var key = $_GET["key"];

//функция вызова таймера
function get_timer() {
  
  //Дата для обратного отсчета
  var date_new = dateEnd; // June 3,2012 02:00
  ////////////////////////////////////
  ////////////////////////////////////
  
  //Объект даты для обратного отсчета
  var date_t = new Date(date_new);
  //Объект текущей даты
  var date = new Date();
  //Вычесляем сколько миллисекунд пройдет 
  //от текущей даты до даты отсчета времени
  var timer = date_t - date;
  
  //Проверяем не нужно ли закончить отсчет
  //если дата отсчета еще не истекла, то количество
  //миллисекунд в переменной date_t будет больше чем в переменной date
  if(date_t > date) {
    
    //Вычисляем сколько осталось дней до даты отсчета.
    //Для этого количество миллисекунд до даты остчета делим
    //на количество миллисекунд в одном дне
    var day = parseInt(timer/(60*60*1000*24));
    //если полученное число меньше 10 прибавляем 0
    if(day < 10) {
      day = '0' + day;
    }
    //Приводим результат к строке
    day = day.toString();
      
    //Вычисляем сколько осталось часов до даты отсчета.
    //Для этого переменную timer делим на количество
    //миллисекунд в одном часе и отбрасываем дни
    var hour = parseInt(timer/(60*60*1000))%24;
    //если полученное число меньше 10 прибавляем 0
    if(hour < 10) {
      hour = '0' + hour;
    }
    //Приводим результат к строке
    hour = hour.toString();
      
    //Вычисляем сколько осталось минут до даты отсчета.
    //Для этого переменную timer делим на количество
    //миллисекунд в одной минуте и отбрасываем часы
    var min = parseInt(timer/(1000*60))%60;
    //если полученное число меньше 10 прибавляем 0
    if(min < 10) {
      min = '0' + min;
    }
    //Приводим результат к строке
    min = min.toString();
      
    //Вычисляем сколько осталось секунд до даты отсчета.
    //Для этого переменную timer делим на количество
    //миллисекунд в одной минуте и отбрасываем минуты
    var sec = parseInt(timer/1000)%60;
    //если полученное число меньше 10 прибавляем 0
    if(sec < 10) {
      sec = '0' + sec;
    }
    //Приводим результат к строке
    sec = sec.toString();
    
    //Выводим дни
    //Проверяем какие предыдущие цифры времени должны вывестись на экран
    //Для десятков дней
    if(day[1] == 9 && 
      hour[0] == 2 && 
      hour[1] == 3 && 
      min[0] == 5 && 
      min[1] == 9 && 
      sec[0] == 5 && 
      sec[1] == 9) {
      animation($("#clock").find(".day0"),day[0]);
      animation($("#clock2").find(".day0"),day[0]);
	  animation($("#clock3").find(".day0"),day[0]);
    }
    else {
      $("#clock").find(".day0").html(day[0]);
      $("#clock2").find(".day0").html(day[0]);
	  $("#clock3").find(".day0").html(day[0]);
    }
    //Для единиц дней
    if(hour[0] == 2 && 
      hour[1] == 3 && 
      min[0] == 5 && 
      min[1] == 9 && 
      sec[0] == 5 && 
      sec[1] == 9) {
      animation($("#clock").find(".day1"),day[1]);
      animation($("#clock2").find(".day1"),day[1]);
	  animation($("#clock3").find(".day1"),day[1]);
    }
    else {
      $("#clock").find(".day1").html(day[1]);
      $("#clock2").find(".day1").html(day[1]);
      $("#clock3").find(".day1").html(day[1]);
    }
    //Выводим часы
    //Проверяем какие предыдущие цифры времени должны вывестись на экран
    //Для десятков часов
    if(hour[1] == 3 && 
      min[0] == 5 && 
      min[1] == 9 && 
      sec[0] == 5 && 
      sec[1] == 9) {
      animation($("#clock").find(".hour0"),hour[0]);
      animation($("#clock2").find(".hour0"),hour[0]);
      animation($("#clock3").find(".hour0"),hour[0]);
    }
    else {
      $("#clock").find(".hour0").html(hour[0]);
      $("#clock2").find(".hour0").html(hour[0]);
      $("#clock3").find(".hour0").html(hour[0]);
    }
    //Для единиц чассов 
    if(min[0] == 5 && 
      min[1] == 9 && 
      sec[0] == 5 && 
      sec[1] == 9) {
      animation($("#clock").find(".hour1"),hour[1]);
      animation($("#clock2").find(".hour1"),hour[1]);
      animation($("#clock3").find(".hour1"),hour[1]);
    }
    else {
      $("#clock").find(".hour1").html(hour[1]);
      $("#clock2").find(".hour1").html(hour[1]);
      $("#clock3").find(".hour1").html(hour[1]);
    }
      
    //Выводим минуты
    //Проверяем какие предыдущие цифры времени должны вывестись на экран
    //Для десятков минут
    if(min[1] == 9 && 
      sec[0] == 5 && 
      sec[1] == 9) {
      animation($("#clock").find(".min0"),min[0]);
      animation($("#clock2").find(".min0"),min[0]);
      animation($("#clock3").find(".min0"),min[0]);
    }
    else {
      $("#clock").find(".min0").html(min[0]);
      $("#clock2").find(".min0").html(min[0]);
      $("#clock3").find(".min0").html(min[0]);
    }
    //Для единиц минут
    if(sec[0] == 5 && sec[1] == 9) {
      animation($("#clock").find(".min1"),min[1]);
      animation($("#clock2").find(".min1"),min[1]);
    }
    else {
      $("#clock").find(".min1").html(min[1]);
      $("#clock2").find(".min1").html(min[1]);
      $("#clock3").find(".min1").html(min[1]);
    }
      
    //Выводим секунды
    //Проверяем какие предыдущие цифры времени должны вывестись на экран
    //Для десятков секунд
    if(sec[1] == 9) {
      animation($("#clock").find(".sec0"),sec[0]);
      animation($("#clock2").find(".sec0"),sec[0]);
      animation($("#clock3").find(".sec0"),sec[0]);
    }
    else {
      $("#clock").find(".sec0").html(sec[0]);
      $("#clock2").find(".sec0").html(sec[0]);
      $("#clock3").find(".sec0").html(sec[0]);
    }
    animation($("#clock").find(".sec1"),sec[1]); 
    animation($("#clock2").find(".sec1"),sec[1]); 
    animation($("#clock3").find(".sec1"),sec[1]); 
    //Переодически вызываем созданную функцию, 
    //интервал вызова одна секунда(1000 милли секунд)
    setTimeout(get_timer,1000);
  }
  else {
    // если переменная равна show то ничего не происходит
    if (key != "show") {
       window.location = "http://liftmarketing.ru/chain1-up-new/closed.html";
    }
   
  }
  
}
//Функция для красивого отображения времени.
function animation(vibor,param) {
  vibor.html(param)
    .css({'marginTop':'-20px','opacity':'0'})
    .animate({'marginTop':'0px','opacity':'1'});
}
//Вызываем функцию на исполнение
get_timer();
});