{{-- @extends('layouts.app')

@section('title', $post['title'])
@section('content')

    @if ($post['is_new'])
        <div>Using IF <div>
            @else
                <div> Using else</div>
    @endif

    @unless ($post['is_new'])
        <div>It is an old post... using unless </div>
    @endunless

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }} </p>
    @isset($post['has_comments'])
        <div>the post has some comments... using isset </div>
    @endisset

@endsection --}}



@extends('layouts.app')

@section('title', $post['title'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            {{-- @if ($post['is_new'])
                <div class="alert alert-success">Using IF</div>
            @else
                <div class="alert alert-info">Using else</div>
            @endif

            @unless ($post['is_new'])
                <div class="alert alert-warning">It is an old post... using unless</div>
            @endunless --}}

            <h1>{{ $post['title'] }}</h1>
            <p>{{ $post['content'] }}</p>

            @isset($post['has_comments'])
                <div class="alert alert-info">The post has some comments... using isset</div>
            @endisset
        </div>
    </div>
</div>
@endsection
