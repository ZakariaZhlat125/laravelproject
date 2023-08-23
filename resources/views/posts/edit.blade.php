{{-- @extends('layouts.app')


@section ('title','Uptate the post ')
@section('content')
<form method="POSt" action="{{route('posts.update',['post' => $post->id])}}">
    @csrf
    @method('PUT')
@include('posts.partials.form')
    <div><input type="submit" value="Update"></div>
</form>

@section('content')
@endsection --}}


@extends('layouts.app')

@section('title', 'Update the post')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Update Post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">
                        @csrf
                        @method('PUT')
                        @include('posts.partials.form')

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
