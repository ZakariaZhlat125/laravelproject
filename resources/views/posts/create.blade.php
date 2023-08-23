{{-- no style --}}

{{-- @extends('layouts.app')


@section('title', 'Create the post ')
@section('content')
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    @include('posts.partials.form')
    <div><input type="submit" value="create"></div>
</form>


@endsection --}}


@extends('layouts.app')

@section('title', 'Create the post')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Create a New Post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        @include('posts.partials.form')

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
