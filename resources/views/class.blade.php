<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
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

    <!-- Google Web Fonts  -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700"> -->


    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="{{ asset('js/html5.js')}}"></script>
	   <script src="{{ asset('js/respond.min.js')}}"></script>
    <![endif]-->


 </head>
<style type="text/css">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  vertical-align: baseline;
  background: transparent; }
body {
  font-size: 10px;
  font-family: Arial, Helvetica, sans-serif; }
textarea, input, select {
  font-family: Helvetica, Arial, sans-serif;
  box-sizing: border-box; }
ol, ul {
  list-style: none; }
blockquote, q {
  quotes: none; }
:focus {
  outline: 0; }
  .fc {
    direction: ltr;
	text-align: left;
	}
	
.fc table {
	border-collapse: collapse;
	border-spacing: 0;
	}
	
html .fc,
.fc table {
	font-size: 1em;
	}
	
.fc td,
.fc th {
	padding: 0;
	vertical-align: top;
	}



/* Header
------------------------------------------------------------------------*/

.fc-header td {
	white-space: nowrap;
	}

.fc-header-left {
	width: 25%;
	text-align: left;
	}
	
.fc-header-center {
	text-align: center;
	}
	
.fc-header-right {
	width: 25%;
	text-align: right;
	}
	
.fc-header-title {
	display: inline-block;
	vertical-align: top;
	}
	
.fc-header-title h2 {
	margin-top: 0;
	white-space: nowrap;
	}
	
.fc .fc-header-space {
	padding-left: 10px;
	}
	
.fc-header .fc-button {
	margin-bottom: 1em;
	vertical-align: top;
	}
	
/* buttons edges butting together */

.fc-header .fc-button {
	margin-right: -1px;
	}
	
.fc-header .fc-corner-right,  /* non-theme */
.fc-header .ui-corner-right { /* theme */
	margin-right: 0; /* back to normal */
	}
	
/* button layering (for border precedence) */
	
.fc-header .fc-state-hover,
.fc-header .ui-state-hover {
	z-index: 2;
	}
	
.fc-header .fc-state-down {
	z-index: 3;
	}

.fc-header .fc-state-active,
.fc-header .ui-state-active {
	z-index: 4;
	}
	
	
	
/* Content
------------------------------------------------------------------------*/
	
.fc-content {
	clear: both;
	zoom: 1; /* for IE7, gives accurate coordinates for [un]freezeContentHeight */
	}
	
.fc-view {
	width: 100%;
	overflow: hidden;
	}
	
	

/* Cell Styles
------------------------------------------------------------------------*/

.fc-widget-header,    /* <th>, usually */
.fc-widget-content {  /* <td>, usually */
	border: 1px solid #ddd;
	}
	
.fc-state-highlight { /* <td> today cell */ /* TODO: add .fc-today to <th> */
	background: #fcfcfc;
	}
	
.fc-cell-overlay { /* semi-transparent rectangle while dragging */
	background: #bcccbc;
	opacity: .3;
	filter: alpha(opacity=30); /* for IE */
	}
	


/* Buttons
------------------------------------------------------------------------*/

.fc-button {
	position: relative;
	display: inline-block;
	padding: 0 .6em;
	overflow: hidden;
	height: 1.9em;
	line-height: 1.9em;
	white-space: nowrap;
	cursor: pointer;
}


.fc-text-arrow {
	margin: 0 .1em;
	font-size: 2em;
	font-family: "Courier New", Courier, monospace;
	vertical-align: baseline; /* for IE7 */
	}


	
/*
  button states
  borrowed from twitter bootstrap (http://twitter.github.com/bootstrap/)
*/

.fc-state-default {
	background-color: #f5f5f5;
	}

.fc-state-hover,
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
	color: #333333;
	background-color: #e6e6e6;
	}

.fc-state-hover {
	color: #333333;
	text-decoration: none;
	background-position: 0 -15px;
	-webkit-transition: background-position 0.1s linear;
	   -moz-transition: background-position 0.1s linear;
	     -o-transition: background-position 0.1s linear;
	        transition: background-position 0.1s linear;
	}

.fc-state-down,
.fc-state-active {
	background-color: #cccccc;
	background-image: none;
	outline: 0;
	box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
	}

.fc-state-disabled {
	cursor: default;
	background-image: none;
	opacity: 0.55;
	filter: alpha(opacity=65);
	box-shadow: none;
	}

	

/* Global Event Styles
------------------------------------------------------------------------*/

.fc-event-container > * {
	z-index: 8;
	}

.fc-event-container > .ui-draggable-dragging,
.fc-event-container > .ui-resizable-resizing {
	z-index: 9;
	}
	 
