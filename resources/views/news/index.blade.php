@extends('main-admin')

@section('title', '| News List')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All News</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('news.create') }}" class="btn btn-primary btn-lg btn-block btn-margin-top">Create News</a>
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
					<th>Title</th>
					<th>Body</th>
					<th>Created at</th>
				</thead>

				<tbody>
					@foreach($news as $new)

						<tr onclick="location.href='{{ route('news.show', $new->id) }}'">
							<th>{{ $new->id }}</th>
							<td>{{ $new->title }}</td>
							<td>{{ substr($new->body, 0, 150) }}{{ strlen($new->body) > 150 ? "..." : "" }}</td>
							<td>{{ date("M j, Y", strtotime($new->created_at)) }}</td>
							
						</tr>

					@endforeach
				</tbody>
			</table>

			<div class="text-center">
				{{ $news->links() }}
			</div>
		</div>
	</div>

@endsection