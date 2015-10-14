$(document).ready(function () {
//�������� ��� ����������
var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }
    $_GET[decode(arguments[1])] = decode(arguments[2]);
});

var key = $_GET["key"];

//������� ������ �������
function get_timer() {
  
  //���� ��� ��������� �������
  var date_new = dateEnd; // June 3,2012 02:00
  ////////////////////////////////////
  ////////////////////////////////////
  
  //������ ���� ��� ��������� �������
  var date_t = new Date(date_new);
  //������ ������� ����
  var date = new Date();
  //��������� ������� ����������� ������� 
  //�� ������� ���� �� ���� ������� �������
  var timer = date_t - date;
  
  //��������� �� ����� �� ��������� ������
  //���� ���� ������� ��� �� �������, �� ����������
  //����������� � ���������� date_t ����� ������ ��� � ���������� date
  if(date_t > date) {
    
    //��������� ������� �������� ���� �� ���� �������.
    //��� ����� ���������� ����������� �� ���� ������� �����
    //�� ���������� ����������� � ����� ���
    var day = parseInt(timer/(60*60*1000*24));
    //���� ���������� ����� ������ 10 ���������� 0
    if(day < 10) {
      day = '0' + day;
    }
    //�������� ��������� � ������
    day = day.toString();
      
    //��������� ������� �������� ����� �� ���� �������.
    //��� ����� ���������� timer ����� �� ����������
    //����������� � ����� ���� � ����������� ���
    var hour = parseInt(timer/(60*60*1000))%24;
    //���� ���������� ����� ������ 10 ���������� 0
    if(hour < 10) {
      hour = '0' + hour;
    }
    //�������� ��������� � ������
    hour = hour.toString();
      
    //��������� ������� �������� ����� �� ���� �������.
    //��� ����� ���������� timer ����� �� ����������
    //����������� � ����� ������ � ����������� ����
    var min = parseInt(timer/(1000*60))%60;
    //���� ���������� ����� ������ 10 ���������� 0
    if(min < 10) {
      min = '0' + min;
    }
    //�������� ��������� � ������
    min = min.toString();
      
    //��������� ������� �������� ������ �� ���� �������.
    //��� ����� ���������� timer ����� �� ����������
    //����������� � ����� ������ � ����������� ������
    var sec = parseInt(timer/1000)%60;
    //���� ���������� ����� ������ 10 ���������� 0
    if(sec < 10) {
      sec = '0' + sec;
    }
    //�������� ��������� � ������
    sec = sec.toString();
    
    //������� ���
    //��������� ����� ���������� ����� ������� ������ ��������� �� �����
    //��� �������� ����
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
    //��� ������ ����
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
    //������� ����
    //��������� ����� ���������� ����� ������� ������ ��������� �� �����
    //��� �������� �����
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
    //��� ������ ������ 
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
      
    //������� ������
    //��������� ����� ���������� ����� ������� ������ ��������� �� �����
    //��� �������� �����
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
    //��� ������ �����
    if(sec[0] == 5 && sec[1] == 9) {
      animation($("#clock").find(".min1"),min[1]);
      animation($("#clock2").find(".min1"),min[1]);
    }
    else {
      $("#clock").find(".min1").html(min[1]);
      $("#clock2").find(".min1").html(min[1]);
      $("#clock3").find(".min1").html(min[1]);
    }
      
    //������� �������
    //��������� ����� ���������� ����� ������� ������ ��������� �� �����
    //��� �������� ������
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
    //������������ �������� ��������� �������, 
    //�������� ������ ���� �������(1000 ����� ������)
    setTimeout(get_timer,1000);
  }
  else {
    // ���� ���������� ����� show �� ������ �� ����������
    if (key != "show") {
       window.location = "http://liftmarketing.ru/chain1-up-new/closed.html";
    }
   
  }
  
}
//������� ��� ��������� ����������� �������.
function animation(vibor,param) {
  vibor.html(param)
    .css({'marginTop':'-20px','opacity':'0'})
    .animate({'marginTop':'0px','opacity':'1'});
}
//�������� ������� �� ����������
get_timer();
});