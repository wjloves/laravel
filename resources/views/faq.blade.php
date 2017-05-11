@extends('layouts.header')
@section('content')
    <div class="container-fluid" style="min-height: 192px;padding-right: 0;padding-left: 0; margin-top: 5px;">
    <img src="{{ asset('img/banner_faq.png') }}" class="img-responsive img-rounded" alt="Responsive image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <div class="bs-docs-section">
                <h1>Q:我们都有哪些课程可以学习？</h1>
                <p class="lead"><strong>A:</strong>:芭蕾，街舞，瑜伽，泰拳，恰恰.</p>
              </div>
              <div style="max-width:400px; height:1px; background:#CCC;"></div>
              <div class="starter-template">
                <h1>Q:老师是哪里的？</h1>
                <p class="lead"><strong>A:</strong>:四川本地的.</p>
              </div>
              <div style="max-width:400px; height:1px; background:#CCC;"></div>
              <div class="starter-template">
                <h1>Q:小孩可以学习吗？</h1>
                <p class="lead"><strong>A:</strong>:我们专门为4-14岁开办了三个班.</p>
              </div>
              <div style="max-width:400px; height:1px; background:#CCC;"></div>
              <div class="starter-template">
                <h1>Q:暂时没有问题了</h1>
                <p class="lead"><strong>A:</strong>:好的.</p>
              </div>
              <div style="max-width:400px; height:1px; background:#CCC;"></div>
            </div>
            <div class="col-md-4 text-center" style="margin-top: 20px;">
                <img data-src="holder.js/140x140" class="img-circle" alt="140x140" src="{{ asset('img/list_faq.png') }}" data-holder-rendered="true" style="width: 140px; height: 140px; margin-top: 10px;margin-right: 10px;">
                <img data-src="holder.js/140x140" class="img-circle" alt="140x140" src="{{ asset('img/banner_faq.png') }}" data-holder-rendered="true" style="width: 140px; height: 140px;margin-top: 10px;margin-right: 10px;">
                <img data-src="holder.js/140x140" class="img-circle" alt="140x140" src="{{ asset('img/banner_faq.png') }}" data-holder-rendered="true" style="width: 140px; height: 140px;margin-top: 10px;margin-right: 10px;">
                <img data-src="holder.js/140x140" class="img-circle" alt="140x140" src="{{ asset('img/list_faq.png') }}" data-holder-rendered="true" style="width: 140px; height: 140px;margin-top: 10px;margin-right: 10px;">
                
            </div>
        </div>
    </div>
@endsection
