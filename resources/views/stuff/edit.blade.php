@extends('main-admin')

@section('title', '| Edit Stuff')

@section('content')

		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">

						{!! Form::model($stuff, ['route' => ['stuff.update', $stuff->id], 'method'=>'PUT', 'files' =>true]) !!}

						<div class="col-md-8">
							{{ Form::label('firstName', 'First Name:') }}
							{{ Form::text('firstName', null, ['class' => 'form-control']) }}

							{{ Form::label('lastName', 'Last Name:', ['class' => 'form-spacing-top']) }}
							{{ Form::text('lastName', null, ['class' => 'form-control']) }}

							{{ Form::label('job_title', 'Job Title:', ['class' => 'form-spacing-top']) }}
							{{ Form::text('job_title', null, ['class' => 'form-control']) }}

							{{ Form::label('featured_image', 'Update Featured Image', ['class' => 'form-spacing-top'] ) }}
							<img id="blah" src="{{ asset('images/' . $stuff->image) }}" class="btn-margin-top img-rounded" style="width: 200px; height: 200px; " />
							{{ Form::file('featured_image', ['onchange'=>'readURL(this)', 'id'=>'imgInp',]) }}
							
						</div>
					</div>
				</div>
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
					{!! Html::linkRoute('stuff.show', 'Cancel', array($stuff->id), array('class'=>'btn btn-danger btn-block')) !!}		
					</div>

					<div class="col-sm-6">
						{!! Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) !!}

					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>

@endsection

@section('script')
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
@endsection