.fc-event {

	color: #333;               /* default TEXT color */
	font-size: .85em;
	cursor: default;
	}

a.fc-event {
	text-decoration: none;
	}
a.fc-event:hover{
    color:#000099;font-weight:bold;
}	
a.fc-event,
.fc-event-draggable {
	cursor: pointer;
	}
	
.fc-rtl .fc-event {
	text-align: right;
	}

.fc-event-inner {
	width: 100%;
	height: 100%;
	overflow: hidden;
	}
	
.fc-event-time,
.fc-event-title {
	padding: 0 1px;
	}
	
.fc .ui-resizable-handle {
	display: block;
	position: absolute;
	z-index: 99999;
	overflow: hidden; /* hacky spaces (IE6/7) */
	font-size: 300%;  /* */
	line-height: 50%; /* */
	}
	
	
	
/* Horizontal Events
------------------------------------------------------------------------*/

.fc-event-hori {
	border-width: 1px 0;
	margin-bottom: 1px;
	}

.fc-ltr .fc-event-hori.fc-event-start,
.fc-rtl .fc-event-hori.fc-event-end {
	border-left-width: 1px;
	}

.fc-ltr .fc-event-hori.fc-event-end,
.fc-rtl .fc-event-hori.fc-event-start {
	border-right-width: 1px;
	}
	
/* resizable */
	
.fc-event-hori .ui-resizable-e {
	top: 0           !important; /* importants override pre jquery ui 1.7 styles */
	right: -3px      !important;
	width: 7px       !important;
	height: 100%     !important;
	cursor: e-resize;
	}
	
.fc-event-hori .ui-resizable-w {
	top: 0           !important;
	left: -3px       !important;
	width: 7px       !important;
	height: 100%     !important;
	cursor: w-resize;
	}
	
.fc-event-hori .ui-resizable-handle {
	_padding-bottom: 14px; /* IE6 had 0 height */
	}
	

table.fc-border-separate {
	border-collapse: separate;
	}
	
.fc-border-separate th,
.fc-border-separate td {
	border-width: 1px 0 0 1px;
	}
	
.fc-border-separate th.fc-last,
.fc-border-separate td.fc-last {
	border-right-width: 1px;
	}
	
.fc-border-separate tr.fc-last th,
.fc-border-separate tr.fc-last td {
	border-bottom-width: 1px;
	}
	
.fc-border-separate tbody tr.fc-first td,
.fc-border-separate tbody tr.fc-first th {
	border-top-width: 0;
	}
	
	

/* Month View, Basic Week View, Basic Day View
------------------------------------------------------------------------*/

.fc-grid th {
	text-align: center;
	}

.fc .fc-week-number {
	width: 22px;
	text-align: center;
	}

.fc .fc-week-number div {
	padding: 0 2px;
	}
	
.fc-grid .fc-day-number {
	float: right;
	padding: 0 2px;
	}
	
.fc-grid .fc-other-month .fc-day-number {
	opacity: 0.3;
	filter: alpha(opacity=30); /* for IE */
	/* opacity with small font can sometimes look too faded
	   might want to set the 'color' property instead
	   making day-numbers bold also fixes the problem */
	}
	
.fc-grid .fc-day-content {
	clear: both;
	padding: 2px 2px 1px; /* distance between events and day edges */
	}
	
/* event styles */
	
.fc-grid .fc-event-time {
	font-weight: bold;
	}
	
/* right-to-left */
	
.fc-rtl .fc-grid .fc-day-number {
	float: left;
	}
	
.fc-rtl .fc-grid .fc-event-time {
	float: right;
	}
	
	

/* Agenda Week View, Agenda Day View
------------------------------------------------------------------------*/

.fc-agenda table {
	border-collapse: separate;
	}
	
.fc-agenda-days th {
	text-align: center;
	}
	
.fc-agenda .fc-agenda-axis {
	width: 50px;
	padding: 0 4px;
	vertical-align: middle;
	text-align: right;
	white-space: nowrap;
	font-weight: normal;
	}

.fc-agenda .fc-week-number {
	font-weight: bold;
	}
	
.fc-agenda .fc-day-content {
	padding: 2px 2px 1px;
	}
	
/* make axis border take precedence */
	
.fc-agenda-days .fc-agenda-axis {
	border-right-width: 1px;
	}
	
.fc-agenda-days .fc-col0 {
	border-left-width: 0;
	}
	
/* all-day area */
	
.fc-agenda-allday th {
	border-width: 0 1px;
	}
	
.fc-agenda-allday .fc-day-content {
	min-height: 34px; /* TODO: doesnt work well in quirksmode */
	_height: 34px;
	}
	
