@extends('main-admin')

@section('title', '| Home')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    You are logged in as an <strong>Admin</strong>!

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <a href="{{ route('news.index') }}" class="btn btn-primary btn-block btn-h1-spacing btn-lg " style="margin-top: 20px;">News</a>
                        </div>

                        <div class="col-md-6 col-md-offset-3">
                            <a href="{{ route('stuff.index') }}" class="btn btn-primary btn-block btn-h1-spacing btn-lg" style="margin-top: 20px;">Stuff Information</a>
                        </div>

                        <div class="col-md-6 col-md-offset-3">
                            <a href="{{ route('question.index') }}" class="btn btn-primary btn-block btn-h1-spacing btn-lg " style="margin-top: 20px;">Sent Questions</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    
@endsection
