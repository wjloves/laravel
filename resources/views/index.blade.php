<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-ascale=1">
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

     <!--[if lt IE 9]>
       <script src="{{ asset('js/html5.js') }}"></script>
       <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
<style type="text/css">
body {
    min-height: 2000px;
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

    <div class="container bs-docs-container">

        <div class="row">
            <div class="col-md-11 navbar-right" style="display: block;overflow: hidden;position: relative;">
                <div class="starter-template">
                <img src="{{ asset('img/dance.png') }}" class="img-responsive img-rounded" alt="Responsive image">
                </div>
            </div>
            <div class="col-md-4 phone-hidden" style="margin-top: 18%;margin-left: -2%; position: absolute;">
                  <p class="text-right mc-text-img  mc-text-img-top">期待</p>
                  <p class="text-right mc-text-img mc-text-img-top" ><strong>您</strong></p>
                  <p class="text-uppercase mc-text-img mc-text-img-bigger"><strong>join us</strong></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
        </div>
    </div>
    <div class="container-fluid" style="min-height: 192px;padding-right: 0;padding-left: 0; margin-top: 5px;">
    </div>
    <div class="container">
      <!--   <div class="row">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/E7QDuuAS82M" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/E7QDuuAS82M" frameborder="0" allowfullscreen></iframe>
            </div>
        </div> -->
    </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

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
