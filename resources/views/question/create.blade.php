@extends('main-admin')
@section('stylesheet')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Ask Question</div>
				<div class="panel-body">
					{!! Form::open(['route' => 'question.store', 'data-parsley-validate'=>'']) !!}
		    			
						{{ Form::label('firstName', 'First Name:') }}
						{{ Form::text('firstName', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>'255')) }}

						{{ Form::label('lastName', 'Last Name:', ['class' => 'btn-margin-top']) }}
						{{ Form::text('lastName', null, ['class' => 'form-control', 'required'=>'', 'maxlength'=>'255']) }}
	
						{{ Form::label('tel', 'Phone Number:', ['class' => 'btn-margin-top']) }}
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon3">+998</span>
						  <input name="tel" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required="" minlength="9" maxlength="9" >
						</div>
		

						{{ Form::label('body', 'Question:', ['class' => 'btn-margin-top']) }}
						{{ Form::textarea('body', null, array('class'=>'form-control', 'required'=>'')) }}
						
						{{ Form::submit('Send Question', array('class'=>'btn btn-success btn-lg btn-block btn-margin-top')) }}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')

	{!! Html::script('js/parsley.min.js') !!}

@endsection