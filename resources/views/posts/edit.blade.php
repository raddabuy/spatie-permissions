@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Post') }}</div>

                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            Title:
                            <br />
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}" />
                            <br />

                            Full text:
                            <br />
                            <textarea class="form-control" rows="10" name="body">{{ $post->body }}</textarea>
                            <br />

                            <br />

                            <input type="submit" value=" Update Article " class="btn btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