/* divider (between all-day and slots) */
	
.fc-agenda-divider-inner {
	height: 2px;
	overflow: hidden;
	}
	
.fc-widget-header .fc-agenda-divider-inner {
	background: #eee;
	}
	
/* slot rows */
	
.fc-agenda-slots th {
	border-width: 1px 1px 0;
	}
	
.fc-agenda-slots td {
	border-width: 1px 0 0;
	background: none;
	}
	
.fc-agenda-slots td div {
	height: 20px;
	}
	
.fc-agenda-slots tr.fc-slot0 th,
.fc-agenda-slots tr.fc-slot0 td {
	border-top-width: 0;
	}

.fc-agenda-slots tr.fc-minor th,
.fc-agenda-slots tr.fc-minor td {
	border-top-style: dotted;
	}
	
.fc-agenda-slots tr.fc-minor th.ui-widget-header {
	*border-top-style: solid; /* doesn't work with background in IE6/7 */
	}
	


/* Vertical Events
------------------------------------------------------------------------*/

.fc-event-vert {
	border-width: 0 1px;
	}

.fc-event-vert.fc-event-start {
	border-top-width: 1px;
	}

.fc-event-vert.fc-event-end {
	border-bottom-width: 1px;
	}
	
.fc-event-vert .fc-event-time {
	white-space: nowrap;
	font-size: 10px;
	}

.fc-event-vert .fc-event-inner {
	position: relative;
	z-index: 2;
	}
	
.fc-event-vert .fc-event-bg { /* makes the event lighter w/ a semi-transparent overlay  */
	position: absolute;
	z-index: 1;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #fff;
	opacity: .25;
	filter: alpha(opacity=25);
	}
	
.fc .ui-draggable-dragging .fc-event-bg, /* TODO: something nicer like .fc-opacity */
.fc-select-helper .fc-event-bg {
	display: none\9; /* for IE6/7/8. nested opacity filters while dragging don't work */
	}
	
/* resizable */
	
.fc-event-vert .ui-resizable-s {
	bottom: 0        !important; /* importants override pre jquery ui 1.7 styles */
	width: 100%      !important;
	height: 8px      !important;
	overflow: hidden !important;
	line-height: 8px !important;
	font-size: 11px  !important;
	font-family: monospace;
	text-align: center;
	cursor: s-resize;
	}
	
#calendar {width: 90%;
    position: absolute;
    top: 20%;
    left: 7%;
    display: block;}	

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
            <div style="width: 76%;position: absolute;top: 0px;height: 69px;left: 40%;">
                <div style="width: 100%;left: -12%;"></div>
                <div style="position: absolute; top: 0;right: 0;bottom: 0;left: 0;">
                    <div style="left: 10%;width: 67%;position: absolute;top: 31px;height: 25px;">
                        <div style="text-align: right;width: calc(100% - 0px);height: calc(100% - 0px);white-space: nowrap;display: inline-block;overflow: visible;position: relative;">
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="http://www.wix.com/demone2/music-artist" target="_self" ><p style="text-align: center; line-height: 25px;" >HOME</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="http://www.wix.com/demone2/music-artist" target="_self" ><p style="text-align: center; line-height: 25px;" >ABOUT</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="http://www.wix.com/demone2/music-artist" target="_self" ><p style="text-align: center; line-height: 25px;" >MUSIC</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="http://www.wix.com/demone2/music-artist" target="_self" ><p style="text-align: center; line-height: 25px;" >TOUR</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="http://www.wix.com/demone2/music-artist" target="_self" ><p style="text-align: center; line-height: 25px;" >GALLERY</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="http://www.wix.com/demone2/music-artist" target="_self" ><p style="text-align: center; line-height: 25px;" >EPK</p></a>
                            <a style="display: inherit; color: grey; width: 74px; height: 25px; position: relative; box-sizing: border-box; overflow: visible;cursor: pointer;font: normal normal normal 15px/1.1em helvetica-w01-light,helvetica-w02-light,sans-serif;" data-listposition="center" href="http://www.wix.com/demone2/music-artist" target="_self" ><p style="text-align: center; line-height: 25px;" >CONTACT</p></a>
                        </div>
                    </div>
                </div>
            </div>
           
           
        </div>
    </div>
    <div class="col-md-12">
    <h1 class="text-center">行事曆標題</h1>
		    <hr>
    <div style="width:95%" id='calendar'>
    
    </div>
    </div>
</div>
  </body>
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script>
  $(function (){
  $.getScript('http://arshaw.com/js/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js',function(){
  
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
});
  </script>
 </html>
