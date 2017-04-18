<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">


    <title>Mayc Dance</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="{{ asset('img/apple-touch-icon.png') }}">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugin.css') }}">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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


 </head>
<style type="text/css">





    body {
        margin: 0 auto;
        padding: 0 auto;
        font-family: 'proxima_nova_rgbold','Nanum Barun Gothic';
        font-size: 14px;
    }

    #top {
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        font-size: 12px;
    }
    .left { float: left }
    .right { float: right }
    .clear { clear: both }


    #calendar {
        max-width: 90%;
        margin: 40px auto;
        padding: 0 10px;
    }

    .tzo {
        color: #000;
    }


</style>
  <body>
<div style="display: block;">
    <div style="position: absolute;top: 0px;width: 100%;display: block;">
        <div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div style="top: 0px;height: 100%;width: 100%;background-color: rgba(255, 255, 255, 1);position: absolute;">
            <div style="top: 0px;height: 100%;width: 100%;position: absolute;"></div>
            <div></div>
            <div style="top: 0px;height: 100%;width: 100%;position: absolute;"></div>
        </div>
    </div>
    <div style="width: 76%;padding-bottom: 0px;min-height: 100%;position: relative;margin: 0 auto;">
        <div style="width: 76%;position: static;top: 0px;">
            <div style="width: 100%;position: absolute;top: 0px;height: 69px;left: 8%;">
                <div style="width: 100%;left: -12%;"></div>
                <div style="position: absolute; top: 0;right: 0;bottom: 0;left: 0;">
                    <div style="position: absolute;top: 3%;"><h1 style="font-style: inherit;font-family: fantasy;">Mayc Dance</h1></div>
                    <div style="left: 31%;width: 67%;position: absolute;top: 31px;height: 25px;">
                        <div style="text-align: right;width: calc(100% - 0px);height: calc(100% - 0px);white-space: nowrap;display: inline-block;overflow: visible;position: relative;">
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="{{ url('/') }}" target="_self" ><p style="text-align: center; line-height: 25px;" >首页</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="" target="_self" ><p style="text-align: center; line-height: 25px;" >关于我们</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="{{ url('class') }}" target="_self" ><p style="color:#000;text-align: center; line-height: 25px;" >课程</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="" target="_self" ><p style="text-align: center; line-height: 25px;" >视频</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="" target="_self" ><p style="text-align: center; line-height: 25px;" >资讯</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="" target="_self" ><p style="text-align: center; line-height: 25px;" >合作</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="" target="_self" ><p style="text-align: center; line-height: 25px;" >联系我们</p></a>
                        </div>
                    </div>
                </div>
            </div>
           
           
        </div>
    </div>
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
              defaultDate: '2017-04-12',

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

});
  </script>
 </html>
