@extends('main')

@section('title', '| Adjuster')

@section('content')

	<div class="container" style="margin-bottom: 200px;">
  <div class="row">
    <div class="col-sm-12">
      <h2>{{trans('app.Adjuster')}}</h2><br>
      

      <p style="text-align: left;">{!! trans('app.Adjuster_Content') !!}</p>
    </div>
  </div>
</div>

@endsection