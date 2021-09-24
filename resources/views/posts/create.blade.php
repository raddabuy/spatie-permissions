@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf

                        Title:
                        <br />
                        <input type="text" name="title" class="form-control" />
                        <br />

                        Full text:
                        <br />
                        <textarea class="form-control" rows="10" name="body"></textarea>
                        <br />
                        <input type="submit" value=" Save Post " class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
