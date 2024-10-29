@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        <ul>
            @foreach($posts as $post)
                <li class="list-disc">{{$post->title}}</li>
            @endforeach

        </ul>
    </div>
@endsection
