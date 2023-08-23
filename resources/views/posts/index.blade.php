{{-- @extends('layouts.app')

@section('title', 'blog post')
@section('content')

 @forelse($posts as $key => $post)
@include('posts.partials.post')
@empty
no posts found
@endforelse


@endsection
  --}}

@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-4">Blog Posts</h1>
            @forelse($posts as $key => $post)
                @include('posts.partials.post')
            @empty
                <p>No posts found.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
