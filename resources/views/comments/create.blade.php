@extends('partials.layout')
@section('title', 'New Comment')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-1/2 shadow-xl mx-auto">
            <div class="card-body">
                <form method="POST" action="{{ route('comments.store', ['post' => $post->id]) }}" enctype="application/x-www-form-urlencoded">
                    @csrf
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Comment</span>

                        </div>
                        <textarea rows="5" name="body" placeholder="Write something cool..." class="textarea textarea-bordered @error('body') textarea-error @enderror w-full">{{old('body')}}</textarea>
                        <div class="label">
                            @error('body')
                                <span class="label-text-alt text-error">{{$message}}</span>
                            @enderror
                        </div>
                    </label>
                    <div class="flex justify-end items-center gap-2">
                        <input type="submit" class="btn btn-primary" value="Create">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
