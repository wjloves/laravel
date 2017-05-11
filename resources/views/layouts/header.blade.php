<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="keyword" content="工作室，舞蹈，教学，兴趣，Mayc Dance，Mayc，Dance">
    <meta name="description" content="Mayc Dance,Mayc,Dance,梅西舞蹈，梅西舞蹈工作室，工作室，maycdance，mayc dance，mayc，dance">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <title>Mayc Dance</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-workaround-bug.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front/mayc.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
     <!--[if lt IE 9]>
       <script src="{{ asset('js/html5.js') }}"></script>
       <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
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
            <li><a href="/about">关于我们</a></li>
            <li><a href="/notice">资讯</a></li>
            <li><a href="/FAQ">FAQ</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    @yield('content')
    <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-workaround-bug.css') }}"></script>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
</script>
</body>
</html>