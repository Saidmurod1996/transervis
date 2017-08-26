@extends('main-admin')

@section('title', '| View Stuff')

@section('content')

		<div class="row">
			<div class="col-md-8">
			<img src="{{ asset('images/' . $stuff->image) }}" height="200" width="200"/>
			<h1>{{ $stuff->firstName }}</h1>
			<h1>{{ $stuff->lastName }}</h1>
			<h1>{{ $stuff->job_title }}</h1>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Created At:</label>
						<p>{{ date('M j, Y h:ia', strtotime($stuff->creted_at)) }}</p>
					</dl>

					<dl class="dl-horizontal">
						<label>Last Updated:</label>
						<p>{{ date('M j, Y h:ia', strtotime($stuff->updated_at)) }}</p>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
						{!! Html::linkRoute('stuff.edit', 'Edit', array($stuff->id), array('class'=>'btn btn-primary btn-block')) !!}		
						</div>

						<div class="col-sm-6">
							{!! Form::open(['route'=>['stuff.destroy', $stuff->id], 'method'=>"DELETE"]) !!}

							{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}

							{!! Form::close() !!}	
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
						{!! Html::linkRoute('stuff.index', '<< See All Stuffs', [], ['class' => 'btn btn-default btn-block btn-margin-top']) !!}
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection

