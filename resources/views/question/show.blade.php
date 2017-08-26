@extends('main-admin')

@section('title', '| View Question')

@section('content')

		<div class="row">
			<div class="col-md-8">
			<h3><strong>First Name: </strong> {{ $question->firstName }}</h3>
			<h3><strong>Last Name: </strong> {{ $question->lastName }}</h3>
			<h3><strong>Tel: </strong>{{ '+998' . $question->tel }}</h3>
			<p class="lead">{{ $question->body }}</p>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Created At:</label>
						<p>{{ date('M j, Y h:ia', strtotime($question->creted_at)) }}</p>
					</dl>

					<hr>
					<div class="row">
						<div class="col-sm-6">
						{!! Html::linkRoute('question.index', 'Back', array($question->id), array('class'=>'btn btn-default btn-block')) !!}		
						</div>

						<div class="col-sm-6">
							{!! Form::open(['route'=>['question.destroy', $question->id], 'method'=>"DELETE"]) !!}

							{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}

							{!! Form::close() !!}	
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection

