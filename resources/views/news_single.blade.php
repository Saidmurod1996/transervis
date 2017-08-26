@extends('main')

@section('title', '| News')

@section('content')

<div class="container">
    <div class="well"> 
        <div class="row">
             <div class="col-md-12">
                 <div class="row hidden-md hidden-lg"><h1 class="text-center" >TITULO LARGO DE UNA INVESTIGACION cualquiera</h1></div>
                     
                 <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src='{{ asset('images/' . $news->image) }}' /></div>
                 <div class="">
                     <h1  class="hidden-xs hidden-sm">{{ $news->title }}</h1>
                     <hr>
                     <small>{{ $news->created_at }}</small><br><br>
                     <p class="text-justify">{{ $news->body }}</p></div>
             </div>
        </div>
    </div>
</div>


@endsection