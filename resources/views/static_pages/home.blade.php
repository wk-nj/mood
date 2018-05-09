@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>你好，朋友！</h1>
    <p class="lead">
      欢迎来到心情驿站
    </p>
    <p>
      新的一刻将从这里开始.
    </p>
    <p>
      <a class="btn btn-lg btn-success" href=" {{route('signup')}} " role="button">现在注册</a>
    </p>
  </div>
@stop