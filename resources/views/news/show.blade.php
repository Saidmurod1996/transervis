@extends('main-admin')

@section('title', '| View News')

@section('content')

		<div class="row">
			<div class="col-md-8">
			<img src="{{ asset('images/' . $news->image) }}" height="200" width="300"/>
			<h1>{{ $news->title }}</h1>
			<p class="lead">{{ $news->body }}</p>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Url:</label>
						<p><a href="{{ url($news->slug) }}">{{ url($news->slug) }}</a></p>
					</dl>

					<dl class="dl-horizontal">
						<label>Created At:</label>
						<p>{{ date('M j, Y h:ia', strtotime($news->creted_at)) }}</p>
					</dl>

					<dl class="dl-horizontal">
						<label>Last Updated:</label>
						<p>{{ date('M j, Y h:ia', strtotime($news->updated_at)) }}</p>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
						{!! Html::linkRoute('news.edit', 'Edit', array($news->id), array('class'=>'btn btn-primary btn-block')) !!}		
						</div>

						<div class="col-sm-6">
							{!! Form::open(['route'=>['news.destroy', $news->id], 'method'=>"DELETE"]) !!}

							{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}

							{!! Form::close() !!}	
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
						{!! Html::linkRoute('news.index', '<< See All News', [], ['class' => 'btn btn-default btn-block btn-margin-top']) !!}
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection

