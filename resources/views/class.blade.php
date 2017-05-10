<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <title>demo</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-workaround-bug.css') }}" rel="stylesheet">

    <!-- Main CSS Stylesheet -->
   <!--  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.min.css') }}">

    <!-- Google Web Fonts  -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700"> -->
      <script src="{{ asset('js/jquery.min.js')}}"></script>
      <script src="{{ asset('js/calendar/moment.min.js')}}"></script>

      <script src="{{ asset('js/calendar/fullcalendar.min.js')}}"></script>

    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="{{ asset('js/html5.js')}}"></script>
	   <script src="{{ asset('js/respond.min.js')}}"></script>
    <![endif]-->

<style type="text/css">
body {
    min-height: auto;
}
.navbar-static-top {
    margin-bottom: 19px;
}
.navbar-default .navbar-brand{
    font-style: inherit;
    font-family: fantasy;
    color:#484141;
}
.navbar-default{
    margin-top:15px;
    border: none;
}
.mc-text-img{
    background-color: #ffffff;font-size: 50px;
}

.mc-text-img-top{
    padding-right: 10px;
}
.mc-text-img-bigger{
    font-size: 80px;
}
.fc-event{
  background-color:#ffffff;
  color: #000000;
  border: none;
}
.fc-event:hover{
  color:#8c8787;
}
@media (min-width: 400px){
.phone-hidden{
  /*  display: none;*/
}
}
</style>
 </head>

  <body>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p><a class="navbar-brand" href="#"><strong>Mayc Dance</strong></a><small>Studio</small></p>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">首页</a></li>
            <li><a href="/class">课程表</a></li>
            <li><a href="#">关于我们</a></li>
            <li><a href="#">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

          <div class="col-md-12" style="margin-top:100px;">

               <h1 class="text-center">课程表</h1>
      		    <hr>
              <div id='calendar'></div>

          </div>

    </div>

  </body>

  <script>
      $(function (){

          $('#calendar').fullCalendar({
              header: {
                  left: 'prev,next',
                  center: 'title',
                  right: 'month'
              },
              eventLimit: true, // allow "more" link when too many events
             // monthNames: ['1', '2', '3', '4', '5', "6", "7", "8", "9", "10", "11", "12"],
              dayNames: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],

              events: {
                  url: "{{ url('/ajaxClass') }}",
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 },
                  error: function() {
                      $('#script-warning').show();
                  }
              },
              loading: function(bool) {
                  $('#loading').toggle(bool);
              },
              eventRender: function(event, el) {

                  // render the timezone offset below the event title
                  if (event.start.hasZone()) {
                      el.find('.fc-title').after(
                          $('<div class="tzo"/>').text(event.start.format('Z'))
                      );
                  }
              },
              dayClick: function(date) {
                  console.log('dayClick', date.format());
              },
              select: function(startDate, endDate) {
                  console.log('select', startDate.format(), endDate.format());
              },

          });
      });

  $(function (){

      var date = new Date();
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();

      $('#calendar').fullCalendar({
            header: {
              left: 'prev,next today',
              center: 'title',
            },
            editable: true,
            events: [
              {
                title: 'All Day Event',
                start: new Date(y, m, 1),
                url: 'http://tracy.taironlife.com/'
              },
              {
                title: 'Long Event',
                start: new Date(y, m, d-5),
                end: new Date(y, m, d-2)
              },
              {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d-3, 16, 0),
                allDay: false
              },
              {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d+4, 16, 0),
                allDay: false
              },
              {
                title: 'Meeting',
                start: new Date(y, m, d),
              },
              {
                title: 'Lunch',
                start: new Date(y,m,18),
              },
              {
                title: 'Birthday Party',
                start: new Date(y, m, d+1, 19, 0),
                end: new Date(y, m, d+1, 22, 30),
                allDay: false
              },
              {
                title: 'Click for tracy',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://tracy.taironlife.com/'
              }
            ],
            eventClick: function(event) {
                if (event.url) {
                    //window.open(event.url);
                    alert(event.url);
                    return false;
                }
            },
            buttonText: {
                today: '今天',
                month: '月',
            },
            allDayText: "整天",
            timeFormat: {
                '': 'H:mm{-H:mm}'
            },
            weekMode: "variable",
            columnFormat: {
                month: 'dddd',
                week: 'dddd M-d',
                day: 'dddd M-d'
            },
            titleFormat: {
                month: 'yyyy年 MMMM月',
                week: "[yyyy年] MMMM月d日 { '—' [yyyy年] MMMM月d日}",
                day: 'yyyy年 MMMM月d日 dddd'
            },
            monthNames: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
            dayNames: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"]
        });
     setAtter();
  });

 //切换页面时重新赋值
  $("#calendar").click(function(){
    setAtter();
  });

 //设置显示信息
  function setAtter(){
    setTimeout(function(){
           $("#calendar a").each(function(){
                $(this).attr("data-toggle","popover");
                $(this).attr("data-trigger","click");
                $(this).attr("title","MaycDance");
                 $(this).attr("container","body");
                $(this).attr("data-content","And here's some amazing content. It's very engaging. Right?");
                $(this).attr("data-placement","top");
                $(this).attr("data-html","true");
                $('[data-toggle="popover"]').popover();
           });
    },1000);
  }
  </script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-workaround-bug.css') }}"></script>
 </html>
