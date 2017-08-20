@extends('layouts.header')
@section('content')<!-- Main CSS Stylesheet -->
   <!--  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.min.css') }}">

    <!-- Google Web Fonts  -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700"> -->
      <script src="{{ asset('js/jquery.min.js')}}"></script>
      <script src="{{ asset('js/calendar/moment.min.js')}}"></script>

      <script src="{{ asset('js/calendar/fullcalendar.min.js')}}?v=1"></script>

    <div class="container">

          <div class="col-md-12" style="margin-top:100px;">

               <h1 class="text-center">课程表</h1>
              <hr>
              <div id='calendar'></div>

          </div>

    </div>

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
                $(this).attr("data-trigger","hover");
                $(this).attr("container","body");
                $(this).attr("data-content","And here's some amazing content. It's very engaging. Right?");
                $(this).attr("data-placement","top");
                $(this).attr("data-html","true");
                $(this).css("background-color","#fff");
                $(this).css("color","#000");
                $(this).css("border-color","#fff");
                $('[data-toggle="popover"]').popover();
           });
           $("#calendar .fc-row").each(function(){
               $(this).css("overflow","visible");
           });
           $("#calendar .fc-scroller").css("overflow","visible");
    },300);
  }
  </script>
@endsection
