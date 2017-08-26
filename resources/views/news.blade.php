@extends('main')

@section('title', '| News')

@section('content')



  <div class="container" id="container-news">
	  <div class="row">
	  	@foreach($news as $new)
  		<div class="col-md-4">
           	<div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href=""><img src="{{ asset('images/' . $new->image) }}" alt="blog-img" id="news-image"></a>
                </div>
                <div class="blog-content">
                    <h4><a href="#">{{ substr($new->title, 0, 50) }}{{ strlen($new->title) > 50 ? "..." : "" }}</a></h4>
                    <p>{{ substr($new->body, 0, 150) }}{{ strlen($new->body) > 150 ? "..." : "" }}</p>
                    <a href="news/{{ $new->id }}" class="more-btn">Батафсил</a>
                </div>
                <span class="blog-date">{{ date("M j, Y", strtotime($new->created_at)) }}</span>
            </div>
        </div>
  		@endforeach
      
	  </div>
    <div class="text-center">
        {{ $news->links() }}
      </div>
  </div>


@endsection