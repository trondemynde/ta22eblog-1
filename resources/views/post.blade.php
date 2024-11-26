@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 shadow-xl">
            @if ($post->displayImage)
                <figure>
                    <img src="{{ $post->displayImage }}" alt="Shoes" />
                </figure>
            @endif
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p>{!! nl2br($post->body) !!}</p>
                <p class="text-neutral-content">{{ $post->created_at->diffForHumans() }}</p>
                <div class="card-actions justify-end">

                </div>
            </div>
        </div>
    </div>
@endsection
