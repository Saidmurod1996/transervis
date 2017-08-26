@extends('main-admin')

@section('title', '| Create Stuff')

@section('stylesheet')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Stuff</div>
				<div class="panel-body">

				{!! Form::open(['route' => 'stuff.store', 'data-parsley-validate'=>'', 'files' => true]) !!}

						<div class="row" style="text-align: center;">
							<h3 >Stuff Information</h3>
						</div>
		    			
						<div class="row">
						  	<div class="col-md-4">
						    
								<img id="blah" src="{{ asset('images/' . 'default-user.jpg') }}" class="btn-margin-top img-rounded backup_picture" style="width: 200px; height: 200px; " />
								{{ Form::file('featured_image', ['onchange'=>'readURL(this)', 'id'=>'imgInp',]) }}
							</div>
						  	<div class="col-md-8">
						   
						    	{{ Form::label('firstName', 'First Name:') }}
								{{ Form::text('firstName', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>'255')) }}

								{{ Form::label('lastName', 'Last Name:', ['class' => 'btn-margin-top']) }}
								{{ Form::text('lastName', null, ['class' => 'form-control', 'required'=>'', 'maxlength'=>'255']) }}

								{{ Form::label('job_title', 'Job Title:', ['class' => 'btn-margin-top']) }}
								{{ Form::text('job_title', null, array('class'=>'form-control', 'required'=>'')) }}
								
								{{ Form::submit('Create Stuff', array('class'=>'btn btn-success btn-margin-top float-right')) }}


						  	</div>
						</div>

						
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')
	
	{!! Html::style('js/parsley.min.js') !!}

<script>
		function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
	</script>

	<script>
$(document).ready(function()
{
    $(".backup_picture").on("error", function(){
        $(this).attr('src', './images/nopicture.png');
    });
});
</script>

@endsection