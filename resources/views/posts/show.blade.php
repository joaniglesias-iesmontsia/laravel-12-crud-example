@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Show Post</span>
                <div>
                    <a href="{{ route('posts.index') }}" class="btn btn-sm btn-secondary">Back</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>
                </div>
            </div>

            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
            </div>

            <div class="card-footer text-muted">
                <small>Created at: {{ optional($post->created_at)->format('d/m/Y H:i') }}</small>
            </div>
        </div>
    </div>
</div>
@endsection