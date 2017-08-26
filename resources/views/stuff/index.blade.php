@extends('main-admin')

@section('title', '| Stuffs List')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Stuffs</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('stuff.create') }}" class="btn btn-primary btn-lg btn-block btn-margin-top">Create Stuff</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			
					@foreach($stuffs as $stuff)

						<div class="media-stuff"   onclick="location.href='{{ route('stuff.show', $stuff->id) }}'">
							
							<div class="row">
								
								<div class="col-md-4">
									<img src="{{ asset('images/' . $stuff->image) }}" height="200" width="200"/>
								</div>

								<div class="col-md-8">
									<h2>{{ $stuff->firstName }}</h2>
									<h2>{{ $stuff->lastName }}</h2>
									<h2>{{ $stuff->job_title }}</h2>
								</div>
							</div>

						</div>

						{{-- <tr onclick="location.href='{{ route('stuff.show', $stuff->id) }}'">
							<th>{{ $stuff->id }}</th>
							<td>{{ $stuff->title }}</td>
							<td>{{ substr($stuff->body, 0, 150) }}{{ strlen($stuff->body) > 150 ? "..." : "" }}</td>
							<td>{{ date("M j, Y", strtotime($stuff->created_at)) }}</td>
							
						</tr>
 --}}
					@endforeach

			<div class="text-center">
				{{ $stuffs->links() }}
			</div>
		</div>
	</div>

@endsection