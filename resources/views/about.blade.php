@extends('main')

@section('title', '| About')

@section('stylesheet')
{{ Html::style('css/stuff.css') }}

@endsection


@section('content')

	<div class="container" id="container-staff">
  <div class="row">
    <h1>
        Staff
    
    </h1>
  </div>
    <div class="row">
    @foreach($stuffs as $stuff)
        <div class="col-sm-4">
            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="{{ asset('images/' . $stuff->image) }}" alt="" />
                </div>
                <div class="content staff-name">
                    <p>{{ $stuff->firstName }} 
                       {{ $stuff->lastName }}<br>
                       {{ $stuff->job_title }}</p>
                    
                </div>
            </div>
        </div>
    @endforeach
  </div>
</div>

@endsection