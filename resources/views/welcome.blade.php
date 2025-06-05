@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        <div class="my-2 text-center justify-center">
            @include('partials.simple-pagination', ['paginator' => $posts])
        </div>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($posts as $post)
                @include('partials.post-card')
            @endforeach
        </div>
    </div>
@endsection
