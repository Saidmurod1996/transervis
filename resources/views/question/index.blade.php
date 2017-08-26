@extends('main-admin')

@section('title', '| Questions List')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>Sent Questions</h1>
		</div>

		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-responsive">
				<thead>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Phone</th>
					<th>Question</th>
					<th>Created at</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($questions as $question)

						<tr onclick="location.href='{{ route('question.show', $question->id) }}'" class="{{ $question->seen ? "" : "question-not-seen" }}">
							<th>{{ $question->id }}</th>
							<td>{{ $question->firstName }}</td>
							<td>{{ $question->lastName }}</td>
							<td>{{ "+998" . $question->tel }}</td>
							<td>{{ substr($question->body, 0, 75) }}{{ strlen($question->body) > 75 ? "..." : "" }}</td>
							<td>{{ date("M j, Y", strtotime($question->created_at)) }}</td>
							<td>
							
							{!! Form::open(['route'=>['question.destroy', $question->id], 'method'=>"DELETE"]) !!}

							{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}

							{!! Form::close() !!}

							</td>
						</tr>

					@endforeach
				</tbody>
			</table>

			<div class="text-center">
				{{ $questions->links() }}
			</div>
		</div>
	</div>

@endsection
